<?php

namespace App\Http\Controllers;

use App\Models\TagihanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $query = TagihanModel::with('produk')
                             ->where('user_id', $user->id);

        if(request('status')) {
            $query->where('status', request('status'));
        }else{
            $query->where('status','proses');
        }

        $tagihan = $query->latest()->get();

        return view('Admin.Dashboard.User.dashboard.OrderUser', [
            'tittle' => 'Order User',
            'tagihan' => $tagihan
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
