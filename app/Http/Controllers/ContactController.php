<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\Profile;

class ContactController extends Controller
{
    public function index()
    {
        $data = Organization::all();
        // return json_encode($data);
        // dd($data);

        return view('contact', [
            'title' => 'Data Kontak',
            'active' => 'contact',
            'profiles' => Profile::all(),
            'contacts' => Contact::all(),
            'organizations' => Organization::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp_or_email' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.index')->with('success', 'Kontak berhasil terkirim.');
    }
}
