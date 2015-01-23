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
					<img src="assets/images/speakers/ashmad.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Ambassador Asif Ahmad</label><br>
				<label>Ambassador Extraordinary and Plenipotentiary</label><br>
				<label>Embassy of the United Kingdom of Great Britain and Northern Ireland</label><br>
			</div>
			<p>Asif Ahmad was appointed as Ambassador to the Philippines in July, 2013. He has visited Manila a number of times in the last 10 years in his role as Director Asia for UK Trade and Investment and later as the head of the team in London that covers Britain's foreign policy interests in ASEAN countries, Australia, New Zealand and the Pacific Islands. Just after serving as Ambassador in Thailand and Laos, 2010-2012, Asif learnt some Filipino in London to prepare for his move to the Philippines. Asif joined the Foreign & Commonwealth Office in 1999, after an 18 year banking career with NatWest which covered international corporate finance, head office functions as well as periods in private banking, Coutts, and running a network of retail banking branches in South London.  Just before becoming a diplomat, he worked with Business Link in London as an adviser to small and medium sized companies.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/gellis.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Glynn Ellis</label><br>
				<label>Strategic Project Advisor, Shell Corporate Strategy and Planning</label><br>
				<label>Royal Dutch Shell</label><br>
			</div>
			<p>Glynn has 20+ years international oil industry experience as a successful geologist in both operated and non-operated exploration and development projects.  He has held previous roles as Exploration Manager, Unconventional Hydrocarbons Tunisa, Exploration Manager New Ventures, Unconventional Hydrocarbons Europe, Commercial Advisor Global New Business Development, New Ventures Exploration Manager for Asia-Pacific, Regional Exploration GoM and led exploration and appraisal projects in the Atlantic Margin and the North Sea.  Prior to joining Shell, Glynn worked as a consultant petroleum geologist in Australasia-PNG and Serbia, Croatia, Slovenia.  His education includes B.Sc (Hounours) Geology, University Western Australia, M.Sc. Applied Petroleum Geology, Curtin University Australia, and PhD studies at Universite de Lausanne, Switzerland.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/kitasei.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Saya Snow Kitasei</label><br>
				<label>Head of Resilience</label><br>
				<label>Xyntéo</label><br>
			</div>
			<p>Saya Kitasei is head of resilience at Xyntéo. Prior to joining Xyntéo as an analyst in 2012, Saya led the Natural Gas and Sustainable Energy Initiative at the Washington DC-based sustainability think tank Worldwatch Institute. She has also worked on climate and energy science and policy at the Center for American Progress, the Climate Institute, and INFORM, Inc. She is the director of the forthcoming documentary The Myken Project. Saya holds a BA in earth systems and an MA in Russian, East European and Eurasian studies from Stanford University.​</p>

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

			
			<p>Rajeev Kathpalia, an Architect and Urban designer by profession  is a partner in Vastu Shilpa Consultants, a professional consultancy practice in architecture, urban planning and design. He is involved with many internationally reputed institutional projects and has won several design competitions. He is currently innvolved in the design of Nalanda University, Indian Institute of Management Udaipur, Raksha Shakthi University- Lavad and FLAME University Pune. He is also the Director of Vastu Shilpa Foundation, a non profit research organisation in environmental and habitat design. His concerns about the different urban issues with a stress on sustainable development have been presented at conferences and universities in India and abroad. He has been a jury member in many prestigious architecture competitions.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/sbanerjee.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Suparno Banerjee</label><br>
				<label>Vice President, Public Sector Programs</label><br>
				<label>Hewlett-Packard Company</label><br>
			</div>

			
			<p>Suparno Banerjee, as a member of the Office of the CEO, is responsible for identifying and incubating new growth avenues for HP’s Public Sector business. Working closely with public sector customers and HP’s business groups, he is the steward of HP’s global Public Sector thought leadership and capabilities across all facets of the company. He is also the face of HP’s public sector, participating in numerous thought leadership events with senior government officials, public sector customers and partners. Banerjee leads HP’s efforts in Smart Cities through thought leadership, development of a solutions portfolio, and active engagement with a number of cities worldwide. He has led Smart City projects in China and other countries of Asia Pacific, US and EMEA</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/beckman.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Luke Beckman</label><br>
				<label>Manager for Situational Awareness</label><br>
				<label>American Red Cross</label><br>
			</div>
			
			<p>Luke Beckman directs Disaster Operations for the American Red Cross serving as the national manager for situational awareness and the acting director for the National Dispatch Center. In his current role, he is responsible for ensuring that all levels of the Red Cross response and leadership workforce have access to the right information at the right time to make the right decisions. He is responsible for training, overseeing, and leading over 3,000 remote and field-based Red Cross rapid assessment and planning personnel. He first began coordinating disaster response operations during Hurricane Katrina in 2005 and since has responded to, and led, operations at the local, state, national, federal, and international levels. More recently, he served as the operations and logistics lead for the Multi-National Coordination Center in the Philippines following Typhoon Haiyan. He graduated with honors in international security from Stanford University.</p>

			<div class="text-center">
				<div>
					<img src="assets/images/speakers/idiaz.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Illac Diaz</label><br>
				<label>Social Entrepreneur</label><br>
				<label>Liter of Light Foundation and MyShelter Foundation</label><br>
			</div>
			
			<p>Illac Diaz is a Filipino social entrepreneur. He works in the ASEAN region and empowers communities through the use of sustainable construction and appropriate technologies using bamboo and PET plastic bottles. Illac is pioneering a whole new field of entrepreneurship, one that seeks to bring the strengths, efficiencies and solutions of business to bear on problems of society. He took a Masters Degree in Entrepreneurship at the Asian Institute of Management (AIM) then he later left to study in the Massachusetts Institute of Technology (MIT) in Boston with Urban Planning, Course II – Urban Studies and Planning. In 2008, he took Masters of Political Administration in Harvard. Illac is the youngest AIM alumnus to receive an Honors and Prestige Award. In 2004, he got a three-in-a-row award. He got an Everyday Hero Special Award from the Readers Digest Asia and an Entrepreneur Award from the 1st Johnny Walker Social Award. He was runner-up in New York’s Next Big Idea International Design Competition. He got the First for Social Entrepreneurship from TOYM Award in 2005. His latest citation is the “Young Global Leaders of 2008” by the World Economic Forum (WEF) in Geneva.</p>

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