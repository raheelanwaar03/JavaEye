<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Ticket;
use App\Models\user\BuyTicket;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function add()
    {
        return view('admin.ticket.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(111111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $ticket = new Ticket();
        $ticket->title = $validated['title'];
        $ticket->description = $validated['description'];
        $ticket->price = $validated['price'];
        $ticket->image = $imageName;
        $ticket->save();
        return redirect()->route('Admin.All.Ticket')->with('success', 'Ticket added successfully');
    }

    public function index()
    {
        $tickets = Ticket::get();
        return view('admin.ticket.allTickes', compact('tickets'));
    }

    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->back()->with('success', 'Ticket Deleted successfully');
    }

    public function newTicket()
    {
        $tickets = BuyTicket::get();
        return view('admin.user.tickets',compact('tickets'));
    }


}
