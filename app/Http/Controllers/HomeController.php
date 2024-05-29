<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\ProdukModel;
use App\Models\SliderModel;
use App\Models\CartShopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terlaris = ProdukModel::ProdukTerlaris();
        $kategori = Kategori::paginate(8);

        return view('User.Home',[
            'tittle' => 'Home',
            'slider' => SliderModel::get(),
            'produk' => ProdukModel::latest()->get(),
            'terlaris' => $terlaris,
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addcardshpping(Request $request)
    {

        $user = Auth::user();

         $cart = CartShopping::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'qty' => $request->qty,
        ]);

        return redirect()->route('Card.View')->with('success', 'Item added to cart successfully');
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

    public function showproduk(Request $request, string $id){


        $data = ProdukModel::with('Kategori')->find($id);

        return view('User.ShowProduk',[
            'produk' => $data
        ]);
    }

    public function showadd(Request $request){
        $user = Auth::user();

        CartShopping::create([
            'product_id' => $request->product_id,
            'user_id' => $user->id,
            'qty' => $request->qty
        ]);

        return redirect()->route('Card.View')->with('success','Produk Masuk Kranjnag ');

    }
}
