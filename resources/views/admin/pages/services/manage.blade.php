@extends('admin.layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Services</h3>
                    </div>
                    <form method="post" action="{{route('service-store')}}">
                        @csrf
                        <input type="hidden" name="serviceId" value="{{$service->id ?? ''}}" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Title</label>
                                <input type="text" name="service_title" class="form-control" id="" placeholder="Enter Service" value="{{$service->service_title ?? ''}}">
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="service_desc">
                                    {!! $service->service_desc ?? '' !!}
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
@endsection
@section('bottom-js')
<script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
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
@endsection
