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

    <style>
        * {
            box-sizing: border-box
        }

        .mySlides1,
        .mySlides2 {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a grey background color */

        .prev:hover,
        .next:hover {
            background-color: #f1f1f1;
            color: black;
        }

        .card-container {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            padding: 10px;
            cursor: grab;
        }
    </style>

</head>

<body>
    <div class="appHeader text-light">
        <div class="left">
            <h4 style="color: white;">{{ env('APP_NAME') }}</h4>
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
        <div style="padding-left: 3px;padding-right: 3px;margin-top: 5px;">
            <div class="col-md-12 col-12"
                style="border-radius: 20px; border: 1px solid white;height: 25px; margin-bottom: 10px;">
                <i class="input-icon"><i class="fa fa-bullhorn" aria-hidden="true" style="color: white;"></i></i>

                <div align="right" style="width:70%;float:right ;">
                    <marquee direction="left" style="color: white;">Welcome to {{ env('APP_NAME') }}...</marquee>
                </div>
            </div>
        </div>

        <div class="slideshow-container">
            <div class="mySlides1">
                <img src="{{ asset('assets/img/img.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides1">
                <img src="{{ asset('assets/img/img2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides1">
                <img src="{{ asset('assets/img/img3.jpg') }}" style="width:100%">
            </div>
            <div class="mySlides1">
                <img src="{{ asset('assets/img/img4.jpg') }}" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
        </div>




        <div class="section full mt-4" style="border-bottom: 1px solid black;">
            <center>
                <div class="row">

                    <div class="col-4" style="text-align: center; justify-content:center;">

                        <center>
                            <div class="user-card"
                                style="border-radius:30px;background-color: orange;width: 40px;height:40px;text-align: center;">
                                <h3><i class="fa fa-credit-card" aria-hidden="true" style="color: white;"></i></h3>
                            </div>
                            <a href="{{ route('User.Deposit.Money') }}">
                                <p
                                    style="color: white; font-size: 10px;font-weight:bold;line-height:1.1rem !important;">
                                    Recharge Balance</p>
                            </a>
                        </center>


                    </div>

                    <div class="col-4" style="text-align: center; justify-content:center;">
                        <center>
                            <div class="user-card"
                                style="border-radius:30px;background-color: pink;width: 40px;height:40px;text-align: center;">
                                <h3><i class="fa fa-money" aria-hidden="true" style="color: white;"></i></h3>
                            </div>
                            <a href="{{ route('User.Widthraw.Balance') }}">
                                <p
                                    style="color: white; font-size: 10px;font-weight:bold;line-height:1.1rem !important;">
                                    Withdraw Balance</p>
                            </a>
                        </center>
                    </div>

                    <div class="col-4" style="text-align: center; justify-content:center;">
                        <center>
                            <a href="#" onclick="copyLink()">
                                <div class="user-card"
                                    style="border-radius:30px;background-color: skyblue;width: 40px;height:40px;text-align: center;">
                                    <h3><i class="fa fa-share-alt-square" aria-hidden="true" style="color: white;"></i>
                                    </h3>
                                </div>
                                <input type="text" id="linkValue"
                                    value="{{ route('register', ['referral' => auth()->user()->email]) }}" hidden>
                                <p
                                    style="color: white; font-size: 10px;font-weight:bold;line-height:1.1rem !important;">
                                    Share Link</p>
                            </a>
                        </center>
                    </div>
                </div>
            </center>
        </div>
