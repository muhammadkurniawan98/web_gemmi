<?php $__env->startSection('content'); ?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?php echo e(__('EDIT BUKU TAMU')); ?></h2>
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
                            <form method="POST" action="<?php echo e(route('tamu.update', $buku_tamu->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="_method" value="PUT">

                                <div class="form-group row">
                                    <label for="tanggal" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tanggal')); ?></label>
                                    <div class="col-md-6">
                                        <input id="tanggal" class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggal" value="<?php echo e($buku_tamu->tanggal); ?>" placeholder="Tanggal Kunjungan">
                                        <?php $__errorArgs = ['tanggal'];
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
                                        <script>
                                            $('#tanggal').datepicker({
                                                format: 'yyyy-mm-dd',
                                                language: 'id',
                                                startDate: '-3d',
                                            });
                                        </script>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/buku_tamu/edit.blade.php ENDPATH**/ ?>