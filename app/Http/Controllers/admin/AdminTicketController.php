<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function add()
    {
        return view('admin.ticket.add');
    }

    public function store(Request $request)
    {
        return $request;
    }




}
