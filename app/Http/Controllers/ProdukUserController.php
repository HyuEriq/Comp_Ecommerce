<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::get();

        if(request('kategori') == 'terlaris'){
            $produk = ProdukModel::orderBy('jumlah_beli', 'DESC');
        }elseif(request('kategori_id') != null){
            $produk = ProdukModel::where('kategori_id', request('kategori_id'));
        }elseif (request('produk') == 'populer') {
            $produk = ProdukModel::orderBy('jumlah_lihat', 'DESC');
        }
        else{
            $produk = ProdukModel::latest();
        }

        return view('User.produk',[
            'tittle' => 'Halaman Produk',
            'kategori' => $kategori,
            'produk' => $produk->paginate(8)
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
