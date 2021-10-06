<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">
	<a href="{{ route('admin.home') }}" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
		<img src="{{ asset('assets/images/logo.png') }}" alt="Logo" height="30px">
	</a>

	<div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
	<a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
		<i class="ion ion-md-menu text-large align-middle"></i>
	</a>
	</div>

	<div class="demo-navbar-user nav-item dropdown" style="margin-left: auto;">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="color: #a3a4a6;">
			<span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
			<img src="{{ asset('assets/images/resource/default.jpg') }}" alt class="d-block ui-w-30 rounded-circle">
			<span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ Auth::user()->name }}</span>
			</span>
		</a>
		<div class="dropdown-menu dropdown-menu-right">
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
			<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				<i class="ion ion-ios-log-out text-danger"></i> &nbsp; {{ __('admin.logout') }}
			</a>
		</div>
	</div>
</nav>