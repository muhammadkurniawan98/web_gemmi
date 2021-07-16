@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ __('PENDAFTARAN DONATUR') }}</h2>
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
                            <br>
                            <div class="card-body border-0">
                                @if(!$status)
                                <form role="form" method="POST" id="form_donatur" action="{{ route('donatur.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap" autofocus>

                                            @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                        <div class="col-md-6">
                                            <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Status" autofocus>

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">{{ __('Tempat, Tanggal Lahir') }}</label>

                                        <div class="col-md-3">
                                            <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir" autofocus>
                                            @error('tempat_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <input id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{old('tanggal_lahir')}}" placeholder="Tanggal Lahir">
                                            @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <script>
                                                $('#tanggal_lahir').datepicker({
                                                    format: 'yyyy-mm-dd',
                                                    language: 'id',
                                                });
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_telepon" class="col-md-4 col-form-label text-md-right">{{ __('No Telepon') }}</label>

                                        <div class="col-md-6">
                                            <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="Nomor Telepon/HP" autofocus>

                                            @error('no_telepon')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>

                                        <div class="col-md-6">
                                            <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}" placeholder="Pekerjaan" autofocus>

                                            @error('pekerjaan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal" class="col-md-4 col-form-label text-md-right">{{__('Tanggal')}}</label>
                                        <div class="col-md-6">
                                            <input id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{old('tanggal')}}" placeholder="Tanggal Pendaftaran">
                                            @error('tanggal')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <script>
                                                $('#tanggal').datepicker({
                                                    format: 'yyyy-mm-dd',
                                                    language: 'id',
                                                    startDate: '-3d',
                                                });
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <input type="button" name="btn" value="Submit" data-toggle="modal" data-target="#confirm-submit-donatur" class="btn btn-primary" />
                                        </div>
                                    </div>
                                    <div class="modal fade" id="confirm-submit-donatur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    Pesan
                                                </div>
                                                <div class="modal-body">
                                                    PASTIKAN SEMUA INFORMASI YANG ANDA BERIKAN BENAR.
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <a id="submit" class="btn btn-success success">Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    $('#submit').click(function(){
                                        /* when the submit button in the modal is clicked, submit the form */
                                        $('#form_donatur').submit();
                                    });
                                </script>
                                @else
                                    <label>ANDA SUDAH MENDAFTAR SEBAGAI DONATUR.</label>
                                @endif
                            </div>
                            <div class="card-footer border-0">
                                <div class="row d-flex justify-content-around">
                                    <a class="btn avatar-dropdown-btn" href="{{route('tamu.create')}}">ISI BUKU TAMU</a>
                                    <a class="btn avatar-dropdown-btn" href="{{route('donatur.create')}}">PENDAFTARAN DONATUR</a>
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
