@extends('auth.layout.app')
@section('content')
    <div class="row no-gutters login-row">
        <div class="col align-self-center px-3 text-center">
            <br>
            <img src="{{ asset('asset/img/logo-login.png') }}" alt="logo" class="logo-small">
            <form action="{{ route('login') }}" class="form-signin mt-3 ">
                <div class="form-group">
                    <input type="email" name="email" id="inputEmail" class="form-control form-control-lg text-center"
                        placeholder="Email" required autofocus>
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

    <!-- login buttons -->
    <div class="row mx-0 bottom-button-container">
        <div class="col">
            <button class="btn btn-default btn-lg btn-rounded shadow btn-block">Login</button>
        </div>
    </div>
    </form>
    <!-- login buttons -->
    </div>
@endsection
