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
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

</head>

<body>

    <!-- App Header -->
    <div class="appHeader text-light">
        <div class="left">
            <h4 style="color:white">{{ env('APP_NAME') }}</h4>
        </div>
        <div class="right">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-transparent" style="border: none">
                    <i class="fa fa-power-off" aria-hidden="true" style="color: white"></i>
                </button>
            </form>
        </div>

    </div>
    <div id="appCapsule">

        <div class="col-12 img-fluid"
            style="margin-top:2px;background-image:url('{{ asset('assets/third.jpg') }}');background-repeat: no-repeat;height:186px;width:400px;">
        </div>

        <hr>

        <div class="row">
            <div class="col-4" style="text-align: center;">
                <p class="card-text" style="font-size: 18px;color:rgb(215, 68, 93) !important;">
                    {{ auth()->user()->balance }}</p>
                <p class="card-text" style="margin-top:-5px;font-size: 18px;color: white;">Available Balance</p>
            </div>
            <div class="col-4" style="text-align: center;">
                <p class="card-text" style="font-size: 18px;color:rgb(215, 68, 93) !important;">
                    {{ total_Reward() }}</p>
                <p class="card-text" style="margin-top:-5px;font-size: 18px;color: white;">Total Reward</p>

            </div>
            <div class="col-4" style="text-align: center;">
                <p class="card-text" style="font-size: 18px;color:rgb(215, 68, 93) !important;">
                    {{ team_income() }}
                </p>
                <p class="card-text" style="margin-top:-5px;font-size: 18px;color: white;">Team Income</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6" style="text-align: center;">
                <a class="btn btn-success" style="padding: 10px 10px;">Locked asset ( {{ sold_tickets() }} )</a>
            </div>
            <div class="col-6" style="text-align: center;">
                <a class="btn btn-info" style="padding: 10px 10px;">Freeze Amount ( {{ locked_asset_balance() }} )</a>
            </div>
        </div>

        <hr>

        <div class="col-12">
            <h3 class="text-white">Box Office Proceeds</h3>
            <div class="d-flex">
                <div class="col-md-5">
                    <h4 class="text-white">{{ Todays_bouns() }}$</h4>
                    <p>Today's Ticket Earning</p>
                </div>
                <div class="col-md-5">
                    <h4 class="text-white">{{ today_total_commission() }}$</h4>
                    <p>Today's Total Earning</p>
                </div>
            </div>
        </div>
    </div>
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


    <x-alert />


    <script>
        function copyLink() {
            // Get the text field
            var copyText = document.getElementById("linkValue");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Refer Link Copied!");
        }
    </script>

    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>

</body>

</html>
