<?php

namespace App\Models;

use App\Models\ProdukModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartShopping extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'carts';

    protected $fillable = ['user_id', 'product_id', 'quantity'];


    public function produk()
    {
        return $this->belongsTo(ProdukModel::class, 'product_id', 'id');
    }
}
