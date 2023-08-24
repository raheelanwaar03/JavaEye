<?php

use App\Models\Reward;
use App\Models\User;
use App\Models\user\BuyTicket;
use App\Models\user\UserDeposit;
use App\Models\user\Widthrawal;

function allUser()
{
    $user = User::all()->count();
    return $user;
}


function Total_deposit()
{
    $deposits = UserDeposit::where('status','approved')->get();
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
