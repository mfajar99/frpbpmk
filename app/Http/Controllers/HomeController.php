<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Beranda',
            'active' => '/',
            'profiles' => Profile::all(),
            'posts' => post::all(),
            'organizations' => Organization::all()
        ]);
    }
}
