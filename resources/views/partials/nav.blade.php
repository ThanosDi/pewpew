<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ URL::to('home') }}">PewPewSoft &nbsp;&nbsp;&nbsp;|</a>
		</div>
	
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				@if (!Auth::guest())
				<li  class="{{ Request::path() == 'admin' ? 'active' : '' }}"><a href="{{action('AdminController@index')}}">Admin</a></li>				
				<li><a href="{{ URL::to('logout') }}">Logout</a></li>
				@endif
			</ul> 
		</div>
	</div>
</nav>