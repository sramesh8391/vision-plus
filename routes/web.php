<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\auth\AdminLoginContoller;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StaffController;

/*Route::get('/', function () {
    return view('welcome');
});*/

/* ############## ADMIN ############## */
Route::view('adminLogin', 'admin.auth.login')->middleware('guest')->name('login');
Route::post('adminAuth', [AdminLoginContoller::class, 'adminAuth']);
Route::get('adminLogout', [AdminLoginContoller::class, 'adminLogout'])->name('adminLogout');

// Dashboard
Route::get('admin-dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('admin-dashboard');

// Staff Management
Route::get('admin-staff-list', [StaffController::class, 'staffList'])->middleware('auth')->name('admin-staff-list');
Route::get('admin-staff-update-status/{staff_id}/{active_status}', [StaffController::class, 'staffStatusUpdate'])->middleware('auth')->name('admin-staff-update-status');
Route::get('admin-staff-add', [StaffController::class, 'staffAdd'])->middleware('auth')->name('admin-staff-add');
Route::post('admin-staff-store', [StaffController::class, 'staffStore'])->middleware('auth')->name('admin-staff-store');
Route::get('admin-staff-edit/{staff_id}', [StaffController::class, 'staffEdit'])->middleware('auth')->name('admin-staff-edit/{staff_id}');
Route::put('admin-staff-update/{staff_id}', [StaffController::class, 'staffUpdate'])->middleware('auth')->name('admin-staff-update');
Route::delete('admin-staff-delete/{staff_id}', [StaffController::class, 'staffDelete'])->middleware('auth')->name('admin-staff-delete');
