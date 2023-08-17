@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection
