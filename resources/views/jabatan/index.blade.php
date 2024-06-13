@extends('layouts.master')
@section('title','Jabatan')
@section('heading','Jabatan List')

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Jabatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jabatan</th>                                                                                      
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>                                            
                                            <td>Montir 1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Montir 2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Montir 3</td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection