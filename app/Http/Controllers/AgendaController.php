<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Profile;
use App\Models\Organization;

class AgendaController extends Controller
{
    public function index()
    {
        // $data = Organization::get();
        // return json_encode($data);
        return view('agenda', [
            'title' => 'Agenda',
            'active' => 'agenda',
            'profiles' => Profile::all(),
            'agendas' => Agenda::paginate(4),
            'organizations' => Organization::all()
        ]);
    }
}
