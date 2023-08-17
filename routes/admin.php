<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminTicketController;
use App\Http\Controllers\admin\UserMangementController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    // User Mangment Routes
    Route::get('Approved/Users',[UserMangementController::class,'approvedUsers'])->name('Approved.Users');
    // user edit route
    Route::get('User/Details/{email}',[UserMangementController::class,'userDetails'])->name('User.Details');
    Route::post('Update/User/Details/{id}',[UserMangementController::class,'updateUserDetails'])->name('Update.User.Details');
    // Adding ticket routes
    Route::get('Add/Ticket',[AdminTicketController::class,'add'])->name('Add.Ticket');
    Route::post('Store/Ticket',[AdminTicketController::class,'store'])->name('Store.Ticket');
    Route::get('All/Tickets',[AdminTicketController::class,'index'])->name('All.Ticket');
    Route::get('Delete/Ticket/{id}',[AdminTicketController::class,'delete'])->name('Delete.Ticket');
    // New buy ticket routes
    Route::get('User/Tickets',[AdminTicketController::class,'newTicket'])->name('User.Buy.Tickets');


});
