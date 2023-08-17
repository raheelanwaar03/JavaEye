<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Ticket;
use App\Models\User;
use App\Models\user\UserDeposit;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $tickets = Ticket::paginate(12);
        return view('user.dashboard', compact('tickets'));
    }

    public function team()
    {
        $users = User::where('referral', auth()->user()->email)->get();
        return view('user.team', compact('users'));
    }

    public function deposit()
    {
        return view('user.deposit');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'account_title' => 'required',
            'trcId' => 'required',
            'screen_shot' => 'required',
        ]);

        $image = $validated['screen_shot'];
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $deposit = new UserDeposit();
        $deposit->amount = $validated['amount'];
        $deposit->account_title = $validated['account_title'];
        $deposit->trcId = $validated['trcId'];
        $deposit->screen_shot = $imageName;
        $deposit->save();
        return redirect()->back()->with('success', 'You have been successfully requested for deposit. Please wait for admin approvel you will get an email');
    }
}
