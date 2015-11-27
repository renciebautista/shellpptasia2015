@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
  	<li><a href="/">Home</a></li>
	<li><a href="/">Event Overview</a></li>
	<li class="active"><a href="/programme">Programme</a></li>
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
<p class="warning">An indicative agenda for PPT 2016 is available below for your convenience and reference.  Please note that any changes to this will be communicated nearer the time of the event and published here.</p>
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
	
	<h2 class="section-heading text-center">Programme </h2><br>
	<div id="programme" class="table-responsive">
			<table class="table">
				<tbody>
					<tr>
						<td>8:00 – 9:00</td>
						<td><strong>Registration</strong></td>
					</tr>
					<tr>
						<td>9:00 – 9:10</td>
						<td>
							<strong>Forum Opening Number by Joey Ayala at ang Bagong Lumad</strong>
						</td>
					</tr>
					<tr>
						<td>9:10 – 9:30</td>
						<td>
							<strong>Plenary Opening of Powering Progress Together</strong><br>
							<ul>
								<li>Forum Introduction by Moderator</li>
								<li>Welcome from Shell Chief Financial Officer Simon Henry</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>9:30 – 10:30</td>
						<td>
							<strong>Opening Panel Session: “Energy Transition and Climate Challenge”</strong><br>
							<p>Goal: To create awareness of the continuous negative impact of climate change on the world’s resources and society’s resilience.  This includes the need for collaborative action among various sectors to drive immediate solutions to lower carbon emissions.</p>
						</td>
					</tr>
					<tr>
						<td>10:30 – 11:10</td>
						<td>
							<strong>Case Study Presentations: “Low-Carbon Technologies”</strong><br>
							<p>Goal: To present innovative programs or projects that provide decarbonization solutions, given that cities are responsible for 75% of global CO2 emissions, with transport and buildings being among the largest contributors.</p>
						</td>
					</tr>
					<tr>
						<td>11:10 – 11:30</td>
						<td>
							<strong>Coffee Break</strong><br>
						</td>
					</tr>
					<tr>
						<td>11:30 – 11:35</td>
						<td>
							<strong>Intermezzo: Shadow Play Dance by El Gamma Penumbra</strong><br>
						</td>
					</tr>
					<tr>
						<td>11:35 – 12:25</td>
						<td>
							<strong>Collaboration in Action Panel: “Solutions for Resilience”</strong><br>
							<p>Goal: To share positive, practical and inspiring collaborative partnership projects in the Philippines that promote environmental and urban resilience.</p>
						</td>
					</tr>
					<tr>
						<td>12:25 – 12:55</td>
						<td>
							<strong>Special Topic: “Investing in the Future of our Planet”</strong><br>
							<p>Goal:  To inspire the audience to take a stake in the future by creating meaningful partnerships in order to make ambitious but equitable steps towards a low-carbon and climate-resilient future.</p>
						</td>
					</tr>
					<tr>
						<td>12:55 – 1:00</td>
						<td>
							<strong>Intermezzo: Sand Art performance by Monica Regalario</strong><br>
						</td>
					</tr>
					<tr>
						<td>1:00 – 1:10</td>
						<td>
							<strong>Closing Inspirational Keynote</strong><br>
						</td>
					</tr>
					<tr>
						<td>1:10 – 1:15</td>
						<td>
							<strong>Word of Gratitude</strong><br>
							<p>by Shell companies in the Philippines Country Chairman Edgar Chua</p>
						</td>
					</tr>
					<tr>
						<td>1:15 – 1:20</td>
						<td>
							<strong>Pledging Activity and Closing</strong><br>
						</td>
					</tr>
					<tr>
						<td>1:20 – 2:30</td>
						<td>
							<strong>Lunch at the Maynila Ballroom</strong><br>
						</td>
					</tr>
					
				</tbody>
			</table>
  	</div> 
  	<p><em><strong>Shell Powering Progress Together Asia 2016 will feature a wide variety of prominent speakers, amongst others:</strong></em></p>
  	<hr>
  	<div>

  		<div class="speaker-list">
  			<div class="speaker">
	  			<div class="row">
				  	<div class="col-md-4">
				  		<img src="assets/images/speakers/gellis.jpg" class="img-responsive" alt="">
				  	</div>
				  	<div class="col-md-8 info">
				  		<p class="name">Jeremy Bentham</p>
				  		<p>Vice President Global Business Environment</p>
				  		<p>Royal Dutch Shell plc</p>
				  	</div>
				</div>
	  		</div>
	  		<br>
	  		<p>Jeremy Bentham leads Shell’s Global Business Environment team, a core corporate strategy activity best
