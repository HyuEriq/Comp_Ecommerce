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

    public function redirecToCheckout(Request $request){
        if(!isset($request->produk_id) || $request->qty[0] <= 0){
                if($request->produk_id == null){
                    return redirect()->back()->with('gagal','Pilih Produk Dulu');
                }else{
                    return redirect()->back()->with('gagal','Pilih Produk Dulu');

                }

        }

        $data = [
            'id_produk' => $request->produk_id[0],
            'qty' => $request->qty[0]
        ];

        return redirect(route('Cekout.Index'))->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $checkout = Checkout::create([
            'user_id' => $user->id,
            'produk_id' => $request->product_id,
            'qty' => $request->qty,
            'total' => $request->total
        ]);

        return redirect()->route('Cekout.Index')->with('success','Data Berhasil Di ChectOut');
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
        $user = Auth::user();
        $user_id = $user->id;

        // Menghapus data cart berdasarkan user_id dan id cart yang diberikan
        CartShopping::where('id', $id)->where('user_id', $user_id)->delete();

        return back()->with('success', 'Data Cart Berhasil Di Hapus');
    }
}
