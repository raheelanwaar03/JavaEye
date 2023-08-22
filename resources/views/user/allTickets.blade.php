@extends('layouts.app')

@section('content')
    <div id="appCapsule">
        <h3 class="text-center text-white">All Tickets</h3>
        <div class="section full mb-5">
            <div class="col-12">
                <h3 class="text-center text-white">All Tickets (Price: 10$)</h3>
                <div class="row text-center mt-4">
                    @forelse ($tickets as $ticket)
                        <div class="col-6 col-md-3">
                            <div class="card bg-transparent shadow border-0 mb-3 bordered">
                                <div class="card-body">
                                    <div class="no-shadow border-0">
                                        <img src="{{ asset('images/' . $ticket->image) }}" alt="image" height="200px"
                                            width="200px" class="img-fluid rounded">
                                    </div>
                                    <h3 class="mt-3 mb-0 font-weight-normal text-white">{{ $ticket->title }}</h3>
                                    <p class="text-secondary text-mute small text-white">{{ $ticket->description }}</p>
                                    <form action="{{ route('User.Buy.Ticket', ['id' => $ticket->id]) }}" method="POST">
                                        @csrf
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex jusitfy-content-center align-items-center">
                                                <input type="number" style="width:50px;border:1px solid white"
                                                    class="bg-transparent text-white" name="qty" min="1"
                                                    value="1">
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn btn-sm btn-danger">Buy</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>No Ticket Available</h3>
                    @endforelse
                    {{ $tickets->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
