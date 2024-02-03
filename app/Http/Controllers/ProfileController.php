<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Clockwork\Request\Request;

// use App\Models\Agenda;

class ProfileController extends Controller
{
    public function index()
    {
        // $data = Profile::all();
        // dd($data);

        return view('profile', [
            'title' => 'Profil',
            'active' => 'profiles',
            // 'agendas' => Agenda::all(),
            'profiles' => Profile::all(),
            'organizations' => Organization::all()
        ]);
    }

    public function show(Request $request, $id)
    {
        // dd($id);
        // $profile = Profile::find($id);
        // return $profile;
        $profile = Profile::find($id);
        return view('profile', [
            'title' => 'Detail Profil',
            'active' => 'profile',
            'profile' => $profile
        ]);
    }
}
