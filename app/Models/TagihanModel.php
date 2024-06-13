<?php

namespace App\Models;

use App\Models\User;
use App\Models\ProdukModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TagihanModel extends Model
{
    use HasFactory;

    protected $table = 'tagihan';

    protected $fillable = ['user_id','produk_id','nama_lengkap','pengiriman','alamat','no_telepon','zipcode','jumlah','total','status'];


    public function Produk(): BelongsTo
    {
        return $this->belongsTo(ProdukModel::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
