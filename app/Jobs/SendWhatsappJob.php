<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendWhatsappJob implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    protected string $phone;
    protected string $message;

    /**
     * Create a new job instance.
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
        Http::withHeaders([
            'Authorization' => 'Bearer ' . config('starsender.api_key'),
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
        ])->post(config('starsender.base_url'), [
            'messageType' => 'text',
            'to'   => $this->phone,
            'body' => $this->message,
            'delay' => 15,
        ]);
    }
}
