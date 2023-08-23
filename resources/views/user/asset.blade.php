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
            <h4 style="color:white">Profile</h4>
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

        <div class="col-12" style="margin-top:2px;">
            <p class="card-text" style="font-size: 11px; color: white !important;font-weight: bold;">
                {{ auth()->user()->email }}<span style="float: right;"></span></p>
            <p class="card-text" style="margin-top:-20px;font-size: 11px;color:rgb(215, 68, 93) !important;">
                Level:{{ auth()->user()->level }}
            </p>
        </div>

        <hr>

        <div class="row">
            <div class="col-6" style="text-align: center;">
                <p class="card-text" style="font-size: 11px;color:rgb(215, 68, 93) !important;">
                    {{ auth()->user()->balance }}</p>
                <p class="card-text" style="margin-top:-5px;font-size: 11px;color: white;">Available Balance</p>

            </div>
            <div class="col-6" style="text-align: center;">
                <p class="card-text" style="font-size: 11px;color:rgb(215, 68, 93) !important;">{{ Total_widthrawal() }}
                </p>
                <p class="card-text" style="margin-top:-5px;font-size: 11px;color: white;">Withdrawal Amount</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6" style="text-align: center;">
                <a href="{{ route('User.Deposit.Money') }}" class="btn btn-success"
                    style="padding: 10px 10px;">Recharge</a>
            </div>
            <div class="col-6" style="text-align: center;">
                <a href="{{ route('User.Widthraw.Balance') }}" class="btn btn-info"
                    style="padding: 10px 10px;">Withdraw</a>
            </div>
        </div>

        <hr>

        <div class="col-12">
            <h3 class="text-white text-center">Transcations</h3>
            <div style="border: 1px solid black; border-radius: 5px !important;padding: 15px;">

                @forelse ($transcations as $transcation)
                    <p class="card-text" style="margin-top:-10px;"><a style="font-size: 11px; color: white !important;">
                            {{ $transcation->user_name }}:<span style="float: right;">
                                {{ $transcation->amount }}
                            </span></a></p>
                @empty
                <h4 class="text-white text-center">No Transcations</h4>
                @endforelse

                <hr>

            </div>
        </div>

    </div>
    </div>
    <div class="appBottomMenu" style="background-color: black;">
        <a href="{{ route('User.Dashboard') }}" class="item active">
            <div class="col">
                <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
                <strong style="color: white;">Home</strong>
            </div>
        </a>
        <a href="{{ route('User.Assets') }}" class="item">
            <div class="col">
                <i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Assets</strong>
            </div>
        </a>
        <a href="{{ route('User.All.Tickets') }}" class="item">
            <div class="col">
                <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Tickets</strong>
            </div>
        </a>
        <a href="{{ route('profile.edit') }}" class="item">
            <div class="col">
                <i class="fa fa-cog" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Setting</strong>
            </div>
        </a>
        <a href="{{ route('User.Mine') }}" class="item">
            <div class="col">
                <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;color:white;"></i>
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
