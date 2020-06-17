<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="{{asset('cms_assets/admin/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle"></div>
                <a href="javascript:;" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}} <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="javascript:;"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="javascript:;"><i class="ti-email"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li> <a href="{{route('admin.dashboard')}}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a>
            </li>
            <li> <a href="{{ route('admin.teams.index') }}" class="waves-effect"><i class="ti-basketball fa-fw" data-icon="v"></i> <span class="hide-menu"> Teams </span></a>
            </li>
            <li> <a href="{{ route('admin.players.index') }}" class="waves-effect"><i class="ti-user fa-fw" data-icon="v"></i> <span class="hide-menu"> Players </span></a>
            </li>
            <li> <a href="{{ route('admin.matches.index') }}" class="waves-effect"><i class="ti-game fa-fw" data-icon="v"></i> <span class="hide-menu"> Matches </span></a>
            </li>
            {{-- <li> <a href="{{ route('admin.matches.index') }}" class="waves-effect"><i class="ti-cup fa-fw" data-icon="v"></i> <span class="hide-menu"> Point tables </span></a>
            </li> --}}
        </ul>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Left Sidebar -->