@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $user->email }}</h4>
                            <h4 class="card-title">${{ $user->balance }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Reward',['id'=>$user->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="balance">Balance</label>
                                    <input type="text" name="balance" class="form-control" value="{{ $user->balance }}" >
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="referral">Referral</label>
                                    <input type="text" name="referral" class="form-control" value="{{ $user->referral }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <input type="text" name="level" class="form-control" value="{{ $user->level }}" readonly>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
