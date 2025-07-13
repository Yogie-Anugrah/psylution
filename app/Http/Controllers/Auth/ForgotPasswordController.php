<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Jobs\SendWhatsappJob;
use App\Notifications\ResetPasswordNotification;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show form to request reset link.
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Handle sending reset link via WhatsApp (Starsender) or fallback to email.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
        ]);

        $login = $request->input('login');
        $user = User::where('email', $login)
                    ->orWhere('whatsapp', $login)
                    ->first();

        if (! $user) {
            return back()
                ->withErrors(['login' => 'Akun tidak ditemukan.'])
                ->withInput();
        }

        // Generate token
        $token = Password::getRepository()->create($user);
        $link  = url(route('password.reset', [
            'token' => $token,
            'email' => $user->email,
        ], false));

        // Dispatch WhatsApp job (Starsender)
        dispatch(new SendWhatsappJob(
            $user->whatsapp,
            "Link reset password kamu: {$link}"
        ));

        // Fallback—jika WA gagal, kirim juga email
        $user->notify(new ResetPasswordNotification($link));

        return back()
            ->with('status', 'Link reset telah dikirim via WhatsApp. Silakan cek WhatsApp Anda.');
    }
}
