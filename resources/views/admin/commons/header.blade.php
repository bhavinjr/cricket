<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
	<div class="navbar-header">
		<div class="top-left-part">
			<!-- Logo -->
			<a class="logo" href="javascript:;">
				<!-- Logo icon image, you can use font-icon also --><b>
				<!--This is dark logo icon--><img src=".{{asset('cms_assets/admin/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{asset('cms_assets/admin/plugins/images/cricket-bats.png')}}" alt="home" class="light-logo" />
			 </b>
				<!-- Logo text image you can use text also --><span class="hidden-xs">
				<!--This is dark logo text-->
				<span class="dark-logo" class="text-primary">Cricket</span>
				<!--This is light logo text-->
				<span class="text-primary">Cricket</span>
			 </span> </a>
		</div>
		<!-- /Logo -->
		<!-- Search input and Toggle icon -->
		<ul class="nav navbar-top-links navbar-left">
			<li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
		</ul>
		<ul class="nav navbar-top-links navbar-right pull-right">
			<li class="dropdown">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:;"> <img src="{{asset('cms_assets/admin/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{auth()->user()->name}}</b><span class="caret"></span> </a>
				<ul class="dropdown-menu dropdown-user animated flipInY">
					<li>
						<div class="dw-user-box">
							<div class="u-img"><img src="{{asset('cms_assets/admin/plugins/images/users/varun.jpg')}}" alt="user" /></div>
							<div class="u-text">
								<h4>{{auth()->user()->name}}</h4>
								<p class="text-muted">{{auth()->user()->email}}</p><a href="javascript:;" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
						</div>
					</li>
					<li role="separator" class="divider"></li>
					<li><a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
	</div>
	<!-- /.navbar-header -->
	<!-- /.navbar-top-links -->
	<!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->