@extends('layouts.landing')
@section('content')

	@yield('page-title')

    <!-- service-page-section -->
    <section class="service-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar gray-bg">
                        <div class="sidebar">
                            <h3>Services</h3>
                            <div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit
                            </div>
                            <ul class="list">
                                <li class="{{ \Route::current()->getName() === 'services.all' ? 'active' : '' }}"><a
                                        href="{{ route('services.all') }}">All Services</a></li>
                                <li
                                    class="{{ \Route::current()->getName() === 'services.psychotherapy' ? 'active' : '' }}">
                                    <a href="{{ route('services.psychotherapy') }}">Individual psychotherapy and
                                        counseling</a>
                                </li>
                                <li class="{{ \Route::current()->getName() === 'services.couples' ? 'active' : '' }}"><a
                                        href="{{ route('services.couples') }}">Couples and families</a></li>
                                <li class="{{ \Route::current()->getName() === 'services.community' ? 'active' : '' }}"><a
                                        href="{{ route('services.community') }}">Community services</a></li>
                                <li class="{{ \Route::current()->getName() === 'services.health' ? 'active' : '' }}"><a
                                        href="{{ route('services.health') }}">Mental health for startups</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    @yield('service')
                </div>
            </div>
        </div>
    </section>
    <!-- service-page-section end -->
@endsection
