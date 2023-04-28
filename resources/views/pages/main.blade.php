@extends('app')
@section('content')
    <div class="slide-item overlay" style="background-image: url('{{ asset('assets/images/slider-1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="heading mb-3">Expert Care for the Elderly</h1>
                    <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum totam
                        alias iusto?</p>
                    <p><a href="#" class="btn btn-primary">Get In Touch</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-v1">
        <div class="d-lg-flex align-items-center w-100">
            <div class="d-flex pagination-item  h-100">
                <span class="icon-wrap">
                    <img src="{{ asset('assets/images/svg/svg/001-elderly.svg') }}" alt="Image" class="img-fluid">
                </span>
                <div>
                    <span class="subheading">Try Our Services</span>
                    <h3 class="heading">Independent Living For Senior Couples</h3>
                    <a href="#" class="small">Learn More</a>
                </div>
            </div>
            <div class="d-flex pagination-item h-100">
                <span class="icon-wrap">
                    <img src="{{ asset('assets/images/svg/svg/002-elderly-1.svg') }}" alt="Image" class="img-fluid">
                </span>
                <div>
                    <span class="subheading">Try Our Services</span>
                    <h3 class="heading">We Are Helping the Senior Elderly People</h3>
                    <a href="#" class="small">Learn More</a>
                </div>
            </div>
            <div class="d-flex pagination-item h-100">
                <span class="icon-wrap">
                    <img src="{{ asset('assets/images/svg/svg/003-rocking-chair.svg') }}" alt="Image" class="img-fluid">
                </span>
                <div>
                    <span class="subheading">Try Our Services</span>
                    <h3 class="heading">Senior Home Patient Care Services</h3>
                    <a href="#" class="small">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="service">
                        <a href="#" class="d-block"><img src="{{ asset('assets/images/img_4_sq.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="service-inner">
                            <h3>Special Care</h3>
                            <p>Lorem ipsum dolor sit amet elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="service">
                        <a href="#" class="d-block"><img src="{{ asset('assets/images/img_1_sq.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="service-inner">
                            <h3>Special Care</h3>
                            <p>Lorem ipsum dolor sit amet elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="service">
                        <a href="#" class="d-block"><img src="{{ asset('assets/images/img_2_sq.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="service-inner">
                            <h3>Special Care</h3>
                            <p>Lorem ipsum dolor sit amet elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="service">
                        <a href="#" class="d-block"><img src="{{ asset('assets/images/img_3_sq.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="service-inner">
                            <h3>Special Care</h3>
                            <p>Lorem ipsum dolor sit amet elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2 class="heading mb-3">Senior Care Center is for Your Family</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore perspiciatis
                            deleniti, maiores quia aliquam, odit iure aspernatur voluptate delectus ipsa.</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{asset('assets/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled ul-check primary">
                                    <li>Consectetur adipisicing elit</li>
                                    <li>Voluptate delectus ipsa</li>
                                    <li>Maiores quia aliquam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="d-block custom-media algin-items-stretch">
                        <div class="text text-center">
                            <h3>You can live here with love</h3>
                        </div>
                        <div class="img-bg" style="background-image: url('{{asset('assets/images/img_2.jpg')}}')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
