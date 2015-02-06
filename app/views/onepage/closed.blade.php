@extends('layouts.master')
@section('navigation')
  <ul class="nav nav-pills pull-right">
	<li  class="active"><a href="/">Event Overview</a></li>
	<li ><a href="/programme">Programme</a></li>
	<li ><a href="/hotel">Hotel</a></li>
	@if(!User::regret())
	<li><a href="/register">Event Registration</a></li>
	@endif
	<li><a href="/logout">Logout</a></li>
  </ul>
@stop

@section('footer')
<div class="navbar-collapse footer-menu">
	<nav>
		@section('navigation')
		@show
	</nav>
</div>
@stop

@section('content')
<div class="row">
<div class="row">
	<div class="col-lg-12 text-center">
	   	<h3 class="section-heading text-center">Online Registration is closed.</h3>
	   	<p>Thank you for your interest in registering our event.</p>
	   	<p>We are sorry that the online registration for this event is closed</p>
		     
	</div>
</div>
	
</div>
@stop