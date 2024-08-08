<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servis;
use App\Models\Customer;
use App\Models\Petugas;
use App\Models\Montir;
use App\Models\Jabatan;
use App\Models\Pembayaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $c1 = Customer::all()->count();
        $c1 = Customer::all()->where('nama_customer')->count();

        $cs = Petugas::all()->count();
        $cs = Petugas::all()->where('nama_petugas')->count();

        $m1 = Montir::all()->count();
        $m1 = Montir::all()->where('nama_montir')->count();

        $j1 = Jabatan::all()->count();
        $j1 = Jabatan::all()->where('jabatan')->count();

        $s1 = Servis::all()->count();
        $s1 = Servis::all()->where('no_polisi')->count();

        $p1 = Pembayaran::all()->count();
        $p1 = Pembayaran::all()->where('status')->count();
        return view('home',compact('c1','cs','m1','j1','s1','p1'));
    }
}
