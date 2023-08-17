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
                    <a href="#" class="swiper-slide text-center" data-toggle="modal" data-target="#shareLink">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">send</i>
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

        <!-- footer-->
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="{{ route('User.Dashboard') }}" class="btn btn-link-default active">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('User.Deposit.Money') }}" class="btn btn-link-default">
                                <i class="material-icons">local_atm</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-link-default">
                                <i class="material-icons">account_balance_wallet</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="transactions.html" class="btn btn-link-default">
                                <i class="material-icons">widgets</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="profile.html" class="btn btn-link-default">
                                <i class="material-icons">account_circle</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="shareLink" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5>Copy,Share and Earn </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <div class="form-group mt-4">
                        <input type="text" id="myInput" class="form-control form-control-lg text-center"
                            value="{{ route('register', ['referral' => auth()->user()->email]) }}" readonly>
                    </div>
                    {{-- <div class="card shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto pr-0">
                                    <div class="avatar avatar-60 no-shadow border-0">
                                        <img src="{{ asset('asset/img/user2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="font-weight-normal mb-1">Ms. Shivani Dilux</h6>
                                    <p class="text-mute small text-secondary">London, UK</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <p class="text-mute text-center">Share more earn more.</p>
                </div>
                <div class="modal-footer border-0">
                    <button onclick="copy()" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close"
                        data-dismiss="modal">Copy</button>
                </div>
            </div>
        </div>
    </div>
@endsection
