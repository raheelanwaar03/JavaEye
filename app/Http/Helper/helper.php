<?php

use App\Models\User;
use App\Models\user\BuyTicket;
use App\Models\user\UserDeposit;

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
    $tickets = BuyTicket::get()->count();
    return $tickets;
}

