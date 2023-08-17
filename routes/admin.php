<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminTicketController;
use App\Http\Controllers\admin\UserMangementController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    // User Mangment Routes
    Route::get('All/Users',[UserMangementController::class,'allUsers'])->name('All.Users');
    Route::get('Approved/Users',[UserMangementController::class,'approvedUsers'])->name('Approved.Users');
    Route::get('Rejected/Users',[UserMangementController::class,'rejectedUsers'])->name('Rejected.Users');
    // user status routes 
    Route::get('Approve/User/{id}',[UserMangementController::class,'approveUser'])->name('Approve.User');
    Route::get('Reject/User/{id}',[UserMangementController::class,'rejectUser'])->name('Reject.User');

    // user edit route
    Route::get('User/Details/{email}',[UserMangementController::class,'userDetails'])->name('User.Details');
    Route::post('Update/User/Details/{id}',[UserMangementController::class,'updateUserDetails'])->name('Update.User.Details');
    // Adding ticket routes
    Route::get('Add/Ticket',[AdminTicketController::class,'add'])->name('Add.Ticket');
    Route::post('Store/Ticket',[AdminTicketController::class,'store'])->name('Store.Ticket');
    Route::get('All/Tickets',[AdminTicketController::class,'index'])->name('All.Ticket');
    Route::get('Delete/Ticket/{id}',[AdminTicketController::class,'delete'])->name('Delete.Ticket');
    // user deposit requests approvedepositRequests
    Route::get('User/Deposit/Requests',[UserMangementController::class,'depositRequests'])->name('User.Deposit.Requests');
    Route::get('Approved/Deposit/Requests',[UserMangementController::class,'approvedpositRequests'])->name('Approved.Deposit.Requests');
    Route::get('Rejected/Deposit/Requests',[UserMangementController::class,'rejectedpositRequests'])->name('Rejected.Deposit.Requests');
    Route::get('Deposit/{id}',[UserMangementController::class,'depositAmount'])->name('Deposit.Amount');
    Route::get('Approve/Deposit/{id}',[UserMangementController::class,'approveDepositAmount'])->name('Approve.Deposit');
    Route::get('Rejected/Deposit/{id}',[UserMangementController::class,'rejectedDepositAmount'])->name('Rejected.Deposit');
    // Sold ticket routes
    Route::get('User/Tickets',[AdminTicketController::class,'newTicket'])->name('User.Buy.Tickets');

    // Widthrawal Routes
    Route::get('Widthrawal/Users',[AdminDashboardController::class,'widthrawalRoutes'])->name('User.Widthrawal');
    Route::get('Approve/Widthrawal/{id}',[AdminDashboardController::class,'approveWidthrawal'])->name('User.Approve.Widthrawal');
    Route::get('Reject/Widthrawal/{id}',[AdminDashboardController::class,'rejecteWidthrawal'])->name('User.Reject.Widthrawal');
    // Widthrawal Routes View
    Route::get('Approved/Widthrwas',[AdminDashboardController::class,'approvedWidthrawal'])->name('User.Approved.Widthrawals');
    Route::get('Rejected/Widthrwas',[AdminDashboardController::class,'rejectedWidthrawal'])->name('User.Rejected.Widthrawals');


});
