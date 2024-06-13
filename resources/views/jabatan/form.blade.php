@extends('layouts.master')
@section('title','Form Jabatan')
@section('heading','Form Jabatan')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/jabatan/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" name="#" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection