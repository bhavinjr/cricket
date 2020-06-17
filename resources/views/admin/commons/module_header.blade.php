<div class="container-fluid">
	<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">@yield('module_header')
				@yield('module_header_content')
			</h4>

		</div>
		{{-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="products.html#">Dashboard</a></li>
				<li class="active">Products</li>
			</ol>
		</div> --}}
		<!-- /.col-lg-12 -->
	</div>
	@include('admin.commons.flash_messages')
</div>