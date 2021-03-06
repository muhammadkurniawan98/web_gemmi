<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>JUMLAH TAMU</h3>
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
                                    <div class="col-md-8">
                                        <p>Jumlah tamu yang berkunjung hingga hari ini adalah <?php echo e($jumlah); ?> <a href="<?php echo e(route('tamu.index')); ?>">orang</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/jumlah_tamu.blade.php ENDPATH**/ ?>