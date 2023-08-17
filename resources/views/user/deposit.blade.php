@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="subtitle text-center">Deposit Money</h1>
        <div class="row">
            <div class="col-12 px-0">
                <div class="card">
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
                                <label for="trcId">Our TRC20 Id</label>
                                <a class="btn btn-sm btn-info text-white" onclick="copy()">Click to Copy</a>
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
    </div>
@endsection
