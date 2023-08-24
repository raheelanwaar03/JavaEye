<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('admin/social-image.png') }}" />
    <meta name="format-detection" content="telephone=no">
    <title>Admin - {{ env('APP_NAME') }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    {{-- datatable --}}

    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>
    {{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('admin/images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('admin/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('admin/images/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        <small>Good Morning</small>
                                        <span>{{ auth()->user()->name }}</span>
                                    </div>
                                    <img src="{{ asset('admin/images/profile/12.png') }}" width="20"
                                        alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                                width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ms-2">Logout </span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('Admin.Dashboard') }}">
                            <i class="flaticon-dashboard-1"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ route('Admin.User.Massages') }}">
                            <i class="flaticon-dashboard-1"></i>
                            <span class="nav-text">Massages</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-form"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.All.Users') }}">All Users</a></li>
                            <li><a href="{{ route('Admin.Approved.Users') }}">Approved Users</a></li>
                            <li><a href="{{ route('Admin.Rejected.Users') }}">Rejected Users</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-star"></i>
                            <span class="nav-text">Ticket</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Ticket') }}">Add New Ticket</a></li>
                            <li><a href="{{ route('Admin.All.Ticket') }}">All Tickets</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-money"></i>
                            <span class="nav-text">Deposit Req</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.User.Deposit.Requests') }}">New Request</a></li>
                            <li><a href="{{ route('Admin.Approved.Deposit.Requests') }}">Approved Request</a></li>
                            <li><a href="{{ route('Admin.Rejected.Deposit.Requests') }}">Rejected Request</a></li>
                        </ul>
                    </li>
                    <div class="text-center">
                        <hr style="color:white">
                    </div>
                    <li><a href="{{ route('Admin.User.Buy.Tickets') }}">
                            <i class="flaticon-star"></i>
                            <span class="nav-text">Sold Tickets</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-money"></i>
                            <span class="nav-text">Widthraw</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.User.Widthrawal') }}">New Widthraw</a></li>
                            <li><a href="{{ route('Admin.User.Approved.Widthrawals') }}">Approved Widthraw</a></li>
                            <li><a href="{{ route('Admin.User.Rejected.Widthrawals') }}">Rejected Widthraw</a></li>
                        </ul>
                    </li>
                    {{--  <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-table"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-landing-page"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="copyright">
                    <p class="fs-14 font-w200"><strong class="font-w400">{{ env('APP_NAME') }} Admin
                            Dashboard</strong> ©
                        2022 All Rights Reserved</p>
                    <p>Made with <span class="heart"></span> by {{ env('APP_NAME') }}</p>
                </div>
            </div>
        </div>
