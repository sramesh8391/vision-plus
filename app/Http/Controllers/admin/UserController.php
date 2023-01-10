<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MlmRegister;

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

    // user list
    public function userList(){
        $data['title'] = 'User List';
        $data['userData'] = MlmRegister::all();
        return view('admin.user.list', $data);
    }
}
