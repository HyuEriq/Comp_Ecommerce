<?php

namespace App\Http\Controllers;

use App\Models\TagihanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryOrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {

        $user = Auth::user();

        $historyuser = TagihanModel::query();


        if ($request->has('search') && $request->search != '') {
            $historyuser->whereHas('produk', function($query) use ($request) {
                $query->where('nama_Produk', 'LIKE', '%' . $request->search . '%');
            });
        }

        $historyuser->with('Produk')
                    ->where('user_id', $user->id)
                    ->where('status','selesai')
                    ->latest();

        $historyuser = $historyuser->paginate(10);



        return view('Admin.Dashboard.User.dashboard.HistoryOrder',[
            'tittle' => 'History Order User',
            'historyuser' => $historyuser,
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
