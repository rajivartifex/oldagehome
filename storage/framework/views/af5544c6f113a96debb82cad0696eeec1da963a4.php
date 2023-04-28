<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Senior Citizen</h3>
                    </div>
                    <form method="post" action="<?php echo e(route('sc-store')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="scId" value="<?php echo e($scDetail->id ?? ''); ?>" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration Number</label>
                                <input type="text" name="registration_number" class="form-control" id="" placeholder="Enter Registration Number" value="<?php echo e($scDetail->registration_number ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Enter Name" value="<?php echo e($scDetail->name ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date Of Birth</label>
                                <input type="date" name="dob" class="form-control" id="" value="<?php echo e($scDetail->dob ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact Number</label>
                                <input type="text" name="contact_no" class="form-control" id="" placeholder="Enter Contact Number" value="<?php echo e($scDetail->contact_no ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Communication Address</label>
                                <textarea name="communication_address" class="form-control">
                                    <?php echo e($scDetail->communication_address ?? ''); ?>

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Emergency Address</label>
                                <textarea name="emergency_address" class="form-control">
                                    <?php echo e($scDetail->emergency_address ?? ''); ?>

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration Date</label>
                                <input type="date" name="registation_date" class="form-control" id="" value="<?php echo e($scDetail->registation_date ?? ''); ?>">
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\oldagehome\resources\views/admin/pages/sc/manage.blade.php ENDPATH**/ ?>