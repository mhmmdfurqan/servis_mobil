@extends('layouts.master')
@section('title','Edit Jabatan')
@section('heading','Edit Jabatan')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/jabatan/{{$jab->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" name="jabatann" class="form-control" value="{{$jab->jabatan}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection