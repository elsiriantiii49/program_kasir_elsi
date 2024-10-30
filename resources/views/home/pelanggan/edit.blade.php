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
                            <h3>Halaman Edit Data Pelanggan</h3>
                            <a href="btn btn-primary" href="/pelanggan/tambah">Kembali</a>

                        </div>
                        <div class="card-body">
                        <form action="/pelanggan/{{ $pelanggan->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_pelanggan"
                                        id=""
                                        value="{{ $pelanggan->nama_pelanggan }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpid" class="form-text text-muted"></small>

                                    <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
                                        value="{{ $pelanggan->alamat }}"
                                        aria-describedy="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpid" class="form-text text-muted"></small>

                                    <div class="mb-3">
                                    <label for="" class="form-label">No Telp</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id=""
                                        value="{{ $pelanggan->no_telp }}"
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