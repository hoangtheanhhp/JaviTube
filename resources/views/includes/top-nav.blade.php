<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="menu__item"><a class="menu__link" href="{{ route("home") }}">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route("admin.song") }}">Song</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route("admin.users") }}">User</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route("admin.singers.index") }}">Singer</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route("admin.report.index") }}">Report</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->