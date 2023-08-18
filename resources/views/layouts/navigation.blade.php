<!doctype html>
<html lang="en" class="deeppurple-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>Dashboard | {{ env('APP_NAME') }}</title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/materializeicon/material-icons.css') }}">
    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/vendor/bootstrap-4.4.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Swiper CSS -->
    <link href="{{ asset('asset/vendor/swiper/css/swiper.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Loader -->
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="{{ asset('asset/img/remove-bg.png') }}" alt="logo">
            <h1 class="mt-3"><span class="font-weight-light ">{{ env('APP_NAME') }}</h1>
            <p class="text-mute text-uppercase small">Earning Platform</p>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="wrapper homepage">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn  btn-link text-dark menu-btn"><i class="material-icons">menu</i><span
                            class="new-notification"></span></button>
                </div>
                <div class="col text-center"><img src="{{ asset('asset/img/remove-bg.png') }}" alt="Logo"
                        class="header-logo">
                </div>
                <div class="col-auto">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link text-dark position-relative"><i
                                class="material-icons">power_settings_new</i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card bg-template shadow mt-4 h-190">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60"><img src="{{ asset('asset/img/user1.png') }}"
                                    alt="">
                            </figure>
                        </div>
                        @if (auth()->user())
                            <div class="col pl-0 align-self-center">
                                <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                                <p class="text-mute small">Level: ({{ auth()->user()->level }})</p>
                            </div>
                        @else
                            <div class="col pl-0 align-self-center">
                                <h5 class="mb-1">User Name</h5>
                                <p class="text-mute small">Level:({{ auth()->user()->level }})</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container top-100">
            <div class="card mb-4 shadow">
                <div class="card-body border-bottom">
                    <div class="row">
                        @if (auth()->user())
                            <div class="col">
                                <h3 class="mb-0 font-weight-normal">$ {{ auth()->user()->balance }}</h3>
                                <p class="text-mute">My Balance</p>
                            </div>
                        @else
                            <div class="col">
                                <h3 class="mb-0 font-weight-normal">$ 00.0</h3>
                                <p class="text-mute">My Balance</p>
                            </div>
                        @endif
                        <div class="col-auto">
                            <a href="{{ route('User.Deposit.Money') }}">
                                <button class="btn btn-default btn-rounded-54 shadow" data-toggle="modal"
                                    data-target="#addmoney"><i class="material-icons">add</i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
