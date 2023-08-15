@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- page content here -->
        <h6 class="subtitle">Team Member</h6>
        <div class="row">
            <div class="col-12 px-0">
                <ul class="list-group list-group-flush border-top border-bottom">
                    @forelse ($users as $user)
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 no-shadow border-0">
                                    <img src="{{ asset('asset/img/user3.png') }}" alt="avatar">
                                </div>
                            </div>
                            <div class="col align-self-center pr-0">
                                <h6 class="font-weight-normal mb-1">{{ $user->name }}</h6>
                                <p class="text-mute small text-secondary">{{ $user->created_at }}</p>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-success">${{ $user->balance }}</h6>
                            </div>
                        </div>
                    </li>
                    @empty
                        <h3>You have not any team member</h3>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
