<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProdukModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlah_user = User::count();
        $jumlah_produk = ProdukModel::count();
        $jumlah_beli = ProdukModel::totalterjual();
        return view('Admin.Dashboard.dashboard',[
            'tittle' => 'Dashboard',
            'jumlah_user' => $jumlah_user,
            'jumlah_produk' => $jumlah_produk,
            'jumlah_beli' => $jumlah_beli
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
