<?php

use App\Models\User;


function allUser()
{
    $user = User::all()->count();
    return $user;
}
