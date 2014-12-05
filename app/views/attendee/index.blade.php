@extends('layouts.admin')

@stop


@section('content')

<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Attendee List</h1>
		</div>
	</div>
</div>

@if (Session::has('message'))
	<div class="alert alert-dismissable {{ Session::get('class') }}">
		<button class="close" data-dismiss="alert" type="button">×</button>
		{{ Session::get('message') }}
	</div>
@endif

<div class="row">
	<div class="col-lg-12">
		{{ Form::open(array('method' => 'get','class' => 'form-inline')) }}
		  	<div class="filter">
		  		<label class="radio-inline">
			  		<input type="radio" name="status" value="1" {{ Helper::oldRadio('status', '1', true) }}> All
				</label>
	  	  		<label class="radio-inline">
			  		<input type="radio" name="status" value="2" {{ Helper::oldRadio('status', '2') }}> Registered
				</label>
				<label class="radio-inline">
			  		<input type="radio" name="status" value="3" {{ Helper::oldRadio('status', '3') }} > Pending
				</label>
			</div>
		 	<div class="form-group">
		 		<label class="sr-only" for="s">Search</label>
		 		{{ Form::text('s',Input::old('s'),array('class' => 'form-control', 'placeholder' => 'Search')) }}
		  	</div>
		  	<button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
		  	<a href="{{ URL::action('AttendeeController@create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Attendee</a>
		  	<a href="{{ URL::action('AttendeeController@upload') }}" class="btn btn-info"><i class="fa fa-upload"></i> Upload Materfile</a>
		{{ Form::close() }}
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Company / Department</th>
						<th>Designation</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@if(count($attendees) == 0)
					<tr>
						<td colspan="5">No record found!</td>
					</tr>
					@else
					@foreach($attendees as $attendee)
					
					@if($attendee->registered == 1)
					<tr class="active">
					@else
					<tr class="success">
					@endif
						<td>{{ $attendee->department }} </td>
						<td>{{ $attendee->designation }} </td>
						<td>{{ $attendee->title }} {{ $attendee->first_name }} {{ $attendee->last_name }}</td>
						<td>{{ $attendee->email }}</td>
						<td>{{ $attendee->status }}</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table> 
		</div>
	</div>
</div>

@stop