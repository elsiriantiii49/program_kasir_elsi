@extends('layouts.master')
@section('title','produk' )
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Produk</h3>
                            <a class="btn btn-primary" href="/produk">Kembali</a>

                        </div>
                        <div class="card-body">
                            <form action="/produk/simpan" method="post" encytype="multipart/form-data">
                                @csrf 
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input 
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />

                                    @error('gambar')
                                    <div class="alert alert-denger mt-2">
                                        {{$message}}
                                    </div>

                                    @enderror
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Produk</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        id=""
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />

                                    @error('nama_produk')
                                    <div class="alert alert-denger mt-2">
                                        {{$message}}
                                    </div>

                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />

                                    @error('harga')
                                    <div class="alert alert-denger mt-2">
                                        {{$message}}
                                    </div>

                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">stok</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="stok"
                                        id=""
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />

                                    @error('stok')
                                    <div class="alert alert-denger mt-2">
                                        {{$message}}
                                    </div>

                                    @enderror

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