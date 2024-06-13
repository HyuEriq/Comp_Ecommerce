<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\ProdukModel;
use App\Models\CartShopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $kategori = Kategori::get();

        if(request('kategori') == 'terlaris'){
            $produk = ProdukModel::orderBy('jumlah_beli', 'DESC');
        }elseif(request('kategori_id') != null){
            $produk = ProdukModel::where('kategori_id', request('kategori_id'));
        }elseif (request('produk') == 'populer') {
            $produk = ProdukModel::orderBy('jumlah_lihat', 'DESC');
        }elseif(request('filter') == 'terpopuler'){
            $produk = ProdukModel::orderBy('jumlah_lihat', 'DESC');
        }elseif(request('filter') == 'terlaris'){
            $produk = ProdukModel::orderBy('jumlah_beli' ,'DESC');
        }elseif(request('filter_produk') != null){
            $produk = ProdukModel::where('kategori_id' , request('filter_produk'));
        }elseif(request('search') && $request->search != null){
            $produk = ProdukModel::where('nama_produk','LIKE','%'.$request->search.'%');
        }else{
            $produk = ProdukModel::latest();
        }

        return view('User.produk',[
            'tittle' => 'Halaman Produk',
            'kategori' => $kategori,
            'produk' => $produk->paginate(8),
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

    public function addcart(Request $request){

        $user = Auth::user();

        $cart = CartShopping::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'qty' => $request->qty
        ]);

        return redirect()->route('Card.View')->with('success','Produk Berhasil Di Tambahkan Di Keranjang');

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
