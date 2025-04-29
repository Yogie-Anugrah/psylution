<?php

namespace App\Http\Controllers;

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

        $external_id = 'booking-' . Str::uuid();
        $amount = $data['price'];

        // Kirim ke Xendit API
        $response = Http::withBasicAuth(env('XENDIT_SECRET_KEY'), '')
            ->post('https://api.xendit.co/v2/invoices', [
                'external_id' => $external_id,
                'payer_email' => 'dummy@email.com', // ganti kalau kamu udah punya email user
                'description' => 'Pembayaran Booking Psikolog',
                'amount' => $amount,
                'success_redirect_url' => url('/payment/success'),
                'failure_redirect_url' => url('/payment/failed'),
            ]);

        if ($response->successful()) {
            $invoice = $response->json();
            return redirect($invoice['invoice_url']); // redirect ke halaman pembayaran Xendit
        } else {
            return redirect('/payment/failed')->withErrors(['msg' => 'Gagal membuat invoice']);
        }
    }
}
