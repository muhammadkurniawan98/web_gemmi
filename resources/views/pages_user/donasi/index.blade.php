@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>DAFTAR DONASI YANG TERKUMPUL</h3>
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
                        @if(Session::has('success'))
                            <div class="alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
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
                                <div class="row">
                                    <div class="col-md-5">
                                        <form action="{{route('donasi.cari')}}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input  class="form-control" type="text" name="keyword" placeholder="cari donasi">
                                                <input class="btn btn-primary" type="submit" value="cari">
                                            </div>
                                        </form>
                                    </div>
                                    @if(auth()->check())
                                        @if(auth()->user()->admin)
                                            <div class="col-md-5">
                                                <p class="text-right">Rekapitulasi semua donasi</p>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="btn btn-primary" href="{{ route('rekap.semua') }}">Download</a>
                                            </div>
                                        @endif
                                    @endif
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
                                                            <td>{{$d->nama_donatur}}</td>
                                                            <td>{{$d->nama_penerima}}</td>
                                                            <td>{{$d->tanggal}}</td>
                                                            <td>{{$d->status}}</td>
                                                            <td>
                                                                @if(auth()->check())
                                                                    <div class="portfolio-links">
                                                                        @if(auth()->user()->admin)
                                                                            <a class="btn btn-warning" href="">Edit</a>
                                                                        @endif
                                                                        @if($d->user_id == auth()->user()->id || auth()->user()->admin)
                                                                            <a href="{{ route('donasi.detail', $d->id) }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox btn btn-outline-primary" title="Donasi Detail">Detail</a>
                                                                        @endif
                                                                        @if(auth()->check())
                                                                            @if(auth()->user()->admin)
                                                                                @if($d->status == 'belum diterima')
                                                                                    <a class="btn btn-outline-success" href="{{ route('donasi.terima', $d->id) }}">Terima</a>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                        @if($d->user_id == auth()->user()->id)
                                                                            <a class="btn btn-outline-secondary" href="{{ route('donasi.cetak', $d->id) }}">Cetak</a>
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>Belum ada donasi terkumpul</td>
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
