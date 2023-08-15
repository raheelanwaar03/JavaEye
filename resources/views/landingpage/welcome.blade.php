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
    <!-- Loader ends -->


    <div class="wrapper">
        <!-- Swiper intro -->
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
                            <img src="{{ asset('assets/img/infomarmation-graphics2.png') }}" alt=""
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
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper intro ends -->

        <!-- login buttons -->
        <div class="row mx-0 bottom-button-container">
            <div class="col">
                <a href="{{ route('login') }}" class="btn btn-default btn-lg btn-rounded shadow btn-block">Login</a>
            </div>
            <div class="col">
                <a href="{{ route('register') }}"
                    class="btn btn-white bg-white btn-lg btn-rounded shadow btn-block">Register</a>
            </div>
        </div>
        <!-- login buttons -->
    </div>



    <!-- color chooser menu start -->
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
    <!-- color chooser menu ends -->

    <!-- jquery, popper and bootstrap js -->
    <script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-4.4.1/bootstrap.min.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('asset/vendor/swiper/js/swiper.min.js') }}"></script>

    <!-- cookie js -->
    <script src="{{ asset('asset/vendor/cookie/jquery.cookie.js') }}"></script>

    <!-- template custom js -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <!-- page level script -->
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper('.introduction', {
                pagination: {
                    el: '.swiper-pagination',
                },
            });

            /* notification view and hide */
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
</body>

</html>
