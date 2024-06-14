@extends('layouts.master')
@section('title','Petugas')
@section('heading','Petugas List')

@section('content')
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
                        </div>                          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Petugas</th>
                                            <th>Alamat Petugas</th>
                                            <th>Nomor Telepon</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>                                                                                
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                        @forelse ($pet as $item)
                                        <tr>
                                            <td>{{$nomor++}}</td>
                                            <td>{{$item->nama_petugas}}</td>
                                            <td>{{$item->alamat_petugas}}</td>
                                            <td>{{$item->telp_petugas}}</td>
                                            <td>{{$item->jabatans->jabatan}}</td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-sm"><em class="bi bi-pencil"></em></a>
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