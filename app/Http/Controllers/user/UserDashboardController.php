<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $tickets = Ticket::paginate(12);
        return view('user.dashboard',compact('tickets'));
    }

    public function team()
    {
        $users = User::where('referral',auth()->user()->email)->get();
        return view('user.team',compact('users'));
    }

}
