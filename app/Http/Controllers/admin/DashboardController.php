<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard

    public function dashboard(Request $request){
        $data['title'] = 'Admin Dashboard';
        return view('admin.dashboard', $data);
    }
}
