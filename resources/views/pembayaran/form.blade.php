@extends('layouts.master')
@section('title', 'Form Pembayaran')
@section('heading', 'Form Pembayaran')

@section('content')
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
<div class="card">
    <div class="card-body">
        <form method="POST" action="/pembayaran/store/">
            @csrf
            <div class="mb-3">
                <label for="servis_id" class="form-label">Kode Servis</label>
                <select name="servis_id" class="form-control" id="servis_id">
                    <option value="">Pilih Kode Servis</option>
                    @foreach ($ser as $item)
                    <option value="{{ $item->id }}" data-no_polisi="{{ $item->no_polisi }}" data-perbaikan="{{ $item->perbaikan }}" data-status="{{ $item->status }}">
                        {{ $item->id}}
                    </option>
                    @endforeach
                </select>

                <label for="no_polisi" class="form-label">No Plat</label>
                <input type="text" id="no_polisi" class="form-control" name="no_polisi" readonly>

                <label for="perbaikan" class="form-label">Diagnosa</label>
                <input type="text" id="perbaikan" class="form-control" name="perbaikan" readonly>

                <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                <input type="date" name="tanggal_pembayaran" class="form-control" value="{{ date('Y-m-d') }}" id="tanggal_pembayaran" readonly>

                <label for="status" class="form-label">Status</label>
                <input type="text" id="status" class="form-control" name="status" value="selesai" readonly>

                <label for="harga" class="form-label">Harga:</label>
                <input type="text" id="harga" class="form-control" name="harga">

                <label for="bayar" class="form-label">Bayar:</label>
                <input type="number" id="bayar" class="form-control" name="bayar">

                <label for="kembalian" class="form-label">Kembalian:</label>
                <input type="text" id="kembalian" class="form-control" name="kembalian" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

        <script>
            $(document).ready(function() {
                $('#servis_id').change(function() {
                    var selected = $(this).find('option:selected');
                    $('#no_polisi').val(selected.data('no_polisi'));
                    $('#perbaikan').val(selected.data('perbaikan'));                    
                    $('#status').val('selesai');
                });

                $('#bayar').keyup(function() {
                    var harga = parseFloat($('#harga').val()) || 0;
                    var bayar = parseFloat($(this).val()) || 0;
                    var kembalian = bayar - harga;
                    $('#kembalian').val(kembalian.toFixed(2));
                });
            });
        </script>
    </div>
</div>
@endsection
