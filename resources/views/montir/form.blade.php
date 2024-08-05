@extends('layouts.master')
@section('title','Form Montir')
@section('heading','Form Montir')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/montir/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Montir</label>
                    <input type="text" name="#" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Montir</label>
                    <input type="text" name="#" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                    <input type="text" name="#" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                    <input type="text" name="#" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection