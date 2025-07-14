<?php

namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class WhatsappChannel
{
    /**
     * Send the given notification via Starsender.
     */
    public function send($notifiable, Notification $notification): void
    {
        // Pastikan model User punya kolom whatsapp
        if (! $to = $notifiable->whatsapp) {
            return;
        }

        // Ambil pesan WhatsApp dari Notification
        $message = $notification->toWhatsapp($notifiable);

        // Kirim POST, letakkan API key di body alih‐alih di header
        Http::withHeaders([
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
        ])->post(config('starsender.base_url'), [
            'messageType'   => 'text',
            'to'         => $to,
            'body'       => $message,
            // Sertakan key di payload sesuai requirement Starsender
            'Authorization'       => config('starsender.api_key'),
            'delay'      => 15, // Delay 15 detik
        ]);
    }
}
