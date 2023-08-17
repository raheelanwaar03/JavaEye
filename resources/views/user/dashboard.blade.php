@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="swiper-container icon-slide mb-4">
                <div class="swiper-wrapper">
                    <a href="{{ route('User.Deposit.Money') }}" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">local_atm</i>
                        </div>
                        <p class="small mt-2">Deposit</p>
                    </a>
                    <a href="#" onclick="copyLink()" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">send</i>
                            <input type="text" id="linkValue" value="{{ route('register', ['referral' => auth()->user()->email]) }}" hidden>
                        </div>
                        <p class="small mt-2">Share link</p>
                    </a>
                    <a href="{{ route('User.Team.Member') }}" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">people_outline</i>
                        </div>
                        <p class="small mt-2">Team</p>
                    </a>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="row">
            <div class="container px-0">
                <!-- Swiper -->
                <div class="swiper-container offer-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <img src="{{ asset('asset/img/graphics-carousel-scheme1.png') }}" alt=""
                                                class="mw-100">
                                        </div>
                                        <div class="col align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                            <p class="text-mute">Get all money at market rate of gold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col pr-0 align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                            <p class="text-mute">Get all money at market rate of gold</p>
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{ asset('asset/img/graphics-carousel-scheme1.png') }}" alt=""
                                                class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card shadow border-0 bg-template">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto pr-0">
                                                <img src="{{ asset('asset/img/graphics-carousel-scheme1.png') }}"
                                                    alt="" class="mw-100">
                                            </div>
                                            <div class="col align-self-center">
                                                <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                                <p class="text-mute">Get all money at market rate of gold</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h5 class="subtitle mb-1">Movie Tickets</h5>
                    <p class="text-secondary">Buy ticktes and earn daily profit</p>
                </div>
            </div>
            <div class="row text-center mt-4">
                @forelse ($tickets as $ticket)
                    @csrf
                    <div class="col-6 col-md-3">
                        <div class="card shadow border-0 mb-3">
                            <div class="card-body">
                                <div class="avatar avatar-60 no-shadow border-0">
                                    {{-- <div></div> --}}
                                    <img src="{{ asset('images/' . $ticket->image) }}" alt="image" class="img-responsive">
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal">{{ $ticket->title }}</h3>
                                <p class="text-secondary text-mute small">{{ $ticket->description }}</p>
                                <form action="#" method="POST">
                                    <button type="submit" class="btn btn-primary">Buy</button>
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
@endsection
