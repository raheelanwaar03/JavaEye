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
            <h4><a href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"
                        style="color: white;"></i></a></h4>
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
                            <a href="{{ route('User.Dashboard') }}">
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
                            <a href="{{ route('User.Dashboard') }}">
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
                            <p style="color: white; font-size: 10px;font-weight:bold;line-height:1.1rem !important;">
                                Help Center</p>
                    </div>
            </center>
        </div>
        </center>
    </div>


    <div class="section" style="margin-top: -50px;border-bottom: 1px solid black;">
        <div class="section-heading padding">
            <h2 class="title" style="color: white;">Hot Selling!</h2>
        </div>

        <div id="card-container" class="card-container">

            <div class="col-4"
                style="margin-left: 7px; width:100px;height: 100px;background-image: url('{{ asset('assets/img/img1.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                    <p class="card-text" style="font-size: 11px;margin-top: 70px;"><span
                            style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                            style="float: right;padding: 2px 10px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                    </p>
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img/img1.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                    <p class="card-text" style="font-size: 11px;margin-top: 70px;"><span
                            style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                            style="float: right;padding: 2px 10px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                    </p>
                </a>

            </div>


            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img/img1.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                    <p class="card-text" style="font-size: 11px;margin-top: 70px;"><span
                            style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                            style="float: right;padding: 2px 10px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                    </p>
                </a>

            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img/img1.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                    <p class="card-text" style="font-size: 11px;margin-top: 70px;"><span
                            style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                            style="float: right;padding: 2px 10px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                    </p>
                </a>

            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img/img1.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                    <p class="card-text" style="font-size: 11px;margin-top: 70px;"><span
                            style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                            style="float: right;padding: 2px 10px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                    </p>
                </a>

            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cardContainer = document.getElementById("card-container");
            let isDragging = false;
            let startPosition = 0;
            let currentScrollPosition = 0;

            cardContainer.addEventListener("mousedown", (event) => {
                isDragging = true;
                startPosition = event.clientX;
                currentScrollPosition = cardContainer.scrollLeft;
                cardContainer.style.cursor = "grabbing";
            });

            cardContainer.addEventListener("mouseup", () => {
                isDragging = false;
                cardContainer.style.cursor = "grab";
            });

            cardContainer.addEventListener("mousemove", (event) => {
                if (!isDragging) return;
                const deltaX = event.clientX - startPosition;
                cardContainer.scrollLeft = currentScrollPosition - deltaX;
            });
        });
    </script>

    <div class="section full mb-5">
        <div class="col-12">
            <h3 class="text-center text-white">All Tickets (Price: 10$)</h3>
            <div class="row text-center mt-4">
                @forelse ($tickets as $ticket)
                    <div class="col-6 col-md-3">
                        <div class="card bg-transparent shadow border-0 mb-3 bordered">
                            <div class="card-body">
                                <div class="no-shadow border-0">
                                    <img src="{{ asset('images/' . $ticket->image) }}" alt="image" height="200px"
                                        width="200px" class="img-fluid rounded">
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal text-white">{{ $ticket->title }}</h3>
                                <p class="text-secondary text-mute small text-white">{{ $ticket->description }}</p>
                                <form action="{{ route('User.Buy.Ticket', ['id' => $ticket->id]) }}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex jusitfy-content-center align-items-center">
                                            <input type="number" style="width:50px;border:1px solid white"
                                                class="bg-transparent text-white" name="qty" min="1"
                                                value="1">
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-sm btn-danger">Buy</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>No Ticket Available</h3>
                @endforelse
                {{ $tickets->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <div class="appBottomMenu" style="background-color: black;">
        <a href="{{ route('User.Dashboard') }}" class="item active">
            <div class="col">
                <i class="fa fa-home" aria-hidden="true"
                    style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
                <strong style="color: white;">Home</strong>
            </div>
        </a>
        <a href="{{ route('User.Dashboard') }}" class="item">
            <div class="col">
                <i class="fa fa-exchange" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Transcations</strong>
            </div>
        </a>
        <a href="{{ route('User.Dashboard') }}" class="item">
            <div class="col">
                <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Tickets</strong>
            </div>
        </a>
        <a href="{{ route('User.Dashboard') }}" class="item">
            <div class="col">
                <i class="fa fa-cog" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Setting</strong>
            </div>
        </a>
        <a href="{{ route('User.Dashboard') }}" class="item">
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
        let slideIndex = [1, 1];
        let slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            let i;
            let x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {
                slideIndex[no] = 1
            }
            if (n < 1) {
                slideIndex[no] = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex[no] - 1].style.display = "block";
        }
    </script>

</body>

</html>



{{-- <body>
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

    <div class="wrapper">
        <div class="swiper-container introduction pt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide overflow-hidden text-center">
                    <div class="row no-gutters">
                        <div class="col align-self-center px-3">
                            <img src="{{ asset('asset/img/information-graphic1.png') }}" alt=""
                                class="mx-100 my-5">
                            <div class="row">
                                <div class="container mb-5">
                                    <h4>Amazing Finance Corner</h4>
                                    <p>You will manage your personal expense yourself.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide overflow-hidden text-center">
                    <div class="row no-gutters">
                        <div class="col align-self-center px-3">
                            <img src="{{ asset('{{ asset('assets/img/infomarmation-graphics2.png') }}" alt=""
                                class="mx-100 my-5">
                            <div class="row">
                                <div class="container mb-5">
                                    <h4>Cross all over the world</h4>
                                    <p>We have thousand of user working with us over many years.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide overflow-hidden text-center">
                    <div class="row no-gutters">
                        <div class="col align-self-center px-3">
                            <img src="{{ asset('asset/img/infomarmation-graphics3.png') }}" alt=""
                                class="mx-100 my-5">
                            <div class="row">
                                <div class="container mb-5">
                                    <h4>Experience ease of use</h4>
                                    <p>You have to do simple task and you will get rewarded.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="row mx-0 bottom-button-container">
            <div class="col">
                <a href="{{ route('login') }}" class="btn btn-default btn-lg btn-rounded shadow btn-block">Login</a>
            </div>
            <div class="col">
                <a href="{{ route('register') }}"
                    class="btn btn-white bg-white btn-lg btn-rounded shadow btn-block">Register</a>
            </div>
        </div>
    </div>

    <div class="modal fade " id="colorscheme" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header theme-header border-0">
                    <h6 class="">Color Picker</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <div class="text-center theme-color">
                        <button class="m-1 btn red-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="red-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn blue-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="blue-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn yellow-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="yellow-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn green-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="green-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn pink-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="pink-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn orange-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="orange-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn purple-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="purple-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn deeppurple-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="deeppurple-theme"><i
                                class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn lightblue-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="lightblue-theme"><i
                                class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn teal-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="teal-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn lime-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="lime-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn deeporange-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="deeporange-theme"><i
                                class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn gray-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="gray-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn black-theme-bg text-white btn-rounded-54 shadow-sm"
                            data-theme="black-theme"><i class="material-icons w-50">color_lens_outline</i></button>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-6 text-left">
                        <div class="row">
                            <div class="col-auto text-right align-self-center"><i
                                    class="material-icons text-warning vm">wb_sunny</i></div>
                            <div class="col-auto text-center align-self-center px-0">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="themelayout" class="custom-control-input"
                                        id="theme-dark">
                                    <label class="custom-control-label" for="theme-dark"></label>
                                </div>
                            </div>
                            <div class="col-auto text-left align-self-center"><i
                                    class="material-icons text-dark vm">brightness_2</i></div>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="row">
                            <div class="col-auto text-right align-self-center">LTR</div>
                            <div class="col-auto text-center align-self-center px-0">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="rtllayout" class="custom-control-input"
                                        id="theme-rtl">
                                    <label class="custom-control-label" for="theme-rtl"></label>
                                </div>
                            </div>
                            <div class="col-auto text-left align-self-center">RTL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-4.4.1/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.introduction', {
                pagination: {
                    el: '.swiper-pagination',
                },
            });
            setTimeout(function() {
                $('.notification').addClass('active');
                setTimeout(function() {
                    $('.notification').removeClass('active');
                }, 3500);
            }, 500);
            $('.closenotification').on('click', function() {
                $(this).closest('.notification').removeClass('active')
            });
        });
    </script>
</body> --}}
