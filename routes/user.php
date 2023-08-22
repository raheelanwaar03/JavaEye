<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User/')->middleware('auth','user','status')->group(function(){

    Route::get('Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');
    Route::get('Team/Member',[UserDashboardController::class,'team'])->name('Team.Member');
    Route::get('All.Tickets',[UserDashboardController::class,'tickets'])->name('All.Tickets');
    // user deposit link
    Route::get('Deposit/Money',[UserDashboardController::class,'deposit'])->name('Deposit.Money');
    Route::post('Store/Deposit/Money',[UserDashboardController::class,'store'])->name('Store.Deposit.Money');
    // buy Ticket
    Route::post('Buy/Ticket/{id}',[UserDashboardController::class,'buyTicket'])->name('Buy.Ticket');
    // widthrawal Routes
    Route::get('Widthraw/Balance',[UserDashboardController::class,'widthrawal'])->name('Widthraw.Balance');
    Route::get('Widthraw/Transcation',[UserDashboardController::class,'widthrawalTranscation'])->name('Widthraw.Transcation');
    Route::post('Store/Widthraw/Balance',[UserDashboardController::class,'storeWidthrawal'])->name('Store.Widthraw.Balance');


});
