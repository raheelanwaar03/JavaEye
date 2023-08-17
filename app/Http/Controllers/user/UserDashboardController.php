<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Ticket;
use App\Models\User;
use App\Models\user\BuyTicket;
use App\Models\user\UserDeposit;
use App\Models\user\Widthrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $tickets = Ticket::paginate(12);
        return view('user.dashboard', compact('tickets'));
    }

    public function team()
    {
        $users = User::where('referral', auth()->user()->email)->get();
        return view('user.team', compact('users'));
    }

    public function deposit()
    {
        return view('user.deposit');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'account_title' => 'required',
            'trcId' => 'required',
            'screen_shot' => 'required',
        ]);

        $image = $validated['screen_shot'];
        $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $deposit = new UserDeposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->user_name = auth()->user()->name;
        $deposit->user_email = auth()->user()->email;
        $deposit->amount = $validated['amount'];
        $deposit->account_title = $validated['account_title'];
        $deposit->trcId = $validated['trcId'];
        $deposit->screen_shot = $imageName;
        $deposit->save();
        return redirect()->back()->with('success', 'You have been successfully requested for deposit. Please wait for admin approvel you will get an email');
    }

    // buy ticket

    public function buyTicket(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        // buying ticket
        $ticket_price = $ticket->price;
        $ticket_title = $ticket->title;
        $ticket_img = $ticket->image;
        // checking if user have balance
        if (auth()->user()->balance < $ticket_price) {
            return redirect()->back()->with('error', 'you have not enough balance to purchase this ticket');
        }

        // Checking if user purchases a ticket in 2 hrs with level 0

        $ticket = BuyTicket::where('user_id', auth()->user()->id)->latest()->first();
        if ($ticket == null) {

            // dedecting ticket amount
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $ticket_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->back()->with('success', 'You have purchased this ticket successfully');
        }
        if (auth()->user()->level == 'VIP0') {
            $ticket = BuyTicket::where('user_id', auth()->user()->id)->latest()->first();
            $time_of_purchasing = $ticket->created_at;
            $currentDateTime = Carbon::now();
            $timeDifference = $currentDateTime->diffInHours($time_of_purchasing);

            if ($timeDifference <= 2) {
                return redirect()->back()->with('error', 'you have to wait for 2 hrs to buy new ticket or upgrade your level');
            } else {
                $user = User::where('id', auth()->user()->id)->first();
                $user->balance -= $ticket_price;
                $user->save();
                // purchasing ticket
                $user_buy_ticket = new BuyTicket();
                $user_buy_ticket->user_id = auth()->user()->id;
                $user_buy_ticket->user_email = auth()->user()->email;
                $user_buy_ticket->user_name = auth()->user()->name;
                $user_buy_ticket->ticket_price = $ticket_price;
                $user_buy_ticket->ticket_title = $ticket_title;
                $user_buy_ticket->ticket_img = $ticket_img;
                $user_buy_ticket->save();
                return redirect()->back()->with('success', 'You have purchased this ticket successfully');
            }
        }
    }

    public function widthrawal()
    {
        return view('user.widthraw.index');
    }

    public function storeWidthrawal(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'account_title' => 'required',
            'trc_id' => 'required',
        ]);

        if(auth()->user()->balance < $validated['amount'])
        {
            return redirect()->back()->with('error','You have not enough balance');
        }


        $widthrawal = new Widthrawal();
        $widthrawal->user_id = auth()->user()->id;
        $widthrawal->user_name = auth()->user()->name;
        $widthrawal->user_email = auth()->user()->email;
        $widthrawal->amount = $validated['amount'];
        $widthrawal->account_title = $validated['account_title'];
        $widthrawal->trc_id = $validated['trc_id'];
        $widthrawal->save();
        return redirect()->back()->with('success','You have been request for widthraw successfully');

    }

    public function widthrawalTranscation()
    {
        $transcations = Widthrawal::get();
        return view('user.widthraw.transcation',compact('transcations'));
    }




}
