<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap-datepicker.id.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/locales/bootstrap-datepicker.id.min.js')); ?>"></script>

    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 align-items-center">
            <input id="date" class="form-control" type="text">
        </div>
    </div>
</div>

<script>
    $('#date').datepicker({
        language:'id'
    })
</script>

</body>
</html>
<?php /**PATH D:\project_website\laravel_8\web_gemmi\resources\views/test.blade.php ENDPATH**/ ?>