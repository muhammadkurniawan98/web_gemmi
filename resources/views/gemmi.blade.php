@extends('layouts.app-gemmi')

@section('content')

    @include('layouts.include.carousel-app')

    <main id="main">
        @include('layouts.include.about-app')

        @include('layouts.include.service-app')

        @include('layouts.include.portfolio-app')
    </main>

@endsection
