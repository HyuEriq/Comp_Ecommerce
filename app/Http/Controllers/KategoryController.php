<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = new Kategori;

        if($request->has('search') && $request->search != ''){
         $data->where('nama_kategori','LIKE','%'.$request->search.'%');
        }

        $data = $data->latest()->paginate(4);

        return view('Admin.Dashboard.Kategori.kategory', [
            'Kategori' => $data,
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
            'nama_kategori' => 'required|min:3',
            'image' => 'required|image|file|mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('image');

        $filename = uniqid().'.'. $file->getClientOriginalExtension();

        $file->storeAs('public/kategori/' . $filename );

        $data['image'] = $filename;

        $data['slug'] = Str::slug($data['nama_kategori']);

        Kategori::create($data);

        return back()->with('success','Data Kategori Berhasil Di Tambah');
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
        $data = $request->validate([
            'nama_kategori' => 'required|min:3',
            'image' => 'image|file|mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');

            $filename = uniqid().'.'. $file->getClientOriginalExtension();

            $file->storeAs('public/kategori/' . $filename);

            Storage::delete(['public/kategori/'. $request->imageold]);

            $data['image'] = $filename;
        }else{
            $data['image'] = $request->imageold;
        }

        $data['slug'] = Str::slug($data['nama_kategori']);

        Kategori::find($id)->update($data);

        return back()->with('success','Data Kategori Berhasil Di Tambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::find($id)->delete();

        return back()->with('success', 'Data kategori Berhasil Di Hapus');
    }
}
