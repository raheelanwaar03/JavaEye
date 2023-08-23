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
                <form action="{{ route('User.Store.Deposit.Money') }}" method="POST">
                    @csrf
                    <h3 class="text-center text-white">Deposit Money</h3>
                    <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Amount To Deposit:</span></p>
                    <input placeholder="Enter Amount you want to deposit" type="number" name="amount"
                        style="background: #040e2b;border:none;color:white;">
                    <hr>

                    <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Account Title:</span></p>
                    <input placeholder="Your Account Title" type="text" name="account_title"
                        style="background: #040e2b;border:none;color:white;">
                    <hr>

                    <p class="card-text" style="margin-top:-10px;"><span style="color: white;">Your Trc20 Id:</span></p>
                    <input placeholder="Your Trc20 Id" type="text" name="trcId"
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
                    <input type="file" name="file" required style="background: #040e2b;border:none;color:white;">
                    <hr>
            </div>
        </div>

        <center>
            <div style="padding: 10px;">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </center>
        </form>
    </div>
@endsection
