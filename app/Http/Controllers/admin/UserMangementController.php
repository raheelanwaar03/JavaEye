<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function allUsers()
    {
        return view('admin.user.all');
    }
}
