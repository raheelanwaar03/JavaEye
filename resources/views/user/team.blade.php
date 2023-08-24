@extends('layouts.app')

@section('content')
    <div id="appCapsule">
        <h3 class="text-center text-white">Team Level Working</h3>

        <div class="col-12" style="margin-top:2px;">

            <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">
                <img src="{{ asset('assets/photo.jpeg') }}" alt="photo" class="img-fluid">
            </div>

            <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">
                <img src="{{ asset('assets/photo1.jpeg') }}" alt="photo" class="img-fluid">
            </div>

        </div>

    </div>


    <div id="appCapsule">
        <h3 class="text-center text-white">Team Members</h3>
        @foreach ($users as $user)
            <div class="col-12" style="margin-top:2px;">
                <div class="blog-card" style="border-radius: 5px !important;padding: 5px;">

                    <p class="card-text" style="font-size: 11px; color: black !important;">{{ $user->user_name }}<span
                            style="float: right;">{{ $user->status }}</span></p>

                    <p class="card-text" style="margin-top:-20px;font-size: 11px;color: rgb(64, 64, 151);">
                        {{ $user->balance }}$
                        <span
                            style="float: right;color: rgb(64, 64, 151);margin-right: -60px;">{{ $user->created_at }}</span>
                    </p>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
