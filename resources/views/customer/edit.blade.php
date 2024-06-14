@extends('layouts.master')
@section('title','Edit Customer')
@section('heading','Edit Customer')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/customer/{{$cus->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                    <input type="text" name="nama_customer" value="{{$cus->nama_customer}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Customer</label>
                    <input type="text" name="alamat_customer" value="{{$cus->alamat_customer}}" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                    <input type="text" name="telp_customer" value="{{$cus->telp_customer}}" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
            </form>
        </div>
        </div>
@endsection