<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>DAFTAR DONATUR</h3>
                    <ol>
                        <li><a href="/">Kembali</a></li>
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
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-1">
                                        <a id="add" href="<?php echo e(route('donatur.create')); ?>" class="btn btn-outline-success"><i class="icofont-plus"></i></a>
                                    </div>
                                    <div class="col-md-11 d-flex align-items-center justify-content-center">
                                        <label for="add">
                                            <h5>DAFTAR SEBAGAI DONATUR</h5>
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
                                                <th>NAMA</th>
                                                <th>STATUS</th>
                                                <th>TTL</th>
                                                <th>TELEPON</th>
                                                <th>PEKERJAAN</th>
                                                <th>TANGGAL DAFTAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($i = 1 + (($donatur->currentPage()>=1?$donatur->currentPage():1) - 1) * $donatur->perPage()): ?>
                                                <?php if(count($donatur) > 0): ?>
                                                    <?php $__currentLoopData = $donatur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i++); ?></td>
                                                            <td><?php echo e($d->nama); ?></td>
                                                            <td><?php echo e($d->status); ?></td>
                                                            <td><?php echo e($d->ttl); ?></td>
                                                            <td><?php echo e($d->no_telepon); ?></td>
                                                            <td><?php echo e($d->pekerjaan); ?></td>
                                                            <td><?php echo e($d->tanggal); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td>Belum ada donatur yang mendaftar</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer border-0">
                                <?php echo e($donatur->links('pagination::bootstrap-4')); ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donatur/index.blade.php ENDPATH**/ ?>