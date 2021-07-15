<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.include.carousel-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="main">
        <?php echo $__env->make('layouts.include.about-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.include.service-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.include.portfolio-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-gemmi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\laravel_8\web_gemmi\resources\views/gemmi.blade.php ENDPATH**/ ?>