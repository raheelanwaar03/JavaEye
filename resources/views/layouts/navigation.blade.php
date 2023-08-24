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
    <meta name="keywords"
        content="Online working at home" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/192x192.png')}}">
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
        <div style="padding-left: 3px;padding-right: 3px;margin-top: 5px;">
            <div class="col-md-12 col-12"
                style="border-radius: 20px; border: 1px solid white;height: 25px; margin-bottom: 10px;">
                <i class="input-icon"><i class="fa fa-bullhorn" aria-hidden="true" style="color: white;"></i></i>

                <div align="right" style="width:60%;float:right ;">
                    <marquee direction="left" style="color: white;">Welcome to {{ env('APP_NAME') }}...</marquee>
                </div>
            </div>
        </div>
        <style>
            * {
                box-sizing: border-box;
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

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .text {
                    font-size: 11px
                }
            }
        </style>



        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{ asset('assets/img/img.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{ asset('assets/img/img2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="{{ asset('assets/img/img3.jpg') }}" style="width:100%">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

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

                    <div class="col-4" style="text-align: center;justify-content:center;">
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
                            <div class="user-card"
                                style="border-radius:30px;background-color: skyblue;width: 40px;height:40px;text-align: center;">
                                <h3><i class="fa fa-question-circle" aria-hidden="true" style="color: white;"></i></h3>
                            </div>
                            <a href="mailto:info@OdenFilms.com">
                                <p
                                    style="color: white; font-size: 10px;font-weight:bold;line-height:1.1rem !important;">
                                    Help Center</p>
                            </a>
                    </div>
            </center>
        </div>
        </center>
    </div>



    <div class="section" style="margin-top: -50px;border-bottom: 1px solid black;">
        <div class="section-heading padding">
            <h2 class="title" style="color: white;">Hot Selling!</h2>
        </div>


        <marquee direction="left" style="width:650px;">
            <div id="card-container" class="card-container">

                <div class="col-4"
                    style="margin-left: 7px; width:100px;height: 100px;background-image: url('{{ asset('assets/img.jpg') }}');border-radius: 10px !important;">
                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img1.jpg') }}');border-radius: 10px !important;">
                </div>


                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img2.jpg') }}');border-radius: 10px !important;">

                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img3.jpg') }}');border-radius: 10px !important;">

                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img4.jpg') }}');border-radius: 10px !important;">
                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img5.jpg') }}');border-radius: 10px !important;">
                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img6.jpg') }}');border-radius: 10px !important;">
                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img7.jpg') }}');border-radius: 10px !important;">
                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img8.jpg') }}');border-radius: 10px !important;">
                </div>

                <div class="col-4"
                    style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img9.jpg') }}');border-radius: 10px !important;">
                </div>

            </div>
        </marquee>
    </div>
