<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/output.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/sweetalert2.css')); ?>">
    <?php echo $__env->yieldContent('othercss'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('konten'); ?>

    
    <script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>
    <?php echo $__env->yieldContent('otherjs'); ?>
</body>
</html><?php /**PATH /home/mphstar/Development/web/auth-laravel/resources/views/app.blade.php ENDPATH**/ ?>