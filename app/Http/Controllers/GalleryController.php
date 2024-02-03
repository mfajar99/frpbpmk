<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Organization;
use App\Models\Profile;

class GalleryController extends Controller
{
    public function index()
    {
        // $data = Gallery::all();
        // return json_encode($data);
        return view('gallery', [
            'title' => 'Galeri',
            'active' => 'gallery',
            'profiles' => Profile::all(),
            'galleries' => Gallery::paginate(9),
            'organizations' => Organization::all()
        ]);
    }
}
