<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = ['tagihan_id','invoice_id','external_id','payment_link','harga','total','bayar','payment_status','expired','status',''];
}
