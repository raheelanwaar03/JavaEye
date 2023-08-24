<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Massage;
use App\Models\Reward;
use App\Models\user\UserDeposit;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->where('role', 'user')->get();
        return view('admin.user.approved', compact('users'));
    }

    public function userMassages()
    {
        $massages = Massage::orderBy('id', 'DESC')->get();
        return view('admin.user.massages', compact('massages'));
    }

    public function allUsers()
    {
        $users = User::where('status', 'pending')->where('role', 'user')->get();
        return view('admin.user.all', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->where('role', 'user')->get();
        return view('admin.user.rejected', compact('users'));
    }

    // User status mangement

    public function approveUser($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success', 'user account has been approved successfully');
    }

    public function rejectUser($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'user account has been rejected successfully');
    }

    public function userDetails($email)
    {
        $user = User::where('email', $email)->first();
        return view('admin.user.details', compact('user'));
    }

    public function updateUserDetails(Request $request, $id)
    {
        $user = User::find($id);
        $user->balance = $request->balance;
        $user->level = $request->level;
        $user->save();

        // storing in reward tabel
        $bouns = new Reward();
        $bouns->user_id = $user->id;
        $bouns->amount = $request->balance;
        $bouns->type = 'reward';
        $bouns->save();

        return redirect(route('Admin.Approved.Users'))->with('success', 'User details updated successfully');
    }

    public function depositRequests()
    {
        $deposits = UserDeposit::where('status', 'pending')->get();
        return view('admin.user.deposit.new', compact('deposits'));
    }


    public function approvedpositRequests()
    {
        $deposits = UserDeposit::where('status', 'approved')->get();
        return view('admin.user.deposit.approved', compact('deposits'));
    }

    public function rejectedpositRequests()
    {
        $deposits = UserDeposit::where('status', 'rejected')->get();
        return view('admin.user.deposit.rejected', compact('deposits'));
    }

    public function depositAmount($id)
    {
        $deposit = UserDeposit::find($id);
        $amount = $deposit->amount;
        $user = User::where('id', $deposit->user_id)->first();
        return view('admin.user.details', compact('user', 'amount'));
    }

    public function approveDepositAmount($id)
    {
        $deposit = UserDeposit::find($id);
        $deposit->status = 'approved';
        $deposit->save();

        $depositBalance = $deposit->amount;
        $user = User::where('id',$deposit->user_id)->first();
        $user->balance = $depositBalance;
        $user->save();

        // storing in reward \

        $reward = new Reward();
        $reward->user_id = auth()->user()->id;
        $reward->amount = $depositBalance;
        $reward->type = 'deposit';
        $reward->status = 'approved';
        $reward->save();


        $userDeposit = Reward::where('user_id',$deposit->user_id)->where('type','deposit')->where('status','approved')->get();
        $total_deposit = 0;
        foreach ($userDeposit as $deposit )
        {
            $total_deposit += $deposit->amount;
        }
        if($total_deposit >= 500)
        {
            $user = User::where('id',$deposit->user_id)->first();
            $user->level = 'VIP1';
            $user->save();
        }

        if($total_deposit >= 1500)
        {
            $user = User::where('id',$deposit->user_id)->first();
            $user->level = 'VIP2';
            $user->save();
        }

        if($total_deposit >= 4000)
        {
            $user = User::where('id',$deposit->user_id)->first();
            $user->level = 'VIP3';
            $user->save();
        }

        if($total_deposit >= 15000)
        {
            $user = User::where('id',$deposit->user_id)->first();
            $user->level = 'VIP4';
            $user->save();
        }

        if($total_deposit >= 40000)
        {
            $user = User::where('id',$deposit->user_id)->first();
            $user->level = 'VIP5';
            $user->save();
        }


        return redirect()->back()->with('success', 'Deposit request approved successfully');
    }
    public function rejectedDepositAmount($id)
    {
        $deposit = UserDeposit::find($id);
        $deposit->status = 'rejected';
        $deposit->save();
        return redirect()->back()->with('success', 'Deposit request rejected successfully');
    }
}
