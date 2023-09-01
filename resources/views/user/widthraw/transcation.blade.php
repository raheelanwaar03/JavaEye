<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="Work at home">
    <meta name="keywords" content="Online working at home" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Playfair Display', serif;
        }
    </style>


</head>

<body>
    <div class="appHeader text-light">
        <div class="left">
            <h4 style="color: white;">{{ env('APP_NAME') }}</h4>
        </div>
        <!-- <div class="pageTitle">

        </div> -->
        <div class="right">
            <h4>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-transparent" style="border: none">
                        <i class="fa fa-power-off" aria-hidden="true" style="color: white"></i>
                    </button>
                </form>
            </h4>
        </div>
    </div>
    <div id="appCapsule">
        <h3 class="text-center text-white">Widthrawal Transcation ({{ Total_widthrawal() }})</h3>
        @foreach ($transcations as $item)
            <div class="col-12" style="margin-top:2px;">
                <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">

                    <p class="card-text" style="font-size: 11px; color: black !important;">{{ $item->user_name }}<span
                            style="float: right;">{{ $item->status }}</span></p>

                    <p class="card-text" style="margin-top:-20px;font-size: 11px;color: rgb(64, 64, 151);">
                        {{ $item->amount }}$
                        <span
                            style="float: right;color: rgb(64, 64, 151);margin-right: -60px;">{{ $item->created_at }}</span>
                    </p>

                </div>
            </div>
            <hr>
        @endforeach
    </div>

    <div id="appCapsule">
        <h3 class="text-center text-white">Reward ({{ total_Reward() }})</h3>
        @foreach ($rewards as $item)
            <div class="col-12" style="margin-top:2px;">
                <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">

                    <p class="card-text" style="font-size: 20px; color: black !important;">{{ $item->type }}</p>

                    <p class="card-text" style="margin-top:-20px;font-size: 11px;color: rgb(64, 64, 151);">
                        {{ $item->amount }}$
                        <span
                            style="float: right;color: rgb(64, 64, 151);margin-right: -60px;">{{ $item->created_at }}</span>
                    </p>

                </div>
            </div>
            <hr>
        @endforeach
    </div>

    <div id="appCapsule">
        <h3 class="text-center text-white">Deposit Transcation ({{ Total_deposit() }})</h3>
        @foreach ($deposits as $item)
            <div class="col-12" style="margin-top:2px;">
                <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">

                    <p class="card-text" style="font-size: 11px; color: black !important;">{{ $item->user_name }}<span
                            style="float: right;">{{ $item->status }}</span></p>

                    <p class="card-text" style="margin-top:-20px;font-size: 11px;color: rgb(64, 64, 151);">
                        {{ $item->amount }}$
                        <span
                            style="float: right;color: rgb(64, 64, 151);margin-right: -60px;">{{ $item->created_at }}</span>
                    </p>

                </div>
            </div>
            <hr>
        @endforeach
    </div>

     <div class="appBottomMenu" style="background-color: black;">
        <a href="{{ route('User.Dashboard') }}" class="item {{ request()->is('User/Dashboard') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
                <strong style="color: white;">Home</strong>
            </div>
        </a>
        <a href="{{ route('User.Assets') }}" class="item {{ request()->is('User/Assets') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Assest</strong>
            </div>
        </a>
        <a href="{{ route('User.All.Tickets') }}"
            class="item {{ request()->is('User/All/Tickets') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-video-camera" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Movies</strong>
            </div>
        </a>
        <a href="{{ route('User.Contact') }}" class="item {{ request()->is('User/Contact') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-envelope" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Service</strong>
            </div>
        </a>
        <a href="{{ route('User.Mine') }}" class="item {{ request()->is('User/Mine') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Mine</strong>
            </div>
        </a>
    </div>



    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/ionicons.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>



</body>

</html>
