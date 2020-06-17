<!DOCTYPE html>  
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>{{config('app.name')}} | Login</title>
		@include('admin.commons.head_includes')
	</head>
<body>
	<!-- Preloader -->
	<div class="preloader">
	  <div class="cssload-speeding-wheel"></div>
	</div>
	@yield('content')

	@include('admin.commons.script_includes')
</body>
</html>
