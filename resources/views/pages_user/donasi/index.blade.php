@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>DAFTAR DONASI YANG TERKUMPUL</h3>
                    <ol>
                        <li><a href="/">Kembali</a></li>
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
                            </div>
                            <div class="card-body border-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>NO</th>
                                                    <th>DONATUR</th>
                                                    <th>PENERIMA</th>
                                                    <th>ALAMAT</th>
                                                    <th>JENIS</th>
                                                    <th>BUKTI</th>
                                                    <th>TANGGAL</th>
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
                                                            <td>{{$d->alamat}}</td>
                                                            <td>{{$d->jenis_donasi}}</td>
                                                            <td>
                                                                <a href="{{asset('uploads/img/'.$d->bukti_donasi)}}" data-gall="portfolioGallery" class="venobox" title="{{ $d->bukti_donasi }}">
                                                                    <i class="icofont-picture"></i>
                                                                </a>
                                                            </td>
                                                            <td>{{$d->tanggal}}</td>
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
