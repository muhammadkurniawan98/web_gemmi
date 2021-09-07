<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2><?php echo e(__('EDIT DONASI')); ?></h2>
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
                            <div class="card-body border-0">
                                <form role="form" method="POST" id="form_donasi" action="<?php echo e(route('donasi.update', $donasi->id)); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group row">
                                        <label for="jumlah_donasi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Jumlah/Pack')); ?></label>
                                        <div class="col-md-4">
                                            <input id="jumlah_donasi" type="text" class="form-control <?php $__errorArgs = ['jumlah_donasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_donasi" value="<?php echo e(explode(' ', $donasi->jumlah_donasi)[0]); ?>" autofocus>
                                            <?php $__errorArgs = ['jumlah_donasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="format_jumlah" onselect="" class="form-control">
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='kotak'?'selected':''); ?>>kotak</option>
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='bungkus'?'selected':''); ?>>bungkus</option>
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='buah'?'selected':''); ?>>buah</option>
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='dus'?'selected':''); ?>>dus</option>
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='rupiah'?'selected':''); ?>>rupiah</option>
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='lusin'?'selected':''); ?>>lusin</option>
                                                <option <?php echo e(explode(' ', $donasi->jumlah_donasi)[1]=='karung'?'selected':''); ?>>karung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donasi/edit.blade.php ENDPATH**/ ?>