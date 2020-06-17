<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>{{config('app.name')}} | Dashboard</title> -->
        @include('admin.commons.head_includes')
</head>
<body class="fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Wrapper -->
    <div id="wrapper">
        @section('body_header')
            @include('admin.commons.header')
        @show
        @include('admin.commons.sidebar')
        <!-- Page Content -->
        <div id="page-wrapper">
            @include('admin.commons.module_header')
            @yield('content')
            @include('admin.commons.footer')
        </div>
        <!-- End Page Content -->
    </div>
    <!-- End Wrapper -->
    @include('admin.commons.script_includes')
</body>
</html>
