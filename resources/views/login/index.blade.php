@extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100">
                <div class="col-md-6 bg-primary text-white p-5 rounded-start">
                    <h2 class="fw-bold">Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod.</p>
                    <p class="text-light">Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn btn-outline-light">Sign Up</a>
                </div>
                <div class="col-md-6 bg-white p-5 rounded-end shadow">
                    <h3 class="fw-bold text-dark text-center">Log In</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Keep me logged in</label>
                            </div>
                            <a href="#" class="text-primary">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Log In</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Or, use social media to sign in</p>
                        <div class="d-flex justify-content-center">
                            <div class="bg-light rounded-circle p-3 mx-2"></div>
                            <div class="bg-light rounded-circle p-3 mx-2"></div>
                            <div class="bg-light rounded-circle p-3 mx-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="d-md-none col-12">
            <div class="bg-primary text-white text-center p-4">
                <h2 class="fw-bold">Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula.</p>
            </div>
            <div class="bg-white p-4 shadow">
                <h3 class="fw-bold text-dark text-center">Log In</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Keep me logged in</label>
                        </div>
                        <a href="#" class="text-primary">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Log In</button>
                </form>
                <div class="text-center mt-3">
                    <p>Or, use social media to sign in</p>
                    <div class="d-flex justify-content-center">
                        <div class="bg-light rounded-circle p-3 mx-2"></div>
                        <div class="bg-light rounded-circle p-3 mx-2"></div>
                        <div class="bg-light rounded-circle p-3 mx-2"></div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
