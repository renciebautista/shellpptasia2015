@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
	<li  class="active"><a href="/">Event Overview</a></li>
	<li ><a href="/programme">Programme</a></li>
	<li ><a href="/hotel">Hotel</a></li>
	 <li><a href="/register">Event Registration</a></li>
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

		<p>This year’s programme will include four interactive sessions in which a <strong>diverse group of leading experts – amongst others Ms Saya Kitasei</strong> (Head of Resilience at Xyntéo), <strong>Architect Rajeev Kathpalia</strong> (urban planning expert on smart city development from Vastu Shilpa Foundation), <strong>Holger Dalkmann</strong> (Director at Embarq, a World Resources Institute programme on sustainable transport), and <strong>Luke Beckman</strong> (American Red Cross’ Situational Manager and expert on disaster management) – will embark on the search for greater resilience through interactive presentations, interviews and panel discussions.</p>

		<p>International broadcast journalist <strong>Maryam Nemazee</strong> (Al Jazeera) will moderate the forum, which will also be live streamed via Rappler.</p>

		<p>The event once again gathers some 300 of thought leaders from business, government and civil society to engage in a dialogue, address resiliency through multi-sector collaboration, and explore on-the-ground actions.</p>

		<p>Shell Powering Progress Together Asia 2015 once more coincides with <strong>Shell Eco-marathon Asia</strong>, a unique event bringing together hundreds of student teams from countries across Asia and the Middle East to compete in self-built cars to travel a set distance on the least amount of fuel – in the process pushing the boundaries of fuel efficiency.  Delegates of Powering Progress Together Asia will also have the opportunity to visit the <strong>Shell Eco-marathon Asia paddocks and Fan Zone area</strong>.</p>
		
		<ul>
			<li><a target="_blank" href="https://www.youtube.com/watch?v=7jKg_gh_fBs">Watch the Shell Powering Progress Together – Asia 2014 Lookback Film</a></li>
			<li><a target="_blank" href="http://www.shell.com/global/aboutshell/events/powering-progress-together/what-is-ppt.html">Know more about Shell Powering Progress Together</a></li>
		</ul>
	</div>
</div>
@stop