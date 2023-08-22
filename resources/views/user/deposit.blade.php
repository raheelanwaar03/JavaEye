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
            <h3 class="text-center text-white">Deposit Money</h3>
            <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Amount To Deposit:</span></p>
            <input placeholder="Enter Your TRC20 Id" type="number" name="amount"
                style="background: #040e2b;border:none;color:white;">
            <hr>

            <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Account Title:</span></p>
            <input placeholder="Your Account Title" type="text" name="account_title"
                style="background: #040e2b;border:none;color:white;">
            <hr>

            <div class="d-flex justify-content-between align-items-center">
                <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Our Trc20 Id:</span></p>
                <a class="btn btn-sm btn-danger ml-3 text-white" onclick="copy()">Click to Copy</a>
            </div>
            <input id="myInput" value="TYjaBbDLPakArN7pUAptMG1KdqAQGjUCQg" readonly
                style="background: #040e2b;border:none;color:white;">
            <hr>

             <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Screen Shot:</span></p>
            <input type="file" name="file" required
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
    {{-- <div class="container">
        <h1 class="subtitle text-center">Deposit Money</h1>
        <div class="row">
            <div class="col-12 px-0">
                <div class="card py-4">
                    <div class="card-body">
                        <form action="{{ route('User.Store.Deposit.Money') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group float-label">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" placeholder="Enter Amount you want to deposit" required>
                            </div>
                            <div class="form-group float-label">
                                <label for="account_title">Account Title</label>
                                <input type="text" name="account_title" class="form-control" placeholder="Enter your Account Title" required>
                            </div>
                            <div class="form-group float-label">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <label for="trcId">Our TRC20 Id</label>
                                    <a class="btn btn-sm btn-info ml-3 text-white" onclick="copy()">Click to Copy</a>
                                </div>
                                <input type="text" name="trcId" class="form-control" id="myInput" value="TYjaBbDLPakArN7pUAptMG1KdqAQGjUCQg" readonly>
                            </div>
                            <div class="form-group">
                                <label for="file">Upload File</label>
                                <input type="file" name="screen_shot" class="form-control" required>
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
@endsection
