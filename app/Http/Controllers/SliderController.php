<?php

namespace App\Http\Controllers;

use App\Models\SliderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // public function index()
    //{
    // return view('Admin.Dashboard.Slider.Slider');
    //}

    public function view()
    {
     return view('Admin.Dashboard.Slider.Slider',[
        'tittle' => 'Slider',
        'slider' => SliderModel::get()
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
            'nama_slider' => 'required|min:5',
            'gambar_slider' => 'required|image|file|mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('gambar_slider');

        $filename = uniqid().'.'. $file->getClientOriginalExtension();

        $file->storeAs('public/slider/' . $filename);


        $data['gambar_slider'] = $filename;

        SliderModel::create($data);

        return back()->with('success','Slider Berhasil Di Tambah');

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
            'nama_slider' => 'required|min:4',
            'gambar_slider' => 'image|file|mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('gambar_slider')){
            $file = $request->file('gambar_slider');
            $filename = uniqid().'.'. $file->getClientOriginalExtension();
            $file->storeAs('public/slider/' . $filename);

            Storage::delete('public/slider' . $request->gambarlama);

            $data['gambar_slider'] = $filename;
        }else{
            $data['gambar_slider'] = $request->gambarlama;
        }

        SliderModel::find($id)->update($data);

        return back()->with('success','Data Slider Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SliderModel::find($id);

        Storage::delete('public/slider.'. $data->gambar_slider);

        $data->delete();

        return back()->with('success','Data Slider Berhasil Di Hapus');
    }
}
