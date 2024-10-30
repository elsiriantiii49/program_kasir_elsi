<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $detail_penjualan = DetailPenjualan::all();
        return view('home.detail_penjualan.index', compact('detail_penjualan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.detail_penjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailPenjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_produk' => $request->id_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/detail_penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail_penjualan = DetailPenjualan::find($id);
        return view('detail_penjualan')->withErors(['Barang tidak ditemukan']);

        return view('home.detail_penjualan.show', compact('detail_penjualan'));
    }  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detai_lpenjualan = DetailPenjualan::find($id);
        $detai_lpenjualan->update([
            'id_penjualan'=>$request->id_penjualan,
            'id_produk'=>$request->id_produk,
            'jumlah_produk'=>$request->jumlah_produk,
            'subtotal'=>$request->subtotal,
        ]);
        return redirect('detail_penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $detail_penjualan = DetailPenjualan::find($id);
       $detail_penjualan->delete();
       return redirect('/detail_penjualan');
    }
}
