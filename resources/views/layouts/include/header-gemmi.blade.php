<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="{{ url('/') }}" class="btn-icon">{{config('app.name', 'Laravel')}}</a></h1>

        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class="drop-down"><a href="#">Menu</a>
                    <ul>
                        <li><a href="{{route('tamu.index')}}">Daftar Tamu</a></li>
                        <li><a href="{{route('donatur.index')}}">Daftar Donatur</a></li>
                        <li><a href="{{route('donasi.index')}}">Daftar Donasi</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Tentang</a>
                    <ul>
                        <li><a href="{{'#about'}}">Sejarah TMB GEMMI</a></li>
                        <li><a href="{{'#services'}}">Lokasi TMB GEMMI</a></li>
                        <li><a href="{{'#portfolio'}}">Profil TMB GEMMI</a></li>
                        <li><a href="{{'#footer'}}">Kontak</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('donasi.create')}}">Donasi</a>
                </li>
            </ul>

        </nav>

        @guest
            <div class="btn-toolbar ml-auto">
                <div class="btn-group mr-auto">
                    <a class="btn avatar-dropdown-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="btn avatar-dropdown-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            </div>
        @else
            <a class="avatar-dropdown-btn drop-down ml-auto" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                {{Auth::user()->username}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest

    </div>
</header>
