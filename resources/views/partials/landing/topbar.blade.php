<!-- Main Header -->
<header class="main-header">
    <div class="header-top clearfix">
        <div class="top-left pull-left">
            <div class="text">Counseling and psychotherapy for individuals, couples and families.</div>
        </div>
        <div class="top-right pull-right">
            <ul class="topbar-info">
                <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li>
                <li><i class="fas fa-phone"></i><a href="tel:(251)235-3256">(251) 235-3256</a></li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="outer-container">
            <div class="clearfix">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="nav-outer clearfix">
                    <div class="menu-area">
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{ \Route::current()->getName() === "home" ? "current" : "" }}"><a href="{{ route('home') }}">Home</a></li> 
                                    <li class="{{ \Route::current()->getName() === "booking" ? "current" : "" }}"><a href="{{ route('booking') }}">Book a Session</a></li>
                                    <li class="{{ \Route::current()->getName() === "fee_cost" ? "current" : "" }}"><a href="{{ route('fee-cost') }}">Fees and Costs</a></li>
                                    <li class="{{ \Route::current()->getName() === "services.all" ? "current" : "" }}"><a href="{{ route('services.all') }}">Our Services</a></li>
                                    <li class="{{ \Route::current()->getName() === "jobs" ? "current" : "" }}"><a href="{{ route('jobs') }}">Jobs</a></li>
                                    <li class="dropdown"><a href="#">Language</a>
                                        <ul>
                                            <li><a href="{{ url('/lang/en') }}">{{ flag('us:1x1','w-12', ['id'=>'flag-us']) }} English</a></li>
                                            <li><a href="{{ url('/lang/es') }}">{{ flag('es:1x1','w-12', ['id'=>'flag-es']) }} Español</a></li>
                                            <li><a href="{{ url('/lang/pt') }}">{{ flag('pt:1x1','w-12', ['id'=>'flag-pt']) }} Português</a></li>
                                            <li><a href="{{ url('/lang/fi') }}">{{ flag('fi:1x1','w-12', ['id'=>'flag-fi']) }} Suomi</a></li>
                                            <li><a href="{{ url('/lang/se') }}">{{ flag('se:1x1','w-12', ['id'=>'flag-se']) }} Svenska</a></li>
                                            <li><a href="{{ url('/lang/no') }}">{{ flag('no:1x1','w-12', ['id'=>'flag-no']) }} Norsk</a></li>
                                            <li><a href="{{ url('/lang/dk') }}">{{ flag('dk:1x1','w-12', ['id'=>'flag-dk']) }} Dansk</a></li>
                                            <li><a href="{{ url('/lang/de') }}">{{ flag('de:1x1','w-12', ['id'=>'flag-de']) }} Deutsch</a></li>
                                            <li><a href="{{ url('/lang/nl') }}">{{ flag('nl:1x1','w-12', ['id'=>'flag-nl']) }} Nederlands</a></li>
                                            <li><a href="{{ url('/lang/fr') }}">{{ flag('fr:1x1','w-12', ['id'=>'flag-fr']) }} Français</a></li>
                                            <li><a href="{{ url('/lang/it') }}">{{ flag('it:1x1','w-12', ['id'=>'flag-it']) }} Italiano</a></li>
                                            <li><a href="{{ url('/lang/ru') }}">{{ flag('ru:1x1','w-12', ['id'=>'flag-ru']) }} По-русски</a></li>
                                            <li><a href="{{ url('/lang/tr') }}">{{ flag('tr:1x1','w-12', ['id'=>'flag-tr']) }} Türkçe</a></li>
                                            <li><a href="{{ url('/lang/jp') }}">{{ flag('jp:1x1','w-12', ['id'=>'flag-jp']) }} 日本語</a></li>
                                            <li><a href="{{ url('/lang/cn') }}">{{ flag('cn:1x1','w-12', ['id'=>'flag-cn']) }} 中文</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/images/small-logo.png') }}" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <!-- Toggle Button -->      
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="{{ \Route::current()->getName() === "home" ? "current" : "" }}"><a href="/">Home</a></li> 
                            <li class="{{ \Route::current()->getName() === "book" ? "current" : "" }}"><a href="/booking">Book a Session</a></li>
                            <li class="{{ \Route::current()->getName() === "fee_cost" ? "current" : "" }}"><a href="/fee-cost">Fees and Costs</a></li>
                            <li class="{{ \Route::current()->getName() === "service" ? "current" : "" }}"><a href="/service">Our Services</a></li>
                            <li class="{{ \Route::current()->getName() === "jobs" ? "current" : "" }}"><a href="/jobs">Jobs</a></li>
                            <li class="dropdown"><a href="#">Language</a>
                                <ul>
                                    <li><a href="{{ url('/lang/en') }}">{{ flag('us:1x1','w-12', ['id'=>'flag-us']) }} English</a></li>
                                    <li><a href="{{ url('/lang/es') }}">{{ flag('es:1x1','w-12', ['id'=>'flag-es']) }} Español</a></li>
                                    <li><a href="{{ url('/lang/pt') }}">{{ flag('pt:1x1','w-12', ['id'=>'flag-pt']) }} Português</a></li>
                                    <li><a href="{{ url('/lang/fi') }}">{{ flag('fi:1x1','w-12', ['id'=>'flag-fi']) }} Suomi</a></li>
                                    <li><a href="{{ url('/lang/se') }}">{{ flag('se:1x1','w-12', ['id'=>'flag-se']) }} Svenska</a></li>
                                    <li><a href="{{ url('/lang/no') }}">{{ flag('no:1x1','w-12', ['id'=>'flag-no']) }} Norsk</a></li>
                                    <li><a href="{{ url('/lang/dk') }}">{{ flag('dk:1x1','w-12', ['id'=>'flag-dk']) }} Dansk</a></li>
                                    <li><a href="{{ url('/lang/de') }}">{{ flag('de:1x1','w-12', ['id'=>'flag-de']) }} Deutsch</a></li>
                                    <li><a href="{{ url('/lang/nl') }}">{{ flag('nl:1x1','w-12', ['id'=>'flag-nl']) }} Nederlands</a></li>
                                    <li><a href="{{ url('/lang/fr') }}">{{ flag('fr:1x1','w-12', ['id'=>'flag-fr']) }} Français</a></li>
                                    <li><a href="{{ url('/lang/it') }}">{{ flag('it:1x1','w-12', ['id'=>'flag-it']) }} Italiano</a></li>
                                    <li><a href="{{ url('/lang/ru') }}">{{ flag('ru:1x1','w-12', ['id'=>'flag-ru']) }} По-русски</a></li>
                                    <li><a href="{{ url('/lang/tr') }}">{{ flag('tr:1x1','w-12', ['id'=>'flag-tr']) }} Türkçe</a></li>
                                    <li><a href="{{ url('/lang/jp') }}">{{ flag('jp:1x1','w-12', ['id'=>'flag-jp']) }} 日本語</a></li>
                                    <li><a href="{{ url('/lang/cn') }}">{{ flag('cn:1x1','w-12', ['id'=>'flag-cn']) }} 中文</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div><!-- sticky-header end -->
</header>
<!-- End Main Header -->