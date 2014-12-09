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
	   	<h3 class="section-heading text-center">Sorry, this page isn't available</h3>
	   	<p>The link you followed may be broken, or the page may have been removed.</p>
		     
	</div>
</div>
	
</div>
@stop