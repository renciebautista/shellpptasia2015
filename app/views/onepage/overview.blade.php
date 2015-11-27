@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
  	<li><a href="/">Home</a></li>
	<li  class="active"><a href="/overview">Event Overview</a></li>
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
	<h2 class="section-heading text-center">Event Overview</h2>
	<div class="col-lg-12">
		<p>
			<strong>Shell Powering Progress Together is a business forum that seeks to tackle the world’s challenges on the energy-water-food stress nexus, with the end in view of creating greater societal resilience through multi-sector collaboration and action. The conference is being held in Europe, America and Asia, with Manila as host of the annual Asian conference from 2014 to 2016. 
			</strong>
		</p>		

		<div class="h-header">
			<p>
				MANILA, PHILIPPINES – MARCH 3, 2016
			</p>
		</div>
		<br>
		<p>In the 2014 Shell Powering Progress Together forum, we discussed the stress nexus and explored how we can all work together to survive, adapt and grow in a volatile world. In 2015, the forum focused on environmental and urban resilience and presented innovative solutions, particularly in the face of rapid urbanisation, resource stresses and climate impacts.</p>
		<p>As the culmination of the three-year forum hosted in Manila, the theme for Powering Progress Together 2016 is <strong>“Collaboration for a Sustainable Future”</strong>.  It aims to build on previous years’ discussions and to present, as well as celebrate, concrete examples of collaborative action as we transition to a more resilient and sustainable future, where all sectors of society work together to address vital resource challenges while taking care of the environment and promoting quality of life.</p>
		<p>The 2016 programme will feature a diverse group of leading experts, among others <strong>Jeremy Bentham</strong> (Shell Vice President for Global Business Environment), <strong>Atty. Antonio La Viña</strong> (Dean of the Ateneo School of Government), <strong>Leandro Leviste</strong> (CEO of Solar Philippines), <strong>Rafael Lopa</strong> (Executive Director, Philippine Business for Social Progress) and <strong>Hon. Del de Guzman</strong> (Mayor of Marikina City).</p>
		<p>As in the past Powering Progress Together - Manila conference and other Powering Progress Together forums across the world, you can expect the event to be richly packed with engaging panel discussions and networking opportunities. The Manila conference will also be livestreamed via the social news network <a href="http://www.rappler.com/">www.rappler.com</a> for greater reach.</p>
		<p>Powering Progress Together Asia 2016 once more coincides with <strong>Shell Eco-marathon Asia</strong>, a unique event bringing together hundreds of student teams from countries across Asia and the Middle East to design, build, test and compete in self-built cars to travel a set distance on the least amount of fuel – in the process pushing the boundaries of fuel efficiency.</p>
		
		<!-- <div class="media">
			<a  target="_blank" class="media-left" href="#">
				<img src="assets/images/links/brianwalker.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Watch the Shell Powering Progress Together – Asia 2015 Lookback Film</h4>
				<a target="_blank" class="media-left" href="https://www.youtube.com/watch?v=U66ui8u0_lQ">View HERE</a>
				
			</div>
		</div> -->
<!-- 
		<div class="media">
			<a  target="_blank" class="media-left" href="#">
				<img src="assets/images/links/brianwalker.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Watch the Shell Powering Progress Together – Asia 2014 Lookback Film</h4>
				<a target="_blank" class="media-left" href="https://www.youtube.com/watch?v=7jKg_gh_fBs">View HERE</a>
				
			</div>
		</div> -->

		<!-- <div class="media">
			<a target="_blank" class="media-left" href="http://www.shell.com/global/aboutshell/events/powering-progress-together/what-is-ppt.html">
				<img src="assets/images/links/pptasia.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Know more about Shell Powering Progress Together</h4>
				<a target="_blank" class="media-left" href="http://www.shell.com/global/aboutshell/events/powering-progress-together.html">Discover HERE </a>
			</div>
		</div>

		<div class="media">
			<a  target="_blank" class="media-left" href="#">
				<img src="assets/images/links/brianwalker.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Know more about the Energy-Water-Food Stress Nexus: Watch the NatGeo Video “In Search of Resilience”</h4>
				<a target="_blank" class="media-left" href="https://www.youtube.com/watch?v=x_S_1LPhefs">View HERE</a>
				
			</div>
		</div>
		
		<div class="media">
			<a target="_blank" class="media-left" href="http://www.shell.com/global/aboutshell/events/powering-progress-together/what-is-ppt.html">
				<img src="assets/images/links/pptasia.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Know more about Shell’s work on Future Cities</h4>
				<a target="_blank" class="media-left" href="http://www.shell.com/global/future-energy/scenarios/future-cities.html">Discover HERE </a>
			</div>
		</div>
		<div class="media">
			<a  target="_blank" class="media-left" href="http://www.shell.com/global/environment-society/ecomarathon/about.html">
				<img src="assets/images/links/marathon.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Know more about Shell and Climate Change</h4>
				<a target="_blank" class="media-left" href="http://www.shell.com/global/environment-society/environment/climate-change.html">Know more </a>
				
			</div>
		</div> -->
		<br>
	</div>
</div>
@stop