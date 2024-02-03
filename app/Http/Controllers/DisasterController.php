<?php

namespace App\Http\Controllers;

use App\Models\Disaster;
use App\Models\Organization;
use App\Models\Profile;
use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function index()
    {
        $title = '';

        return view('disaster', [
            'title' => 'Data Bencana' . $title,
            'active' => 'disaster',
            'profiles' => Profile::all(),
            'disasters' => Disaster::all(),
            'organizations' => Organization::all()
        ]);
    }
}
