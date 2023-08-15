<?php

use App\Http\Controllers\admin\AdminDashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');

});
