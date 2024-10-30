@extends('layouts.master')
@section('tittle','user')
@section('content')

<div class="content-wrapper">
    <div class="section content">
        <div class="container-fluid">
            <div class="row">
                <div class="col12">
                    <div class="col12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Halaman Edit Data User</h3>
                                <a class="btn btn-warning" href="/user">Kembali</a>
                                <div class="card-body">
                                    <form action="/user/{{$user->id }}/update"method="post">
                                    @csrf
                                  <div class="mb-3">
                                    <label for="" class="form-label">Nama User</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        value="{{ $user ->name }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id=""
                                        value="{{ $user ->email }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id=""
                                        value="{{ $user ->password }}"
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