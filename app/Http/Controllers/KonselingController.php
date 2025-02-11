<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonselingController extends Controller
{
    //
    public function index() 
    {
        $services = [
            'individu' => [
                'title' => 'Konseling Individu',
                'packages' => [
                    ['name' => 'Basic', 'offline' => 'Rp 200.000', 'online' => 'Rp 150.000', 'benefits' => ['Akses materi dasar', 'Konsultasi 30 menit', 'Laporan ringkas']],
                    ['name' => 'Premium', 'offline' => 'Rp 300.000', 'online' => 'Rp 250.000', 'benefits' => ['Akses materi premium', 'Konsultasi 60 menit', 'Laporan lengkap']],
                    ['name' => 'Professional', 'offline' => 'Rp 400.000', 'online' => 'Rp 350.000', 'benefits' => ['Semua fitur premium', 'Konsultasi 90 menit', 'Laporan mendetail']],
                ]
            ],
            'pasangan' => [
                'title' => 'Konseling Pasangan',
                'packages' => [
                    ['name' => 'Basic', 'offline' => 'Rp 250.000', 'online' => 'Rp 200.000', 'benefits' => ['Sesi bersama pasangan', 'Konsultasi 45 menit', 'Laporan hubungan']],
                    ['name' => 'Premium', 'offline' => 'Rp 350.000', 'online' => 'Rp 300.000', 'benefits' => ['Pendampingan intensif', 'Konsultasi 75 menit', 'Strategi komunikasi']],
                    ['name' => 'Professional', 'offline' => 'Rp 450.000', 'online' => 'Rp 400.000', 'benefits' => ['Sesi eksklusif', 'Konsultasi 90 menit', 'Pendampingan lanjutan']],
                ]
            ],
            'keluarga' => [
                'title' => 'Konseling Keluarga',
                'packages' => [
                    ['name' => 'Basic', 'offline' => 'Rp 300.000', 'online' => 'Rp 250.000', 'benefits' => ['Sesi keluarga kecil', 'Konsultasi 60 menit', 'Strategi parenting']],
                    ['name' => 'Premium', 'offline' => 'Rp 400.000', 'online' => 'Rp 350.000', 'benefits' => ['Pendampingan orang tua', 'Konsultasi 90 menit', 'Manajemen konflik']],
                    ['name' => 'Professional', 'offline' => 'Rp 500.000', 'online' => 'Rp 450.000', 'benefits' => ['Pendampingan keluarga besar', 'Konsultasi 120 menit', 'Rencana komunikasi']],
                ]
            ]
        ];
        
        return view('konseling.index', compact('services'));
    }
}
