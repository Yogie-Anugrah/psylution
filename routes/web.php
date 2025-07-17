<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\PsikologKamiController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get("/konseling", [KonselingController::class, 'index'])->name('konseling.index');
Route::get('/psikolog-kami', [PsikologKamiController::class, 'index'])->name('psikolog-kami.index');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback'])
     ->name('login.google.callback');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('register/google', [RegisterController::class,'redirectToGoogle'])->name('register.google');
Route::get('register/google/callback', [RegisterController::class, 'handleGoogleCallback'])
     ->name('register.google.callback');
// Auth::routes();
Auth::routes(['verify' => true]);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    if (!session()->has('user')) {
        return redirect()->route('login')->withErrors(['email' => 'Silakan login terlebih dahulu']);
    }
    return view('dashboard');
})->name('dashboard');
Route::get('password/reset',      [ForgotPasswordController::class,'showLinkRequestForm'])
        ->name('password.request');
Route::post('password/email',     [ForgotPasswordController::class,'sendResetLinkEmail'])
        ->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset',      'Auth\ResetPasswordController@reset')->name('password.update');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking/{id}/form', [BookingController::class, 'form']);
Route::post('/booking/submit', [BookingController::class, 'submit']);
Route::get('/booking/invoice', [BookingController::class, 'invoice'])->middleware('auth');;

// routes/web.php
Route::get('/payment/success', function () {
    return view('payment.success');
});
Route::get('/payment/failed', function () {
    return view('payment.failed');
});

Route::post('/payment/create', [\App\Http\Controllers\PaymentController::class, 'createInvoice'])->name('payment.create');

