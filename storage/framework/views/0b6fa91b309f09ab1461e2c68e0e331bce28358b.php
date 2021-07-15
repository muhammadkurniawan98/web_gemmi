<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'Laravel')); ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <!-- .nav-menu -->
        <nav class="nav-menu d-none d-lg-block">

            <ul>
                <li class="drop-down"><a href="#">Menu</a>
                    <ul>
                        <li><a href="<?php echo e(route('tamu.index')); ?>">Daftar Tamu</a></li>
                        <li><a href="<?php echo e(route('donatur.index')); ?>">Daftar Donatur</a></li>
                        <li><a href="<?php echo e(route('donasi.index')); ?>">Daftar Donasi</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Tentang</a>
                    <ul>
                        <li><a href="<?php echo e('#about'); ?>">Sejarah TMB GEMMI</a></li>
                        <li><a href="<?php echo e('#services'); ?>">Lokasi TMB GEMMI</a></li>
                        <li><a href="<?php echo e('#portfolio'); ?>">Profil TMB GEMMI</a></li>
                        <li><a href="<?php echo e('#footer'); ?>">Kontak</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(route('donasi.create')); ?>">Donasi</a>
                </li>
            </ul>

        </nav>

        <?php if(auth()->guard()->guest()): ?>
            <div class="btn-toolbar ml-auto">
                <div class="btn-group mr-auto">
                    <a class="btn avatar-dropdown-btn" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    <a class="btn avatar-dropdown-btn" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </div>
            </div>
        <?php else: ?>
            <a class="avatar-dropdown-btn drop-down ml-auto" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                <?php echo e(Auth::user()->username); ?>

            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                <?php if(Auth::user()->admin): ?>
                    <a class="dropdown-item" href="#">
                        Admin Dashboard
                    </a>
                <?php endif; ?>

                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        <?php endif; ?>

    </div>
</header><!-- End Header -->
<?php /**PATH D:\project_website\laravel_8\web_gemmi\resources\views/layouts/include/header-gemmi.blade.php ENDPATH**/ ?>