@extends('layouts.master')
@section('navigation')
  <ul class="nav nav-pills pull-right">
  	<li><a href="/">Home</a></li>
    <li><a href="/">Event Overview</a></li>
    <li><a href="/programme">Programme</a></li>
    <li class="active"><a href="/hotel">Hotel</a></li>
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
<div class= "txt">
<div class="row">
	<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="headd"><center>HOTEL INFORMATION</center></h2>
				</div>
				<div class="col-lg-12">
					<!--<p>During Powering Progress Together and Shell Eco-marathon, Manila will be visited by a lot of people. Therefore, it can be hard to get a hotel room. Since we are in contact with most of the hotels in Manila, we can help you book a hotel room. Please take note a hotel room is at your own expense.</p>-->
				<p>The City of Manila will host many local and international visitors during the Shell Powering Progress Together Asia and Shell Eco-marathon Asia events. As such, it may be difficult to book a hotel room. We can assist you in booking your hotel room at Manila Hotel or Hotel H2O. Please note, however, that for conference delegates, the hotel room will be at your own expense.</p>
				</div>
			</div>
			<div class="row">
				@foreach ($hotels as $hotel)
				<div class="col-sm-6 text-center">
					<div class="hotels" style="padding-bottom:10px;">
						<img src="assets/images/hotel/{{ $hotel->picture }}" class="img-responsive img-thumbnail" alt="">
						<h4><a href="{{ $hotel->website }}">{{ $hotel->name}}</a></h4>
						<p class="text-muted">{{ $hotel->address}}</p>
						<a href="{{ $hotel->map }}">View Map</a>
					</div>
				</div>
				@endforeach
		</div>
	</div>
</div>
</div>
@stop