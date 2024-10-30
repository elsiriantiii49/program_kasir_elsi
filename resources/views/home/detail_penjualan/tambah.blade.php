@extends('layouts.master')
@section('title','Detail Penjualan' )
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/detail_penjualan/tambah">Kembali</a>

                        </div>
                        <div class="card-body">
                            <form action="/detail_penjualan/simpan" method="post">
                                @csrf 
                        <div class="mb-3">
                                    <label for="" class="form-label">Id Penjualan</label>
                                    <select name="id_penjualan">
                                        <option value="">Pilih Penjualan</option>
                                    @foreach($detail_penjualan as $detail_penjualan)
                                        <option value="{{$detail_penjualan->id}}">{{$detail_penjualan->nama_penjualan}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Id Produk</label>
                                    <select name="id_produk" id="">
                                        <option value="">Pilih Produk</option>
                                    @foreach($produk as $produk)
                                        <option value="{{$produk->id}}">{{$produk->nama_produk}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah Produk</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="jumlah_produk"
                                        id="jumlah_produk"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Subtotal</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="subtotal"
                                        id="subtotal"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection