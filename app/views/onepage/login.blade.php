@extends('layouts.master')


@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Login</h2>
				@if (Session::has('message'))
					<div class="alert alert-dismissable {{ Session::get('class') }}">
						<button class="close" data-dismiss="alert" type="button">×</button>
						{{ Session::get('message') }}
					</div>
	            @endif
			</div>
		</div>
			
	</div>
</div>
<div class="row">

	<div class="col-lg-12 text-center" style="margin-bottom:20px;">
		{{ Form::open(array('action' => 'OnePageController@dologin','class' => 'form-inline', 'role' => 'form')) }}
		<form class="form-inline" role="form">
		<div class="form-group">
			<label class="sr-only" for="email">Email address</label>
			<input id="email" name="email" class="form-control" type="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label class="sr-only" for="password">Password</label>
			<input id="password" name="password" class="form-control" type="password" placeholder="Password">
		</div>
			<button class="btn btn-default btn-responsive" type="submit">Sign in</button>
		{{ Form::close() }}   
	</div>
</div>
@stop