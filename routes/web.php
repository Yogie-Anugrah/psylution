<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\PsikologKamiController;
use App\Http\Controllers\TestimoniController;

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
Route::get("/konseling", [KonselingController::class, 'index'])->name('konseling.index');
Route::get('/psikolog-kami', [PsikologKamiController::class, 'index'])->name('psikolog-kami.index');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');