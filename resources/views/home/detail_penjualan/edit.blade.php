@extends('layouts.master')
@section('title','detail_penjualan' )
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Detail Penjualan</h3>
                            <a href="btn btn-primary" href="/detail_penjualan/tambah">Kembali</a>

                        </div>
                        <div class="card-body">
                        <form action="/detail_penjualan/{{ $detail_penjualan->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                    <label for="" class="form-label">Id Penjualan</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="id_penjualan"
                                        id="id_penjualan"
                                        value="{{ $detail_penjualan->id_penjualan }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpid" class="form-text text-muted"></small>

                                    <div class="mb-3">
                                    <label for="" class="form-label">id_produk</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="id_produk"
                                        id="id_produk"
                                        value="{{ $detail_penjualan->id_produk }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpid" class="form-text text-muted"></small>

                                    <div class="mb-3">
                                    <label for="" class="form-label">Jumlah Produk</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="jumlah_produk"
                                        id=""
                                        value="{{ $detail_penjualan->jumlah_produk }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpid" class="form-text text-muted"></small>

                                    <div class="mb-3">
                                    <label for="" class="form-label">Subtotal</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="subtotal"
                                        id=""
                                        value="{{ $detail_penjualan->subtotal }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpid" class="form-text text-muted"></small>

                                    <button class="btn btn-primary" type="submit">Update</button>


                        </form>

                        </div>
                       

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection