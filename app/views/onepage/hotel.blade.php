@extends('layouts.master')
@section('navigation')
  <ul class="nav nav-pills pull-right">
    <li><a href="/">Home</a></li>
    <li><a href="/programme">Programme</a></li>
    <li class="active"><a href="/hotel">Hotel</a></li>
     <li><a href="/register">Event Registration</a></li>
  </ul>
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Hotel Information</h2>
				</div>
				<div class="col-lg-12">
					<p>During Powering Progress Together and Shell Eco Marathon, Manila will be visited by a lot of people. Therefore, it can be hard to get a hotel room. Since we are in contact with most of the hotels in Manila, we can help you book a hotel room. Please take note a hotel room is at your own expense.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 text-center">
					<div class="hotel" style="padding-bottom:10px;">
						<img src="assets/images/hotel/1.jpg" class="img-responsive img-thumbnail" alt="">
						<h4><a href="http://www.manila-hotel.com.ph">MANILA HOTEL</a></h4>
						<p class="text-muted">Bonifacio Drive, One Rizal Park 0913, Manila Philippines</p>
						<a href="http://www.manila-hotel.com.ph/maps">View Map</a>
					</div>
				</div>
				<div class="col-sm-6 text-center">
					<div class="hotel" style="padding-bottom:10px;">
						<img src="assets/images/hotel/2.jpg" class="img-responsive img-thumbnail" alt="">
						<h4><a href="http://www.hotelh2o.com">HOTEL H2O</a></h4>
						<p class="text-muted">Luneta, 1000, Manila, Philippines (Behind the Quirino Grandstand)</p>
						<a href="http://www.hotelh2o.com/main/maps">View Map</a>
					</div>
				</div>
		</div>
	</div>
</div>
@stop