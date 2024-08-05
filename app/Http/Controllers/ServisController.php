<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servis;
use App\Models\Customer;
use App\Models\Petugas;
use App\Models\Montir;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $cus = Customer::all();
        $pet = Petugas::all();
        $ser = Servis::all();
        $mor = Montir::all();
        return view('service.index',compact('nomor','cus','pet','ser','mor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cus = Customer::all();
        $pet = Petugas::all();
        $ser = Servis::all();
        $mor = Montir::all();
        return view('service.form',compact('cus','pet','ser','mor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ser = new Servis;
        $ser->customer_id = $request->customer_id;
        $ser->no_polisi = $request->no_polisi;
        $ser->petugas_id = $request->petugas_id;
        $ser->tanggal_servis = $request->tanggal_servis;
        $ser->perbaikan = $request->perbaikan;
        $ser->status = $request->status;
        $ser->save();

        return redirect('/servis/');
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
