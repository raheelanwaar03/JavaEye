@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- page content here -->
        <div class="row">
            <h3 class="subtitle text-center">transcations History</h3>
            <div class="col-12 px-0">
                <ul class="list-group list-group-flush border-top border-bottom">
                    @foreach ($transcations as $item)
                        
                    @endforeach
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 no-shadow border-0">
                                    <img src="{{ asset('asset/img/user3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col align-self-center pr-0">
                                <h6 class="font-weight-normal mb-1">{{ $item->user_name }}</h6>
                                <p class="text-mute small text-secondary">{{ $item->created_at }}</p>
                            </div>
                            <div class="col-auto">
                                <span class="badge badge-primary">{{ $item->status }}</span>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-success">${{ $item->amount  }}</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- page content ends -->
    </div>
@endsection
