<div class="sidebar">
	<h3>Services</h3>
	<div class="text">With us, you'll find a wide range of psychotherapy and psychological counseling options. Choose yours!</div>
	<ul class="list">
		<li class="{{ \Route::current()->getName() === 'services.all' ? 'active' : '' }}"><a
				href="{{ route('services.all') }}">All Services</a></li>
		<li
			class="{{ \Route::current()->getName() === 'services.individuals' ? 'active' : '' }}">
			<a href="{{ route('services.individuals') }}">Individuals</a>
		</li>
		<li class="{{ \Route::current()->getName() === 'services.couples-and-families' ? 'active' : '' }}"><a
				href="{{ route('services.couples-and-families') }}">Couples and families</a></li>
		<li class="{{ \Route::current()->getName() === 'services.communities' ? 'active' : '' }}"><a
				href="{{ route('services.communities') }}">Communities</a></li>
		<li class="{{ \Route::current()->getName() === 'services.startups' ? 'active' : '' }}"><a
				href="{{ route('services.startups') }}">Startup Mental Health</a></li>
	</ul>
</div>