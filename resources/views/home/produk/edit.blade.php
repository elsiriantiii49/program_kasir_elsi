@extends('layouts.master')
@section('tittle','produk')
@section('content')

<div class="content-wrapper">
    <div class="section content">
        <div class="container-fluid">
            <div class="row">
                <div class="col12">
                    <div class="col12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Halaman Edit Data Produk</h3>
                                <a class="btn btn-warning" href="/produk">Kembali</a>
                                <div class="card-body">
                                    <form action="/produk/{{$produk->id }}/update"method="post">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        value="{{ $produk ->gambar }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Nama produk</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        id=""
                                        value="{{ $produk ->nama_produk }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        value="{{ $produk ->harga }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="stok"
                                        id=""
                                        value="{{ $produk ->stok }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <button class="btn btn-primary"type="submit">Simpan</button>
                                  </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection