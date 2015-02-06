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
		<p>Building on last year’s themes – the energy-water-food stress nexus and the role resilience can play in addressing future resource stresses – this edition of <strong>Shell Powering Progress Together Asia</strong> will focus on <strong>Resilience in an Urbanising World</strong> and the key role cities will play to be liveable and sustainable hubs of growth. This is a significant topic for Asia since it is the most populous continent, and home to over half of the world’s megacities.</p>

		<p>This year’s programme will include four interactive sessions in which a <strong>diverse group of leading experts – amongst others His Excellency Asif Ahmad</strong> (British Ambassador to the Philippines), <strong>Ms Saya Kitasei</strong> (Head of Resilience at Xyntéo), <strong>Glynn Ellis</strong> (Strategic Energy Advisor, Shell Corporate Strategy and Planning), <strong>Architect Rajeev Kathpalia</strong>, (urban planning expert on smart city development from Vastu Shilpa Foundation), <strong>Holger Dalkmann</strong> (Director at Embarq, a World Resources Institute programme on sustainable transport), <strong>Stuart Hawkins</strong> (Coca-Cola Director for Sustainability - ASEAN), <strong>Illac Diaz</strong> (Social Entrepreneur, Liter of Light) <strong>and Luke Beckman</strong> (American Red Cross’ Situational Manager and expert on disaster management) – will embark on the search for greater resilience through interactive presentations, interviews and panel discussions.</p>

		<p>International broadcast journalist <strong>Maryam Nemazee</strong> (Al Jazeera English) will moderate the forum, which will also be live streamed via Rappler.</p>

		<p>The event once again gathers some 300 of thought leaders from business, government and civil society to engage in a dialogue, address resiliency through multi-sector collaboration, and explore on-the-ground actions.</p>

		<p>Shell Powering Progress Together Asia 2015 once more coincides with <strong>Shell Eco-marathon Asia</strong>, a unique event bringing together hundreds of student teams from countries across Asia and the Middle East to compete in self-built cars to travel a set distance on the least amount of fuel – in the process pushing the boundaries of fuel efficiency.  Delegates of Powering Progress Together Asia will also have the opportunity to visit the <strong>Shell Eco-marathon Asia paddocks and Fan Zone area</strong>.</p>
		<br>

		<div class="media">
			<a  target="_blank" class="media-left" href="#">
				<img src="assets/images/links/brianwalker.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Watch the Shell Powering Progress Together Asia 2014 Highlights Video</h4>
				<a target="_blank" class="media-left" href="https://www.youtube.com/watch?v=7jKg_gh_fBs">View HERE</a>
				
			</div>
		</div>
		<div class="media">
			<a target="_blank" class="media-left" href="http://www.shell.com/global/aboutshell/events/powering-progress-together/what-is-ppt.html">
				<img src="assets/images/links/pptasia.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">What is Shell Powering Progress Together?</h4>
				<a target="_blank" class="media-left" href="http://www.shell.com/global/aboutshell/events/powering-progress-together/what-is-ppt.html">Discover HERE </a>
			</div>
		</div>
		<div class="media">
			<a  target="_blank" class="media-left" href="http://www.shell.com/global/environment-society/ecomarathon/about.html">
				<img src="assets/images/links/marathon.jpg" class="img-responsive" alt="" >
			</a>
			<div class="media-body">
				<h4 class="media-heading">Know more about Shell Eco-marathon</h4>
				<a target="_blank" class="media-left" href="http://www.shell.com/global/environment-society/ecomarathon/about.html">Know more </a>
				
			</div>
		</div>
		<br>
	</div>
</div>
@stop