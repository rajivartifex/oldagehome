@extends('app')
@section('content')
@foreach ($services as $service)
    <div class="site-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                    <img src="{{ asset('assets/images/about.png') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-5 ml-auto">
                    <div class="section-heading">
                        <h2 class="heading mb-3 text-white">{{$service->service_title}}</h2>
                        <p class="text-white">{!! $service->service_desc !!}</p>
                        {{-- <p><a href="#" class="btn btn-white">Learn More</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
