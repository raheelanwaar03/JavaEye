<?php

use App\Models\Reward;
use App\Models\User;
use App\Models\user\BuyTicket;
use App\Models\user\UserDeposit;
use App\Models\user\Widthrawal;
use Carbon\Carbon;

function allUser()
{
    $user = User::all()->count();
    return $user;
}


function Total_deposit()
{
    $deposits = UserDeposit::where('user_id',auth()->user()->id)->where('status','approved')->get();
    $total_deposit = 0;
    foreach ($deposits as $deposit) {
        $total_deposit += $deposit->amount;
    }

    return $total_deposit;
}

function Admin_Total_Widtraw()
{
    $deposits = Widthrawal::where('status','apporoved');
    $total_deposit = 0;
    foreach($deposits as $deposit)
    {
        $total_deposit += $deposit->amount;
    }

    return $total_deposit;
}

function sold_tickets()
{
    $tickets = BuyTicket::where('user_id', auth()->user()->id)->get();
    $total_tickets = 0;
    foreach ($tickets as $ticket) {
        $total_tickets += $ticket->qty;
    }
    return $total_tickets;
}


function Total_widthrawal()
{
    $widthraws = Widthrawal::where('user_id', auth()->user()->id)->get();
    $total_widthraw = 0;
    foreach ($widthraws as $widthraw) {
        $total_widthraw += $widthraw->amount;
    }
    return $total_widthraw;
}

function team_income()
{
    $team_income = Reward::where('user_id', auth()->user()->id)->where('type', 'team')->get();
    $total_income = 0;
    foreach ($team_income as $item) {
        $total_income += $item->amount;
    }

    return $total_income;
}

function total_Reward()
{
    $team_income = Reward::where('user_id', auth()->user()->id)->where('type', 'reward')->get();
    $total_income = 0;
    foreach ($team_income as $item) {
        $total_income += $item->amount;
    }

    return $total_income;
}


function locked_asset_balance()
{
    $tickets = BuyTicket::where('user_id', auth()->user()->id)->get();
    $total_price = 0;
    foreach ($tickets as $ticket) {
        $total_price += $ticket->total_price;
    }
    return $total_price;
}

function today_total_commission()
{
    $bouns = Reward::where('user_id',auth()->user()->id)->where('type', 'reward')->whereDate('created_at', Carbon::today())->get();
    $total_bouns = 0;
    foreach($bouns as $item)
    {
        $total_bouns += $bouns->amount;
    }

    // getting referral commission

    $referral = Reward::where('user_id',auth()->user()->id)->where('type', 'referral')->whereDate('created_at', Carbon::today())->get();
    $referral_bouns = 0;
    foreach($referral as $item)
    {
        $referral_bouns += $bouns->amount;
    }

    $today_total_commission = $referral_bouns + $total_bouns;
    return $today_total_commission;

}


function Todays_bouns()
{
    $bouns = Reward::where('user_id',auth()->user()->id)->where('type', 'reward')->whereDate('created_at', Carbon::today())->get();
    $total_bouns = 0;
    foreach($bouns as $item)
    {
        $total_bouns += $bouns->amount;
    }
    return $total_bouns;

}

