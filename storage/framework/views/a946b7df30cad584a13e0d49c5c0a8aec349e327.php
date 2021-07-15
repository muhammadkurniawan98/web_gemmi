<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>Daftar Donasi Yang Terkumpul</h3>
                </div>

            </div>
        </section>

        <section id="service" class="services">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <div class="card border-0">
                            <div class="card-header border-0">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-1">
                                        <a id="add" href="<?php echo e(route('donasi.create')); ?>" class="btn btn-outline-success"><i class="icofont-plus"></i></a>
                                    </div>
                                    <div class="col-md-11 d-flex align-items-center justify-content-center">
                                        <label for="add">
                                            <h5>Beri Donasi</h5>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>NO</th>
                                                    <th>DONATUR</th>
                                                    <th>PENERIMA</th>
                                                    <th>ALAMAT</th>
                                                    <th>JENIS</th>
                                                    <th>BUKTI</th>
                                                    <th>TANGGAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($i = 1 + (($donasi->currentPage()>=1?$donasi->currentPage():1) - 1) * $donasi->perPage()): ?>
                                                <?php if(count($donasi) > 0): ?>
                                                    <?php $__currentLoopData = $donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i++); ?></td>
                                                            <td><?php echo e($d->nama_donatur); ?></td>
                                                            <td><?php echo e($d->nama_penerima); ?></td>
                                                            <td><?php echo e($d->alamat); ?></td>
                                                            <td><?php echo e($d->jenis_donasi); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(asset('uploads/img/'.$d->bukti_donasi)); ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo e($d->bukti_donasi); ?>">
                                                                    <i class="icofont-picture"></i>
                                                                </a>
                                                            </td>
                                                            <td><?php echo e($d->tanggal); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td>Belum ada donasi yang anda berikan</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0">
                                <?php echo e($donasi->links('pagination::bootstrap-4')); ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\laravel_8\web_gemmi\resources\views/pages_user/donasi/index.blade.php ENDPATH**/ ?>