<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User/')->middleware('auth','user')->group(function(){

    Route::get('Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');
    Route::get('Team/Member',[UserDashboardController::class,'team'])->name('Team.Member');
    // user deposit link
    Route::get('Deposit/Money',[UserDashboardController::class,'deposit'])->name('Deposit.Money');
    Route::post('Store/Deposit/Money',[UserDashboardController::class,'store'])->name('Store.Deposit.Money');
    // buy Ticket
    Route::post('Buy/Ticket/{id}',[UserDashboardController::class,'buyTicket'])->name('Buy.Ticket');



});
