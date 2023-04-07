<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="site-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                    <img src="<?php echo e(asset('assets/images/about.png')); ?>" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-5 ml-auto">
                    <div class="section-heading">
                        <h2 class="heading mb-3 text-white"><?php echo e($service->service_title); ?></h2>
                        <p class="text-white"><?php echo $service->service_desc; ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\oldagehome\resources\views/pages/services.blade.php ENDPATH**/ ?>