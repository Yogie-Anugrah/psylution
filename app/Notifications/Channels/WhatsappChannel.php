<?php

namespace App\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class WhatsappChannel
{
    /**
     * Send the given notification.
     */
    public function send($notifiable, Notification $notification): void
    {
        // Pastikan model User punya kolom whatsapp
        if (! $to = $notifiable->whatsapp) {
            return;
        }

        // Notification harus menyediakan toWhatsapp()
        $message = $notification->toWhatsapp($notifiable);

        Http::withHeaders([
            'Authorization' => 'Bearer ' . config('starsender.api_key'),
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
        ])->post(config('starsender.base_url'), [
            'phone'   => $to,
            'message' => $message,
        ]);
    }
}
