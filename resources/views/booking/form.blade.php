@extends('layouts.app')

@section('content')
<div class="container my-5">
    <form action="{{ url('/booking/submit') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Kolom Kiri: Profil Psikolog -->
            <div class="col-md-4 mb-4">
                <div class="card text-center p-4">
                    <div class="mx-auto rounded-circle bg-light" style="width: 120px; height: 120px;"></div>
                    <h5 class="fw-bold mt-3">{{ $data['name'] ?? 'Nama Psikolog' }}</h5>
                    <span class="badge bg-secondary mb-2">{{ $data['category'] ?? 'Kategori' }}</span>
                    <div class="d-flex flex-wrap justify-content-center gap-1">
                        <span class="badge bg-light text-dark">Depresi</span>
                        <span class="badge bg-light text-dark">Stres</span>
                        <span class="badge bg-light text-dark">Overthinking</span>
                    </div>
                    <div class="mt-2">
                        <span class="badge bg-primary">5 Tahun Pengalaman</span>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Form Booking -->
            <div class="col-md-8">
                <div class="card p-4">
                    <h4 class="fw-bold mb-4">Booking Info</h4>

                    <!-- Hidden input -->
                    <input type="hidden" name="psikolog_id" value="{{ $data['id'] ?? 1 }}">
                    <input type="hidden" name="psikolog_name" value="{{ $data['name'] ?? 'Psikolog A' }}">
                    <input type="hidden" name="price" value="{{ $data['price'] ?? 100000 }}">

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Konsultasi</label><br>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="konsultasi_type" id="offline" value="Offline" checked>
                            <label class="btn btn-outline-primary" for="offline">Offline</label>

                            <input type="radio" class="btn-check" name="konsultasi_type" id="online" value="Online">
                            <label class="btn btn-outline-primary" for="online">Online</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keluhan</label>
                        <textarea class="form-control" name="complaint" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pilih Tanggal</label>
                        <input type="date" class="form-control" name="booking_date" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pilih Jam</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach(['09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00'] as $i => $time)
                                <input type="radio" class="btn-check" name="booking_time" id="time-{{ $i }}" value="{{ $time }}" required>
                                <label class="btn btn-outline-primary" for="time-{{ $i }}">{{ $time }}</label>
                            @endforeach
                        </div>
                    </div>                    

                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary">Confirm Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
