@extends('layouts.master')
@section('title','Edit Montir')
@section('heading','Edit Montir')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/montir/{{$mor->id}}/">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Montir</label>
                    <input type="text" name="nama_montir" class="form-control" value="{{$mor->nama_montir}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Montir</label>
                    <input type="text" name="alamat_montir" value="{{$mor->alamat_montir}}" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                    <input type="text" name="telp_montir" value="{{$mor->telp_montir}}" class="form-control" id="exampleInputPassword1">
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
            </form>
        </div>
        </div>
@endsection