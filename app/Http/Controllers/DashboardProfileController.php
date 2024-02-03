<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profiles.index', [
            'title' => 'Profil',
            'profiles' => Profile::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.profiles.create', [
            'title' => 'Profil',
            'profiles' => Profile::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:profiles',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        $validateData['description'] = strip_tags($validateData['description']);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        Profile::create($validateData);

        return redirect('/dashboard/profiles')->with('success', 'Data berita baru berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('dashboard.profiles.show', [
            'title' => 'Profil',
            'profile' => $profile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('dashboard.profiles.edit', [
            'title' => 'Profil',
            'profile' => $profile,
            'profiles' => Profile::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ];

        if ($request->slug != $profile->slug) {
            $rules['slug'] = 'required|unique:profiles';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        Profile::where('id', $profile->id)
            ->update($validateData);

        return redirect('/dashboard/profiles')->with('success', 'Data berita berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        if ($profile->image) {
            Storage::delete($profile->image);
        }
        Profile::destroy($profile->id);
        return redirect('/dashboard/profiles')->with('success', 'Data profil berhasil dihapus!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Profile::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
