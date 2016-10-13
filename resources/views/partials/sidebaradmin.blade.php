<div class="col-md-2 sidebaradmin">
	<nav>
    <ul class="nav">
    	<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="{{ Request::path() == 'admin/accounts/list' ? 'true' : 'false' }}" >Accounts</a>
			<ul class="nav collapse {{ Request::path() == 'admin/accounts/list' ? 'in' : '' }}" id="submenu1" role="menu" aria-labelledby="btn-1"  >
				<li class="{{ Request::path() == 'admin/accounts/list' ? 'active' : '' }}"><a href="{{URL::to('admin/accounts/list')}}" >List accounts</a></li>
				<li><a href="#">Add new account</a></li>
			</ul>
		</li>
	    <li><a href="#">Link 1</a></li>
		
		<li><a href="#">Link 3</a></li>
		<li><a href="#">Link 4</a></li>
	</ul>
</nav>
</div>