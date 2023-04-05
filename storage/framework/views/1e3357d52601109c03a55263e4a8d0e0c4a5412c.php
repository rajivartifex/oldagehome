<!doctype html>
<html lang="en">
    <head>
        <title>Elderly &mdash; Website Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/icomoon/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.fancybox.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-datepicker.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/flaticon/font/flaticon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <?php echo $__env->yieldContent('page-css'); ?>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
        </div>
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery-ui.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.easing.1.3.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.animateNumber.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.fancybox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
        <?php echo $__env->yieldContent('bottom-js'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\oldagehome-main\oldagehome-main\resources\views/app.blade.php ENDPATH**/ ?>