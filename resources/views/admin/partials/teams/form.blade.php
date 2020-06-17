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
        @includeWhen($form->getMethod()=='PUT', 'admin.partials.teams.components.players', ['players' => $team->players ?? []])
    </div>
</div>
@endsection