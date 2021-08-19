<div class="sidebar">
	<h3>Services</h3>
	<div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit
	</div>
	<ul class="list">
		<li class="{{ \Route::current()->getName() === 'services.all' ? 'active' : '' }}"><a
				href="{{ route('services.all') }}">All Services</a></li>
		<li
			class="{{ \Route::current()->getName() === 'services.individuals' ? 'active' : '' }}">
			<a href="{{ route('services.individuals') }}">Individual psychotherapy and
				counseling</a>
		</li>
		<li class="{{ \Route::current()->getName() === 'services.couples-and-families' ? 'active' : '' }}"><a
				href="{{ route('services.couples-and-families') }}">Couples and families</a></li>
		<li class="{{ \Route::current()->getName() === 'services.communities' ? 'active' : '' }}"><a
				href="{{ route('services.communities') }}">Community services</a></li>
		<li class="{{ \Route::current()->getName() === 'services.startups' ? 'active' : '' }}"><a
				href="{{ route('services.startups') }}">Mental health for startups</a></li>
	</ul>
</div>