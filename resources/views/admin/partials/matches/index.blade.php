@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
	@section('module_header','Match')
	@section('module_header_content')
		<span>&nbsp;<a title="Add Match" href="{{ route('admin.matches.create') }}"><button class="btn btn-info btn-circle btn-lg"><i class="fa fa-plus"></i></button></a></span>
	@endsection
	<div class="row">
		<div class="white-box">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Team 1 (Host)</th>
                            <th>Team 2 (Visitor)</th>
                            <th>Match on</th>
                            <th>Winner</th>
                            <th>Man of the match</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@forelse($results as $result)
	                        <tr>
                                <td>{{ $result->hostTeam->name }}</td>
                                <td>{{ $result->visitorTeam->name }}</td>
                                <td>
                                    {{ $result->match_date }} {{ $result->match_time }}<br/>
                                    <small>at {{ $result->venue->name }}</small>
                                </td>
                                <td>
                                    {{ $result->winner->name ?? $result->getWinType() }}
                                </td>
                                <td>
                                    {{ $result->manOfTheMatch->full_name ?? 'No one' }}
                                </td>
	                            <td>
	                            	<a href="{{ route('admin.matches.edit', $result->id) }}"  class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></a>
	                            	{!! Form::open(['route'=>['admin.matches.destroy', $result->id], 'method'=>'DELETE', 'class' => 'show_confirm form-override']) !!}
                                    	<button type="submit" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
	                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" align="center">
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