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
                                            <th>No Plat</th>
                                            <th>Customer Service</th>
                                            <th>Montir</th>                                            
                                            <th>Tanggal Service</th>
                                            <th>Diagnosa</th>
                                            <th>Status</th>
                                            <th>Aksi</th>                                         
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                    @forelse ($ser as $item)                                    
                                        <tr>
                                            <td>{{$nomor++}}</td>
                                            <td>{{$item->customers->nama_customer}}</td>
                                            <td>{{$item->no_polisi}}</td>
                                            <td>{{$item->petugas->nama_petugas}}</td>
                                            <td>{{$item->montir->nama_montir}}</td>                                                                                    
                                            <td>{{$item->tanggal_servis}}</td>
                                            <td>{{$item->perbaikan}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>
                                            <a href="/servis/edit/{{$item->id}}" class="btn btn-info btn-sm"><em class="bi bi-pencil"></em></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"><em class="bi bi-trash"></em></button>
                                            <div class="modal fade" tabindex="-1" id="#">    
                                                    <div class="modal-dialog" role="document">        
                                                        <div class="modal-content">            
                                                            <a href="servis" class="close" data-dismiss="modal" aria-label="Close">                
                                                                <em class="icon ni ni-cross"></em>            
                                                            </a>            
                                                            <div class="modal-header">                
                                                                <h5 class="modal-title">Peringatan!</h5>            
                                                            </div>            
                                                            <div class="modal-body">                
                                                                Yakin Data Servis {{$item->nama_customer}} di Hapus?
                                                            </div>            
                                                            <div class="modal-footer bg-light">                
                                                            <a href="servis" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                                            <form action="/servis/{{$item->id}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>                                                                   
                                                            </div>        
                                                        </div>    
                                                    </div>
                                                </div>
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