@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ __('ISI BUKU TAMU') }}</h2>
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
                                @if(!$status)
                                <form role="form" method="POST" id="form_tamu" action="{{ route('tamu.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-md-4 col-form-label text-md-right">{{__('Tanggal')}}</label>
                                        <div class="col-md-6">
                                            <input id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{old('tanggal')}}" placeholder="Tanggal Kunjungan">
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

                                    <div class="form-group row">
                                        <label for="kepentingan" class="col-md-4 col-form-label text-md-right">{{ __('Kepentingan') }}</label>

                                        <div class="col-md-6">
                                            <select id="kepentingan" name="kepentingan" onselect="" class="form-control selectpicker">
                                                <option>Melihat Informasi</option>
                                                <option>Memberi Donasi</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <input type="button" name="btn" value="Submit" data-toggle="modal" data-target="#confirm-submit-tamu" class="btn btn-primary" />
                                        </div>
                                    </div>
                                    <div class="modal fade" id="confirm-submit-tamu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    Pesan
                                                </div>
                                                <div class="modal-body">
                                                    Selamat Datang di website GEMMI
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
                                        $('#form_tamu').submit();
                                    });
                                </script>
                                @else
                                    <label>Anda sudah mengisi buku tamu hari ini. Silahkan pilih kepentingan anda.</label>
                                    <label>Apa anda ingin memberikan <a href="{{ route('donasi.create') }}">donasi</a> atau melihat <a href="/">informasi</a>?</label>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
