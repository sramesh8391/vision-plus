<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\MlmAdmin;

class AdminLoginContoller extends Controller
{
    //Admin Login
    public function adminAuth(Request $request){

        $request->validate([
            'admin_username' => 'required',
            'admin_password' => 'required'
        ]);

        $admin_username = $request->input('admin_username');
        $admin_password = $request->input('admin_password');

        if(Auth::attempt(['admin_username' => $admin_username, 'password' => $admin_password])){

            $adminUser = MlmAdmin::where('admin_username', $admin_username)->first();
            Auth::login($adminUser);
            return redirect('/admin-dashboard');
        } else{
            return back()->withErrors('Invalid Username or Password !');
        }
    }

    // Admin Logout
    public function adminLogout(){
        Auth::logout();
        return redirect('/adminLogin');
    }
}
