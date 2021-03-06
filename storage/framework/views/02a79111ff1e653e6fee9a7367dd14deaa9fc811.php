<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between">
                    <h3>DAFTAR DONASI SAYA</h3>
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
                                <?php if(auth()->check()): ?>
                                    <?php if(!auth()->user()->admin): ?>
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
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="card-body border-0">
                                <div class="row justify-content-between">
                                    <div class="col-md-5">
                                        <form action="<?php echo e(route('donasi.cari')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="input-group">
                                                <input  class="form-control" type="text" name="keyword" placeholder="cari donasi">
                                                <input class="btn btn-primary" type="submit" value="cari">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="text-right">Rekapitulasi donasi anda</p>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn-primary" href="<?php echo e(route('rekap.user')); ?>">Download</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th>NO</th>
                                                <th>DONATUR</th>
                                                <th>PENERIMA</th>
                                                <th>TANGGAL</th>
                                                <th>STATUS</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($i = 1 + (($donasi->currentPage()>=1?$donasi->currentPage():1) - 1) * $donasi->perPage()): ?>
                                                <?php if(count($donasi) > 0): ?>
                                                    <?php $__currentLoopData = $donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i++); ?></td>
                                                            <td><?php echo e($d->User->nama); ?></td>
                                                            <td><?php echo e($d->nama_penerima); ?></td>
                                                            <td><?php echo e($d->tanggal); ?></td>
                                                            <td><?php echo e($d->status); ?></td>
                                                            <td>
                                                                <div class="portfolio-links">
                                                                    <a href="<?php echo e(route('donasi.detail', $d->id)); ?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox btn btn-outline-primary" title="Donasi Detail">Detail</a>
                                                                    <a class="btn btn-outline-secondary" href="<?php echo e(route('donasi.cetak', $d->id)); ?>">Cetak</a>
                                                                </div>
                                                            </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donasi/donasi_user.blade.php ENDPATH**/ ?>