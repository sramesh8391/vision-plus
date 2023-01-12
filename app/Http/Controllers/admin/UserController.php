<?php

namespace App\Http\Controllers\admin;


use Carbon\Carbon;
use App\Mail\UserMail;
use App\Models\MlmRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    // get sponsor details
    public function sponsorDetails(){
        $data['title'] = 'Sponsor Details';
        $data['sponsorData'] = MlmRegister::where('user_id', '=', '1')->find(1)->toArray();
        return view('admin.user.sponsor', $data);
    }

    // sponsor Details Update
    public function sponsorDetailsUpdate(Request $request){
        $request->validate([
            'user_id' => 'required',
            'user_profileid' => 'required',
            'user_fname' => 'required'
        ]);

        $MlmRegister = MlmRegister::find($request->user_id);
        $MlmRegister->user_profileid = $request->user_profileid;
        $MlmRegister->user_fname = $request->user_fname;
        $MlmRegister->save();
        return redirect('/admin-user-sponsor-details')->with('status', 'Staff Updated Successfully...!');
    }
    //get Sponser By Id
    public function getSponserById(Request $request){

        /*$sponserDetails = DB::table('mlm_register')
        ->select('user_profileid', 'user_fname')
        ->whereRaw("FIND_IN_SET(user_sponserid, '$request->user_sponserid')")
        ->where('user_status', 0)
        ->orderBy('user_id', 'asc')
        ->first();
        if(empty($sponserDetails)){
            $sponserDetails = DB::table('mlm_register')
            ->select('user_profileid', 'user_fname')
            ->whereRaw("FIND_IN_SET(user_profileid, '$request->user_sponserid')")
            ->where('user_status', 0)
            ->orderBy('user_id', 'asc')
            ->first();
        }*/
        $placementidCount = DB::table('mlm_register')->where('user_placementid', $request->user_sponserid)->count();

        if($placementidCount < 2){
            $pId = DB::table('mlm_register')->select('user_profileid','user_fname')->where('user_profileid', $request->user_sponserid)->where('user_status', '0')->first();
            $pId = $pId;
        } else{
            $placementids = DB::table('mlm_register')->select('user_profileid','user_fname')->where('user_sponserid', $request->user_sponserid)->where('user_status', '0')->count();
            if($placementids == 0){

                $pId = DB::table('mlm_register')->select('user_profileid','user_fname')->where('user_sponserid', $request->user_sponserid)->where('user_status', '0')->first();
                $pId = $pId;
            } else{
                $id = DB::table('mlm_register')
                ->select('user_profileid','user_fname')
                ->whereRaw("FIND_IN_SET(user_sponserid, '$request->user_sponserid')")
                ->where('user_status', 0)
                ->orderBy('user_id', 'asc')
                ->first();
                $pId = $id;
            }
            //print_r($placementids);exit;
        }

        return $pId;
        //print_r($sponserDetails); exit;
        return response()->json($sponserDetails);
    }

    // user list
    public function userList(){
        $data['title'] = 'User List';
        $data['userData'] = MlmRegister::all();
        return view('admin.user.list', $data);
    }
    //user add show
    public function userAdd(){
        $data['title'] = 'User Add';
        return view('admin.user.add', $data);
    }

    // user store
    public function userStore(Request $request){

        $request->validate([
            'user_sponserid' => 'required',
            'sname' => 'required',
            'placeid' => 'required',
            'position' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required | numeric',
            'email' => 'required | unique:mlm_register,user_email',
            'pass1' => 'required | same:pass2',
            'pass2' => 'required',
        ]);

        //$placementid = DB::table('mlm_register')->select('user_profileid')->where('user_profileid', $request->user_sponserid)->first();

        //user profile if create
        $user_profileid = $this->generateProfileId();

        $user = new MlmRegister;
        $user->user_sponsername = $request->sname;
        $user->user_sponserid = $request->user_sponserid;
        $user->user_profileid = $user_profileid;
        $user->user_password = Hash::make($request->pass1);
        $user->user_dpassword = $request->pass1;
        $user->user_placementid = $request->placeid;
        $user->user_position = $request->position;
        $user->user_poster = 'admin';
        $user->user_date = Carbon::now();
        $user->user_ip = $request->ip();
        $user->user_status = 0;
        $user->user_fname = $request->fname;
        $user->user_lname = $request->lname;
        $user->user_phone = $request->phone;
        $user->user_email = $request->email;
        $user->authr_key = bcrypt($request->email);
//
        $user->save();
        Mail::to($request->email)->send(new UserMail($user));

        return redirect('/admin-user-list')->with('status', 'Staff Added Successfully...!');

    }

    // generate ProfileId
    public function generateProfileId(){
        $prefix = 'VP';
        $randnum = rand(1111111,9999999);
        $profileId = $prefix.$randnum;

        $check = MlmRegister::where('user_profileid', '=', $profileId)->count();
        if($check != 0){
            return generateProfileId();
        }
        return $profileId;
    }

    // Get Profile Id
    /*public function getPId($user_sponserid){
        $placementidCount = DB::table('mlm_register')->where('user_placementid', $user_sponserid)->count();

        if($placementidCount > 2){ //($placementidCount < 2)
            $pId = $user_sponserid;
        } else{
            $placementids = DB::table('mlm_register')->select('user_profileid')->where('user_sponserid', $user_sponserid)->where('user_status', '0')->count();
            if($placementids == 0){
                $pId = $user_sponserid;
            } else{
                $id = DB::table('mlm_register')
                ->select('user_profileid')
                ->whereRaw("FIND_IN_SET(user_sponserid, '$user_sponserid')")
                ->where('user_status', 0)
                ->orderBy('user_id', 'asc')
                ->first();
                $pId = $user_sponserid;
            }
            //print_r($placementids);exit;
        }

        return $pId;
    }*/

}
