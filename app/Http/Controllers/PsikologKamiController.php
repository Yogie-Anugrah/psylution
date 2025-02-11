<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PsikologKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $psikologs = [
            [
                'rating' => '5.0',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula. Lectus varius ut sit consequat nunc donec nulla aliquam.'
            ],
            [
                'rating' => '5.0',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula. Lectus varius ut sit consequat nunc donec nulla aliquam.'
            ],
            [
                'rating' => '5.0',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula. Lectus varius ut sit consequat nunc donec nulla aliquam.'
            ]
        ];
        $psikolog_list = collect([
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '120', 'experience' => '5 Tahun', 'reviews' => '200', 'schedule' => 'Senin - Jumat'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '90', 'experience' => '3 Tahun', 'reviews' => '150', 'schedule' => 'Selasa - Sabtu'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '200', 'experience' => '7 Tahun', 'reviews' => '300', 'schedule' => 'Senin - Kamis'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '85', 'experience' => '2 Tahun', 'reviews' => '120', 'schedule' => 'Rabu - Minggu'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '110', 'experience' => '4 Tahun', 'reviews' => '180', 'schedule' => 'Senin - Jumat'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '140', 'experience' => '6 Tahun', 'reviews' => '250', 'schedule' => 'Selasa - Sabtu'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '75', 'experience' => '2 Tahun', 'reviews' => '100', 'schedule' => 'Rabu - Minggu'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '160', 'experience' => '8 Tahun', 'reviews' => '280', 'schedule' => 'Senin - Kamis'],
            ['name' => 'Lorem Ipsum', 'category' => 'Kategori', 'sessions' => '130', 'experience' => '5 Tahun', 'reviews' => '220', 'schedule' => 'Jumat - Minggu'],
        ]);
        $perPage = 3;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $psikolog_list->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $psikologsPaginated = new LengthAwarePaginator(
            $currentItems, 
            $psikolog_list->count(), 
            $perPage, 
            $currentPage, 
            ['path' => $request->url()]
        );
        return view('psikolog-kami.index', compact('psikologs', 'psikologsPaginated'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
