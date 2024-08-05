@extends('layouts.master')
@section('title','Edit Cs')
@section('heading','Edit Cs')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/petugas/{{$pet->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Cs</label>
                    <input type="text" name="nama_petugas" class="form-control" value="{{$pet->nama_petugas}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Cs</label>
                    <input type="text" name="alamat_petugas" class="form-control" value="{{$pet->alamat_petugas}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                    <input type="text" name="telp_petugas" class="form-control" value="{{$pet->telp_petugas}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                    <select name="jabatan" class="form-control" id="">
                        <option value="">-Pilih Jabatan-</option>
                        @foreach ($jab as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->jabatan}}</option>
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
            </form>
        </div>
        </div>
@endsection