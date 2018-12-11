<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="{{ asset('images/logo3.jpg') }}"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form action="{{ route('search') }}" method="GET">
				<div class="search">
					<input type="search" name="search" placeholder="Search" required="">
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		@if (!Auth::check())
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Sign in</span></a></li>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal5"><span>Sign up</span></a></li>
			</ul>
		</div>
		@else
			<div>
				<span class="_1qv9">
					<a href="{{ route('users.show', Auth::user()->id) }}">
					<img class="img img-responsive" width="30px" src="{{ asset('storage/avatar/'.Auth::user()->avatar) }}">
					<span>{{ Auth::user()->name }}</span>
					</a>
				</span>
			</div>
			@if (Auth::user()->isAdmin()) 
				<div>
					<a href="{{ route('admin.home') }}">Admin</a>
				</div>
			@endif
			<div class="_1qv9">
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    				@csrf
				</form>
			</div>
		@endif
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
