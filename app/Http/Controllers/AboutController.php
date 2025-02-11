<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'visi' => 'Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula.
                      Lectus varius ut sit consequat nunc donec nulla aliquam. Imperdiet posuere pulvinar
                      viverra quam id nulla hac fusce nulla. Dui neque dolor et maecenas mi sed sodales
                      vitae varius. Eget amet iaculis ultricies nibh est diam.',
            'misi' => 'Lorem ipsum dolor sit amet consectetur. Ut viverra volutpat velit vitae vehicula.
                      Lectus varius ut sit consequat nunc donec nulla aliquam. Imperdiet posuere pulvinar
                      viverra quam id nulla hac fusce nulla. Dui neque dolor et maecenas mi sed sodales
                      vitae varius. Eget amet iaculis ultricies nibh est diam.'
        ];

        $mitras = [
            ['name' => 'Mitra 1', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 2', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 3', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 4', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 5', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 6', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 7', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 8', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 9', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 10', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 11', 'image' => '#D6E4FC'],
            ['name' => 'Mitra 12', 'image' => '#D6E4FC'],
        ];

        $podcastUrl = "https://www.youtube.com/embed/uYoBjzVMknU"; // YouTube Embed URL

        return view('about.index', compact('data', 'mitras', 'podcastUrl'));
    }
}
