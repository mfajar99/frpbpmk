<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Agenda;
use App\Models\Gallery;
use App\Models\Disaster;
use App\Models\Member;
use App\Models\Post;


class DashboardController extends Controller
{
    public function index()
    {
        $post = Post::get()->count();
        $contact = Contact::all()->count();
        $agenda = Agenda::all()->count();
        $gallery = Gallery::all()->count();
        $disaster = Disaster::all()->count();
        $member = Member::all()->count();
        // dd($contact);
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'post' => $post,
            'contact' => $contact,
            'agenda' => $agenda,
            'gallery' => $gallery,
            'disaster' => $disaster,
            'member' => $member
        ]);
    }
}
