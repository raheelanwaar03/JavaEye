@extends('layouts.app')

@section('content')
    <div id="appCapsule">

        <center>
            <div class="blog-card mb-3" style="border-radius: 10px !important;padding: 5px;width: 200px;height:70px;">
                <p class="card-text" style="font-size: 11px;color: rgb(64, 64, 151);">{{ auth()->user()->balance }}</p>
                <p class="card-text" style="margin-top: -20px; font-size: 11px; color: black !important;">Current balance</p>
            </div>
        </center>
        <div class="col-12">
            <div style="border: 1px solid black; border-radius: 5px !important;padding: 15px;">
                <h3 class="text-center text-white">Widthraw Balance</h3>
                <p class="card-text" style="margin-top:-10px;"><span style="color: white;">WalletAddress:</span></p>
                <input placeholder="Enter Your TRC20 Id" type="text" name="trc_id"
                    style="background: #040e2b;border:none;color:white;">
                <hr>

                <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Account Title:</span></p>
                <input placeholder="Your Account Title" type="text" name="account_title"
                    style="background: #040e2b;border:none;color:white;">
                <hr>

                <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Withdrawal Amount:</span></p>
                <input placeholder="Enter Amount You Want to Widthraw" name="amount" type="number"
                    style="background: #040e2b;border:none;color:white;">
                <hr>

            </div>
        </div>

        <center>
            <div style="padding: 10px;">
                <button type="submit" class="btn btn-danger">Confirm Withdrawal</button>
            </div>
        </center>

    </div>
@endsection

{{-- <div class="container">
    <div class="row">
        <h1 class="subtitle text-center">Widthraw Balance</h1>
        <div class="col-12 px-0">
            <div class="card py-4">
                <div class="card-body">
                    <h4 class="text-center">Your account balance: (${{ auth()->user()->balance }})</h4>
                    <form action="{{ route('User.Store.Widthraw.Balance') }}" method="POST">
                        @csrf
                        <div class="form-group float-label">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control"
                                placeholder="Enter Amount you want to deposit" required>
                        </div>
                        <div class="form-group float-label">
                            <label for="account_title">Account Title</label>
                            <input type="text" name="account_title" class="form-control"
                                placeholder="Enter your Account Title" required>
                        </div>
                        <div class="form-group float-label">
                            <label for="trcId">Your TRC20 Id</label>
                            <input type="text" name="trc_id" class="form-control" required>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
