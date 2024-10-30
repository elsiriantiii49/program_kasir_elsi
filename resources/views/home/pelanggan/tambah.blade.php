@extends('layouts.master')
@section('title','Pelanggan' )
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Kembali</a>

                        </div>
                        <div class="card-body">
                            <form action="/pelanggan/simpan" method="post">
                                @csrf 
                        <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_pelanggan"
                                        id=""
                                        value="{{ old('nama_pelanggan') }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_pelanggan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
                                        value="{{ old('alamat') }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">No Telp</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id=""
                                        value="{{ old('no_telp') }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    @error('no_telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
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