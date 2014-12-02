@extends('layouts.master')


@section('content')
<div class="row">

	<div class="col-lg-12 text-center" style="margin-bottom: 20px;">

		<h2 class="section-heading ">Login</h2>  
		@if (Session::has('message'))
				<div class="alert alert-dismissable {{ Session::get('class') }}">
					<button class="close" data-dismiss="alert" type="button">×</button>
					{{ Session::get('message') }}
				</div>
            @endif
		{{ Form::open(array('action' => 'OnePageController@dologin','class' => 'form-inline')) }}
		<div class="form-group">
			<div class="input-group">
				<label class="sr-only" for="email">Email address</label>	
				<input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
			</div>
		</div>
		<div class="form-group">
			<label class="sr-only" for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-default">Login</button>
		{{ Form::close() }}   
	</div>
</div>
@stop