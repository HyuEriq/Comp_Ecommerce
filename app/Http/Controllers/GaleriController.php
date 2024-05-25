<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\GaleriModel;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.Galeri',[
            'tittle' => 'Galeri Me'
        ]);
    }


    public function viewgaleri(){
        return view('Admin.Dashboard.Galeri.galeri',[
            'tittle' => 'Galeri Admin',
            'kategori' => Kategori::get(),
            'galeri' => GaleriModel::with('Kategori')->get()
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
        $data = $request->validate([
            'kategori_id' => 'required',
            'gambar_galeri' => 'required|image|file|mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('gambar_galeri');
        $filename = uniqid().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/galeri/' . $filename);

        $data['gambar_galeri'] = $filename;

        GaleriModel::create($data);

        return back()->with('success','Data Galeri Berhasil Di Tambah');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
