<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Jobs\SendWhatsappJob;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /** Tampilkan form “Forgot Password” */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /** Kirim link reset hanya via WhatsApp */
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

        // Generate token & link
        $token = Password::getRepository()->create($user);
        $link  = url(route('password.reset', [
            'token' => $token,
            'email' => $user->email,
        ], false));

        // Kirim via WhatsApp saja
        dispatch(new SendWhatsappJob(
            $user->whatsapp,
            "Halo {$user->name},\n\nUntuk mereset password kamu silakan klik link berikut:\n{$link}"
        ));

        return back()
            ->with('status', 'Link reset telah dikirim via WhatsApp. Silakan cek WhatsApp Anda.');
    }
}
