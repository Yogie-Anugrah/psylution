@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h3 class="mb-4 fw-bold">Invoice Booking</h3>

    @php $data = session('booking_data'); @endphp

    @if($data)
    <div class="card p-4">
        <h5 class="fw-bold mb-3 text-primary">Data Klien</h5>
        <div class="row mb-3">
            <div class="col-md-6">
                <p><strong>Nama:</strong> {{ $data['name'] }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($data['birthday'])->format('d M Y') }}</p>
                <p><strong>Jenis Konsultasi:</strong> {{ $data['konsultasi_type'] }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Keluhan:</strong> {{ $data['complaint'] ?? '-' }}</p>
                <p><strong>Jadwal:</strong> {{ \Carbon\Carbon::parse($data['booking_date'])->translatedFormat('l, d M Y') }} pukul {{ $data['booking_time'] }}</p>
            </div>
        </div>

        <hr>

        <h5 class="fw-bold mb-3 text-primary">Data Psikolog</h5>
        <div class="row mb-3">
            <div class="col-md-6">
                <p><strong>Nama Psikolog:</strong> {{ $data['psikolog_name'] }}</p>
                <p><strong>Harga:</strong> Rp{{ number_format($data['price'], 0, ',', '.') }}</p>
            </div>
        </div>

        <form action="{{ route('payment.create') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Bayar Sekarang</button>
        </form>        
    </div>
    @else
        <div class="alert alert-danger">Data booking tidak ditemukan.</div>
    @endif
</div>
@endsection
