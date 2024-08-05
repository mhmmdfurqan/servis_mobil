@extends('layouts.master')
@section('title','Form Service')
@section('heading','Form Service')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/servis/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                    <select name="customer_id" class="form-control" id="">
                        <option value="">-Pilih Nama-</option>
                        @foreach ($cus as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama_customer}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Polisi</label>
                    <input type="text" name="no_polisi" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Customer Service</label>
                    <select name="petugas_id" class="form-control" id="">
                        <option value="">-Pilih Nama-</option>
                        @foreach ($pet as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama_petugas}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Montir</label>
                    <select name="montir_id" class="form-control" id="">
                        <option value="">-Pilih Nama-</option>
                        @foreach ($mor as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama_montir}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Service</label>
                    <input type="date" name="tanggal_servis" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Diagnosa</label>
                    <input type="text" name="perbaikan" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Status</label>
                    <select name="status" class="form-control" id="exampleInputPassword1">
                        <option value="sedang diproses">sedang proses</option>                        
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection