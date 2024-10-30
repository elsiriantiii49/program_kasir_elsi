@extends('layouts.master')
@section('title','Penjualan' )
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Kembali</a>

                        </div>
                        <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf 
                        <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Penjualan</label>
                                    <input 
                                        type="date"
                                        class="form-control"
                                        name="tanggal_penjualan"
                                        id=""
                                        value="{{ old('tanggal_penjualan') }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    @error('tanggal_penjualan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Total Harga</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="total_harga"
                                        id=""
                                        value="{{ old('total_harga') }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    @error('total_harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf 
                        <div class="mb-3">
                                    <label for="" class="form-label">Id Pelanggan</label>
                                    <select name="id_pelanggan" id="">
                                        <option value="">Pilih Pelanggan</option>
                                        @foreach($pelanggan as $pelanggan)
                                        <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                                        @endforeach
                                    </select>
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