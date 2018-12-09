<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>     
						<option value="AX">kids Wear</option>
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						<option value="AX">Watches</option>
					</select>
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
