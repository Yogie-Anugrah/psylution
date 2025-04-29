<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Hardcoded credentials
        if ($request->email === 'admin@admin.com' && $request->password === 'admin') {
            // Simpan sesi login
            Session::put('user', 'admin');

            // Redirect ke halaman dashboard
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembali ke halaman login dengan error
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        // Hapus sesi login
        Session::forget('user');
        return redirect()->route('login');
    }
}
