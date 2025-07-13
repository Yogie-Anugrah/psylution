{{-- @extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Forgot Password?</h2>
                    <p style="color: #251D4C;">Enter your email, and we will send you a link to reset your password.</p>
                    <p class="text-dark" style="color: #5271FF;">Remembered your password?</p>
                    <a href="{{ route('login') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Log In</a>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Reset Password</h3>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Send Reset Link</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="d-md-none col-12">
            <div class="text-center p-4" style="background-color: #5271FF; border-radius: 12px 12px 0 0;">
                <h2 class="fw-bold text-white">Forgot Password?</h2>
                <p class="text-white">Enter your email, and we will send you a link to reset your password.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Reset Password</h3>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Send Reset Link</button>
                </form>
                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Remembered your password?</p>
                    <a href="{{ route('login') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.login-layout')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center" style="min-height:100vh;">
    <!-- Desktop View -->
    <div class="d-none d-md-flex col-md-8">
      <div class="row w-100 shadow rounded" style="overflow:hidden; border-radius:12px;">
        <div class="col-md-6 text-white p-5"
             style="background-color:#CADFFE; border-radius:12px 0 0 12px;">
          <h2 class="fw-bold" style="color:#251D4C;">Reset Password</h2>
          <p style="color:#251D4C;">
            Masukkan Email atau WhatsApp untuk menerima link reset password.
          </p>
          <p class="text-dark" style="color:#5271FF;">
            Ingat password? <a href="{{ route('login') }}" style="color:#5271FF;">Log In</a>
          </p>
        </div>
        <div class="col-md-6 bg-white p-5">
          <h3 class="fw-bold text-center" style="color:#251D4C;">Forgot Password</h3>

          @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
              <label for="login" class="form-label" style="color:#251D4C;">
                Email atau WhatsApp
              </label>
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
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <button type="submit"
                    class="btn w-100"
                    style="background-color:#5271FF; color:#fff; border-radius:8px;">
              Kirim Link Reset
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Mobile View -->
    <div class="d-md-none col-12">
      <div class="text-center p-4"
           style="background-color:#5271FF; border-radius:12px 12px 0 0;">
        <h2 class="fw-bold text-white">Reset Password</h2>
        <p class="text-white">Masukkan Email atau WhatsApp kamu.</p>
      </div>
      <div class="bg-white p-4 shadow rounded-bottom">
        @if(session('status'))
          <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <h3 class="fw-bold text-center" style="color:#251D4C;">Forgot Password</h3>
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="mb-3">
            <label for="login_mobile" class="form-label" style="color:#251D4C;">
              Email atau WhatsApp
            </label>
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
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <button type="submit"
                  class="btn w-100"
                  style="background-color:#5271FF; color:#fff; border-radius:8px;">
            Kirim Link Reset
          </button>
        </form>
        <div class="text-center mt-3">
          <p style="color:#251D4C;">
            Ingat password? <a href="{{ route('login') }}" style="color:#5271FF;">Log In</a>
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
