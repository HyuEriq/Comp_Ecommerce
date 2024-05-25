<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = User::query();

        if($request->has('search') && $request->search != ''){
            $data->where('name','LIKE','%'.$request->search.'%');
           }

        $data = $data->latest()->get();

        return view('Admin.Dashboard.User.User',[
            'Users' => $data,
            'request' => $request,
            'tittle' => 'Daftar User'
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
            'name' => 'required|min:4|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        $data['password'] = Hash::make($request->password);

        User::create($data);

        return back()->with('success','Data User Berhasil Di Tambah');
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
        $user = User::find($id);
        $data = $request->validate([
            'name' => 'required|max:255|min:4',
            'email' => ['email',Rule::unique('users', 'email')->ignore($user->id),
            ],
        ]);

        $user->update($data, [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return back()->with('success','Data User Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user::find($id)->delete();

        return back()->with('success','Data User Berhasil Di Hapus');
    }

    public function details(string $id)
    {
        $user = User::find($id);

        return view('Admin.Dashboard.User.detail',[
            'tittle' => 'Details User',
            'user' => $user
        ]);
    }

}
