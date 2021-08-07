<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="{{ url('/') }}" class="btn-icon">{{config('app.name', 'Laravel')}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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
</header><!-- End Header -->
