<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function allUsers()
    {
        $users = User::get();
        return view('admin.user.all', compact('users'));
    }
}
