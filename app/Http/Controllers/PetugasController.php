<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\Jabatan;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $jab = Jabatan::all();
        return view('petugas.form',compact('jab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pet = new Petugas;
        $pet->nama_petugas = $request->nama_petugas;
        $pet->alamat_petugas = $request->alamat_petugas;
        $pet->telp_petugas = $request->telp_petugas;
        $pet->jabatan_id = $request->jabatan;
        $pet->save();

        return redirect('/petugas/');
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
