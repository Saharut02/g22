<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> ข้าวหมากไทย</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('admin/css/nucleo-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('admin/css/nucleo-svg.css')); ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?php echo e(asset('admin/css/nucleo-svg.css')); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('admin/css/soft-ui-dashboard.css?v=1.0.3')); ?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?php echo e(asset('js/app.js')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>
<script src="<?php echo e(asset('admin/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo e(asset('admin/js/soft-ui-dashboard.min.js?v=1.0.3')); ?>"></script>

</html><?php /**PATH E:\New folder\group_1\Group_3\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>