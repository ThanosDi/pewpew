<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ URL::to('home') }}">PewPewSoft &nbsp;&nbsp;&nbsp;|</a>
		</div>
	
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			{{-- 	@foreach ($languages as $key => $language)                       
                         {{-- <a href="language/{{$language->id}}">{{$language->name}}</a>                         --}}
                         {{-- <li class="{{ Request::path() == 'language/'.$language->id ? 'active' : '' }}"> <a href="{{action('LanguageController@show',[$language->id])}}">{{$language->name}}</a></li> --}}
                 {{--   @endforeach --}}
			</ul> 
			<ul class="nav navbar-nav navbar-right">
				@if (!Auth::guest())
				<li  class="{{ Request::path() == 'admin' ? 'active' : '' }}"><a href="{{action('AdminController@index')}}">Admin</a></li>				
				<li><a href="{{ URL::to('logout') }}">Logout</a></li>
				@endif
			</ul> 
		</div>
	</div>
</nav>