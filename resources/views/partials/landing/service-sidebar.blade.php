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