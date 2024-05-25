<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        return view('Admin.Dashboard.Profil.Profil',[
            'user' => $user,
            'tittle' => 'Profil '
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();

        $data = $request->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => ['email',Rule::unique('users', 'email')->ignore($user->id)],
            'Alamat' => 'required|max:255',
            'no_hp' => 'required|max:11',
            'image' => 'image|file|mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/user/' . $filename);

            Storage::delete('public/user/' . $request->profillama);

            $user['image'] = $filename;
        }else{
            $user['image'] = $request->profillama;
        }

        $user->update($data,[
            'name' => $request->name,
            'email' => $request->email,
            'Alamat' => $request->Alamat,
            'no_hp' => $request->no_hp,
            'image' => $request->image
        ]);

        return back()->with('success','Profil Anda Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
