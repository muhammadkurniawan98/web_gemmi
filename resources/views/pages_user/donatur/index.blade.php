@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>PENDAFTAR DONATUR</h3>
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
                                        <a id="add" href="{{route('donatur.create')}}" class="btn btn-outline-success"><i class="icofont-plus"></i></a>
                                    </div>
                                    <div class="col-md-11 d-flex align-items-center justify-content-center">
                                        <label for="add">
                                            <h5>DAFTAR SEBAGAI DONATUR</h5>
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
                                                <th>NAMA</th>
                                                <th>STATUS</th>
                                                <th>TTL</th>
                                                <th>TELEPON</th>
                                                <th>PEKERJAAN</th>
                                                <th>TANGGAL DAFTAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($i = 1 + (($donatur->currentPage()>=1?$donatur->currentPage():1) - 1) * $donatur->perPage())
                                                @if(count($donatur) > 0)
                                                    @foreach($donatur as $d)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$d->nama}}</td>
                                                            <td>{{$d->status}}</td>
                                                            <td>{{$d->ttl}}</td>
                                                            <td>{{$d->no_telepon}}</td>
                                                            <td>{{$d->pekerjaan}}</td>
                                                            <td>{{$d->tanggal}}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>Belum ada donatur yang mendaftar</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0">
                                {{$donatur->links('pagination::bootstrap-4')}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>

@endsection