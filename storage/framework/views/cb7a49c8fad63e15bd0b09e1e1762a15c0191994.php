<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Services</h3>
                    </div>
                    <form method="post" action="<?php echo e(route('service-store')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="serviceId" value="<?php echo e($service->id ?? ''); ?>" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Title</label>
                                <input type="text" name="service_title" class="form-control" id="" placeholder="Enter Service" value="<?php echo e($service->service_title ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="service_desc">
                                    <?php echo $service->service_desc ?? ''; ?>

                                </textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="javascript:history.back()" class="btn btn-info">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-js'); ?>
<script src="<?php echo e(asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });

    $(function () {
        // Summernote
        $('#summernote').summernote({
            height: 200
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\oldagehome\resources\views/admin/pages/services/manage.blade.php ENDPATH**/ ?>