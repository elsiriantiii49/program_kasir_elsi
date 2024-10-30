<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable= [
        'gambar',
        'nama_produk',
        'harga',
        'stok',
    ];
    public function produk()
    {
        return $this->hasMany(produk::class,'id_produk', 'id');
    }
}
