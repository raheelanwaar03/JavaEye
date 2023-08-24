<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\admin\Ticket;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        $tickets = Ticket::paginate(12);
        return view('landingpage.welcome',compact('tickets'));
    }

}
