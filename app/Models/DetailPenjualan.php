<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable= [
        'id_penjualan',
        'id_produk',
        'jumlah_produk',
        'subtotal',
    ];
    public function detail_penjualan()
    {
        return $this->hasMany(produk::class,'id_detail_penjualan', 'id');
    }
}
