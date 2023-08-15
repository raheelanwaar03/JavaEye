<!doctype html>
<html lang="en" class="deeppurple-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>{{ env('APP_NAME') }}</title>

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
    {{-- <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="{{ asset('asset/img/logo.png') }}" height="200px" width="200px" alt="logo">
            <h1 class="mt-3"><span class="font-weight-light ">{{ env('APP_NAME') }}</h1>
            <p class="text-mute text-uppercase small">Earning Platform</p>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div> --}}
    <!-- Loader ends -->

    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="{{ route('LandingPage') }}" class="btn  btn-link text-dark"><i
                            class="material-icons">chevron_left</i></a>
                </div>
                <div class="col text-center"></div>
                <div class="col-auto">
                </div>
            </div>
        </div>
