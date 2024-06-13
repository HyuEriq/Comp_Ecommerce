<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use App\Models\TagihanModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CekOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = session('data');

        if (!$data) {
            return redirect()->route('Card.View')->with('error', 'No items selected for checkout.');
        }

        $produk = ProdukModel::where('id', $data['id_produk'])->first();
        $qty = $data['qty'];
        $total = $produk->harga * $qty;
        return view('User.Cekout',[
            'produk' => $produk,
            'qty' => $qty,
            'total' => $total
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


        $user = Auth::user();

        $data = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'pengiriman' => 'required|string',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:11',
            'zipcode' => 'required|string|max:10',
            'produk_id' => 'required|integer',
            'jumlah' => 'required|integer|min:1',
            'total' => 'required|numeric|',
        ]);

        TagihanModel::create([
            'user_id' => $user->id,
            'produk_id' => $data['produk_id'],
            'nama_lengkap' => $data['nama_lengkap'],
            'alamat' => $data['alamat'],
            'no_telepon' => $data['no_telepon'],
            'zipcode' => $data['zipcode'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
            'pengiriman' => $data['pengiriman']
        ]);

        return redirect()->route('Order.User')->with('success', 'Check Out Produk Sudah Berhasil Silahkan Di Bayar');
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