known outside the company for developing the Shell Scenarios. He graduated from Oxford University,
and joined Shell in 1980 following post-graduate experience at the California Institute of Technology. He
also holds a masters degree in management from the Massachusetts Institute of Technology, where he
was a Sloan Fellow. Following experience in research, technology, and industry analysis, he held
management positions at several refineries. After managing corporate strategy analysis for Shell, Jeremy
joined the leadership of Shell’s global technology company, and subsequently served as chief executive
of Shell Hydrogen before becoming head of Shell Scenarios.</p>
  		</div>

  		<div class="speaker-list">
  			<div class="speaker">
	  			<div class="row">
				  	<div class="col-md-4">
				  		<img src="assets/images/speakers/gellis.jpg" class="img-responsive" alt="">
				  	</div>
				  	<div class="col-md-8 info">
				  		<p class="name">Atty Antonio La Viña</p>
				  		<p>Dean</p>
				  		<p>Ateneo School of Government</p>
				  	</div>
				</div>
	  		</div>
	  		<br>
	  		<p>Tony La Viña is currently Dean of the Ateneo School of Government. In the Philippines and Asia, he is a well-know human rights and environmental lawyer, having worked for more than 25 years now to promote the rights of indigenous peoples and local communities and the protection of the environment. Tony has been a lead negotiator for the Philippines in the climate change negotiations since 1997. He has played prominent and leadership roles in the processes especially on land use change and forestry issues and in Reducing Emissions from Deforestation and Degradation ( REDD-plus) negotiations. He is now focused on the Paris Agreement on Climate Change, working for the integration of human rights and climate justice into an agreement which is ambitious and effective in overcoming the climate challenge.</p>
  		</div>

  		<div class="speaker-list">
  			<div class="speaker">
	  			<div class="row">
				  	<div class="col-md-4">
				  		<img src="assets/images/speakers/gellis.jpg" class="img-responsive" alt="">
				  	</div>
				  	<div class="col-md-8 info">
				  		<p class="name">Rafael Lopa</p>
				  		<p>Executive Director</p>
				  		<p>Philippine Business for Social Progress (PBSP)</p>
				  	</div>
				</div>
	  		</div>
	  		<br>
	  		<p>Rafael “Rapa” Lopa leads PBSP’s efforts in organizing and managing platforms for collective engagements (PlaCEs) that leverage private business sector’s involvement with other stakeholders in addressing systemic social problems in the areas of Health, Education, Environment, Livelihood Development and Disaster Risk Management. Rapa also champions PBSP’s call for companies to develop more inclusive business models that that incorporates the marginalized sectors of society within the company‘s value chain as suppliers, consumers, distributors and/or employees in such a way that it creates shared value.</p>
	  		<p>Prior to his current responsibilities in PBSP, Rapa has invested thirty years in the development sector after graduating from the Ateneo de Manila University with a Bachelor of Arts Degree in Inter-disciplinary Studies. Rapa also served and currently serves as a director in other companies and foundations in the Philippines.</p>
  		</div>

  		<div class="speaker-list">
  			<div class="speaker">
	  			<div class="row">
				  	<div class="col-md-4">
				  		<img src="assets/images/speakers/gellis.jpg" class="img-responsive" alt="">
				  	</div>
				  	<div class="col-md-8 info">
				  		<p class="name">Guillermo Luz</p>
				  		<p>Private Sector Co-Chairman</p>
				  		<p>National Competitiveness Council of the Philippines</p>
				  	</div>
				</div>
	  		</div>
	  		<br>
	  		<p>Guillermo “Bill” Luz is the private sector co-chairman of the National Competitiveness Council, a public-private body that develops strategy for the long-term competitiveness of the Philippines through policy reforms, project implementation, institution building and activities in real-estate development, banking and financial services, telecommunications, water infrastructure development and management, automotive dealership and distribution, business process outsourcing, electronics manufacturing solutions, and new investments in performance monitoring. He is associate director of Ayala Corporation, the holding company of one of the oldest and largest business groups in the Philippines, with business power, renewable energy and infrastructure.</p>
	  		<p>He is the Lead Coordinator for Private Sector of APEC National Organizing Council (APEC-NOC). APEC NOC is the government agency in charge of preparations for the Philippines Chairmanship of APEC in 2015. He also serves as the Chief Operating Officer of APEC 2015 CEO Summit Host Committee.</p>
  		</div>

  		<div class="speaker-list">
  			<div class="speaker">
	  			<div class="row">
				  	<div class="col-md-4">
				  		<img src="assets/images/speakers/gellis.jpg" class="img-responsive" alt="">
				  	</div>
				  	<div class="col-md-8 info">
				  		<p class="name">Edgar Chua</p>
				  		<p>Vice President Global Business Environment</p>
				  		<p>Shell companies in the Philippines</p>
				  	</div>
				</div>
	  		</div>
	  		<br>
	  		<p>Ed is the Country Chairman of the Shell companies in the Philippines. He has corporate responsibility for the various Shell companies in the exploration, manufacturing and marketing sector of the petroleum business and oversees the Chemicals businesses and Business Services.</p>
	  		<p>Concurrently, Ed serves as the Chairman of the Philippine Business for the Environment and the Energy Council of the Philippines; and is also the President of Pilipinas Shell Foundation, Inc.  Ed joined Shell in 1979 and has had many years of experience in the business fields of chemicals, auditing, supply planning and trading, marketing and sales, lubricants, corporate affairs and general management. He held senior positions outside the Philippines including transport analyst in Group Planning in the UK, GM of the Shell Company of Cambodia. Ed earned his Bachelor of Science degree in Chemical Engineering from De La Salle University and attended various international seminars and courses including the senior management course in INSEAD in Fontainebleau, France.</p>
  		</div>
  		
  	</div>
</div>
@stop