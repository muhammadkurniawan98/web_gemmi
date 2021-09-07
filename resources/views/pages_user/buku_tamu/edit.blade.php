@extends('layouts.app')

@section('content')

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('EDIT BUKU TAMU') }}</h2>
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
                            <form method="POST" action="{{ route('tamu.update', $buku_tamu->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">

                                <div class="form-group row">
                                    <label for="tanggal" class="col-md-4 col-form-label text-md-right">{{__('Tanggal')}}</label>
                                    <div class="col-md-6">
                                        <input id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ $buku_tamu->tanggal }}" placeholder="Tanggal Kunjungan">
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
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
