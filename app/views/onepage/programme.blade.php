@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
	<li><a href="/">Event Overview</a></li>
	<li  class="active"><a href="/programme">Programme</a></li>
	<li><a href="/hotel">Hotel</a></li>
	<li><a href="/register">Event Registration</a></li>
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
	   	<h2 class="section-heading text-center">Programme</h2>
		<div id="programme" class="table-responsive">
			<table class="table">
				<tbody>
					<tr>
						<td>8:00 – 9:00</td>
						<td><strong>Registration and Welcome</strong></td>
					</tr>
					<tr>
						<td>9:00 – 9:30</td>
						<td>
							<strong>Plenary Opening of Powering Progress Together</strong><br>
							<p>Welcome from Royal Dutch Shell Executive Committee member</p>
						</td>
					</tr>
					<tr>
						<td>9:30 – 10:30</td>
						<td>
							<strong>PANEL 1: Resilience – Current Thinking and Trends</strong><br>
							<strong>Speakers:</strong>
							<ul>
								<li><strong>Ms. Saya Snow Kitasei</strong>, Head of Resilience, Xynteo</li>
								<li>Representative from Shell for Strategies for resilience or smart cities</li>
							</ul>	
						</td>
					</tr>
					<tr>
						<td>10:30 – 10:55</td>
						<td>
							<strong>Coffee Break</strong><br>
						</td>
					</tr>
					<tr>
						<td>10:55 – 12:20</td>
						<td>
							<strong>PANEL 2: Case Studies on Resilience for Cities</strong><br>
							<strong>Speakers:</strong>
							<ul>
								<li><strong>Arch. Rajeev Kathpalia</strong>, Partner, Vastu Shilpa Foundation</li>
								<li><strong>Holger Dalkmann</strong>, Director, EMBARQ, World Resources Institute</li>
								<li>Speaker on smart cities utilizing ITC</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>12:20 – 1:30</td>
						<td>
							<strong>Lunch</strong><br>
						</td>
					</tr>
					<tr>
						<td>1:30 – 1:50</td>
						<td>
							<strong>Interview and Special Performance</strong><br>
							<p><strong>"Bella Gaia"</strong> – a musical performance demonstrating the interconnection of humans and nature, art and science; an exploration of the relationship between human civilization and our ecosystem through time and space</p>
							<strong>Speaker – Performer:</strong>
							<ul>
								<li><strong>Kenji Williams</strong> Award-winning filmmaker, electronic music producer and classical violinist</li>
							</ul>	
						</td>
					</tr>

					<tr>
						<td>1:50 – 3:00</td>
						<td>
							<strong>PANEL 3: Resilience and Its Implications on Business</strong><br>
							<strong>Speakers: </strong>
							<ul>
								<li>Perspective of a food/FMCG company</li>
								<li>Perspective of a water-user corporation</li>
								<li>Perspective of an energy company: <strong>Edgar Chua</strong>, Shell companies in the Philippines Country Chairman</li>
							</ul>	
						</td>
					</tr>
					<tr>
						<td>3:00 – 3:20</td>
						<td>
							<strong>Coffee Break</strong><br>
						</td>
					</tr>
					<tr>
						<td>3:20 – 4:10</td>
						<td>
							<strong>PANEL 4: Inspiring Stories of Innovation and Resilience</strong><br>
							<strong>Speakers: </strong>
							<ul>
								<li>Illac Diaz, Social Entrepreneur, Liter of Light</li>
								<li>Luke Beckman, Manager for Situational Awareness, American Red Cross</li>
							</ul>	
						</td>
					</tr>
					<tr>
						<td>4:10 – 4:15</td>
						<td>
							<strong>Closing Inspirational Keynote</strong><br>
						</td>
					</tr>
					<tr>
						<td>4:15 – 4:20</td>
						<td>
							<strong>Word of Gratitude</strong><br>
							<p><strong>Edgar Chua</strong>, Country Chairman, Shell companies in the Philippines, or</p>
						</td>
					</tr>
					<tr>
						<td>4:20 – 5:30</td>
						<td>
							<strong>Guided Tours through the Shell Eco-marathon Asia Paddocks and the Shell Fan Zone</strong><br>
						</td>
					</tr>
				</tbody>
			</table>
  		</div>       
	</div>
</div>
@stop