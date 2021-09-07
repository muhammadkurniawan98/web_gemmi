@extends('layouts.template-app')

@section('main_content')
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <div class="col-lg-8">
                    <h2 class="portfolio-title">Donasi</h2>
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="{{asset('uploads/img/'.$donasi->bukti_donasi)}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>Informasi donasi</h3>
                    <ul>
                        <li><strong>Nama Donatur</strong>: {{ $donasi->User->nama }}</li>
                        <li><strong>Nama Penerima</strong>: {{ $donasi->nama_penerima }}</li>
                        <li><strong>Alamat</strong>: {{ $donasi->User->alamat }}</li>
                        <li><strong>No Telepon</strong>: {{ $donasi->User->no_telepon }}</li>
                        <li><strong>Jenis Donasi</strong>: {{ $donasi->jenis_donasi }}</li>
                        <li><strong>Bentuk Donasi</strong>:
                            @if($donasi->jenis_donasi == 'GNJ')
                                <ol>
                                    <li>Jenis Nasi : {{ $donasi->GNJ->jenis_gnj }}</li>
                                    <li>Tambahan Donasi : {{ $donasi->GNJ->tambahan_donasi }}</li>
                                </ol>
                            @elseif($donasi->jenis_donasi == 'Snack')
                                <ol>
                                    <li>Jenis Snack : {{ $donasi->Snack->jenis_snack }}</li>
                                    <li>Tambahan Donasi : {{ $donasi->Snack->tambahan_donasi }}</li>
                                </ol>
                            @elseif($donasi->jenis_donasi == 'Sembako')
                                <ol>
                                    <li>Jenis Sembako : {{ $donasi->Sembako->jenis_sembako }}</li>
                                    <li>Tambahan Donasi : {{ $donasi->Sembako->tambahan_donasi }}</li>
                                </ol>
                            @elseif($donasi->jenis_donasi == 'Buku')
                                <ol>
                                    <li>Jenis Buku : {{ $donasi->Buku->jenis_buku }}</li>
                                    <li>Keterangan : {{ $donasi->Buku->keterangan }}</li>
                                </ol>
                            @elseif($donasi->jenis_donasi == 'Dana')
                                <ol>
                                    <li>Jumlah Dana : {{ $donasi->Dana->jumlah_dana }}</li>
                                    <li>Bank/Rekening : {{ $donasi->Dana->bank_rekening }}</li>
                                </ol>
                            @endif
                        </li>
                        <li><strong>Jumlah Donasi</strong>: {{ $donasi->jumlah_donasi }}</li>
                        <li><strong>Tanggal</strong>: {{ $donasi->tanggal }}</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>
@endsection
