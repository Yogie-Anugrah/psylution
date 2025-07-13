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

class LoginController extends Controller
{
    public function __construct()
    {
        // Hanya tamu (guest) yg boleh akses kecuali logout
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login'); // pastikan form memakai <input name="login">
    }

    public function login(Request $request)
    {
        // 1) Validasi input
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|string',
        ]);

        // 2) Tentukan apakah user memasukkan email atau whatsapp
        $loginInput = $request->input('login');
        $field      = filter_var($loginInput, FILTER_VALIDATE_EMAIL)
                          ? 'email'
                          : 'whatsapp';

        // 3) Siapkan credential dan coba Auth
        $credentials = [
            $field     => $loginInput,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // regenerasi session untuk keamanan
            $request->session()->regenerate();

            // (opsional) simpan info user di session
            Session::put('user', Auth::user());

            return redirect()->intended(route('dashboard'))
                   ->with('success', 'Login berhasil!');
        }

        // 4) Jika gagal, kembalikan error di field "login"
        return back()
            ->withErrors(['login' => 'Invalid credentials'])
            ->withInput($request->only('login'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

