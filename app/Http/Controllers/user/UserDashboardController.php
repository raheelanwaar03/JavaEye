<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Ticket;
use App\Models\User;
use App\Models\Reward;
use App\Models\Massage;
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

    public function tickets()
    {
        $tickets = Ticket::paginate(12);
        return view('user.allTickets', compact('tickets'));
    }

    public function depositTranscation()
    {
        $deposits = UserDeposit::where('user_id', auth()->user()->id)->get();
        return view('user.depositTranscation', compact('deposits'));
    }

    public function mine()
    {
        return view('user.mine');
    }
    public function agreement()
    {
        return view('user.agreement');
    }

    public function team()
    {
        $users = User::where('referral', auth()->user()->email)->get();
        return view('user.team', compact('users'));
    }

    public function back(Request $request)
    {
        return redirect()->back()->with('error', 'Not open yet');
    }


    public function deposit()
    {
        return view('user.deposit');
    }

    public function showTicket($id)
    {
        $ticket = Ticket::find($id);
        return view('user.showTicket', compact('ticket'));
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
        return redirect()->route('User.All.Tickets')->with('success', 'You have been successfully requested for deposit. Please wait for admin approvel you will get an email');
    }

    public function assets()
    {
        $tickets = BuyTicket::where('user_id', auth()->user()->id)->get();
        return view('user.asset', compact('tickets'));
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

        $qty_price = $request->qty * 10;

        if (auth()->user()->balance < $qty_price) {
            return redirect()->back()->with('error', 'you have not enough balance');
        }

        // checking user level and purchase quantity

        $level = auth()->user()->level;
        if ($level == "VIP0") {
            // quantity
            $quantity = $request->qty;
            if ($quantity >= 3) {
                return redirect()->back()->with('error', 'you cannot buy more than 2 tickets with VIP0 level upgrade your level to buy more tickets');
            }
        }

        $user = BuyTicket::where('user_id', auth()->user()->id)->latest()->first();
        if ($user != null) {
            $tickets = BuyTicket::where('user_id', auth()->user()->id)->whereDate('created_at', Carbon::today())->get();
            if ($tickets != null) {
                if (auth()->user()->level == "VIP0") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 2) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }
                if (auth()->user()->level ==  "VIP1") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 100) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }
                if (auth()->user()->level == "VIP2") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 200) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }
                if (auth()->user()->level == "VIP3") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 500) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }

                if (auth()->user()->level == "VIP4") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 2000) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }

                if (auth()->user()->level == "VIP5") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 5000) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }

                if (auth()->user()->level == "VIP6") {
                    $quantity = 0;
                    foreach ($tickets as $ticket) {
                        $quantity += $ticket->qty;
                    }
                    if ($quantity >= 10000) {
                        return redirect()->back()->with('error', 'Your daily purchase limit is over');
                    }
                }
            }
        }

        // Checking if user purchases a ticket in 2 hrs with level 0

        $user = BuyTicket::where('user_id', auth()->user()->id)->latest()->first();
        if ($ticket == null) {
            // dedecting ticket amount
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased ticket successfully');
        }

        if (auth()->user()->level == 'VIP0') {
            $ticket = BuyTicket::where('user_id', auth()->user()->id)->latest()->first();
            if ($ticket != null) {
                $time_of_purchasing = $ticket->created_at;
                $currentDateTime = Carbon::now();
                $timeDifference = $currentDateTime->diffInHours($time_of_purchasing);

                if ($timeDifference <= 2) {
                    return redirect()->back()->with('error', 'you have to wait for 2 hrs to buy new ticket or upgrade your level');
                }
            } else {
                $user = User::where('id', auth()->user()->id)->first();
                $user->balance -= $qty_price;
                $user->save();
                // purchasing ticket
                $user_buy_ticket = new BuyTicket();
                $user_buy_ticket->user_id = auth()->user()->id;
                $user_buy_ticket->user_email = auth()->user()->email;
                $user_buy_ticket->user_name = auth()->user()->name;
                $user_buy_ticket->qty = $request->qty;
                $user_buy_ticket->ticket_price = $ticket_price;
                $user_buy_ticket->total_price = $qty_price;
                $user_buy_ticket->ticket_title = $ticket_title;
                $user_buy_ticket->ticket_img = $ticket_img;
                $user_buy_ticket->save();
                return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
            }
        }

        if (auth()->user()->level == 'VIP1') {
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
        }

        if (auth()->user()->level == 'VIP2') {
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
        }

        if (auth()->user()->level == 'VIP3') {
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
        }

        if (auth()->user()->level == 'VIP4') {
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
        }

        if (auth()->user()->level == 'VIP5') {
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
        }

        if (auth()->user()->level == 'VIP6') {
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance -= $qty_price;
            $user->save();
            // purchasing ticket
            $user_buy_ticket = new BuyTicket();
            $user_buy_ticket->user_id = auth()->user()->id;
            $user_buy_ticket->user_email = auth()->user()->email;
            $user_buy_ticket->user_name = auth()->user()->name;
            $user_buy_ticket->qty = $request->qty;
            $user_buy_ticket->ticket_price = $ticket_price;
            $user_buy_ticket->total_price = $qty_price;
            $user_buy_ticket->ticket_title = $ticket_title;
            $user_buy_ticket->ticket_img = $ticket_img;
            $user_buy_ticket->save();
            return redirect()->route('User.Assets')->with('success', 'You have purchased this ticket successfully');
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

        if (auth()->user()->balance < $validated['amount']) {
            return redirect()->back()->with('error', 'You have not enough balance');
        }

        $widthrawal = new Widthrawal();
        $widthrawal->user_id = auth()->user()->id;
        $widthrawal->user_name = auth()->user()->name;
        $widthrawal->user_email = auth()->user()->email;
        $widthrawal->amount = $validated['amount'];
        $widthrawal->account_title = $validated['account_title'];
        $widthrawal->trc_id = $validated['trc_id'];
        $widthrawal->save();
        return redirect()->back()->with('success', 'You have been request for widthraw successfully');
    }

    public function boxOffice()
    {
        return view('user.boxOffice');
    }

    public function widthrawalTranscation()
    {
        $transcations = Widthrawal::where('user_id', auth()->user()->id)->get();
        $deposits = UserDeposit::where('user_id', auth()->user()->id)->get();
        $rewards = Reward::where('user_id',auth()->user()->id)->where('type','reward')->get();
        return view('user.widthraw.transcation', compact('transcations', 'deposits','rewards'));
    }

    public function massage(Request $request)
    {
        $massage = new Massage();
        $massage->user_id = auth()->user()->id;
        $massage->user_name = auth()->user()->name;
        $massage->name = $request->name;
        $massage->email = $request->email;
        $massage->massage = $request->massage;
        $massage->save();
        return redirect(route('User.Dashboard'))->with('success', 'We will contact you soon');
    }

    public function contact()
    {
        return view('user.contactUs');
    }
}
