@extends('layouts.template-app')

@section('main_content')

    @include('layouts.include.header-app')

    @yield('content')

    @include('layouts.include.footer-app')

@endsection
