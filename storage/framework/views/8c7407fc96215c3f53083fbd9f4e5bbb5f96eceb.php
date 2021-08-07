<?php $__env->startSection('content'); ?>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2><?php echo e(__('BERI DONASI')); ?></h2>
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
                                <?php if($status_tamu && $status_donatur): ?>
                                <form role="form" method="POST" id="form_donasi" action="<?php echo e(route('donasi.store')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row">
                                        <label for="nama_donatur" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Donatur')); ?></label>

                                        <div class="col-md-6">
                                            <input id="nama_donatur" type="text" class="form-control <?php $__errorArgs = ['nama_donatur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_donatur" value="<?php echo e(old('nama_donatur')); ?>" autofocus>

                                            <?php $__errorArgs = ['nama_donatur'];
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
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_penerima" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Penerima')); ?></label>

                                        <div class="col-md-6">
                                            <input id="nama_penerima" type="text" class="form-control <?php $__errorArgs = ['nama_penerima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_penerima" value="<?php echo e(old('nama_penerima')); ?>" autofocus>

                                            <?php $__errorArgs = ['nama_penerima'];
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
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Alamat')); ?></label>

                                        <div class="col-md-6">
                                            <input id="alamat" type="text" class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamat" value="<?php echo e(old('alamat')); ?>" autofocus>

                                            <?php $__errorArgs = ['alamat'];
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
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_telepon" class="col-md-4 col-form-label text-md-right"><?php echo e(__('No Telepon')); ?></label>

                                        <div class="col-md-6">
                                            <input id="no_telepon" type="text" class="form-control <?php $__errorArgs = ['no_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_telepon" value="<?php echo e(old('no_telepon')); ?>" autofocus>

                                            <?php $__errorArgs = ['no_telepon'];
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
                                    </div>

                                    <div class="form-group row">
                                        <label for="jenis_donasi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Jenis Donasi')); ?></label>

                                        <div class="col-md-6">
                                            <select id="jenis_donasi" name="jenis_donasi" onselect="" class="form-control">
                                                <option>Pilih jenis donasi</option>
                                                <option value="GNJ">GNJ</option>
                                                <option value="Snack">Snack</option>
                                                <option value="Sembako">Sembako</option>
                                                <option value="Buku">Buku</option>
                                                <option value="Dana">Dana</option>
                                            </select>
                                        </div>
                                        <?php echo $__env->make('pages_user.donasi.dana', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('pages_user.donasi.buku', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('pages_user.donasi.sembako', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('pages_user.donasi.snack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('pages_user.donasi.gnj', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <script>
                                            $('#jenis_donasi').change(function (){
                                                var modal = '#'+$(this).val().toLowerCase();
                                                $(modal).modal('show');
                                            });
                                        </script>
                                    </div>

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
unset($__errorArgs, $__bag); ?>" name="jumlah_donasi" value="<?php echo e(old('jumlah_donasi')); ?>" autofocus>

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
                                                <option>kotak</option>
                                                <option>bungkus</option>
                                                <option>buah</option>
                                                <option>dus</option>
                                                <option>rupiah</option>
                                                <option>lusin</option>
                                                <option>karung</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bukti_donasi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Bukti Donasi')); ?></label>

                                        <div class="col-md-6">

                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input id="bukti_donasi" name="bukti_donasi" type="file" class="form-control  <?php $__errorArgs = ['bukti_donasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> custom-file-input" value="<?php echo e(old('bukti_donasi')); ?>" onchange="changeLabel()">
                                                    <label id="label_cover" class="custom-file-label" for="bukti_donasi" aria-describedby="bukti_donasi">
                                                        <?php $__errorArgs = ['bukti_donasi'];
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
                                                        <?php echo e(__('Pilih File')); ?>

                                                    </label>
                                                    <script>
                                                        function changeLabel(){
                                                            const file = document.querySelector('#bukti_donasi');
                                                            const label = document.querySelector('.custom-file-label');
                                                            label.textContent = file.files[0].name === ''?'Pilih File':file.files[0].name;
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
unset($__errorArgs, $__bag); ?>" name="tanggal" value="<?php echo e(old('tanggal')); ?>">
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
                                            <input type="button" name="btn" value="Submit" data-toggle="modal" data-target="#confirm-submit-donasi" class="btn btn-primary" />
                                        </div>
                                    </div>
                                    <div class="modal fade" id="confirm-submit-donasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    Pesan
                                                </div>
                                                <div class="modal-body">
                                                    Terimakasih telah melakukan donasi.
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <a id="submit" class="btn btn-success success">Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                                <script>
                                    $('#submit').click(function(){
                                        /* when the submit button in the modal is clicked, submit the form */
                                        $('#form_donasi').submit();
                                    });
                                </script>
                                <?php else: ?>
                                    <?php if(!$status_tamu): ?>
                                        <label>Anda harus mengisi <a>buku tamu</a> terlebih dahulu.</label>
                                    <?php else: ?>
                                        <label>Anda harus terdaftar sebagai <a>donatur</a> terlebih dahulu.</label>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\backup\web_gemmi\resources\views/pages_user/donasi/create.blade.php ENDPATH**/ ?>