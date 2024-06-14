@extends('layouts.master')
@section('title','Edit Petugas')
@section('heading','Edit Petugas')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/petugas/{{$pet->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                    <input type="text" name="nama_petugas" class="form-control" value="{{$pet->nama_petugas}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Petugas</label>
                    <input type="text" name="alamat_petugas" class="form-control" value="{{$pet->alamat_petugas}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                    <input type="text" name="telp_petugas" class="form-control" value="{{$pet->telp_petugas}}" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                    <select name="jabatan" class="form-control" id="">
                        @foreach ($jab as $item)
                        <option value="{{$item->id}}">{{$item->kode}} - {{$item->jabatan}}</option>
                        @endforeach                    
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection