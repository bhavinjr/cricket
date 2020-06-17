<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- jQuery -->
<script src="{{asset('cms_assets/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('cms_assets/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('cms_assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

<!--slimscroll JavaScript -->
<script src="{{asset('cms_assets/admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('cms_assets/admin/js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('cms_assets/admin//js/custom.min.js')}}"></script>

<!-- Select 2 -->
<script src="{{asset('cms_assets/admin/plugins/bower_components/custom-select/dist/js/select2.full.min.js')}}"></script>

<!-- toast -->
<script src="{{asset('cms_assets/admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{ mix('js/app.js') }}"></script>

@stack('scripts')

<script type="text/javascript">
	$('.show_confirm_link').click(function(e) {
        if(!confirm('Are you sure?')) {
            e.preventDefault();
        } else {
        	$(this).closest("form").submit();
        }
    });

    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure?')) {
            e.preventDefault();
        }
    });
    $(".select2").select2();
    function showSuccess(text) {
        $.toast({
            heading: 'Success',
            text: text,
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3000,
            stack: 6
        });
    }

    function showError(text) {
        $.toast({
            heading: 'Error',
            text: text,
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 3500
        });
    }
</script>