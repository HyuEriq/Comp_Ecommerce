<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GaleriModel extends Model
{
    use HasFactory;


    protected $table = 'galeri';

    protected $fillable = ['kategori_id','gambar_galeri'];


    public function Kategori(){

       return $this->belongsTo(Kategori::class);
    }
}
