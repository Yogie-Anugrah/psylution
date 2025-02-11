<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = [
            ['name' => 'Lorem Ipsum', 'role' => 'Lorem ipsum', 'message' => 'Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas. Diam arcu nunc aliquam ultricies nisi arcu.'],
            ['name' => 'Lorem Ipsum', 'role' => 'Lorem ipsum', 'message' => 'Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas. Diam arcu nunc aliquam ultricies nisi arcu.'],
            ['name' => 'Lorem Ipsum', 'role' => 'Lorem ipsum', 'message' => 'Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas. Diam arcu nunc aliquam ultricies nisi arcu.'],
            ['name' => 'Lorem Ipsum', 'role' => 'Lorem ipsum', 'message' => 'Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas. Diam arcu nunc aliquam ultricies nisi arcu.'],
            ['name' => 'Lorem Ipsum', 'role' => 'Lorem ipsum', 'message' => 'Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas. Diam arcu nunc aliquam ultricies nisi arcu.'],
            ['name' => 'Lorem Ipsum', 'role' => 'Lorem ipsum', 'message' => 'Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas. Diam arcu nunc aliquam ultricies nisi arcu.'],
        ];

        return view('testimoni.index', compact('testimonis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|min:5|max:500',
        ]);

        // Simpan feedback ke session sementara (bisa diganti dengan database)
        Session::flash('success', 'Thank you for your feedback!');

        return response()->json([
            'message' => 'Feedback submitted successfully!',
        ]);
    }

}
