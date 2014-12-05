@extends('layouts.admin')

@section('content')
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Upload Masterfile</h1>
		</div>
	</div>
</div>
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
<div class="row">

	<div class="col-lg-12">
	{{ Form::open(array('action' => 'AttendeeController@doUpload','class' => 'bs-component','files'=>true)) }}
		<div class="col-lg-6">
		<div class="form-group">
			{{ Form::label('department', 'Company / Department', array('class' => 'control-label')) }}
			{{ Form::file('file','',array('id'=>'','class'=>'')) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
			{{ HTML::linkRoute('attendee.index', 'Back', array(), array('class' => 'btn btn-default')) }}
		</div>
	{{ Form::close() }}
	</div>
</div>
@stop