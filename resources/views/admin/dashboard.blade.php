@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    @section('module_header','Dashboard')
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Teams</h3>
                <ul class="list-inline two-part">
                    <li>
                        <i class="ti-basketball fa-fw text-success"></i>
                    </li>
                    <li class="text-right">
                        <span class="counter text-success">{{ $dashboard->lifetime_teams }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Players</h3>
                <ul class="list-inline two-part">
                    <li>
                        <i class="ti-user fa-fw text-purple"></i>
                    </li>
                    <li class="text-right"> <span class="counter text-purple">{{ $dashboard->lifetime_players }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Matches</h3>
                <ul class="list-inline two-part">
                    <li>
                        <i class="ti-game fa-fw text-purple"></i>
                    </li>
                    <li class="text-right"> <span class="counter text-purple">{{ $dashboard->lifetime_matches }}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.row -->
    <!--row -->
    <!-- /.row -->
    @include('admin.partials.components.player_state', ['runs' => $dashboard->lifetime_runs, 'wickets' => $dashboard->lifetime_wickets])
</div>
<!-- /.container-fluid -->
@endsection
