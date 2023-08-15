<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User/')->group(function(){

    Route::get('Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');

});
