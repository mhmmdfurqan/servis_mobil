<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Servis;
use App\Models\Customer;
use App\Models\Petugas;
use App\Models\Montir;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pembayaran.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $ser = Servis::where('status', 'pending')->get();
        $cus = Customer::all();
        $pet = Petugas::all();
        $ser = Servis::all();
        $mor = Montir::all();
        $pem = Pembayaran::all();
        return view('pembayaran.form',compact('cus','pet','ser','mor','pem'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pem = new Pembayaran;
        $pem->servis_id = $request->servis_id;        
        $pem->no_polisi = $request->no_polisi;        
        $pem->perbaikan = $request->perbaikan;
        $pem->tanggal_pembayaran = now();
        $pem->harga = $request->harga;
        $pem->bayar = $request->bayar;
        $pem->kembalian = $request->kembalian;
        $pem->status = 'selesai';
        $pem->save();
        
        $ser = Servis::find($request->servis_id);
        $ser->status = 'selesai';
        $ser->save();
        

        return redirect('/pembayaran/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
