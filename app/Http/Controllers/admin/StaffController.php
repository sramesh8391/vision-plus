<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\StaffMail;
use App\Models\MlmStaff;
use App\Models\MainMenu;

class StaffController extends Controller
{
    //Staff List
    public function staffList(Request $request){
        $data['title'] = 'Staff List';
        $data['staffs'] = MlmStaff::all();

        return view('admin.staff.list', $data);
    }

    //staff status update active or deactive
    public function staffStatusUpdate($staff_id, $active_status){
        $staffCount = MlmStaff::where('staff_id', $staff_id)->count();
        if($staffCount <= 0){
            return back()->withErrors(['msg' => 'No staff found..!']);
        } else{
            MlmStaff::where('staff_id', $staff_id)->update(['active_status'=>$active_status]);
            return redirect('/admin-staff-list')->with('status', 'Staff Successfully updated...!');
        }
    }

    //add staff
    public function staffAdd(){
        $data['title'] = 'Add Staff';
        $data['menuLists'] = MainMenu::where('active_status','=', '1')->where('param','=', '0')->get();
        return view('admin.staff.add', $data);
    }

    //staff Store
    public function staffStore(Request $request){
        $request->validate([
            'staff_username' => 'required',
            'staff_email' => 'required|unique:mlm_staff|email',
            'staff_password' => 'required',
            'staff_Mob' => 'required|numeric',
            'menu_permission' => 'required'
        ]);
        $staff = new MlmStaff;
        $staff->staff_username = $request->staff_username;
        $staff->staff_email = $request->staff_email;
        $staff->staff_password = Hash::make($request->staff_password);
        $staff->staff_Mob = $request->staff_Mob;
        $staff->menu_permission = implode(',', $request->menu_permission);
        $staff->active_status = 1;
        $staff->crcdt = Carbon::now();
        $staff->ip = $request->ip();
        $staff->save();
        $staff->decript_staff_password = $request->staff_password;
        //send Mail
        Mail::to($staff->staff_email)->send(new StaffMail($staff));

        return redirect('/admin-staff-list')->with('status', 'Staff Added Successfully...!');
    }

    //staff Edit
    public function staffEdit($staffId){
        $data['title'] = 'Edit Staff';
        $data['staffData'] = MlmStaff::where('staff_id', '=', $staffId)->first();
        $data['menuLists'] = MainMenu::where('active_status','=', '1')->where('param','=', '0')->get();
        if(empty($data['staffData'])){
            return redirect('/admin-staff-list')->withErrors('No data found...!');
        }

        return view('admin.staff.edit', $data);
    }

    //staff update
    public function staffUpdate(Request $request, $staffId){
        $request->validate([
            'staff_username' => 'required',
            'staff_email' => 'required|email',
            'staff_password' => 'required',
            'staff_Mob' => 'required|numeric',
            'menu_permission' => 'required'
        ]);
        $staff = MlmStaff::find($staffId);
        $staff->staff_username = $request->staff_username;
        $staff->staff_email = $request->staff_email;
        $staff->staff_password = Hash::make($request->staff_password);
        $staff->staff_Mob = $request->staff_Mob;
        $staff->menu_permission = implode(',', $request->menu_permission);
        $staff->save();
        return redirect('/admin-staff-list')->with('status', 'Staff Updated Successfully...!');
    }

    public function staffDelete($staffId)
    {
        $staff = MlmStaff::find($staffId);
        $staff->delete();

        return redirect('/admin-staff-list')->with('success', 'Staff Deleted Successfully...!');
    }
}
