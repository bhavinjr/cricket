@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    @section('module_header', 'Team')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="form-body">
                            <div class="row">
                            	{!! form($form, ['role'=>"form"]) !!}
                            </div>
                		</div>
                	</div>
            	</div>
        	</div>
    	</div>
        {{-- show records --}}
        @includeWhen($form->getMethod()=='PUT', 'admin.partials.players.components.records')
    </div>
    <div class="row">
        @includeWhen($form->getMethod()=='PUT', 'admin.partials.players.components.batting')
        @includeWhen($form->getMethod()=='PUT', 'admin.partials.players.components.bowling')
    </div>
</div>
@endsection