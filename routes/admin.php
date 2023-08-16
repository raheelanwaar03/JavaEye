<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\UserMangementController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    Route::get('All/User',[UserMangementController::class,'allUsers'])->name('All.Users');

});
