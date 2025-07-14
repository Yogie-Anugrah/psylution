{{-- @extends('layouts.login-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Desktop View -->
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Join Us</h2>
                    <p style="color: #251D4C;">Create an account to access all features and manage your business effortlessly.</p>
                    <p class="text-dark" style="color: #5271FF;">Already have an account?</p>
                    <a href="{{ route('login') }}" class="btn" style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">Log In</a>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Sign Up</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label" style="color: #251D4C;">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #251D4C;">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label" style="color: #251D4C;">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Sign Up</button>
                    </form>
                    <div class="text-center mt-3">
                        <p style="color: #251D4C;">Or, sign up using social media</p>
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
                <h2 class="fw-bold text-white">Join Us</h2>
                <p class="text-white">Create an account to access all features and manage your business effortlessly.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Sign Up</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #251D4C;">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #251D4C;">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label" style="color: #251D4C;">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #5271FF; color: white; border-radius: 8px;">Sign Up</button>
                </form>
                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Or, sign up using social media</p>
                    <div class="d-flex justify-content-center">
                        <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                        <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                        <div class="bg-light rounded-circle mx-2" style="width: 40px; height: 40px; background-color: #B7C1F1;"></div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Already have an account?</p>
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
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        {{-- Desktop View --}}
        <div class="d-none d-md-flex col-md-8">
            <div class="row w-100 shadow rounded" style="overflow: hidden; border-radius: 12px;">
                {{-- Left Panel --}}
                <div class="col-md-6 text-white p-5" style="background-color: #CADFFE; border-radius: 12px 0 0 12px;">
                    <h2 class="fw-bold" style="color: #251D4C;">Join Us</h2>
                    <p style="color: #251D4C;">Create an account to access all features and manage your business effortlessly.</p>
                    <p class="text-dark" style="color: #5271FF;">Already have an account?</p>
                    <a href="{{ route('login') }}"
                       class="btn"
                       style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">
                        Log In
                    </a>
                </div>

                {{-- Right Panel --}}
                <div class="col-md-6 bg-white p-5">
                    <h3 class="fw-bold text-center" style="color: #251D4C;">Sign Up</h3>

                    {{-- Google --}}
                    <div class="d-grid mb-3">
                        <a href="{{ route('register.google') }}"
                           class="btn btn-outline-dark">
                            <i class="bi bi-google"></i> Sign up with Google
                        </a>
                    </div>
                    <p class="text-center" style="color:#999;">— or register manually —</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Full Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label" style="color: #251D4C;">Full Name</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $name ?? '') }}"
                                required
                                autofocus
                            >
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #251D4C;">Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $email ?? '') }}"
                                required
                            >
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Residence --}}
                        <div class="mb-3">
                            <label for="residence" class="form-label" style="color: #251D4C;">Residence</label>
                            <input
                                type="text"
                                name="residence"
                                id="residence"
                                class="form-control @error('residence') is-invalid @enderror"
                                value="{{ old('residence') }}"
                                required
                            >
                            @error('residence')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- WhatsApp --}}
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label" style="color: #251D4C;">WhatsApp Number</label>
                            <input
                                type="tel"
                                name="whatsapp"
                                id="whatsapp"
                                class="form-control @error('whatsapp') is-invalid @enderror"
                                value="{{ old('whatsapp') }}"
                                placeholder="0812xxxxxxx"
                                required
                            >
                            @error('whatsapp')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Password --}}
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
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label" style="color: #251D4C;">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                class="form-control"
                                required
                            >
                        </div>

                        {{-- Informed Consent --}}
                        <div class="mb-3 form-check">
                            <input
                                type="checkbox"
                                class="form-check-input @error('consent') is-invalid @enderror"
                                id="consent"
                                name="consent"
                                {{ old('consent') ? 'checked' : '' }}
                                required
                            >
                            <label class="form-check-label" for="consent" style="color: #251D4C;">
                                I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#consentModal">Informed Consent</a>
                            </label>
                            @error('consent')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                                class="btn w-100"
                                style="background-color: #5271FF; color: white; border-radius: 8px;">
                            Sign Up
                        </button>
                    </form>

                    {{-- Social Media Placeholder --}}
                    <div class="text-center mt-3">
                        <p style="color: #251D4C;">Or, sign up using social media</p>
                        <div class="d-flex justify-content-center">
                            <div class="bg-light rounded-circle mx-2" style="width:40px;height:40px;"></div>
                            <div class="bg-light rounded-circle mx-2" style="width:40px;height:40px;"></div>
                            <div class="bg-light rounded-circle mx-2" style="width:40px;height:40px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mobile View --}}
        <div class="d-md-none col-12">
            <div class="text-center p-4" style="background-color: #5271FF; border-radius: 12px 12px 0 0;">
                <h2 class="fw-bold text-white">Join Us</h2>
                <p class="text-white">Create an account to access all features and manage your business effortlessly.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-bottom">
                <h3 class="fw-bold text-center" style="color: #251D4C;">Sign Up</h3>
                <div class="d-grid mb-3">
                    <a href="{{ route('register.google') }}"
                       class="btn btn-outline-dark">
                        <i class="bi bi-google"></i> Sign up with Google
                    </a>
                </div>
                <p class="text-center" style="color:#999;">— or register manually —</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name_mobile" class="form-label" style="color: #251D4C;">Full Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name_mobile"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $name ?? '') }}"
                            required
                            autofocus
                        >
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email_mobile" class="form-label" style="color: #251D4C;">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email_mobile"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $email ?? '') }}"
                            required
                        >
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="residence_mobile" class="form-label" style="color: #251D4C;">Residence</label>
                        <input
                            type="text"
                            name="residence"
                            id="residence_mobile"
                            class="form-control @error('residence') is-invalid @enderror"
                            value="{{ old('residence') }}"
                            required
                        >
                        @error('residence')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="whatsapp_mobile" class="form-label" style="color: #251D4C;">WhatsApp Number</label>
                        <input
                            type="tel"
                            name="whatsapp"
                            id="whatsapp_mobile"
                            class="form-control @error('whatsapp') is-invalid @enderror"
                            value="{{ old('whatsapp') }}"
                            placeholder="0812xxxxxxx"
                            required
                        >
                        @error('whatsapp')
                            <span class="invalid-feedback">{{ $message }}</span>
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
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation_mobile" class="form-label" style="color: #251D4C;">Confirm Password</label>
                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation_mobile"
                            class="form-control"
                            required
                        >
                    </div>

                    <div class="mb-3 form-check">
                        <input
                            type="checkbox"
                            class="form-check-input @error('consent') is-invalid @enderror"
                            id="consent_mobile"
                            name="consent"
                            {{ old('consent') ? 'checked' : '' }}
                            required
                        >
                        <label class="form-check-label" for="consent_mobile" style="color: #251D4C;">
                            I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#consentModal">Informed Consent</a>
                        </label>
                        @error('consent')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                            class="btn w-100"
                            style="background-color: #5271FF; color: white; border-radius: 8px;">
                        Sign Up
                    </button>
                </form>

                <div class="text-center mt-3">
                    <p style="color: #251D4C;">Already have an account?</p>
                    <a href="{{ route('login') }}"
                       class="btn"
                       style="border: 2px solid #5271FF; color: #5271FF; border-radius: 20px;">
                        Log In
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Informed Consent Modal --}}
<div class="modal fade" id="consentModal" tabindex="-1" aria-labelledby="consentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="consentModalLabel">Informed Consent Psylution</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" style="max-height:400px;overflow-y:auto;">
        <ol>
          <li>Klien adalah individu, kelompok atau organisasi yang menerima layanan Psikologi.</li>
          <li>Psikolog terlatih dan tersertifikasi sesuai standar pemerintah.</li>
          <li>Konseling dapat tatap muka atau jarak jauh untuk membantu memahami dan mengatasi masalah mental.</li>
          <li>Durasi, jenis terapi, dan pendekatan disesuaikan dengan kebutuhan klien.</li>
          <li>Klien wajib memberikan informasi sebenar-benarnya untuk kelancaran proses.</li>
          <li>Identitas dan informasi klien dirahasiakan kecuali untuk diskusi profesional.</li>
          <li>Psylution tidak bertanggung jawab atas keputusan klien di luar sesi konseling.</li>
          <li>Perubahan jadwal maksimal 4 jam sebelum sesi, maksimal 2 kali.</li>
          <li>Pembatalan atau tidak hadir dianggap melakukan sesi tanpa pengembalian biaya.</li>
          <li>Klien setuju pencatatan lisan dan tulisan selama sesi.</li>
          <li>Biaya tambahan dikenakan jika sesi melewati 10 menit.</li>
          <li>Psikolog berhak melaporkan jika ada bahaya pada klien atau orang lain.</li>
          <li>Layanan dapat dialihkan ke profesional lain dengan persetujuan bersama.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
