<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

// class LoginController extends Controller
// {
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//     }

//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }

//     public function login(Request $request)
//     {
//         // Validasi input
//         $request->validate([
//             'email' => 'required',
//             'password' => 'required',
//         ]);

//         // Hardcoded credentials
//         if ($request->email === 'admin@admin.com' && $request->password === 'admin') {
//             // Simpan sesi login
//             Session::put('user', 'admin');

//             // Redirect ke halaman dashboard
//             return redirect()->route('dashboard')->with('success', 'Login berhasil!');
//         }

//         // Jika gagal, kembali ke halaman login dengan error
//         return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
//     }

//     public function logout()
//     {
//         // Hapus sesi login
//         Session::forget('user');
//         return redirect()->route('login');
//     }
// }

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function __construct()
    {
        // Hanya tamu (guest) yang boleh akses kecuali logout
        $this->middleware('guest')->except('logout');
    }

    /**
     * Tampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses login (email atau whatsapp).
     */
    public function login(Request $request)
    {
        // 1) Validasi input
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|string',
        ]);

        // 2) Deteksi apakah user isi email atau whatsapp
        $loginInput = $request->input('login');
        $field = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'whatsapp';

        // 3) Coba authenticate via Auth facade
        $credentials = [
            $field     => $loginInput,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Regenerasi session untuk mencegah fixation
            $request->session()->regenerate();

            // (Opsional) simpan data user di session
            Session::put('user', Auth::user());

            // Redirect ke dashboard atau intended page
            return redirect()->intended(route('dashboard'))
                   ->with('success', 'Login berhasil!');
        }

        // 4) Gagal login
        return back()
            ->withErrors(['login' => 'Email/WhatsApp atau password salah'])
            ->withInput($request->only('login'));
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /**
     * Redirect ke Google untuk OAuth.
     */
    public function redirectToGoogle()
    {
        $callback = route('login.google.callback');

        return Socialite::driver('google')
                        ->stateless()
                        ->redirectUrl($callback)
                        ->redirect();
    }

    /**
     * Handle callback dari Google OAuth.
     */
    public function handleGoogleCallback()
    {
        $socialUser = Socialite::driver('google')->stateless()->user();

        // Jika user dengan email ini sudah ada di DB, langsung login
        if ($user = \App\Models\User::where('email', $socialUser->getEmail())->first()) {
            Auth::login($user);
            return redirect()->intended(route('dashboard'));
        }

        // Jika belum ada, redirect ke register dengan prefill
        return redirect()->route('register')
                         ->withInput([
                             'name'  => $socialUser->getName(),
                             'email' => $socialUser->getEmail(),
                         ]);
    }
}
