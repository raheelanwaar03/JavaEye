@extends('layouts.app')

@section('content')
    <div id="appCapsule">
        <h3 class="text-center text-white">Transcation Details</h3>
        @foreach ($transcations as $item)
            <div class="col-12" style="margin-top:2px;">
                <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">

                    <p class="card-text" style="font-size: 11px; color: black !important;">{{ $item->user_name }}<span
                            style="float: right;">{{ $item->status }}</span></p>

                    <p class="card-text" style="margin-top:-20px;font-size: 11px;color: rgb(64, 64, 151);">
                        {{ $item->amount }}$
                        <span
                            style="float: right;color: rgb(64, 64, 151);margin-right: -60px;">{{ $item->created_at }}</span>
                    </p>

                </div>
            </div>
            <hr>
        @endforeach
    </div>
    {{-- <div class="container">
        <!-- page content here -->
        <div class="row">
            <h3 class="subtitle text-center">transcations History</h3>
            <div class="col-12 px-0">
                <ul class="list-group list-group-flush border-top border-bottom">
                    @foreach ($transcations as $item)
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 no-shadow border-0">
                                    <img src="{{ asset('asset/img/user3.png') }}" >
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
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- page content ends -->
    </div> --}}
@endsection
