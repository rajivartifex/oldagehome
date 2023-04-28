<?php $__env->startSection('content'); ?>
    <div class="slide-item overlay" style="background-image: url('<?php echo e(asset('assets/images/slider-2.jpg')); ?>')">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 align-self-center">
                    <h1 class="heading mb-3">Search</h1>
                    <p class="lead text-white">SEARCH SENIOR CITIZEN DETAILS BY REGSITRATION NUMBER</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Search By Registration Number</label>
                            <input type="text" class="form-control" name="search_by">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-5 search-list">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <div class="table-responsive">
                                <table width="100%" id="sc-search" class="table table-bordered table-striped table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20%">Registration No</th>
                                            <th width="20%">Name</th>
                                            <th width="20%">Date Of Birth</th>
                                            <th width="20%">Contact No</th>
                                            <th width="20%">Address</th>
                                            <th width="20%">Registration Date</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-js'); ?>
<script>
    $(document).ready(function(e){
        $('input[name="search_by"]').keyup(function(){
            console.log(2);
            var $search = $(this).val();
            $.ajax({
                type: 'POST',
                url: "<?php echo e(url('/sc-search')); ?>",
                data: {
                    'search': $search,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                success: function(response){
                    console.log(response);
                    if($search){
                        $('#sc-search tbody').html('');
                        $.each(response, function(item, val){
                            var table = `<tr>
                                    <td>`+val.registration_number+`</td>
                                    <td>`+val.name+`</td>
                                    <td>`+val.dob+`</td>
                                    <td>`+val.contact_no+`</td>
                                    <td>`+val.communication_address+`</td>
                                    <td>`+val.registation_date+`</td>
                                </tr>`;
                            $('#sc-search tbody').append(table);
                        });
                    }else{
                        $('#sc-search tbody').html('');
                    }
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\oldagehome\resources\views/pages/search.blade.php ENDPATH**/ ?>