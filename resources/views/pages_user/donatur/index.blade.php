@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>DAFTAR DONATUR</h3>
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
                                                <a id="add" href="{{route('donatur.create')}}" class="btn btn-outline-success"><i class="icofont-plus"></i></a>
                                            </div>
                                            <div class="col-md-11 d-flex align-items-center justify-content-center">
                                                <label for="add">
                                                    <h5>DAFTAR SEBAGAI DONATUR</h5>
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="card-body border-0">
                                <div class="row">
                                    <div class="col-md-5">
                                        <form action="{{route('donatur.cari')}}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input  class="form-control" type="text" name="keyword" placeholder="cari donatur">
                                                <input class="btn btn-primary" type="submit" value="cari">
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
                                                <th></th>
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
                                                            <td>
                                                                @if(auth()->check())
                                                                    @if(auth()->user()->admin)
                                                                        <a class="btn btn-warning" href="{{ route('donatur.edit', $d->id) }}">Edit</a>
                                                                    @endif
                                                                @endif
                                                            </td>
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
