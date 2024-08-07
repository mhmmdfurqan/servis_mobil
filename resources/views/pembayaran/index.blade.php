@extends('layouts.master')
@section('title','Pemabayaran')
@section('heading','Pembayaran List')

@section('content')
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
                        </div>                          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Customer</th>
                                            <th>No Plat</th> 
                                            <th>Diagnosa</th>
                                            <th>Tanggal Pembayaran</th>                                             
                                            <th>Harga</th>
                                            <th>Bayar</th>                                            
                                            <th>Kembalian</th>
                                            <th>Status</th>
                                            <th>Aksi</th>                                        
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                        @forelse ($pem as $item)
                                        <tr>
                                            <td>{{$nomor++}}</td>
                                            <td>{{$item->servis->customers->nama_customer}}</td>
                                            <td>{{$item->servis->no_polisi}}</td>
                                            <td>{{$item->servis->perbaikan}}</td>
                                            <td>{{$item->tanggal_pembayaran}}</td>                                        
                                            <td>{{$item->harga}}</td>
                                            <td>{{$item->bayar}}</td>
                                            <td>{{$item->kembalian}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>                                                                                        
                                            <a href="/pembayaran/cetak/{{$item->id}}" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#cetakModal" data-id="{{$item->id}}">CETAK</a>                                                                                                                                   
                                            <div class="modal fade" id="cetakModal" tabindex="-1" aria-labelledby="cetakModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="cetakModalLabel">Konfirmasi Cetak</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin mencetak data ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="button" class="btn btn-primary" id="confirmCetak">Cetak</button>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                    
                                            <script>
                                                $(document).ready(function() {
                                                let printId;

                                                $('#cetakModal').on('show.bs.modal', function (event) {
                                                    let button = $(event.relatedTarget); // Button that triggered the modal
                                                    printId = button.data('id'); // Extract info from data-* attributes
                                                    console.log("ID to print: ", printId); // Log the ID to ensure it's correct
                                                    $('#confirmCetak').data('id', printId);  // Set the ID on the confirm button
                                                });

                                                $('#confirmCetak').on('click', function () {
                                                    let id = $(this).data('id');;
                                                    window.open('pembayaran/cetak/' + id + '_blank');
                                                });
                                                });
                                            </script>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr> 
                                        @empty

                                        @endforelse                                                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    
@endsection

