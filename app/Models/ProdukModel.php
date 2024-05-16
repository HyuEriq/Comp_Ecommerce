<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = ['nama_produk','kategori_id','foto_produk','harga','qty','berat','diskripsi'];

    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
