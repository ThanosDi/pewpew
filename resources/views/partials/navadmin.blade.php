<nav class="navbar navbar-inverse ">
	<div class="container">	
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				@foreach ($languages as $key => $language)                       
                     {{-- <a href="language/{{$language->id}}">{{$language->name}}</a>                         --}}
                     <li class="{{ Request::path() == 'language/'.$language->id ? 'active' : '' }}"> <a href="{{action('LanguageController@show',[$language->id])}}">{{$language->name}}</a></li>
                @endforeach
			</ul>
		</div>
	</div>
</nav>