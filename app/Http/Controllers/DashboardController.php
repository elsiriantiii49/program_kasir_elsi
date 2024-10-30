<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPelanggan = Pelanggan::count();
        $totalPenjualan = Penjualan::sum('id');
        $totalProduk = Produk::sum('id');

        return view('home.dashboard', compact('totalPelanggan', 'totalPenjualan', 'totalProduk'));
    }
}
