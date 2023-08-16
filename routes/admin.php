<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\UserMangementController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    // User Mangment Routes
    Route::get('Pending/Users',[UserMangementController::class,'pendingUsers'])->name('Pending.Users');
    Route::get('Approved/Users',[UserMangementController::class,'approvedUsers'])->name('Approved.Users');
    Route::get('Rejected/Users',[UserMangementController::class,'rejectedUsers'])->name('Rejected.Users');

});
