@extends('layouts.layoutBase')

@section('content2')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <div class="card shadow-lg bg-base-100">
            <div class="card-body">
                <h2 class="card-title justify-center">{{ __('Register') }}</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-control mb-4">
                        <label for="name" class="label">
                            <span class="label-text">{{ __('Name') }}</span>
                        </label>
                        <input id="name" type="text" class="input input-bordered @error('name') input-error @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="text-error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <label for="email" class="label">
                            <span class="label-text">{{ __('Email Address') }}</span>
                        </label>
                        <input id="email" type="email" class="input input-bordered @error('email') input-error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="text-error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <label for="password" class="label">
                            <span class="label-text">{{ __('Password') }}</span>
                        </label>
                        <input id="password" type="password" class="input input-bordered @error('password') input-error @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="text-error">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-control mb-4">
                        <label for="password-confirm" class="label">
                            <span class="label-text">{{ __('Confirm Password') }}</span>
                        </label>
                        <input id="password-confirm" type="password" class="input input-bordered" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary w-full">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
