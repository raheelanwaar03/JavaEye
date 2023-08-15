@extends('auth.layout.app')
@section('content')
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="{{ route('LandingPage') }}" class="btn  btn-link text-dark"><i
                            class="material-icons">chevron_left</i></a>
                </div>
                <div class="col text-center"></div>
                <div class="col-auto">
                </div>
            </div>
        </div>
        <div class="row no-gutters login-row">
            <div class="col align-self-center px-3 text-center">
                <br>
                <img src="{{ asset('asset/img/logo.JPG') }}" alt="logo" class="logo-small">
                <form action="{{ route('login') }}" method="POST" class="form-signin mt-3 ">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" id="inputEmail"
                            class="form-control form-control-lg text-center" placeholder="email" required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="inputPassword"
                            class="form-control form-control-lg text-center" placeholder="Password" required>
                    </div>

                    <div class="form-group my-4 text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme">Remember Me</label>
                        </div>
                    </div>

                    <a href="#" class="mt-4 d-block">Forgot Password?</a>
            </div>
        </div>
        <div class="row mx-0 bottom-button-container">
            <div class="col">
                <button type="submit" class="btn btn-default btn-lg btn-rounded shadow btn-block">Login</button>
            </div>
        </div>
        </form>
    </div>
@endsection
