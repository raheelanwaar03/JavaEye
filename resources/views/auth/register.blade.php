@extends('auth.layout.app')

@section('content')
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="img" height="100px" width="100px">
        </div>
        <div class="section mb-5 p-2">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label">Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter your name">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <br>
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="Enter your email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <br>
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label">Phone</label>
                                <input type="number" class="form-control" name="phone"
                                    placeholder="Enter your phone">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <br>
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    autocomplete="off" placeholder="New Password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <br>
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password"
                                    autocomplete="off" placeholder="Confirm Password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <br>
                        <div class="form-group round">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Referral</label>
                                <input type="text" class="form-control" name="referral" value="{{ $referral }}" id="password"
                                    autocomplete="off" readonly placeholder="Invite Code">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-links mt-2">
                            <div><input type="checkbox"> Accept <span style="color: blue;">Terms and Conditions</span></a>
                            </div>
                        </div>
                        <div class="form-links mt-2">
                            <button type="submit" class="btn btn-danger btn-block btn-lg">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
