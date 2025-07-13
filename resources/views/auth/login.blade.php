{{-- @extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Lorem Ipsum</h2>
                    <p style="color: #251D4C;">Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod.</p>
                    <p class="text-dark" style="color: #5271FF;">Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Sign Up</a>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Log In</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #251D4C;">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember" style="color: #251D4C;">Keep me logged in</label>
                            </div>
                            <a href="{{ route('password.request')}}" style="color: #5271FF;">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Log In</button>
                    </form>
                    <div class="text-center mt-3">
                        <p style="color: #251D4C;">Or, use social media to sign in</p>
                        <div class="d-flex justify-content-center">
                            <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                            <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                            <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="d-md-none col-12">
            <div class="text-center p-4" style="background-color: #5271FF; border-radius: 12px 12px 0 0;">
                <h2 class="fw-bold text-white">Lorem Ipsum</h2>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Log In</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #251D4C;">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember" style="color: #251D4C;">Keep me logged in</label>
                        </div>
                        <a href="#" style="color: #5271FF;">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Log In</button>
                </form>
                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Or, use social media to sign in</p>
                    <div class="d-flex justify-content-center">
                        <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                        <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                        <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Lorem Ipsum</h2>
                    <p style="color: #251D4C;">Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod.</p>
                    <p class="text-dark" style="color: #5271FF;">Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Sign Up</a>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Log In</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="login" class="form-label" style="color: #251D4C;">Email atau WhatsApp</label>
                            <input
                                type="text"
                                name="login"
                                id="login"
                                class="form-control @error('login') is-invalid @enderror"
                                value="{{ old('login') }}"
                                placeholder="you@example.com / 0812xxxxxxx"
                                required
                                autofocus
                            >
                            @error('login')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #251D4C;">Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            >
                            @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    class="form-check-input"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}
                                >
                                <label class="form-check-label" for="remember" style="color: #251D4C;">
                                    Keep me logged in
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" style="color: #5271FF;">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">
                            Log In
                        </button>
                    </form>

                    {{-- Social Login --}}
                    <div class="text-center mt-4">
                        <p style="color: #251D4C;">Or, sign in with</p>
                        <a href="{{ route('login.google') }}" class="btn btn-outline-dark w-100 mb-2">
                            {{-- jika Anda menggunakan Bootstrap Icons --}}
                            <i class="bi bi-google me-2"></i>Sign in with Google
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="d-md-none col-12">
            <div class="text-center p-4" style="background-color: #5271FF; border-radius: 12px 12px 0 0;">
                <h2 class="fw-bold text-white">Lorem Ipsum</h2>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Log In</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="login_mobile" class="form-label" style="color: #251D4C;">Email atau WhatsApp</label>
                        <input
                            type="text"
                            name="login"
                            id="login_mobile"
                            class="form-control @error('login') is-invalid @enderror"
                            value="{{ old('login') }}"
                            placeholder="you@example.com / 0812xxxxxxx"
                            required
                            autofocus
                        >
                        @error('login')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_mobile" class="form-label" style="color: #251D4C;">Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password_mobile"
                            class="form-control @error('password') is-invalid @enderror"
                            required
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input
                                type="checkbox"
                                name="remember"
                                class="form-check-input"
                                id="remember_mobile" {{ old('remember') ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="remember_mobile" style="color: #251D4C;">
                                Keep me logged in
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}" style="color: #5271FF;">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">
                        Log In
                    </button>
                </form>

                {{-- Social Login --}}
                <div class="text-center mt-4">
                    <p style="color: #251D4C;">Or, sign in with</p>
                    <a href="{{ route('login.google') }}" class="btn btn-outline-dark w-100 mb-2">
                        <i class="bi bi-google me-2"></i>Sign in with Google
                    </a>
                </div>

                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
