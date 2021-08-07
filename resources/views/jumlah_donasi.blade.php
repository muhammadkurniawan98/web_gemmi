@extends('layouts.app')

@section('content')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>JUMLAH DONASI</h3>
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
                            </div>
                            <div class="card-body border-0">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p>Jumlah donasi yang terkumpul hingga hari ini adalah {{ $jumlah }} <a href="{{ route('donasi.index') }}">donasi</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>

@endsection
