<?php

namespace App\Http\Controllers;

use App\Models\TagihanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $user = Auth::user();

        $data = TagihanModel::query();

        if ($request->has('status')) {
            $data->where('status', $request->status);
        } elseif ($request->has('search') && $request->search != null) {
            $data->whereHas('produk', function ($query) use ($request) {
                $query->where('nama_produk', 'LIKE', '%' . $request->search . '%');
            });
        }

        $data = $data->with('produk', 'user')->latest()->paginate('4');


        return view('Admin.Dashboard.Orderan.orderan',[
            'tittle' => 'Orderan',
            'dataorderan' => $data,
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
        $data = $request->validate([
            'no_resi' => 'required|string|min:7',
            'status' => 'required'
        ]);

        TagihanModel::find($id)->update($data,[
            'no_resi' => $request->no_resi,
            'status' => $request->status
        ]);

        return back()->with('success','Data Resi Pengiriman Dan Status Orderan Berhasil Di Input.....');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TagihanModel::find($id);

        $data->delete();

        return back()->with('success','Data Orderan Berhasil Di Hapus');
    }
}
