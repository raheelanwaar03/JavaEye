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

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/64e7ca1ecc26a871b03132ee/1h8kmr31k';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

</head>

<body>

    <x-alert />

    <!-- App Header -->
    <div class="appHeader text-light">
        <div class="left">
            <h4 style="color:white">Recharge</h4>
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
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <center>
            <div style="padding: 10px;">
                <div class="blog-card" style="border-radius: 10px !important;">
                    <p class="card-text" style="font-size: 11px;color: rgb(64, 64, 151);">{{ auth()->user()->balance }}
                    </p>
                    <p class="card-text" style="margin-top: -20px; font-size: 11px; color: black !important;">Current
                        balance</p>
                </div>
            </div>
        </center>

        <div class="col-12">
            <div style="border: 1px solid black; border-radius: 5px !important;padding: 15px;">
                <form action="{{ route('User.Store.Deposit.Money') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center text-white">Deposit Money</h3>
                    <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Amount To Deposit:</span>
                    </p>
                    <input placeholder="Enter Amount" type="number" name="amount"
                        style="background: #040e2b;border:none;color:white;">
                    <hr>

                    <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Account Title:</span></p>
                    <input placeholder="Account Title" type="text" name="account_title"
                        style="background: #040e2b;border:none;color:white;">
                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Our Trc20 Id:</span>
                        </p>
                        <a class="btn btn-sm btn-danger ml-3 text-white" onclick="copy()">Click to Copy</a>
                    </div>
                    <input id="myInput" name="trcId" value="TYjaBbDLPakArN7pUAptMG1KdqAQGjUCQg" readonly
                        style="background: #040e2b;border:none;color:white;">
                    <hr>

                    <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Screen Shot:</span></p>
                    <input type="file" name="screen_shot" required
                        style="background: #040e2b;border:none;color:white;">
                    <hr>
            </div>
        </div>

        <center>
            <div style="padding: 10px;">
                <button class="btn btn-danger">Confirm Recharge</button>
            </div>
        </center>
        </form>
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
                <i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Assest</strong>
            </div>
        </a>
        <a href="{{ route('User.All.Tickets') }}"
            class="item {{ request()->is('User/All/Tickets') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Movies</strong>
            </div>
        </a>
        <a href="{{ route('User.Contact') }}" class="item {{ request()->is('User/Contact') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-comment-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Service</strong>
            </div>
        </a>
        <a href="{{ route('User.Mine') }}" class="item {{ request()->is('User/Mine') ? 'active' : '' }}">
            <div class="col">
                <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Mine</strong>
            </div>
        </a>
    </div>



    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="{{ asset('assets/js/ionicons.js') }}"></script>
    <!-- Splide -->
    <script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>


</body>

</html>
