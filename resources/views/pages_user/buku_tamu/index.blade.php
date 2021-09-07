@extends('layouts.app')

@section('content')

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h3>DAFTAR TAMU HARI INI</h3>
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
                                                <a id="add" href="{{route('tamu.create')}}" class="btn btn-outline-success"><i class="icofont-plus"></i></a>
                                            </div>
                                            <div class="col-md-11 d-flex align-items-center justify-content-center">
                                                <label for="add">
                                                    <h5>ISI BUKU TAMU</h5>
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="card-body border-0">
                                <div class="row">
                                    <div class="col-md-5">
                                        <form action="{{route('tamu.cari')}}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input  class="form-control" type="text" name="keyword" placeholder="cari tamu">
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
                                                <th>ALAMAT</th>
                                                <th>TANGGAL</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($i = 1 + (($buku_tamu->currentPage()>=1?$buku_tamu->currentPage():1) - 1) * $buku_tamu->perPage())
                                                @if(count($buku_tamu) > 0)
                                                    @foreach($buku_tamu as $b)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$b->User->nama}}</td>
                                                            <td>{{$b->User->alamat}}</td>
                                                            <td>{{$b->tanggal}}</td>
                                                            <td>
                                                                @if(auth()->check())
                                                                    @if(auth()->user()->admin)
                                                                        <a class="btn btn-warning" href="{{ route('tamu.edit', $b) }}">Edit</a>
                                                                    @endif
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>Belum ada tamu yang berkunjung hari ini</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                {{$buku_tamu->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
