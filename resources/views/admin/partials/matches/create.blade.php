@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    @section('module_header', 'Match')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="form-body">
                            <div class="row">
                                <match-create/>
                            </div>
                		</div>
                	</div>
            	</div>
        	</div>
    	</div>
    </div>
</div>
@endsection