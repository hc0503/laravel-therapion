<!-- Main Header -->
<header class="main-header">
    <div class="header-top clearfix">
        <div class="top-left pull-left">
            <div class="text">{{ __('global.description') }}</div>
        </div>
        <div class="top-right pull-right">
            <ul class="topbar-info">
                <li><i class="far fa-clock"></i>{{ __('global.footer.contactUs.description') }}</li>
                <li><i class="fas fa-phone"></i><a href="tel: {{ config('therapion.contact.phone') }}">{{ config('therapion.contact.phone') }}</a></li>
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
                                    <li class="{{ request()->route()->getName() == 'home' ? 'current' : '' }}"><a href="{{ route('home') }}">{{ __('global.nav.home') }}</a></li> 
                                    <li class="{{ request()->route()->getName() == 'booking.all' ? 'current' : '' }}"><a href="{{ route('booking.all') }}">{{ __('global.nav.book') }}</a></li>
                                    <li class="{{ request()->route()->getName() == 'fee-cost' ? 'current' : '' }}"><a href="{{ route('fee-cost') }}">{{ __('global.nav.fee') }}</a></li>
                                    <li class="{{ request()->route()->getName() == 'services.all' ? 'current' : '' }}"><a href="{{ route('services.all') }}">{{ __('global.nav.service') }}</a></li>
                                    <li class="{{ request()->route()->getName() == 'jobs' ? 'current' : '' }}"><a href="{{ route('jobs') }}">{{ __('global.nav.job') }}</a></li>
                                    <li class="dropdown">
                                        <a href="#">{{ __('global.nav.lang') }}</a>
                                        <ul>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'en']) }}">{{ flag('us:1x1','w-12', ['id'=>'flag-us']) }} English</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'es']) }}">{{ flag('es:1x1','w-12', ['id'=>'flag-es']) }} Español</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'pt']) }}">{{ flag('pt:1x1','w-12', ['id'=>'flag-pt']) }} Português</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'fi']) }}">{{ flag('fi:1x1','w-12', ['id'=>'flag-fi']) }} Suomi</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'se']) }}">{{ flag('se:1x1','w-12', ['id'=>'flag-se']) }} Svenska</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'no']) }}">{{ flag('no:1x1','w-12', ['id'=>'flag-no']) }} Norsk</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'dk']) }}">{{ flag('dk:1x1','w-12', ['id'=>'flag-dk']) }} Dansk</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'de']) }}">{{ flag('de:1x1','w-12', ['id'=>'flag-de']) }} Deutsch</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'nl']) }}">{{ flag('nl:1x1','w-12', ['id'=>'flag-nl']) }} Nederlands</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'fr']) }}">{{ flag('fr:1x1','w-12', ['id'=>'flag-fr']) }} Français</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'it']) }}">{{ flag('it:1x1','w-12', ['id'=>'flag-it']) }} Italiano</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'ru']) }}">{{ flag('ru:1x1','w-12', ['id'=>'flag-ru']) }} По-русски</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'tr']) }}">{{ flag('tr:1x1','w-12', ['id'=>'flag-tr']) }} Türkçe</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'jp']) }}">{{ flag('jp:1x1','w-12', ['id'=>'flag-jp']) }} 日本語</a></li>
                                            <li><a href="{{ route(request()->route()->getName(), ['locale' => 'cn']) }}">{{ flag('cn:1x1','w-12', ['id'=>'flag-cn']) }} 中文</a></li>
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
            <figure class="logo-box"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/small-logo.png') }}" alt=""></a></figure>
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
                            <li class="{{ request()->route()->getName() == 'home' ? 'current' : '' }}"><a href="{{ route('home') }}">{{ __('global.nav.home') }}</a></li> 
                            <li class="{{ request()->route()->getName() == 'booking.all' ? 'current' : '' }}"><a href="{{ route('booking.all') }}">{{ __('global.nav.book') }}</a></li>
                            <li class="{{ request()->route()->getName() == 'fee-cost' ? 'current' : '' }}"><a href="{{ route('fee-cost') }}">{{ __('global.nav.fee') }}</a></li>
                            <li class="{{ request()->route()->getName() == 'services.all' ? 'current' : '' }}"><a href="{{ route('services.all') }}">{{ __('global.nav.service') }}</a></li>
                            <li class="{{ request()->route()->getName() == 'jobs' ? 'current' : '' }}"><a href="{{ route('jobs') }}">{{ __('global.nav.job') }}</a></li>
                            <li class="dropdown">
                                <a href="#">{{ __('global.nav.lang') }}</a>
                                <ul>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'en']) }}">{{ flag('us:1x1','w-12', ['id'=>'flag-us']) }} English</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'es']) }}">{{ flag('es:1x1','w-12', ['id'=>'flag-es']) }} Español</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'pt']) }}">{{ flag('pt:1x1','w-12', ['id'=>'flag-pt']) }} Português</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'fi']) }}">{{ flag('fi:1x1','w-12', ['id'=>'flag-fi']) }} Suomi</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'se']) }}">{{ flag('se:1x1','w-12', ['id'=>'flag-se']) }} Svenska</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'no']) }}">{{ flag('no:1x1','w-12', ['id'=>'flag-no']) }} Norsk</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'dk']) }}">{{ flag('dk:1x1','w-12', ['id'=>'flag-dk']) }} Dansk</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'de']) }}">{{ flag('de:1x1','w-12', ['id'=>'flag-de']) }} Deutsch</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'nl']) }}">{{ flag('nl:1x1','w-12', ['id'=>'flag-nl']) }} Nederlands</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'fr']) }}">{{ flag('fr:1x1','w-12', ['id'=>'flag-fr']) }} Français</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'it']) }}">{{ flag('it:1x1','w-12', ['id'=>'flag-it']) }} Italiano</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'ru']) }}">{{ flag('ru:1x1','w-12', ['id'=>'flag-ru']) }} По-русски</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'tr']) }}">{{ flag('tr:1x1','w-12', ['id'=>'flag-tr']) }} Türkçe</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'jp']) }}">{{ flag('jp:1x1','w-12', ['id'=>'flag-jp']) }} 日本語</a></li>
                                    <li><a href="{{ route(request()->route()->getName(), ['locale' => 'cn']) }}">{{ flag('cn:1x1','w-12', ['id'=>'flag-cn']) }} 中文</a></li>
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