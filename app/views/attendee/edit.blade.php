@extends('layouts.admin')

@section('content')
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Edit Attendee</h1>
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
	{{ Form::open(array('route' => array('attendee.update', $user->id), 'method' => 'PUT', 'class' => 'bs-component')) }}
		<div class="col-lg-6">
		<div class="form-group">
			{{ Form::label('department', 'Company / Department', array('class' => 'control-label')) }}
			{{ Form::text('department', $user->department,array('class' => 'form-control', 'placeholder' => 'Company / Department')) }}
		</div>
		<div class="form-group">
			{{ Form::label('designation', 'Designation', array('class' => 'control-label')) }}
			{{ Form::text('designation', $user->designation, array('class' => 'form-control', 'placeholder' => 'Designation')) }}
		</div>
		<div class="form-group">
			{{ Form::label('title', 'Title', array('class' => 'control-label')) }}
			{{ Form::text('title', $user->title, array('class' => 'form-control', 'placeholder' => 'Title')) }}
		</div>
		<div class="form-group">
			{{ Form::label('first_name', 'First Name', array('class' => 'control-label')) }}
			{{ Form::text('first_name', $user->first_name, array('class' => 'form-control', 'placeholder' => 'First Name')) }}
		</div>
		<div class="form-group">
			{{ Form::label('last_name', 'Last Name', array('class' => 'control-label')) }}
			{{ Form::text('last_name', $user->last_name, array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
			{{ Form::text('email', $user->email, array('class' => 'form-control', 'placeholder' => 'Email')) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
			{{ HTML::linkRoute('attendee.index', 'Back', array(), array('class' => 'btn btn-default')) }}
		</div>
	{{ Form::close() }}
	</div>
</div>
@stop