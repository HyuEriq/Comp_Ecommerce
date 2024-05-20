<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.About',[
            'tittle' => 'About As',
            'AboutAs' => About::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function About()
    {
        $data = About::get();

        return view('Admin.Dashboard.About.About',[
            'about' => $data,
            'tittle' => 'About As'
        ]);
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
        $data = $request->validate([
            'tittle' => 'required|min:5',
            'diskripsi' => 'required',
            'image'     => 'image|file|mimes:png,jpg,jpeg'
        ]);

            if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = uniqid().'.'. $file->getClientOriginalExtension();

                $file->storeAs('public/about/' . $filename);

                Storage::delete(['public/about/'. $request->imageold]);

                $data['image'] = $filename;
            }else(
                $data['image'] = $request->imageold
            );
            //$file = $request->file('image');
            //$filename = uniqid() .'.'. $file->getClientOriginalExtension();
            //$file->storeAs('public/About/', $filename);

            //$data[image] = $filename;

            About::find($id)->update($data);

            return back()->with('success','Data About Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
