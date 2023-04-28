<?php $__env->startSection('content'); ?>
    <div class="slide-item overlay" style="background-image: url('<?php echo e(asset('assets/images/slider-2.jpg')); ?>')">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <h1 class="heading mb-3">Contact us</h1>
                    <p class="lead text-white">Get Your Enquiry Here...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <form action="<?php echo e(route('enquiry-store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" name="first_name">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" name="last_name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control" name="subject">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary text-white">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 ml-auto">
                    <div class="mb-3">
                        <p class="mb-0 font-weight-bold text-black">Address</p>
                        <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                        <p class="mb-0 font-weight-bold text-black">Phone</p>
                        <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                        <p class="mb-0 font-weight-bold text-black">Email Address</p>
                        <p class="mb-0"><a href="#">fake@domain.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\oldagehome\resources\views/pages/enq.blade.php ENDPATH**/ ?>