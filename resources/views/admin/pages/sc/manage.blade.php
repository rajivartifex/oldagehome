@extends('admin.layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Senior Citizen</h3>
                    </div>
                    <form method="post" action="{{route('sc-store')}}">
                        @csrf
                        <input type="hidden" name="scId" value="{{$scDetail->id ?? ''}}" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration Number</label>
                                <input type="text" name="registration_number" class="form-control" id="" placeholder="Enter Registration Number" value="{{$scDetail->registration_number ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Enter Name" value="{{$scDetail->name ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date Of Birth</label>
                                <input type="date" name="dob" class="form-control" id="" value="{{$scDetail->dob ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact Number</label>
                                <input type="text" name="contact_no" class="form-control" id="" placeholder="Enter Contact Number" value="{{$scDetail->contact_no ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Communication Address</label>
                                <textarea name="communication_address" class="form-control">
                                    {{$scDetail->communication_address ?? ''}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Emergency Address</label>
                                <textarea name="emergency_address" class="form-control">
                                    {{$scDetail->emergency_address ?? ''}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration Date</label>
                                <input type="date" name="registation_date" class="form-control" id="" value="{{$scDetail->registation_date ?? ''}}">
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
@endsection
@section('bottom-js')
<script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection
