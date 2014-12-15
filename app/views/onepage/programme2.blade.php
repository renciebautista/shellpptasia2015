@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
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
						<td><strong>Registration and Welcome</strong></td>
					</tr>
					<tr>
						<td>9:00 – 9:30</td>
						<td>
							<strong>Plenary Opening of Powering Progress Together</strong><br>
							<ul>
								<li>Forum Introduction by Moderator (<strong>Maryam Nemazee</strong> – Shell Powering Progress Together Rotterdam moderator and Al Jazeera English Broadcaster and Journalist)</li>
								<li>Welcome from Royal Dutch Shell Executive Committee member</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>9:30 – 10:30</td>
						<td>
							<strong>PANEL 1: Resilience – Current Thinking and Trends</strong><br>
							<p><strong>Goal:</strong>  Creating a deeper understanding of resilience in the Asian context, with special focus on the challenges and opportunities for cities</p>
							<p><strong>Narrative:</strong>  As climate uncertainty increases and the world’s population expands, pressure on energy, water and food resources will continue to escalate.  Society will need to change, to reorganise, and learn from them through the ability of "resilience".</p>
							<p>Resilience has surfaced widely as a discussion point in various sectors of society. Calls to act promptly, innovatively, and collaboratively are being done to arrive at relevant and timely solutions to abate impact.</p>
							<p>The first panel seeks to answer the following questions:  What is the current thinking on resilience?  How does climate change affect resilience strategies? What are resilience trends in designing and planning long term sustainable improvements to make liveable cities?</p>
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
							<p><strong>Goal:</strong> To explore how cities can be effective hubs for experimentation, action and measurable progress</p>
							<p><strong>Narrative:</strong> By 2050, the United Nations project that around three quarters of the world’s projected population of 9 billion people will live in cities.  As cities swell, so do the pressure on resources of energy, water and food become even greater. With complications of climate change and natural disasters, how can cities remain liveable and transform into sustainable places?</p>
							<p>This panel presents how different cities are utilising innovative eco-conscious urban planning, technology and development processes through collaboration, to build smart cities and operate efficient transport systems.</p>
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
								<li><strong>Kenji Williams</strong> International award-winning filmmaker, electronic music producer and classical violinist</li>
							</ul>	
						</td>
					</tr>

					<tr>
						<td>1:50 – 3:00</td>
						<td>
							<strong>PANEL 3: Resilience and Its Implications on Business and Society</strong><br>
							<p><strong>Goal:</strong> To know what incentives are needed to work more closely together on societal resilience; and how businesses and civil society can contribute to drive further action.</p>
							<p><strong>Narrative:</strong> As global population grows, so does pressure on demand for food, water and energy.  Access to these resources is made complicated and challenging with the impact of climate change and natural disasters.</p>
							<p>For example, the World Bank estimates that we will need to grow almost twice as much food by 2050 as we do today. If current water consumption trends continue, the world could face a 40% shortfall between global freshwater demand and supply by 2030, according to the World Economic Forum.  With conventional global energy resource dwindling, there is a need to look for alternative and clean energy to keep pace with demand.</p>
							<p>This panel explores how resource scarcity is helping civil society and businesses work in collaboration to design innovative strategies to be resilient.</p>
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
							<p><strong>Goal:</strong> To share stories of resilience through innovation, collaboration and action</p>
							<p><strong>Narrative:</strong> As population and cities grow at unprecedented speed, building resilience against climate, disasters and other risks are just some of the challenges that cities are grappling with today. To remain liveable and sustainable, cities must be able to meet these challenges with innovative solutions.</p>
							<p>In this panel, experts share their innovations and post disaster development strategies, highlighting opportunities where government, business and society can respond to climate-related risks.</p>
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
							<p><strong>Edgar Chua</strong>, Country Chairman, Shell companies in the Philippines</p>
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
  	<p><em><strong>Shell Powering Progress Together Asia 2015 will feature a wide variety of prominent speakers, amongst others:</strong></em></p>
  	<hr>
	<div id="speakers" class="col-lg-12">
			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kitasei.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Saya Snow Kitasei</label><br>
				<label>Head of Resilience</label><br>
				<label>Xyntéo</label><br>
			</div>
			<p>Saya Kitasei graduated from Stanford University with an M.A. in Russian, East European, and Eurasian Studies and a B.S. in Earth Systems.  While at Stanford, she received an Undergraduate Research Fellowship, an Ernest Hollings Fellowship, and a Department of Education FLAS scholarship.  After graduating, she interned with the Center for American Progress energy team and the Climate Institute in Washington, D.C. Saya began her MAP fellowship with the Worldwatch Institute in time to help launch the Institute's Natural Gas and Sustainable Energy Initiative.  She joined Xyntéo in 2012 as an analyst on topics such as policy innovation in the water-energy-food nexus and the frontiers of climate science.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/dalkmann.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Holger Dalkmann</label><br>
				<label>Director</label><br>
				<label>EMBARQ</label><br>
			</div>
			<p>Holger Dalkmann has 15 years of experience working in the field of transport, sustainability and climate change. He joined World Resource Institute in 2011 as the director for its EMBARQ programme, which catalyzes environmentally and financially sustainable transport solutions to improve quality of life in cities. He provides strategic leadership and management for EMBARQ’s global staff and partners, as well as direction for its fundraising and communication activities.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kathpalia.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Arch. Rajeev Kathpalia</label><br>
				<label>Architect, Urban Designer, Planner</label><br>
				<label>Vastu Shilpa Consultants</label><br>
			</div>

			
			<p>Architect Rajeev Kathpalia is a graduate of the Chandigarh College of Architecture and of Washington University at St. Louis with a master’s degree in architecture and urban design.  He has worked in Delhi, Kuwait and St. Louis, and currently practices from Ahmedabad. For his work, he has received several national awards and honours including First Prize National Design Idea in 1988, Architect of the Year Award in 1993, and World Architecture Award in 2008.  Architect Kathpalia is currently a partner at Vastu Shilpa Consultants, a professional consultancy practice in architecture, urban planning and design; and a trustee and director of the Vastu Shilpa Foundation, a non-profit research organisation in environmental and habitat design.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/beckman.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Luke Beckman</label><br>
				<label>Manager for Situational Awareness</label><br>
				<label>American Red Cross</label><br>
			</div>
			
			<p>Mr. Beckman manages situational awareness for all domestic Red Cross preparedness, response, and recovery operations. He is responsible for building national capacity and training the Red Cross workforce in situational awareness for all hazards. He is also responsible for directly supporting operations in both tactical and planning capacities. His mission is to answer the questions of "what information do you need to know, what decisions do you need to make with the information, when do you need the information, and how do you need to access that information?" He has responded to, and coordinated, crisis operations at the local, state, national, and international levels. He recently deployed to the Philippines immediately following Typhoon Haiyan in November 2013 to coordinate all logistics operations (people and cargo) out of the multi-national coordination center on Cebu Island. Mr. Beckman graduated with honors from Stanford University, where he majored in human biology with a focus in global biodefense.</p>

			<div class="text-center">
			<label>Performance by:</label><br>
			</div>
			<hr>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kwilliams.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Kenji Williams</label><br>
				<label>Bella Gaia Founder, Filmmaker, Electronic Music Producer,Classical Violinist</label>
			</div>

			
			<p>Kenji Williams is an award winning filmmaker, music producer, theatrical show director, and classically trained violinist. As a world bridger of music, visual arts, science and unique storytelling, Williams explores the nexus of art and science through collaborations as diverse as NASA scientists, consciousness researcher Deepak Chopra, and top world-music musicians.  Mr. Williams has over 30 years of music experience in performance, composition and production, and 20 years of film production experience.  He has expressed his work from big music festivals around the world, the Smithsonian, Guggenheim Museum, Winspear Opera House, UNESCO, U.S. Dep State, and film soundtracks.  Combining unique skills in film and music, Williams has earned international film awards from the Canadian Society of Cinematographers to the Sundance Film Festival, and has garnering media exposure from the BBC, NPR, PBS, ABC, and FOX.</p>

			<div class="text-center">
			<label>Moderated by:</label>
			<br>
			</div>
			<hr>
			<div class="text-center">
				<div>
					<img src="assets/images/speakers/nemazee.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Maryam Nemazee</label><br>
				<label>Broadcaster and Journalist</label><br>
				<label>Al Jazeera English</label>
			</div>
			
			<p>Maryam Nemazee is an experienced television news anchor and journalist. She has spent the last 10 years as a news presenter and reporter in Europe, the Middle East, the US and Asia working for Bloomberg, Al Jazeera English and Sky. Maryam’s unique global news experience combines an in-depth knowledge of business news with international politics. Throughout her career, Maryam has interviewed some of the world’s top political and business leaders, including former chairman of the Federal Reserve Paul Volcker, OPEC Secretary General AbdallaSalem El-Badri, and IMF Managing Director Christine Lagarde. Most recently, Maryam was a London-based anchor with Bloomberg, presenting on all the main programmes, conducting exclusive interviews and real-time analysis of breaking news affecting global markets. Maryam covered major events from the field, including the World Economic Forum in Davos, as well as taking charge of Bloomberg’s extensive coverage of the European debt crisis from Brussels.</p>
	</div>
</div>
@stop