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
    {{-- <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="{{ asset('asset/img/logo.png') }}" alt="logo">
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
    <div class="sidebar">
        <div class="mt-4 mb-3">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-60 border-0"><img src="{{ asset('asset/img/user1.png') }}"
                            alt=""></figure>
                </div>
                @if (auth()->user())
                    <div class="col pl-0 align-self-center">
                        <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                        <p class="text-mute small">{{ auth()->user()->level }}</p>
                    </div>
                @else
                    <div class="col pl-0 align-self-center">
                        <h5 class="mb-1">User</h5>
                        <p class="text-mute small">Level</p>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group main-menu">
                    <a href="index.html" class="list-group-item list-group-item-action active"><i
                            class="material-icons icons-raised">home</i>Home</a>
                    <a href="notification.html" class="list-group-item list-group-item-action"><i
                            class="material-icons icons-raised">notifications</i>Notification <span
                            class="badge badge-dark text-white">2</span></a>
                    <a href="alltransactions.html" class="list-group-item list-group-item-action"><i
                            class="material-icons icons-raised">find_in_page</i>History</a>
                    <a href="controls.html" class="list-group-item list-group-item-action"><i
                            class="material-icons icons-raised">view_quilt<span
                                class="new-notification"></span></i>Pages Controls</a>
                    <a href="setting.html" class="list-group-item list-group-item-action"><i
                            class="material-icons icons-raised">important_devices</i>Settings</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#colorscheme"><i class="material-icons icons-raised">color_lens</i>Color scheme</a>
                    @if (auth()->user())
                        <form action="{{ route('logout') }}">
                            @csrf
                            <button class="list-group-item list-group-item-action"><i
                                    class="material-icons icons-raised bg-danger">power_settings_new</i>Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="list-group-item list-group-item-action"><i
                                class="material-icons icons-raised bg-danger">arrow_forward</i>Login</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="closesidemenu"><i class="material-icons icons-raised bg-dark ">close</i></a>
