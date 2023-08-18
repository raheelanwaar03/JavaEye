@extends('layouts.app')

@section('content')
    <div class="col-sm-12 d-flex justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-title">
                    <div class="text-center">
                        <h3>
                            Personal Details
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="#" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="text-white">Name</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->name }} (these cannot be changed)" readonly>
                        </div>
                        <div class="form-group">
                            <label class="text-white">Email</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->email }} (these cannot be changed)" readonly>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 d-flex justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-title">
                    <div class="text-center">
                        <h3>
                            Password Modification
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="current_password" :value="__('Current Password')" />
                            <x-text-input id="current_password" name="current_password" type="password"
                                class="mt-1 block w-full form-control" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('New Password')" />
                            <x-text-input id="password" name="password" type="password"
                                class="mt-1 block w-full form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                class="mt-1 block w-full form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button class='btn btn-primary mt-3'>{{ __('Save') }}
                            </x-primary-button>

                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">
                                    {{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
