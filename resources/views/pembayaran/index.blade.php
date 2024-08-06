@extends('layouts.master')
@section('title','Pemabayaran')
@section('heading','Pembayaran List')

@section('content')
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
                                            <th>Status</th> 
                                            <th>Harga</th>                                            
                                            <th>Aksi</th>                                        
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alex D</td>
                                            <td>BL 55 AMM</td>                                            
                                            <td>Ac kurang dingin</td>
                                            <td>2023-02-18</td>
                                            <td>Selesai</td>
                                            <td></td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm">CETAK</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vanessa</td>
                                            <td>BL 88 FA</td>                                           
                                            <td>Suara kasar pada mesin</td>
                                            <td>2023-02-18</td>
                                            <td>Selesai</td>
                                            <td></td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm">CETAK</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cleaa</td>
                                            <td>BL 805 AMM</td>                                            
                                            <td>Overhead</td>
                                            <td>2023-02-18</td>
                                            <td>Selesai</td>
                                            <td></td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm">CETAK</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection