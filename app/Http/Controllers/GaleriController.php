<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\GaleriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Kategori::get();

        if(request('galeri') != null){
            $galeri = GaleriModel::where('kategori_id', request('galeri'));
        }else{
            $galeri = GaleriModel::latest();
        }

        return view('User.Galeri',[
            'tittle' => 'Galeri Me',
            'galeri' => $galeri->paginate(8),
            'kategori' => $data
        ]);
    }


    public function viewgaleri(Request $request){

        $query = GaleriModel::with('Kategori');

        if ($request->has('search') && $request->search != '') {
            $query->whereHas('Kategori', function($q) use ($request) {
                $q->where('nama_kategori', 'LIKE', '%' . $request->search . '%');
            });
        }

        $galeri = $query->paginate(6);

        return view('Admin.Dashboard.Galeri.galeri',[
            'tittle' => 'Galeri Admin',
            'kategori' => Kategori::get(),
            'galeri' => $galeri,
            'request' => $request
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
        $data = $request->validate([
            'kategori_id' => 'required',
            'gambar_galeri' => 'image|file|mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('gambar_galeri')){
            $file = $request->file('gambar_galeri');
            $filename = uniqid().'.'. $file->getClientOriginalExtension();
            $file->storeAs('public/galeri/' . $filename);

            Storage::delete(['public/galeri/' . $request->gambarlama]);

            $data['gambar_galeri'] = $filename;
        }else{
            $data['gambar_galeri'] = $request->gambarlama;
        }

        GaleriModel::find($id)->update($data);

        return back()->with('success','Data Galeri Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = GaleriModel::find($id);

        Storage::delete(['public/galeri/' . $data->gambar_galeri]);

        $data->delete();

        return back()->with('success','Data Galeri Berhasil Di Delete');
    }

    public function viewkategori($id){
        $kategori = Kategori::findOrFail($id);
        $galeri = $kategori->galeri;
        return view('User.showgaleri', compact('kategori', 'galeri'));

    }
}
