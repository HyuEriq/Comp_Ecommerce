<?php

namespace App\Http\Controllers;

use Xendit\Configuration;
use Illuminate\Support\Str;
use App\Models\TagihanModel;
use Illuminate\Http\Request;
use Xendit\Invoice\InvoiceApi;
use Illuminate\Support\Facades\Auth;

class OrderUserController extends Controller
{
    public function __construct(){

        Configuration::setXenditKey('xnd_development_q8dZo7egzRKJltrjULCaRZNfuCCYuyrDAb4FaovFq9pF3mNoP4BTfzm6YA6bkGm');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $query = TagihanModel::with(['produk', 'transaksi'=> function($transaksi){
            $transaksi->where('payment_status', 'PENDING');
        } ])->where('user_id', $user->id);


        if(request('status')) {
            $query->where('status', request('status'));
        }else{
            $query->where('status','proses');
        }

        if(request('payment_status') == 'EXPIRED'){
            $query->whereHas('transaksi', function($query) {
                $query->where('payment_status', 'EXPIRED');
            });
        }else{
            $query->whereHas('transaksi', function($query) {
                $query->where('payment_status', 'PENDING');
            });
        }


        $tagihan = $query->latest()->paginate(10);

        return view('Admin.Dashboard.User.dashboard.OrderUser', [
            'tittle' => 'Order User',
            'tagihan' => $tagihan
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
        $user = Auth::user();

        $data = TagihanModel::where('user_id', $user->id)
                                    ->where('id', $id)
                                    ->first();

        if (!$data) {
            return back()->with('error', 'Data tagihan tidak ditemukan.');
        }

        $data->update([
            'status' => $request->status
        ]);



        return back()->with('success','pesanan Sudah Selesai Di Terima');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function payment(request $request){

        $cekProduk = TagihanModel::find($request->id);

        $uuid = (string) Str::uuid();

        $apiInstance = new InvoiceApi();

        $CreateInvoiceRequest = new CreateInvoiceRequest([
            'external_id' => $uuid,
            'description' => 'Test Invoice',
            'amount' => 10000,
            'invoice_duration' => 172800,
            'currency' => 'IDR',
            'reminder_time' => 1
        ]);


    }
}
