@extends('layouts.app')

@section('content')
    <div id="appCapsule">
        <h3 class="text-center text-white">All Tickets</h3>
        <div class="section full mb-5">
            <div class="col-12 my-4">
                <div class="row" style="padding:10px;" id="homeProducts">
                    @forelse ($tickets as $ticket)
                        <div class="col-6" style="margin-top:10px;">
                            <a href="{{ route('User.Show.Ticket', ['id' => $ticket->id]) }}">
                                <div class="blog-card"
                                    style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('images/' . $ticket->image) }}');">
                                    <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                            style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">{{ $ticket->price }}$</span><span
                                            style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h5 class="text-center text-white">NO Ticket</h5>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
