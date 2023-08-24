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

</head>

<body>

    <x-alert />

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


    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full mb-3">
            <div class="row" style="padding:10px;" id="homeProducts">

                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/download.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/2-india-movie-poster-design-hindi-bjirao-mastani.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>


                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/4-india-movie-poster-design-idea-bahubali.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>


                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/desktop-wallpaper-ram-leela-official-poster-bollywood-movie-poster-thumbnail.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/desktop-wallpaper-rrr-bollywood-2022-movie-poster-thumbnail.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/desktop-wallpaper-upcoming-hindi-film-movie-posters-bollywood-2022-movie.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>


                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/f635fda7eac6e9315006ecfba15db2b6.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>



                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/ghayal-once-again-movie-poster-3.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/rocky-handsome-movie-poster0001.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>


                <div class="col-6" style="margin-top:10px;">
                    <a href="{{ route('User.Back') }}">
                        <div class="blog-card"
                            style="width:130px;height: 130px; border-radius: 10px !important;padding: 5px; background-image: url('{{ asset('assets/img/Suraj-Pe-Mangal-Bhari-movie-poster-release-date.jpg') }}');">
                            <p class="card-text" style="font-size: 11px;margin-top: 90px;"><span
                                    style="padding: 8px 10px;color: white;border-radius: 10px;background-color: blue;">0$</span><span
                                    style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <div>
                <!-- section home products end -->


            </div>
            <!-- * App Capsule -->
            <div class="appBottomMenu" style="background-color: black;">
                <a href="{{ route('User.Dashboard') }}" class="item active">
                    <div class="col">
                        <i class="fa fa-home" aria-hidden="true"
                            style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
                        <strong style="color: white;">Home</strong>
                    </div>
                </a>
                <a href="{{ route('User.Assets') }}" class="item">
                    <div class="col">
                        <i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                        <strong style="color: white;">Assest</strong>
                    </div>
                </a>
                <a href="{{ route('User.All.Tickets') }}" class="item">
                    <div class="col">
                        <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                        <strong style="color: white;">Movies</strong>
                    </div>
                </a>
                <a href="{{ route('LandingPage.Contact') }}" class="item">
                    <div class="col">
                        <i class="fa fa-comment-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                        <strong style="color: white;">Service</strong>
                    </div>
                </a>
                <a href="{{ route('User.Mine') }}" class="item">
                    <div class="col">
                        <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                        <strong style="color: white;">Mine</strong>
                    </div>
                </a>
            </div>


            <!-- ========= JS Files =========  -->
            <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
            <!-- Bootstrap -->
            <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
            <!-- Ionicons -->
            <script type="module" src="{{ asset('assets/js/ionicons.js') }}"></script>
            <!-- Splide -->
            <script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>



</body>

</html>
