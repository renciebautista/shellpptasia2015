@extends('layouts.admin')

@stop


@section('content')

<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Export Attendee List</h1>
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
		{{ Form::open(array('action' => 'ExportController@exportlist','class' => 'bs-component')) }}
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="width:10px;"><input type="checkbox" id="selecctall"/></th>
						<th>Date Imported</th>
					</tr>
				</thead>
				<tbody>
					@if(count($attendees) == 0)
					<tr>
						<td colspan="2">No record found!</td>
					</tr>
					@else
					@foreach($attendees as $attendee)
					<tr>
						<td><input class="checkbox1" type="checkbox" name="date[]" value="{{$attendee->date_only}}"></td>
						<td>{{ date_format(date_create($attendee->date_only),'m/d/Y') }} </td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table> 
			<div class="form-group">
				{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>

@stop