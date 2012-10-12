<link href="./css/nav.css" rel="stylesheet">

<div class="navbar navbar-inverse nav">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="/">CMS</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="divider-vertical"></li>
					
					<li <?php if ($thisPage=="index") 
      				echo " class=\"active\""; ?>><a href="./"><i class="icon-home icon-white"></i> Home</a></li>
      				
      				<li <?php if ($thisPage=="test") 
      				echo " class=\"active\""; ?>><a href="./test.php"><i class="icon-beaker icon-white"></i> test</a></li>

      				<li <?php if ($thisPage=="history") 
      				echo " class=\"active\""; ?>><a href="./history.php"><i class="icon-time icon-white"></i> history</a></li>
				
				</ul>
				<div class="pull-right">
					<ul class="nav pull-right">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
								<li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
								<li class="divider"></li>
								<li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div> <!-- pull-right -->
			</div> <!-- nav-collapse collapse -->
		</div> <!-- container -->
	</div> <!-- navbar-inner -->
</div> <!-- navbar navbar-inverse nav -->
