<?php

namespace App\Models;

use App\Models\GaleriModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Kategori';
    protected $fillable = ['nama_kategori','slug','image'];

    public function Galeri()
    {
        return $this->hasMany(GaleriModel::class);
    }
}
