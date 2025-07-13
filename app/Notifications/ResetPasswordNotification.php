<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\Channels\WhatsappChannel;

class ResetPasswordNotification extends Notification
{
    /**
     * Link reset password yang dikirim.
     *
     * @var string
     */
    protected string $link;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $link)
    {
        $this->link = $link;
    }

    /**
     * Channels mana yang dipakai.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        // Prioritaskan WhatsApp, fallback email
        return [WhatsappChannel::class, 'mail'];
    }

    /**
     * Format pesan untuk WhatsApp.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    public function toWhatsapp($notifiable): string
    {
        return "Halo, untuk mereset password kamu, silakan klik link berikut:\n{$this->link}";
    }

    /**
     * Format email fallback.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Reset Password Notification')
                    ->line('Kamu menerima email ini karena ada permintaan reset password untuk akun kamu.')
                    ->action('Reset Password', $this->link)
                    ->line('Jika kamu tidak meminta reset, abaikan email ini.');
    }
}
