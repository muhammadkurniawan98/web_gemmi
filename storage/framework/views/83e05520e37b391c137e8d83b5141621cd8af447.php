<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2></h2>
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
                                <div class="row d-flex justify-content-center">
                                    <label>PENDAFTARAN ANDA SEBAGAI DONATUR BERHASIL. SELANJUTNYA ANDA BISA MELAKUKAN DONASI.</label>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <div class="row d-flex justify-content-around">
                                    <a class="btn avatar-dropdown-btn" href="<?php echo e(route('tamu.create')); ?>">ISI BUKU TAMU</a>
                                    <a class="btn avatar-dropdown-btn" href="<?php echo e(route('donatur.create')); ?>">PENDAFTARAN DONATUR</a>
                                    <a class="btn avatar-dropdown-btn" href="<?php echo e(route('donasi.create')); ?>">PEMBERIAN DONASI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donatur/create-success.blade.php ENDPATH**/ ?>