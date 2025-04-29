<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    //
    public function index() {
        return(view('psikolog'));
    }

    public function form($id)
    {
        // Simulasi data psikolog, nanti bisa dari DB
        $data = [
            'id' => $id,
            'name' => 'Psikolog ' . $id,
            'category' => 'Keluarga',
            'price' => 100000,
            'available_time' => 'Senin, Rabu, Jumat',
        ];
    
        return view('booking.form', compact('data'));
    }
    
    public function submit(Request $request)
    {
        // Validasi basic dulu ya
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'birthday' => 'required|date',
            'konsultasi_type' => 'required|in:Online,Offline',
            'complaint' => 'nullable|string',
            'booking_date' => 'required|date',
            'booking_time' => 'required|string',
            'psikolog_id' => 'required',
            'psikolog_name' => 'required',
            'price' => 'required|numeric'
        ]);

        // Simpan ke session (sementara)
        session(['booking_data' => $validated]);

        // Redirect ke invoice
        return redirect('/booking/invoice');
    }
    
    public function invoice()
    {
        $data = session('booking_data');
        return view('booking.invoice', compact('data'));
    }
    
}
