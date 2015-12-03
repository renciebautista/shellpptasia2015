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
<div class= "txt">
<p class="warning">An indicative agenda for Powering Progress Together 2016 is available below for your convenience and reference.  Please note that any changes to this will be communicated nearer the time of the event and published here.</p>
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
	
	<h2 class="headd"><center>PROGRAMME </center></h2><br>
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
						<td>1:10 – 1:20</td>
						<td>
							<strong>Word of Gratitude</strong><br>
							<p>by Shell companies in the Philippines Country Chairman Edgar Chua</p>
						</td>
					</tr>
					<!--<tr>
						<td>1:15 – 1:20</td>
						<td>
							<strong>Pledging Activity and Closing</strong><br>
						</td>
					</tr>-->
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
  	<div >

<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/shenry.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Simon Henry</p>
		  		<p>Chief Financial Officer</p>
		  		<p>Royal Dutch Shell plc</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p >Simon became Chief Financial Officer and an Executive Director in May 2009</p>
		<p>Simon joined Shell having graduated in Mathematics from Cambridge University in 1982, initially working as an engineer at the UK’s Stanlow refinery.</p>
		<p>After qualifying as a member of the Chartered Institute of Management Accountants (CIMA) in 1989, he held various finance posts, including Finance Manager of Marketing in Egypt, Controller for the Upstream business in Egypt, Oil Products Finance Adviser for Asia Pacific, Finance Director for the Mekong Cluster and, up to the end of 2000, General Manager Finance for the South East Asian Retail business.</p>
		<p>He was appointed Head of Group Investor Relations in 2001 and most recently served as Executive Vice President Finance for Exploration & Production from 2004 until his current appointment.</p>
	<p>Simon is a member of the Main Committee of the 100 Group of UK FTSE CFOs, Chair of the European Round Table CFO Taskforce, and a member of the Advisory Board of the Centre for European Reform. He is also a CIMA fellow, and has been a non-executive member of the Lloyds Banking Group Board since June 2014.</p>
	</div>
</div>

<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/gerr12.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Jeremy Bentham</p>
		  		<p>Vice President, Global Business Environment</p>
		  		<p>Royal Dutch Shell plc</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Jeremy Bentham leads Shell’s Global Business Environment team, a core corporate strategy activity best known outside the company for developing the Shell Scenarios. He graduated from Oxford University, and joined Shell in 1980 following post-graduate experience at the California Institute of Technology. He also holds a masters degree in management from the Massachusetts Institute of Technology, where he was a Sloan Fellow. Following experience in research, technology, and industry analysis, he held management positions at several refineries. After managing corporate strategy analysis for Shell, Jeremy joined the leadership of Shell’s global technology company, and subsequently served as chief executive of Shell Hydrogen before becoming head of Shell Scenarios.</p>
	</div>
</div>

<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/tonylavina.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Atty Antonio La Viña</p>
		  		<p>Dean</p>
		  		<p>Ateneo School of Government</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Tony La Viña is currently Dean of the Ateneo School of Government. In the Philippines and Asia, he is a well-know human rights and environmental lawyer, having worked for more than 25 years now to promote the rights of indigenous peoples and local communities and the protection of the environment. Tony has been a lead negotiator for the Philippines in the climate change negotiations since 1997. He has played prominent and leadership roles in the processes especially on land use change and forestry issues and in Reducing Emissions from Deforestation and Degradation ( REDD-plus) negotiations. He is now focused on the Paris Agreement on Climate Change, working for the integration of human rights and climate justice into an agreement which is ambitious and effective in overcoming the climate challenge.</p>
	</div>
</div>

