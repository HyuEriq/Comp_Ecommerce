<?php

namespace App\Http\Controllers;

use App\Models\CartShopping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CardShoppingCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $carts = CartShopping::with(['produk' => function($produk){
            $produk->with(['Kategori' => function($kategori){
                $kategori->withTrashed();
            }]);
        }])->where('user_id', $user->id)->get();
        // Filter carts yang memiliki produk tidak null
        $carts = $carts->filter(function ($cart) {
            return $cart->produk !== null;
        });

        return view('User.CardShoping',[
            'tittle' => 'Card Shopping',
            'carts' => $carts
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
