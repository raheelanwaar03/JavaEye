<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        return $tickets;
    }

}