<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/rafaellopa2.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Rafael Lopa</p>
		  		<p>Executive Director</p>
		  		<p>Philippine Business for Social Progress (PBSP)</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Rafael “Rapa” Lopa leads PBSP’s efforts in organizing and managing platforms for collective engagements (PlaCEs) that leverage the private sector’s involvement with other stakeholders in addressing systemic social problems in the areas of Health, Education, Environment, Livelihood Development and Disaster Risk Management. Rapa also champions PBSP’s call for companies to develop more inclusive business models that that incorporates the marginalized sectors of society within the company‘s value chain as suppliers, consumers, distributors and/or employees in such a way that it creates shared value.</p>
		<p>Prior to his current responsibilities in PBSP, Rapa has invested thirty years in the development sector after graduating from the Ateneo de Manila University with a Bachelor of Arts Degree in Inter-Disciplinary Studies. Rapa also served and currently serves as a director in other companies and foundations in the Philippines.</p>
	</div>
</div>

<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/guillermoluz.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Guillermo Luz</p>
		  		<p>Private Sector Co-Chairman</p>
		  		<p>National Competitiveness Council of the Philippines</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Guillermo “Bill” Luz is the private sector Co-Chairman of the National Competitiveness Council, a public-private body that develops strategy for the long-term competitiveness of the Philippines through policy reforms, project implementation, institution-building and activities in real-estate development, banking and financial services, telecommunications, water infrastructure development and management, automotive dealership and distribution, business process outsourcing, electronics manufacturing solutions, and new investments in performance monitoring. He is associate director of Ayala Corporation, the holding company of one of the oldest and largest business groups in the Philippines, with business power, renewable energy and infrastructure.</p>
		<p>He is the Lead Coordinator for Private Sector of APEC National Organizing Council (APEC-NOC). APEC NOC is the government agency in charge of preparations for the Philippines Chairmanship of APEC in 2015. He also serves as the Chief Operating Officer of APEC 2015 CEO Summit Host Committee.</p>
	</div>
</div>
<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/mayorddguzman.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Del De Guzman</p>
		  		<p>City Mayor</p>
		  		<p>Marikina City</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Del R. De Guzman is Marikina City's 20th Local Chief Executive.  An advocate of pro-people policies and reforms, his vision for Marikina will continue to revolve around this theme, ensuring that every Marikenos reaps the gains of progress and achieves a high quality of life.</p>
		<p>Mayor Del had his first taste of public service and community involvement as a youth leader on the mid 1980s, actively participating in the 1987 and 1989 National Youth Conference. His political career officially started in 1988 as Marikina municipal councilor, then vice mayor in 1992-2001, and three-term Second District congressional representative.  He was the lone representative in 2001 to 2007.</p>
		<p>Mayor Del received his Bachelor of Arts degree, major in Political Science, from the University of the East.  He was a law student at the same university when he decided to pursue his political calling. He has received various recognitions, including the Icon of Youth Power Award from the National Movement of Young Legislators in 2010 and Outstanding Congressman of the Year from the Metropolitan Disseminators of Information Association,  Inc. in 2005.</p>
	</div>
</div>
<div class="speaker-list">
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/e-chua.jpg" class="img-responsive" alt="">
		  	</div>
		  	<div class="col-md-8 info">
		  		<p class="name">Edgar Chua</p>
		  		<p>Country Chairman</p>
		  		<p>Shell companies in the Philippines</p>
		  	</div>
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Ed is the Country Chairman of the Shell companies in the Philippines. He has corporate responsibility for the various Shell companies in the exploration, manufacturing and marketing sector of the petroleum business and oversees the Chemicals businesses and Business Services.</p>
		<p>Concurrently, Ed serves as the Chairman of the Philippine Business for the Environment and the Energy Council of the Philippines; and is also the President of Pilipinas Shell Foundation, Inc.  Ed joined Shell in 1979 and has had many years of experience in the business fields of chemicals, auditing, supply planning and trading, marketing and sales, lubricants, corporate affairs and general management. He held senior positions outside the Philippines including transport analyst in Group Planning in the UK, GM of the Shell Company of Cambodia. Ed earned his Bachelor of Science degree in Chemical Engineering from De La Salle University and attended various international seminars and courses including the senior management course in INSEAD in Fontainebleau, France.</p>
	</div>
</div>

<div class="speaker-list">
	<h2 class="highligt-red">HOST MODERATOR:</h2>
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/qastrana.jpg" class="img-responsive" alt="" >
		  	</div>
		  	
		  	<div class="col-md-8 info">
		  		<p class="name">Quintin Jose V. Pastrana</p>
		  		<p>Anchor</p>
		  		<p>Bloomberg Philippines</p>
		  	</div>
		
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Quintin graduated with degrees in Business Administration, International Relations, and Literature from the Universities of Georgetown, Cambridge, and Oxford.</p>
		<p>He has used his education to advance shared value and sustainable development in the minerals and energy sector as the Vice President of Gold Fields Philippines, Inc. and the Policy, Government and Public Affairs Manager of Chevron Geothermal and Power, following his public service as a career technocrat in the Philippine Senate, National Security Council, and House of Representatives. He has recently assumed the post of anchor and producer at Bloomberg TV Philippines, the country’s first business news channel.</p>
		<p>Quintin has won a Freedom through Literacy Award as founder and Managing Director of the Library Renewal Partnership (www.librarypartners.com). He is a Convenor for the Movement for Good Governance, the leading citizen-led reform movement, and has been named among the region's top young leaders by the Asia Society and the US-ASEAN Business Council, as well as a StartingBloc Global Fellow for Social Enterprise. Quintin promotes grassroots sports development as Secretary General of the Philippine Rowing Association, and Manager of the multi-medaled National Rowing Team and the Philippine Lacrosse Association.</p>
	</div>
</div>

<div class="speaker-list">
	<h2 class="highligt-red">PANEL MODERATOR:</h2>
	<div class="speaker">
		<div class="row">
		  	<div class="col-md-4">
		  		<img src="assets/images/speakers/cathyyang.jpg" class="img-responsive" alt="cathyyang" >
		  	</div>
		  	
		  	<div class="col-md-8 info">
		  		<p class="name">Cathy Yang</p>
		  		<p>Anchor-Managing Editor</p>
		  		<p>ABS-CBN News Channel (ANC)</p>
		  	</div>
		
		</div>
	</div>
	<br>
	<div class="txt">
		<p>Cathy Yang boasts an extensive broadcast career during which she has garnered global recognition for her work as a global financial journalist.  After 15 years of covering the world’s biggest financial stories from Tokyo and Hong Kong, she has returned to her home network in the Philippines, ABS-CBN Corporation.  She is currently Anchor-Managing Editor at ABS-CBN News Channel (ANC).  Considered one of the network’s icons, she hosts “Market Edge with Cathy Yang” and “Business Nightly” five times a week, focusing on the most important financial news and economic stories.  She has most recently led ANC’s coverage of the APEC meetings in Manila, becoming the only Filipino journalist to join the roster of foreign peers as a moderator at the APEC CEO Summit.</p>
		<p>She was previously the Hong Kong-based correspondent for the global English channel of China's state television CCTV.  Previous to that, Cathy was reporter/presenter for Reuters TV Asia-Pacific for three years, also in Hong Kong. Cathy has anchored for Bloomberg Television Asia-Pacific for nearly 10 years, previously in Tokyo and then in Hong Kong.</p>
		<p>Cathy began her broadcast career in 1992 at ABS-CBN.  In 1997, Cathy won an award for "Most Outstanding Investigative Journalist" which led to a scholarship and earned her a diploma at the University of Cardiff in Wales, UK.</p>
	<p>Cathy has also participated in CNN's International Partnership Program in Atlanta, U.S. and was chosen out of a pool of 200 international journalists for a Reuters Foundation journalism fellowship at Oxford University in England, where her 300-paged thesis on the merger of traditional and new media received distinction in 2000.</p>
	</div>
</div>
@stop