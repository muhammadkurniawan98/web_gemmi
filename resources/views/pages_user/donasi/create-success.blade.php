@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2></h2>
                    <ol>
                        <li><a href="/">Kembali ke beranda</a></li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="service" class="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-header border-0">

                            </div>
                            <div class="card-body border-0">
                                <div class="row d-flex justify-content-center">
                                    <label>TERIMAKASIH SUDAH MELAKUKAN PEMBERIAN DONASI KEPADA KAMI.</label>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <div class="row d-flex justify-content-around">
                                    <a class="btn avatar-dropdown-btn" href="{{route('donatur.create')}}">PENDAFTARAN DONATUR</a>
                                    <a class="btn avatar-dropdown-btn" href="{{route('tamu.create')}}">ISI BUKU TAMU</a>
                                    <a class="btn avatar-dropdown-btn" href="{{route('donasi.create')}}">PEMBERIAN DONASI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
