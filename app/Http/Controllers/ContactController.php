<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.Contact',[
            'tittle' => 'Contact Me',
            'contact' => ContactModel::get()
        ]);
    }

    public function view()
    {
        return view('Admin.Dashboard.contact.contact',[
            'contact' => ContactModel::get(),
            'tittle' => 'Contact'
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'email' => 'required',
            'alamat' => 'required',
            'nomer' => 'required'
        ]);

        ContactModel::find($id)->update($data);

        return back()->with('success','Data Contact Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
