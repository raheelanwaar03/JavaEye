<?php

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
    $deposits = UserDeposit::get();
    $total_deposit = 0;
    foreach($deposits as $deposit)
    {
        $total_deposit += $deposit->amount;
    }

    return $total_deposit;
}

// function Total_widthrawal()
// {
//     $deposits = UserDeposit::get();
//     $total_deposit = 0;
//     foreach($deposits as $deposit)
//     {
//         $total_deposit += $deposit->amount;
//     }

//     return $total_deposit;
// }


function sold_tickets()
{
    $tickets = BuyTicket::where('user_id',auth()->user()->id)->get()->count();
    return $tickets;
}


function Total_widthrawal()
{
    $widthraws = Widthrawal::where('user_id',auth()->user()->id)->get();
    $total_widthraw = 0;
    foreach ($widthraws as $widthraw)
    {
        $total_widthraw += $widthraw->amount;
    }
    return $total_widthraw;
}

function locked_asset_balance()
{
    $tickets = BuyTicket::where('user_id',auth()->user()->id)->get();
    $total_price = 0;
    foreach ($tickets as $ticket)
    {
        $total_price += $ticket->ticket_price;
    }
    return $total_price;
}



