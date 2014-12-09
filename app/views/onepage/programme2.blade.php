@extends('layouts.master')

@section('navigation')
  <ul class="nav nav-pills pull-right">
	<li><a href="/">Event Overview</a></li>
	<li class="active"><a href="/programme">Programme</a></li>
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
	<h2 class="section-heading text-center">Programme </h2><br>
	<div id="programme" class="col-lg-12">
		This one-day event will include four interactive sessions:<br>
		<ul>
			<li><strong>Resilience: Current Thinking and Trends</strong> – creates a deeper understanding of resilience and urbanisation in the face of the stress nexus, with special focus on the challenges and opportunities for Asian cities;</li>
			<li><strong>Case Studies on Resilience for Cities</strong> – discusses how innovative and eco-conscious urban planning can transform cities into smart hubs for sustainable progress; </li>
			<li><strong>Case Studies on Resilience for Cities</strong> – discusses how innovative and eco-conscious urban planning can transform cities into smart hubs for sustainable progress; </li>
			<li><strong>Inspiring Stories of Innovation and Resilience</strong> - shares stories of innovative disaster mitigation and management as well as rehabilitation in response to climate risks</li>
		</ul>
		<br>
			<div class="text-center">
			Presentations by:<br>
			</div>
			<hr>
			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kitasei.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Ms. Saya Snow Kitasei</label><br>
				<label>Head of Resilience</label><br>
				<label>Xyntéo</label><br>
			</div>
			<p>Saya Kitasei graduated from Stanford University in 2009 with an M.A. in Russian, East European, and Eurasian Studies and a B.S. in Earth Systems.  While at Stanford, she received an Undergraduate Research Fellowship, an Ernest Hollings Fellowship, and a Department of Education FLAS scholarship.  After graduating, she interned with the Center for American Progress energy team and the Climate Institute in Washington, D.C. Saya began her MAP fellowship with the Worldwatch Institute in time to help launch the Institute's Natural Gas and Sustainable Energy Initiative.  She joined Xyntéo in 2012 as an analyst on topics such as policy innovation in the water-energy-food nexus and the frontiers of climate science.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/dalkmann.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Mr. Holger Dalkmann</label><br>
				<label>Director</label><br>
				<label>EMBARQ</label><br>
			</div>
			<p>Holger Dalkmann has 15 years of experience working in the field of transport, sustainability and climate change. He joined World Resource Institute in 2011 as the director for its EMBARQ program, which catalyzes environmentally and financially sustainable transport solutions to improve quality of life in cities. He provides strategic leadership and management for EMBARQ’s global staff and partners, as well as direction for its fundraising and communication activities. </p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kathpalia.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Arch. Rajeev Kathpalia</label><br>
				<label>Architect, Urban Designer, Planner</label><br>
				<label>Vastu Shilpa Consultants</label><br>
			</div>

			
			<p>Architect Rajeev Kathpalia is a graduate of the Chandigarh College of Architecture and of Washington University at St. Louis with a master’s degree in architecture and urban design.  He has worked in Delhi, Kuwait and St. Louis, and currently practices from Ahmedabad. For his work, he has received several national awards and honours including First Prize National Design Idea in 1988, Architect of the Year Award in 1993, and World Architecture Award in 2008.  Architect Kathpalia is currently a partner at Vastu Shilpa Consultants, a professional consultancy practice in architecture, urban planning and design; and a trustee and director of the Vastu Shilpa Foundation, a non-profit research organization in environmental and habitat design.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/beckman.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Mr. Luke Beckman</label><br>
				<label>Manager for Situational Awareness</label><br>
				<label>American Red Cross</label><br>
			</div>
			
			<p>Mr. Beckman manages situational awareness for all domestic Red Cross preparedness, response, and recovery operations. He is responsible for building national capacity and training the Red Cross workforce in situational awareness for all hazards. He is also responsible for directly supporting operations in both tactical and planning capacities. His mission is to answer the questions of "what information do you need to know, what decisions do you need to make with the information, when do you need the information, and how do you need to access that information?" He has responded to, and coordinated, crisis operations at the local, state, national, and international levels. He recently deployed to the Philippines immediately following Typhoon Haiyan in November 2013 to coordinate all logistics operations (people and cargo) out of the multi-national coordination center on Cebu Island. Mr. Beckman graduated with honors from Stanford University, where he majored in human biology with a focus in global biodefense.</p>

			<div class="text-center">
			Performance by:<br>
			</div>
			<hr>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kwilliams.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Mr. Kenji Williams</label><br>
				<label>Bella Gaia Founder, Filmmaker, Electronic Music Producer,</label><br>
				<label>Classical Violinist</label>
			</div>

			
			<p>Kenji Williams is an award winning filmmaker, music producer, theatrical show director, and classically trained violinist. As a world bridger of music, visual arts, science and unique storytelling, Williams explores the nexus of art and science through collaborations as diverse as NASA scientists, consciousness researcher Deepak Chopra, and top world-music musicians.  Mr. Williams has over 30 years of music experience in performance, composition and production, and 20 years of film production experience.  He has expressed his work from big music festivals around the world, the Smithsonian, Guggenheim Museum, Winspear Opera House, UNESCO, U.S. Dep State, and film soundtracks.  Combining unique skills in film and music, Williams has earned international film awards from the Canadian Society of Cinematographers to the Sundance Film Festival, and has garnering media exposure from the BBC, NPR, PBS, ABC, and FOX.</p>

			<div class="text-center">
			Moderated by:<br>
			</div>
			<hr>
			<div class="text-center">
				<div>
					<img src="assets/images/speakers/nemazee.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Maryam Nemazee</label>
			</div>
			
			<p>Maryam Nemazee is an experienced television news anchor and journalist. She has spent the last 10 years as a news presenter and reporter in Europe, the Middle East, the US and Asia working for Bloomberg, Al Jazeera English and Sky. Maryam’s unique global news experience combines an in-depth knowledge of business news with international politics. Throughout her career, Maryam has interviewed some of the world’s top political and business leaders, including former chairman of the Federal Reserve Paul Volcker, OPEC Secretary General AbdallaSalem El-Badri, and IMF Managing Director Christine Lagarde. Most recently, Maryam was a London-based anchor with Bloomberg, presenting on all the main programmes, conducting exclusive interviews and real-time analysis of breaking news affecting global markets. Maryam covered major events from the field, including the World Economic Forum in Davos, as well as taking charge of Bloomberg’s extensive coverage of the European debt crisis from Brussels.</p>
	</div>
</div>
@stop