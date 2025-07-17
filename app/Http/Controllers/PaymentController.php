<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function createInvoice(Request $request)
    {
        $data = session('booking_data');

        if (!$data) {
            return redirect('/booking')->withErrors(['msg' => 'Data booking tidak ditemukan.']);
        }

        // buat external id
        $external_id = 'booking-'.Str::uuid();
        $amount      = $data['price'];

        // Kirim ke Xendit API
        $response = Http::withBasicAuth(env('XENDIT_SECRET_KEY'), '')
            ->post('https://api.xendit.co/v2/invoices', [
                'external_id'          => $external_id,
                'payer_email'          => $data['email'] ?? 'dummy@domain.com',
                'description'          => 'Pembayaran Booking Psikolog',
                'amount'               => $amount,
                'success_redirect_url' => route('payment.success'),
                'failure_redirect_url' => route('payment.failed'),
            ]);

        if ($response->successful()) {
            // simpan sementara external_id & invoice_id
            $invoice = $response->json();
            session([
                'xendit_invoice_id' => $invoice['id'],
                'xendit_external_id'=> $external_id,
            ]);
            return redirect($invoice['invoice_url']);
        }

        return redirect()->route('payment.failed')
                         ->withErrors(['msg' => 'Gagal membuat invoice.']);
    }

    public function handleSuccess(Request $request)
    {
        // ambil dari session
        $data    = session('booking_data');
        $invoice_id  = session('xendit_invoice_id');

        // fetch status terbaru dari Xendit
        $resp = Http::withBasicAuth(env('XENDIT_SECRET_KEY'), '')
            ->get("https://api.xendit.co/v2/invoices/{$invoice_id}");
        $inv  = $resp->json();

        // simpan ke DB
        $booking = Booking::create(array_merge($data, [
            'xendit_invoice_id' => $invoice_id,
            'payment_status'    => $inv['status'],        // e.g. PAID
        ]));

        // bersihkan session
        session()->forget(['booking_data','xendit_invoice_id','xendit_external_id']);

        return view('payment.success', compact('inv','booking'));
    }

    public function handleFailed(Request $request)
    {
        $data       = session('booking_data');
        $invoice_id = session('xendit_invoice_id');

        // simpan kalau ingin catat gagal
        Booking::create(array_merge($data, [
            'xendit_invoice_id' => $invoice_id,
            'payment_status'    => 'FAILED',
        ]));

        session()->forget(['booking_data','xendit_invoice_id','xendit_external_id']);

        return view('payment.failed');
    }
}
