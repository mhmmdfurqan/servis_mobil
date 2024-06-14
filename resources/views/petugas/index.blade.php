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
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Alex D</td>
                                            <td>Surabaya</td>
                                            <td>111111111111</td>
                                            <td>Montir 1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>Surabaya</td>
                                            <td>222222222222</td>
                                            <td>Montir 2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ashton Cox</td>                                                                                  
                                            <td>Surabaya</td>
                                            <td>333333333333</td>
                                            <td>Montir 3</td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection