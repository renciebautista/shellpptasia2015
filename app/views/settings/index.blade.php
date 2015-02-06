@extends('layouts.admin')

@section('content')
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Event Settings</h1>
		</div>
	</div>
</div>
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@if (Session::has('message'))
	<div class="alert alert-dismissable {{ Session::get('class') }}">
		<button class="close" data-dismiss="alert" type="button">×</button>
		{{ Session::get('message') }}
	</div>
@endif

<div class="row">

	<div class="col-lg-12">
	{{ Form::open(array('route' => array('settings.update', $settings->id), 'method' => 'PUT', 'class' => 'bs-component')) }}
		<div class="col-lg-6">
		<div class="form-group">
			{{ Form::label('cutoff', 'Event Registration Cut Off', array('class' => 'control-label')) }}
			{{ Form::text('cutoff',($settings->cutoff != null) ? date_format(date_create($settings->cutoff),'m/d/Y') : '',array('class' => 'form-control', 'placeholder' => 'Event Registration Cut Off')) }}
		</div>
		<div class="form-group">
			<div class="checkbox">
			<label>
				{{ Form::checkbox('enable_cutoff', '1', ($settings->enable_cutoff) ? true: false) }} Enable Cut Off
			</label>
			</div>
		</div>
		<div class="form-group">
			{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
		</div>
	{{ Form::close() }}
	</div>
</div>
@stop