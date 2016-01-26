@extends('layouts.master')

@section('navigation')
  <ul class="nav navbar-nav">
    <li><a href="/">Home</a></li>

    <li><a href="/overview">Event Overview</a></li>
    <li><a href="/programme">Programme</a></li>
    <li><a href="/speakers">Speakers</a></li>
    <li class="active"><a href="/hotel">Hotel</a></li>
    @if(!User::regret())
    <li><a href="/register">Event Registration</a></li>
    @endif
    <li><a href="/logout">Logout</a></li>
  </ul>
@stop

@section('content')
<p>
  The City of Manila will host many local and international visitors during the Shell Powering Progress Together Asia and
  Shell Eco-marathon Asia events. As such, it may be difficult to book a hotel room. We can assist you in booking your
  hotel room at Manila Hotel or Hotel H2O. Please note, however, that for conference delegates, the hotel room will be
  at your own expense.
</p>
<br/>

<div class="row">
  <div class="col-sm-3">
    <img src="assets/images/uv/hotel/2.jpg" class="img-thumbnail" width="200" height="200">
  </div>
  <div class="col-sm-9">
    <h2>Manila Hotel</h2>
    <p>Bonifacio Drive, One Rizal Park
0913, Manila Philippines</p>
    <i><u><a href="http://www.manila-hotel.com.ph">http://www.manila-hotel.com.ph</a></u></i>
  </div>
</div>
<br/>
<div class="row">
  <div class="col-sm-3">
    <img src="assets/images/uv/hotel/3.png" class="img-thumbnail" width="200" height="200">
  </div>
  <div class="col-sm-9">
    <h2>Hotel H20</h2></h2>
    <p>Luneta, 1000, Manila, Philippines (Behind the Quirino Grandstand)</p>
    <i><u><a href="http://www.hotelh2o.com">http://www.hotelh2o.com</a></u></i>
  </div>
</div>

@stop