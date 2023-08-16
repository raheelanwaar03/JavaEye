<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function pendingUsers()
    {
        $users = User::where('status','pending')->get();
        return view('admin.user.pending', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status','approved')->get();
        return view('admin.user.approved',compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status','rejected')->get();
        return view('admin.user.rejected',compact('users'));
    }

}
