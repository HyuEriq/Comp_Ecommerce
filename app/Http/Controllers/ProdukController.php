<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = Kategori::get();

        $data = ProdukModel::query();

        if ($request->has('search') && $request->search != '') {
            $data->where('nama_produk', 'LIKE', '%' . $request->search . '%')
            ->orWhereHas('kategori', function ($query) use ($request) {
                $query->where('nama_kategori', 'LIKE', '%' . $request->search . '%');
            });
        }

        $data = $data->with('kategori')->latest()->get(); // <-- Ini hanya memanggil relasi, tapi tidak menyimpan perubahannya

        return view('Admin.Dashboard.Produk.Produk', [
            'Produk' => $data,
            'kategori' => $kategori,
            'request' => $request,
            'tittle' => 'Produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required|min:5',
            'kategori_id' => 'required',
            'berat'       => 'required',
            'harga'       => 'required',
            'qty'         => 'required',
            'diskripsi'   => 'required',
            'foto_produk' => 'required|image|file|mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('foto_produk');
        $filename = uniqid().'.'. $file->getClientOriginalExtension();
        $file->storeAs('public/produk/' . $filename);

        $data['foto_produk'] = $filename;

       ProdukModel::create($data);

        return back()->with('success','Data Produk Berhasil Di Tambah');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama_produk' => 'required|min:5',
            'kategori_id' => 'required',
            'berat'       => 'required',
            'harga'       => 'required',
            'qty'         => 'required',
            'diskripsi'   => 'required',
            'foto_produk' => 'image|file|mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('foto_produk')){
            $file = $request->file('foto_produk');
            $filename = uniqid().'.'. $file->getClientOriginalExtension();
            $file->storeAs('public/produk/' . $filename);

            Storage::delete(['public/produk/'. $request->imageold]);

            $data['foto_produk'] = $filename;

        }else{
            $data['foto_produk'] = $request->oldImage;
        }


        ProdukModel::find($id)->update($data);

        return back()->with('success','Data Produk Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ProdukModel::find($id);

        Storage::delete(['public/produk/' . $data->foto_produk]);

        $data->delete();

        return back()->with('success','Data Produk Berhasil Di Hapus');
    }

    public function Detail(string $id){

        $data = ProdukModel::with('Kategori')->find($id);
        return view('Admin.Dashboard.Produk.Detail',[
            'Produk' => $data,
            'tittle' => 'Detail Produk'
        ]);
    }
}
