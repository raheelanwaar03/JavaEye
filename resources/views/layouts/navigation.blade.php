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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" title="Logout" class="list-group-item list-group-item-action"><i
                                    class="material-icons icons-raised bg-danger">power_settings_new</i></button>
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
