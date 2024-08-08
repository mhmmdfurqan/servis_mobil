@extends('layouts.master')
@section('title', 'Dashboard')
@section('heading', 'Cann Garage')
@section('content')
<section class="content">
        <td><h6>Halo {{ Auth::user()->name }},</h6> <h5>Selamat datang di Cann Garage Dashboard.</h5></td>
        <br>
        <br>
        <div class="row g-gs">
                <div class="col-sm-6 col-lg-3">
                <div class="card card-bordered">
                        <div class="card-inner">
                        <div class="nk-wg1">
                                <h3 class="nk-wg1-title text-primary">{{$s1}}</h3>
                                <p class="nk-wg1-text">Total Service</p>
                        </div>
                        <a href="/servis" class="link link-primary link-sm">Selengkapnya <em class="icon ni ni-chevron-right"></em></a>
                        </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                <div class="card card-bordered">
                        <div class="card-inner">
                        <div class="nk-wg1">
                                <h3 class="nk-wg1-title text-warning">{{$p1}}</h3>
                                <p class="nk-wg1-text">Total Pembayaran</p>
                        </div>
                        <a href="/pembayaran" class="link link-warning link-sm">Selengkapnya <em class="icon ni ni-chevron-right"></em></a>
                        </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                <div class="card card-bordered">
                        <div class="card-inner">
                        <div class="nk-wg1">
                                <h3 class="nk-wg1-title text-success">{{$c1}}</h3>
                                <p class="nk-wg1-text">Total Customer</p>
                        </div>
                        <a href="/customer" class="link link-success link-sm">Selengkapnya <em class="icon ni ni-chevron-right"></em></a>
                        </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                <div class="card card-bordered">
                        <div class="card-inner">
                        <div class="nk-wg1">
                                <h3 class="nk-wg1-title text-danger">{{$cs}}</h3>
                                <p class="nk-wg1-text">Total Customer Service</p>
                        </div>
                        <a href="/petugas" class="link link-danger link-sm">Selengkapnya <em class="icon ni ni-chevron-right"></em></a>
                        </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                <div class="card card-bordered">
                        <div class="card-inner">
                        <div class="nk-wg1">
                                <h3 class="nk-wg1-title text-info">{{$m1}}</h3>
                                <p class="nk-wg1-text">Total Montir</p>
                        </div>
                        <a href="/montir" class="link link-info link-sm">Selengkapnya <em class="icon ni ni-chevron-right"></em></a>
                        </div>
                </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                <div class="card card-bordered">
                        <div class="card-inner">
                        <div class="nk-wg1">
                                <h3 class="nk-wg1-title text-gray">{{$j1}}</h3>
                                <p class="nk-wg1-text">Total Jabatan</p>
                        </div>
                        <a href="/jabatan" class="link link-gray link-sm">Selengkapnya <em class="icon ni ni-chevron-right"></em></a>
                        </div>
                </div>
                </div>
        </div>
</section>
@endsection
