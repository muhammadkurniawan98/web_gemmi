@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ __('BERI DONASI') }}</h2>
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
                            <div class="card-body border-0">
                                @if($status_tamu && $status_donatur)
                                <form role="form" method="POST" id="form_donasi" action="{{ route('donasi.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nama_donatur" class="col-md-4 col-form-label text-md-right">{{ __('Nama Donatur') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama_donatur" type="text" class="form-control @error('nama_donatur') is-invalid @enderror" name="nama_donatur" value="{{ old('nama_donatur') }}" autofocus>

                                            @error('nama_donatur')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_penerima" class="col-md-4 col-form-label text-md-right">{{ __('Nama Penerima') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama_penerima" type="text" class="form-control @error('nama_penerima') is-invalid @enderror" name="nama_penerima" value="{{ old('nama_penerima') }}" autofocus>

                                            @error('nama_penerima')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                                        <div class="col-md-6">
                                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autofocus>

                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_telepon" class="col-md-4 col-form-label text-md-right">{{ __('No Telepon') }}</label>

                                        <div class="col-md-6">
                                            <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" autofocus>

                                            @error('no_telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jenis_donasi" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Donasi') }}</label>

                                        <div class="col-md-6">
                                            <select id="jenis_donasi" name="jenis_donasi" onselect="" class="form-control">
                                                <option>Barang</option>
                                                <option>Uang</option>
                                                <option>Makanan</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="bukti_donasi" class="col-md-4 col-form-label text-md-right">{{ __('Bukti Donasi') }}</label>

                                        <div class="col-md-6">

                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input id="bukti_donasi" name="bukti_donasi" type="file" class="form-control  @error('bukti_donasi') is-invalid @enderror custom-file-input" value="{{old('bukti_donasi')}}" onchange="changeLabel()">
                                                    <label id="label_cover" class="custom-file-label" for="bukti_donasi" aria-describedby="bukti_donasi">
                                                        @error('bukti_donasi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        {{__('Pilih File')}}
                                                    </label>
                                                    <script>
                                                        function changeLabel(){
                                                            const file = document.querySelector('#bukti_donasi');
                                                            const label = document.querySelector('.custom-file-label');
                                                            label.textContent = file.files[0].name === ''?'Pilih File':file.files[0].name;
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal" class="col-md-4 col-form-label text-md-right">{{__('Tanggal')}}</label>
                                        <div class="col-md-6">
                                            <input id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{old('tanggal')}}">
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
                                            <input type="button" name="btn" value="Submit" data-toggle="modal" data-target="#confirm-submit-donasi" class="btn btn-primary" />
                                        </div>
                                    </div>
                                    <div class="modal fade" id="confirm-submit-donasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    Pesan
                                                </div>
                                                <div class="modal-body">
                                                    TERIMAKASIH TELAH MELAKUKAN DONASI.
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
                                        $('#form_donasi').submit();
                                    });
                                </script>
                                @else
                                    <label>ANDA HARUS MELAKUKAN PENDAFTARAN DONATUR SETELAH ITU BUKU TAMU LALU PEMBERIAN DONASI.</label>
                                @endif
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
