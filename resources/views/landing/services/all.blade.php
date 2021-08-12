@extends('layouts.landing')

@section('content')
<!--Page Title-->
<section class="page-title centred"
    style="background-image: url({{ asset('/assets/images/background/page-title-2.jpg') }});">
    <div class="container">
        <div class="content-box">
            <h1>{{ $pageTitle }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>{{ $pageTitle }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->   

<!-- service-page-section -->
<section class="service-page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar gray-bg">
                    @include('partials.landing.service-sidebar')
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-content">
                    <div class="title-box">
                        <div class="sec-title">
                            <div class="title">services</div>
                            <h1>All Services</h1>
                        </div>
                        <div class="bold-text">You cange the content. the change is 2.</div>
                    </div>
                    <div class="inner-box centred">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-argument"></i></div>
                                    <h4><a href="{{ route('services.psychotherapy') }}">Individual psychotherapy and
                                            counseling</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte mpor encid.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-woman"></i></div>
                                    <h4><a href="{{ route('services.couples') }}">Couples and families</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte mpor encid.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-brain-1"></i></div>
                                    <h4><a href="{{ route('services.community') }}">Community services</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte mpor encid.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-anger"></i></div>
                                    <h4><a href="{{ route('services.health') }}">Mental health for startups</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte mpor encid.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-page-section end -->
@endsection