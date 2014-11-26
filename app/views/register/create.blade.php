@extends('layouts.layouts')

@section('content')
<div class="content">
	<form class="form-horizontal" role="form">
		<div class="form-group">
			{{ Form::label('company_name', 'Company Name', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('company_name','',array('class' => 'form-control', 'placeholder' => 'Company Name')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('title', 'Title', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('title','',array('class' => 'form-control', 'placeholder' => 'Title')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('first_name','',array('class' => 'form-control', 'placeholder' => 'First Name')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('surname', 'Surname', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('surname','',array('class' => 'form-control', 'placeholder' => 'Surname')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('jobtitle', 'Job Title', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('jobtitle','',array('class' => 'form-control', 'placeholder' => 'Job Title')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('email','',array('class' => 'form-control', 'placeholder' => 'Email')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('city', 'Town / City', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('city','',array('class' => 'form-control', 'placeholder' => 'Town / City')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('country', 'Country', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('country','',array('class' => 'form-control', 'placeholder' => 'Country')) }}
			</div>			
		</div>
	  
	  	<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
			  	<button type="submit" class="btn btn-default btn-xl">Submit</button>
			</div>
	  	</div>
	</form>
</div>
@stop
