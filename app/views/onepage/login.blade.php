@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
    <li><a href="/">Home</a></li>
    <li><a href="/programme">Programme</a></li>
    <li><a href="/hotel">Hotel</a></li>
    <li class="active"><a href="/login">Login</a></li>
  </ul>
@stop

@section('content')
<div class="row">
	<div class="col-lg-12 text-center" style="margin-bottom: 20px;">
	    <h2 class="section-heading ">Login</h2>  
	    {{ Form::open(array('action' => 'RegisterController@store','class' => 'form-inline')) }}
    <div class="form-group">
    <div class="input-group">
      <label class="sr-only" for="exampleInputEmail2">Email address</label>	
      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default btn-xl">Login</button>
    {{ Form::close() }}   
	</div>
</div>
@stop