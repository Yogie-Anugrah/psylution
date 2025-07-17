<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendWhatsappJob implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    protected string $phone;
    protected string $message;

    /**
     * Create a new job instance.
     *
     * @param string $phone   Nomor tujuan, e.g. "081299111297"
     * @param string $message Isi pesan
     */
    public function __construct(string $phone, string $message)
    {
        $this->phone   = $phone;
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $response = Http::withHeaders([
            'Authorization' => config('starsender.api_key'),
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
        ])->post(config('starsender.base_url'), [
            'messageType' => 'text',
            'to'          => $this->phone,
            'body'        => $this->message,
            'delay'       => 5,
        ]);

        if (! $response->successful()) {
            Log::error('SendWhatsappJob failed', [
                'phone'   => $this->phone,
                'payload' => [
                    'messageType'=> 'text',
                    'to'         => $this->phone,
                    'body'       => $this->message,
                    'delay'      => 5,
                ],
                'status'  => $response->status(),
                'body'    => $response->body(),
            ]);
        } else {
            Log::info('SendWhatsappJob success', [
                'phone' => $this->phone,
                'status'=> $response->status(),
            ]);
        }
    }
}
