<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User/')->middleware('auth','user','status')->group(function(){

    Route::get('Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');
    Route::get('Team/Member',[UserDashboardController::class,'team'])->name('Team.Member');
    Route::get('All.Tickets',[UserDashboardController::class,'tickets'])->name('All.Tickets');
    Route::get('Mine',[UserDashboardController::class,'mine'])->name('Mine');
    Route::get('Agreement',[UserDashboardController::class,'agreement'])->name('Agreement');
    Route::get('Assets',[UserDashboardController::class,'assets'])->name('Assets');
    Route::get('Ticket/Back',[UserDashboardController::class,'back'])->name('Back');
    // user deposit link
    Route::get('Deposit/Money',[UserDashboardController::class,'deposit'])->name('Deposit.Money');
    Route::post('Store/Deposit/Money',[UserDashboardController::class,'store'])->name('Store.Deposit.Money');
    // buy Ticket
    Route::get('Show/Ticket/{id}',[UserDashboardController::class,'showTicket'])->name('Show.Ticket');
    Route::post('Buy/Ticket/{id}',[UserDashboardController::class,'buyTicket'])->name('Buy.Ticket');
    // widthrawal Routes
    Route::get('Widthraw/Balance',[UserDashboardController::class,'widthrawal'])->name('Widthraw.Balance');
    Route::get('Widthraw/Transcation',[UserDashboardController::class,'widthrawalTranscation'])->name('Widthraw.Transcation');
    Route::get('Deposit/Transcation',[UserDashboardController::class,'depositTranscation'])->name('Deposit.Transcation');
    Route::post('Store/Widthraw/Balance',[UserDashboardController::class,'storeWidthrawal'])->name('Store.Widthraw.Balance');


});
