<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\BuyTicket;
use App\Models\user\Widthrawal;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function widthrawalRoutes()
    {
        $widthrawals = Widthrawal::where('status', 'pending')->get();
        return view('admin.user.widthraw.pending', compact('widthrawals'));
    }

    public function approvedWidthrawal()
    {
        $widthrawals = Widthrawal::where('status', 'approved')->get();
        return view('admin.user.widthraw.approved', compact('widthrawals'));
    }

    public function rejectedWidthrawal()
    {
        $widthrawals = Widthrawal::where('status', 'rejected')->get();
        return view('admin.user.widthraw.reject', compact('widthrawals'));
    }

    public function approveWidthrawal($id)
    {
        $widthrawal = Widthrawal::find($id);
        $widthrawal->status = 'approved';
        $widthrawal->save();
        return redirect()->back()->with('success', 'user widthraw approved successfully');
    }

    public function rejecteWidthrawal($id)
    {
        $widthrawal = Widthrawal::find($id);
        $widthrawal->status = 'rejected';
        $widthrawal->save();
        return redirect()->back()->with('success', 'user widthraw rejected successfully');
    }

    // giving users bouns

    public function bouns()
    {
        $tickets = BuyTicket::get();
        $total_ticket_price = 0;
        foreach ($tickets as $ticket) {
            $user_id = $ticket->user_id;
            $total_tickets = BuyTicket::where('user_id', $user_id)->get()->count();
            // calculating ticket commission
            $total_ticket_price = $total_tickets * 10;
            $commission = $total_ticket_price * 2.5 / 100;
            // giving user commission
            $user = User::where('id', $user_id)->first();
            $user->balance += $commission;
            $user->save();
            // referls commission

            $first_commission = $commission * 8 / 100;
            $second_commission = $commission * 4 / 100;
            $third_commission = $commission * 2 / 100;

            // checking if user have referals
            $first_referral = $user->referral;
            $first_user = User::where('email', $first_referral)->first();
            if ($first_user != '') {
                $first_user->balance += $first_commission;
                $first_user->save();
                // Second Commision
                $second_referral = $first_user->referral;
                $second_user = User::where('email', $second_referral)->first();
                if ($second_user != '') {
                    $second_user->balance += $second_commission;
                    $second_user->save();
                    // third commission
                    $third_referral = $second_user->referral;
                    $third_user = User::where('email', $third_referral)->first();
                    if ($third_user != '') {
                        $third_user->balance += $third_commission;
                        $third_user->save();
                    }
                }
            }
        }
        return redirect()->back()->with('success', 'All VIP0 level user got thier commission');
    }
}
