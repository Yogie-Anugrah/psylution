<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\Channels\WhatsappChannel;

class AccountActivated extends Notification
{
    /**
     * Channels to send the notification on.
     */
    public function via($notifiable): array
    {
        return [WhatsappChannel::class, 'mail'];
    }

    /**
     * Message for WhatsApp.
     */
    public function toWhatsapp($notifiable): string
    {
        return "Your account has been activated! Welcome aboard.";
    }

    /**
     * Fallback email.
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Account Activated')
                    ->line('Your account has been activated! Welcome aboard.');
    }
}
