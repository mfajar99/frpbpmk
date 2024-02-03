<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\Profile;

class MemberController extends Controller
{
    public function index()
    {
        // $data = Member::all();
        // return json_encode($data);

        return view('member', [
            'title' => 'Anggota,',
            'active' => 'member',
            'profiles' => Profile::all(),
            'members' => Member::all(),
            'organizations' => Organization::all()
        ]);
    }
}
