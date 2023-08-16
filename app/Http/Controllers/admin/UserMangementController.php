<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function approvedUsers()
    {
        $users = User::get();
        return view('admin.user.approved',compact('users'));
    }

    public function userDetails($email)
    {
        $user = User::where('email',$email)->first();
        return view('admin.user.details',compact('user'));
    }

    public function updateUserDetails(Request $request,$id)
    {
        $user = User::find($id);
        $user->balance = $request->balance;
        $user->level = $request->level;
        $user->save();
        return redirect(route('Admin.Approved.Users'))->with('success','User details updated successfully');
    }



}
