<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    use HasFactory;


    protected $table = 'galeri';

    protected $fillable = ['kategori_id','gambar_galeri'];


    public function Kategori(){

       return $this->belongsTo(Kategori::class);

    }
}
