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
@endsection
