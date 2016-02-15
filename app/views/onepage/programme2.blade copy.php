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
	@if (Auth::check())
    <li><a href="/logout">Logout</a></li>
    @endif
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
  	<p><em><strong>Shell Powering Progress Together Asia 2015 will feature a wide variety of prominent speakers, amongst others:</strong></em></p>
  	<hr>
	<div id="speakers" class="col-lg-12">
		
			<div class="text-center">
				<div>
					<img src="assets/images/speakers/hmitchell.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Hugh Mitchell</label><br>
				<label>Chief Human Resources & Corporate Officer</label><br>
				<label>Royal Dutch Shell PLC</label><br>
			</div>

			
			<p>As Chief Human Resources and Corporate Officer for Royal Dutch Shell, Hugh Mitchell has responsibility for Human Resources, Real Estate, Communications, Health, Security and Aircraft. He is also Regional Director for Africa (excluding Nigeria). He has held his core responsibilities since 2005. He joined Shell after graduating in 1979. He has held a variety of HR and business roles in the UK, the Netherlands and Brunei. Hugh is a member of the Board for the Centre for Advanced Human Resources at Cornell University in the USA, a Foundation Board member of IMD business school in Lausanne, Switzerland, a Fellow of the National Academy of Human Resources in the USA, a Trustee of the Shell Foundation Board. He was appointed Independent Director of the Edinburgh Business School Board in June 2014. He is a non-executive director of RSA Insurance Group plc.</p>

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
				<label>Strategic Energy Advisor, Shell Corporate Strategy and Planning</label><br>
				<label>Royal Dutch Shell</label><br>
			</div>
			<p>Glynn Ellis is Strategic Energy Advisor, based in The Hague, Netherlands. Glynn is part of Shell’s CITIES Team reviewing the impact of global urbanization on energy consumption. Glynn’s previous roles include 20+ years of international oil industry experience as a successful geologist in both operated and non-operated exploration and development projects. He has held previous roles as Exploration Manager, Unconventional Hydrocarbons–Tunisia; Exploration Manager, New Ventures, Unconventional Hydrocarbons–Europe; Commercial Advisor, Global New Business Development; New Ventures Exploration Manager for Asia-Pacific; and Regional Exploration General Manager leading exploration and appraisal projects in the Atlantic Margin and the North Sea. Prior to joining Shell, Glynn worked as a consultant petroleum geologist in Australasia-PNG and Serbia, Croatia, Slovenia. His education includes B.Sc (Honors) Geology, University Western Australia; M.Sc. Applied Petroleum Geology, Curtin University Australia; and PhD studies at Universite de Lausanne, Switzerland.</p>

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
					<img src="assets/images/speakers/toyzaga.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Toni Yulo-Loyzaga</label><br>
				<label>Executive Director</label><br>
				<label>Manila Observatory</label><br>
			</div>
			<p>As Executive Director of the Manila Observatory, Ms. Yulo Loyzaga oversees its collaboration on climate and disaster risk reduction with the International Development Research Center, the National Aeronautics and Space Administration, Japan Aerospace Exploration Agency, United Nations International Strategy for Disaster Reduction, the Pacific Disaster Center and other organizations. She represents the Manila Observatory on the Philippines Department of Science and Technology’s Committee on Space Technology Applications and works to advance scientific research in climate and disaster resilience through public private partnerships. In 2013, she was given special recognition by the Armed Forces of the Philippines (AFP) for her contribution to the military emergency disaster response operations in the wake of Typhoon Haiyan.</p>


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
					<img src="assets/images/speakers/echua.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Edgar O. Chua</label><br>
				<label>Country Chairman</label><br>
				<label>Shell Companies in the Philippines</label><br>
			</div>

			
			<p>Edgar O. Chua is the Country Chairman of the Shell companies in the Philippines. He has corporate responsibility for the various Shell companies in the exploration, manufacturing and marketing sector of the petroleum business as well as its Shared Services. Concurrently, ed serves as the Chairman of the Philippine Business for the Environment and the Energy Council of the Philippines; and is also the President of Pilipinas Shell Foundation, Inc. Ed joined Shell in 1979 and has had many years of experience in the business fields of chemicals, auditing, supply planning and trading, marketing and sales, lubricants, corporate affairs and general management. He held senior positions outside the Philippines including transport analyst in Group Planning in the UK and as General Manager of the Shell Company of Cambodia. Ed earned his Bachelor of Science degree in Chemical Engineering from De La Salle University in 1978 and attended various international seminars and courses including the senior management course in INSEAD in Fontainebleau, France.</p>

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
					<img src="assets/images/speakers/shawkins.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<br>
				<label>Stuart Hawkins</label><br>
				<label>Director of Sustainability</label><br>
				<label>Coca-Cola Asean</label><br>
			</div>

			
			<p>Stuart began his career with The Coca-Cola Company in 1998 with the company’s Asia Pacific Public Affairs and Communications team based in Hong Kong. He held roles of increasing responsibility and was involved in a wide range of projects and partnerships across Asia working with teams throughout the region. From 2006 to 2009 he served as Director of Public Affairs and Communications for Coca-Cola Thailand and as a Director on the Board of The Coca-Cola Foundation Thailand.  Since 2009, he has led Coca-Cola’s sustainability strategy and efforts across Southeast Asia as Director of Sustainability, Coca-Cola ASEAN. He also serves as a trustee on the Board of The Coca-Cola Foundation Philippines.</p>

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