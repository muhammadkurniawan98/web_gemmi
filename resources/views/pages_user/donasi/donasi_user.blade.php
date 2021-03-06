@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>DAFTAR DONASI SAYA</h3>
                    <ol>
                        <li><a href="/">Kembali ke beranda</a></li>
                    </ol>
                </div>

            </div>
        </section>

        <section id="service" class="services">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <div class="card border-0">
                            <div class="card-header border-0">
                                @if(auth()->check())
                                    @if(!auth()->user()->admin)
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-1">
                                                <a id="add" href="{{route('donasi.create')}}" class="btn btn-outline-success"><i class="icofont-plus"></i></a>
                                            </div>
                                            <div class="col-md-11 d-flex align-items-center justify-content-center">
                                                <label for="add">
                                                    <h5>Beri Donasi</h5>
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="card-body border-0">
                                <div class="row justify-content-between">
                                    <div class="col-md-5">
                                        <form action="{{route('donasi.cari')}}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input  class="form-control" type="text" name="keyword" placeholder="cari donasi">
                                                <input class="btn btn-primary" type="submit" value="cari">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="text-right">Rekapitulasi donasi anda</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn-primary" href="{{ route('rekap.user') }}">Download</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th>NO</th>
                                                <th>DONATUR</th>
                                                <th>PENERIMA</th>
                                                <th>TANGGAL</th>
                                                <th>STATUS</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($i = 1 + (($donasi->currentPage()>=1?$donasi->currentPage():1) - 1) * $donasi->perPage())
                                                @if(count($donasi) > 0)
                                                    @foreach($donasi as $d)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$d->User->nama}}</td>
                                                            <td>{{$d->nama_penerima}}</td>
                                                            <td>{{$d->tanggal}}</td>
                                                            <td>{{$d->status}}</td>
                                                            <td>
                                                                <div class="portfolio-links">
                                                                    <a href="{{ route('donasi.detail', $d->id) }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox btn btn-outline-primary" title="Donasi Detail">Detail</a>
                                                                    <a class="btn btn-outline-secondary" href="{{ route('donasi.cetak', $d->id) }}">Cetak</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>Belum ada donasi yang anda berikan</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0">
                                {{$donasi->links('pagination::bootstrap-4')}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>

@endsection
