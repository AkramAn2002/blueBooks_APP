@extends('layouts.layoutBase')
@section("content2")

    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md">
            <div class="card shadow-lg bg-base-100">
                <div class="card-body">
                    <h2 class="card-title text-center justify-center">{{ __('Login') }}</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-control mb-4">
                            <label for="email" class="label">
                                <span class="label-text">{{ __('Email Address') }}</span>
                            </label>
                            <input id="email" type="email" class="input input-bordered @error('email') input-error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <input id="password" type="password" class="input input-bordered @error('password') input-error @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="text-error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-control mb-4">
                            <label class="cursor-pointer label">
                                <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="label-text">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="form-control mt-6">
                            <button type="submit" class="btn btn-primary w-full">
                                {{ __('Login') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="form-control mt-4 text-center">
                                <a class="link link-primary" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

