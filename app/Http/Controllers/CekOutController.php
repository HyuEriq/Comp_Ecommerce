<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\ProdukModel;
use Illuminate\Support\Str;
use App\Models\TagihanModel;
use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\CheckoutRequest;

class CekOutController extends Controller
{

    private $XenditApiKey, $XenditInvoiceEndpoit;

    public function __construct(){
        $this->XenditApiKey = config('services.xendit.apiKey');
        $this->XenditInvoiceEndpoit = config('services.xendit.invoice-endpoint');
    }


    public function getTotal($harga, $qty) : Int
    {
        return $harga * $qty;
    }

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
        $total = $this->getTotal($produk->harga,$qty);
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

    public function createInvoiceXendit($data, $total){
        // dd($data);
        $external_id = Str::uuid();

        $body = [
            'external_id' => $external_id,
            'amount' => $total,
            'description' => $data->nama_Produk,
            ];
            if(auth()->user()->no_hp !== null){
                $body['customer'] = [
                        'mobile_number' => auth()->user()->no_hp
                    ];
            }

        $post =  Http::withHeaders([
            'Authorization' => $this->XenditApiKey
        ])->post($this->XenditInvoiceEndpoit, $body);

        return $post->object();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CheckoutRequest $request)
    {

    try{

      $user = Auth::user();
        $produk = ProdukModel::where('id', $request->produk_id)->first();
        if($produk == null){
            return redirect()->back();
        }
        DB::beginTransaction();
        $total = $this->getTotal($produk->harga,$request->jumlah);

        $invoice = $this->createInvoiceXendit($produk, $total);
        // dd($invoice);

        $createTagihan = TagihanModel::create([
            'user_id' => $user->id,
            'produk_id' => $request->produk_id,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'zipcode' => $request->zipcode,
            'jumlah' => $request->jumlah,
            'total' => $total,
            'pengiriman' => $request->pengiriman
        ]);

        if($createTagihan){
        TransaksiModel::create([
            'invoice_id' => $invoice->id,
            'tagihan_id' => $createTagihan->id,
            'external_id' => $invoice->external_id,
            'payment_link' => $invoice->invoice_url,
            'harga' => $produk->harga,
            'total' => $total,
            'payment_status' => $invoice->status,
            'expired' => Carbon::parse($invoice->expiry_date)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'status' => 'proses'
        ]);

        }
        DB::commit();

        return redirect()->route('Order.User')->with('success', 'Check Out Produk Sudah Berhasil Silahkan Di Bayar');


    }catch(Exception $e){
        DB::rollback();
        Log::info('error', ['message' => $e->getMessage()]);
        return redirect()->back();

    }


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
