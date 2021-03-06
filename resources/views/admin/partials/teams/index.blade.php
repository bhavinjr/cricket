@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
	@section('module_header','Team')
	@section('module_header_content')
		<span>&nbsp;<a title="Add Team" href="{{ route('admin.teams.create') }}"><button class="btn btn-info btn-circle btn-lg"><i class="fa fa-plus"></i></button></a></span>
	@endsection
	<div class="row">
		<div class="white-box">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@forelse($results as $result)
	                        <tr>
                                <td>
                                    <img src="{{ $result->logo_url }}" alt="Logo" width="80">
                                </td>
	                            <td>{{ $result->name }}</td>
	                            <td>
	                            	<a href="{{ route('admin.teams.edit', $result->id) }}"  class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></a>
	                            	{!! Form::open(['route'=>['admin.teams.destroy', $result->id], 'method'=>'DELETE', 'class' => 'show_confirm form-override']) !!}
                                    	<button type="submit" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
	                        </tr>
                        @empty
                            <tr>
                                <td colspan="3" align="center">
                                    <p>No records</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
        	</div>
        </div>
	</div>
</div>
@endsection