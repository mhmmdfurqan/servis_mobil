<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Montir;
use App\Models\Jabatan;

class MontirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $mor = Montir::all(); //eloquent ORM
        $jab = Jabatan::all();
        return view('montir.index',compact('nomor','mor','jab'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jab = Jabatan::all();
        return view('montir.form',compact('jab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mor = new Montir;
        $mor->nama_montir = $request->nama_montir;
        $mor->alamat_montir = $request->alamat_montir;
        $mor->telp_montir = $request->telp_montir;
        $mor->jabatan_id = $request->jabatan;
        $mor->save();

        return redirect('/montir/');
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
        $mor = Montir::find($id);
        $jab = Jabatan::all();
        return view('montir.edit',compact('mor','jab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mor = Montir::find($id);
        $mor->nama_montir = $request->nama_montir;
        $mor->alamat_montir = $request->alamat_montir;
        $mor->telp_montir = $request->telp_montir;
        $mor->jabatan_id = $request->jabatan;
        $mor->save();

        return redirect('/montir/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
