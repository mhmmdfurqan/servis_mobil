@extends('layouts.master')
@section('title','Service')
@section('heading','Service List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Service</h6>
                        </div>                          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Customer</th>
                                            <th>No Polisi</th>
                                            <th>Customer Service</th>
                                            <th>Montir</th>
                                            <th>Tanggal Service</th>
                                            <th>Perbaikan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>                                         
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alex D</td>
                                            <td>BL 3231 DW</td>
                                            <td>Riski</td>
                                            <td>Adi</td>
                                            <td>19/02/2023</td>
                                            <td>suara kasar bagian mesin</td>
                                            <td>Selesai</td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm"><em class="bi bi-pencil"></em></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Rissa T</td>
                                            <td>BL 6473 GH</td>
                                            <td>Adul</td>
                                            <td>Putra</td>
                                            <td>20/04/2023</td>
                                            <td>AC kurang dingin</td>
                                            <td>Sedang dikerjakan</td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm"><em class="bi bi-pencil"></em></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ashton Cox</td>
                                            <td>BL 766 LBY</td>
                                            <td>Sigit</td>
                                            <td>Zoel</td>
                                            <td>20/04/2023</td>
                                            <td>Mobil overheat</td>
                                            <td>Sedang dikerjakan</td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm"><em class="bi bi-pencil"></em></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection