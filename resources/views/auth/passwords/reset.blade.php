{{-- @extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Reset Your Password</h2>
                    <p style="color: #251D4C;">Enter a new password to regain access to your account.</p>
                    <p class="text-dark" style="color: #5271FF;">Back to login?</p>
                    <a href="{{ route('login') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Log In</a>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Set New Password</h3>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #251D4C;">New Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label" style="color: #251D4C;">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="d-md-none col-12">
            <div class="text-center p-4" style="background-color: #5271FF; border-radius: 12px 12px 0 0;">
                <h2 class="fw-bold text-white">Reset Your Password</h2>
                <p class="text-white">Enter a new password to regain access to your account.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Set New Password</h3>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #251D4C;">New Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}


{{-- resources/views/auth/passwords/reset.blade.php --}}
@extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Reset Your Password</h2>
                    <p style="color: #251D4C;">Enter a new password to regain access to your account.</p>
                    <p class="text-dark" style="color: #5271FF;">Back to login?</p>
                    <a href="{{ route('login') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Log In</a>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Set New Password</h3>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

                        <div class="mb-3">
                            <label for="password_desktop" class="form-label" style="color: #251D4C;">New Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password_desktop"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                                autofocus
                            >
                            @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation_desktop" class="form-label" style="color: #251D4C;">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation_desktop"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                required
                            >
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="d-md-none col-12">
            <div class="text-center p-4" style="background-color: #5271FF; border-radius: 12px 12px 0 0;">
                <h2 class="fw-bold text-white">Reset Your Password</h2>
                <p class="text-white">Enter a new password to regain access to your account.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Set New Password</h3>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email ?? old('email') }}">

                    <div class="mb-3">
                        <label for="password_mobile" class="form-label" style="color: #251D4C;">New Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password_mobile"
                            class="form-control @error('password') is-invalid @enderror"
                            required
                            autofocus
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation_mobile" class="form-label" style="color: #251D4C;">Confirm Password</label>
                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation_mobile"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            required
                        >
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">
                        Reset Password
                    </button>

                    <div class="text-center mt-3">
                        <p style="color: #251D4C;">Back to login? <a href="{{ route('login') }}" style="color: #5271FF;">Log In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
