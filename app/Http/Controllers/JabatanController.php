<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $jab = Jabatan::all(); //eloquent ORM
        return view('jabatan.index',compact('nomor','jab'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jab = new Jabatan;
        $jab->jabatan = $request->jabatann;       
        $jab->save();

        return redirect('/jabatan/');
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
        $jab = Jabatan::find($id);
        return view('jabatan.edit',compact('jab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jab = Jabatan::find($id);
        $jab->jabatan = $request->jabatann;
        $jab->save();

        return redirect ('/jabatan/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
