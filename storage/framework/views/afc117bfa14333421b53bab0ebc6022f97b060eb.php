<?php $__env->startSection('main_content'); ?>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <div class="col-lg-8">
                    <h2 class="portfolio-title">Donasi</h2>
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="<?php echo e(asset('uploads/img/'.$donasi->bukti_donasi)); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>Informasi donasi</h3>
                    <ul>
                        <li><strong>Nama Donatur</strong>: <?php echo e($donasi->User->nama); ?></li>
                        <li><strong>Nama Penerima</strong>: <?php echo e($donasi->nama_penerima); ?></li>
                        <li><strong>Alamat</strong>: <?php echo e($donasi->User->alamat); ?></li>
                        <li><strong>No Telepon</strong>: <?php echo e($donasi->User->no_telepon); ?></li>
                        <li><strong>Jenis Donasi</strong>: <?php echo e($donasi->jenis_donasi); ?></li>
                        <li><strong>Bentuk Donasi</strong>:
                            <?php if($donasi->jenis_donasi == 'GNJ'): ?>
                                <ol>
                                    <li>Jenis Nasi : <?php echo e($donasi->GNJ->jenis_gnj); ?></li>
                                    <li>Tambahan Donasi : <?php echo e($donasi->GNJ->tambahan_donasi); ?></li>
                                </ol>
                            <?php elseif($donasi->jenis_donasi == 'Snack'): ?>
                                <ol>
                                    <li>Jenis Snack : <?php echo e($donasi->Snack->jenis_snack); ?></li>
                                    <li>Tambahan Donasi : <?php echo e($donasi->Snack->tambahan_donasi); ?></li>
                                </ol>
                            <?php elseif($donasi->jenis_donasi == 'Sembako'): ?>
                                <ol>
                                    <li>Jenis Sembako : <?php echo e($donasi->Sembako->jenis_sembako); ?></li>
                                    <li>Tambahan Donasi : <?php echo e($donasi->Sembako->tambahan_donasi); ?></li>
                                </ol>
                            <?php elseif($donasi->jenis_donasi == 'Buku'): ?>
                                <ol>
                                    <li>Jenis Buku : <?php echo e($donasi->Buku->jenis_buku); ?></li>
                                    <li>Keterangan : <?php echo e($donasi->Buku->keterangan); ?></li>
                                </ol>
                            <?php elseif($donasi->jenis_donasi == 'Dana'): ?>
                                <ol>
                                    <li>Jumlah Dana : <?php echo e($donasi->Dana->jumlah_dana); ?></li>
                                    <li>Bank/Rekening : <?php echo e($donasi->Dana->bank_rekening); ?></li>
                                </ol>
                            <?php endif; ?>
                        </li>
                        <li><strong>Jumlah Donasi</strong>: <?php echo e($donasi->jumlah_donasi); ?></li>
                        <li><strong>Tanggal</strong>: <?php echo e($donasi->tanggal); ?></li>
                    </ul>
                </div>

            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donasi/donasi-detail.blade.php ENDPATH**/ ?>