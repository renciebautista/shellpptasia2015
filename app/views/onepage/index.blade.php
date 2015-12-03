 @extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
  	<li  class="active"><a href="/">Home</a></li>
	<li><a href="/overview">Event Overview</a></li>
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
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12 text-center">
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
	
	<div class="col-lg-12">
		<h3 class="section-heading red">3 March 2016, Thursday</h3>	
		<h3 class="section-heading red">Manila Hotel, Manila, Philippines</h3>	
		<hr>
		<p class="txt"><strong>Shell Powering Progress Together is a business forum that seeks to tackle the world’s challenges on the energy-water-food stress nexus, with the end in view of creating greater societal resilience through multi-sector collaboration and action. The conference is being held in Europe, America and Asia, with Manila as host of the annual Asian conference from 2014 to 2016.</strong></p>	
		<hr>
		
		<div id="home-media" class="row">


	        <div class="col-lg-4 ">
	          <!--	<h2 class="text-center">EVENT OVERVIEW</h2>-->
	          	
	          	<div class="text-center">
	          	<a href="/overview">	<img src="assets/images/home/overview3.jpg"  class="picsize" alt="" ></a>
	          	</div>
	          	
	          <!--	<p class="txt">Find out more about the forum in Manila</p>
	         	<p><a class="" href="/overview" role="button">Discover here</a></p>-->
	        </div>

	         <div class="col-lg-4 ">
	          	<!--<h2 class="text-center">PROGRAMME</h2>-->
	          	
	          	<div class="text-center">
	          		<a href="/programme"><img src="assets/images/home/programme3.jpg" class="picsize" alt=""></a>
	          	</div>
	          	
	          	<!--<p class="txt">View the programme for the 2016 forum </p>
	         	<p><a class="" href="/programme" role="button">Learn more</a></p>-->
	        </div>

	        <div class="col-lg-4 ">
	          	<!--<h2 class="text-center">REGISTRATION</h2>-->
	          	
	          	<div class="text-center">
	          		<a href="/register"><img src="assets/images/home/registration3.jpg" class="picsize" alt=""></a>
	          	</div>
	          	
	          	<!--<p class="txt">Access the online registration tool</p>
	         	<p><a class="" href="/register" role="button">View here</a></p>-->
	        </div>
	       
      	</div>

		<br>
	</div>
</div>
@stop