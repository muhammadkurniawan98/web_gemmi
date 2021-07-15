<?php $__env->startSection('main_content'); ?>

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <div class="col-lg-2"></div>

                <div class="col-lg-8">
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="<?php echo e(asset('assets/img/portfolio/'.$img)); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-2"></div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\laravel_8\web_gemmi\resources\views/layouts/include/portfolio-details.blade.php ENDPATH**/ ?>