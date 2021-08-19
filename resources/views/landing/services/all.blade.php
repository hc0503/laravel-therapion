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
                            <div class="title">Our Services</div>
                            <h1 class="text-uppercase">all services</h1>
                        </div>
                        <div class="bold-text">
                            Psychotherapy and counseling for individuals, couples and families.<br>
                            Mental health care for communities and startups.
                        </div>
                    </div>
                    <div class="inner-box centred">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-argument"></i></div>
                                    <h4><a href="{{ route('services.individuals') }}">Individuals</a></h4>
                                    <div class="text">Online therapy and counseling for individuals. Private online sessions per e-mail, chat, videoconference
and phone. Buy a single session, or start one of our 4-session therapy programs.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-woman"></i></div>
                                    <h4><a href="{{ route('services.couples-and-families') }}">Couples and families</a></h4>
                                    <div class="text">Do you need help or assistance with your personal relationships? 
Would you like to share a counseling session with your partner or with your family? You found the right place!</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-brain-1"></i></div>
                                    <h4><a href="{{ route('services.communities') }}">Communities</a></h4>
                                    <div class="text">Therapion collaborates with civil associations, 
NGOs or other type of organizations. Get that help and support that your community is looking for.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                <div class="service-block-one">
                                    <div class="icon-box"><i class="flaticon-anger"></i></div>
                                    <h4><a href="{{ route('services.startups') }}">Startup Mental Health</a></h4>
                                    <div class="text">Therapion supports new business projects of all type. 
Get help with stress and pressure, office climate challenges, remote work management, hectic lifestyle, and multicultural issues. </div>
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