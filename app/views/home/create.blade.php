@extends('layouts.layouts')

@section('content')
<div class="content">
 	{{ Form::open(array('action' => 'RegisterController@store','class' => 'form-horizontal')) }}
    <div class="form-group">
			{{ Form::label('username', 'Email address', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::text('username','',array('class' => 'form-control', 'placeholder' => 'Email address')) }}
			</div>			
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) }}
			<div class="col-sm-8">
				{{ Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password')) }}
			</div>			
		</div>
		
	  	<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
			  	<button type="submit" class="btn btn-default btn-xl">Login</button>
			</div>
	  	</div>
    {{ Form::close() }}
</div>
@stop
