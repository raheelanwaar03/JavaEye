@extends('auth.layout.app')
@section('content')
    <div id="appCapsule">
        <div class="section mt-2 text-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="img" height="100px" width="100px">
        </div>
        <div class="section mb-5 p-2">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter your email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <br>
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input type="password" class="form-control" name="password" autocomplete="on"
                                    placeholder="Enter your password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-links mt-2">
                            <button type="submit" class="btn btn-danger btn-block btn-lg">Login</button>
                        </div>
            </form>
            <div class="form-links mt-2">
                <div><a href="{{ route('register') }}" style="color: blue;">Don't have an account? Sign
                        Up</a></div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
