@extends('layouts.master')

@section('navigation')
  <ul class="nav navbar-nav">
    <li><a href="/">Home</a></li>

    <li><a href="/overview">Event Overview</a></li>
    <li><a href="/programme">Programme</a></li>
    <li class="active"><a href="/speakers">Speakers</a></li>
    <li><a href="/hotel">Hotel</a></li>
    @if(!User::regret())
    <li><a href="/register">Event Registration</a></li>
    @endif
    @if (Auth::check())
    <li><a href="/logout">Logout</a></li>
    @endif
  </ul>
@stop

@section('content')
<h4 class="uppercase text-center text-bold">speakers</h4>
<div id="programme-speakers" class="programme-speakers">
  <div class="row">
    <div class="col-sm-3">
      <img src="assets/images/uv/speakers/simon-henry.jpg" class="img-responsive" />
      <h5 class="text-bold">Simon Henry</h5>
      <div>Chief Financial Officer</div>
      <div>Royal Dutch Shell plc</div>
    </div>
    <div class="col-sm-9">
      <p>
        Simon joined Shell having graduated in Mathematics from Cambridge University in 1982, initially working as an engineer at the UK’s Stanlow refinery.
      </p>
      <p>
        After qualifying as a member of the Chartered Institute of Management Accountants (CIMA) in 1989, he held various finance posts, including Finance Manager of Marketing in Egypt, Controller for the Upstream business in Egypt, Oil Products Finance Adviser for Asia Pacific, Finance Director for the Mekong Cluster and, up to the end of 2000, General Manager Finance for the South East Asian Retail business.
      </p>
      <p>
        He was appointed Head of Group Investor Relations in 2001 and most recently served as Executive Vice President Finance for Exploration &amp; Production from 2004 until his current appointment.
      </p>
      <p>
          Simon is a member of the Main Committee of the 100 Group of UK FTSE CFOs, Chair of the European Round Table CFO Taskforce, and a member of the Advisory Board of the Centre for European Reform. He is also a CIMA fellow, and has been a non-executive member of the Lloyds Banking Group Board since June 2014.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="assets/images/uv/speakers/jeremy-bentham.jpg" class="img-responsive" />
      <h5 class="text-bold">Jeremy B. Bentham</h5>
      <div>Vice President Global Business Environment and Head of Shell Scenarios</div>
      <div>Royal Dutch Shell</div>
    </div>
    <div class="col-sm-9">
      <p>
        Jeremy Bentham leads Shell’s Global Business Environment team, a core corporate strategy activity best known outside the company for developing the Shell Scenarios. He graduated from Oxford University, and joined Shell in 1980 following post-graduate experience at the California Institute of Technology. He also holds a masters degree in management from the Massachusetts Institute of Technology, where he was a Sloan Fellow. Following experience in research, technology, and industry analysis, he held management positions at several refineries. After managing corporate strategy analysis for Shell, Jeremy joined the leadership of Shell’s global technology company, and subsequently served as chief executive of Shell Hydrogen before becoming head of Shell Scenarios.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="assets/images/uv/speakers/tony-la-vina.jpg" class="img-responsive" />
      <h5 class="text-bold">Dr. Antonio La Viña</h5>
      <div>Dean</div>
      <div>Ateneo School of Government</div>
    </div>
    <div class="col-sm-9">
      <p>
        Tony La Viña is currently Dean of the Ateneo School of Government. In the Philippines and Asia, he is a well-know human rights and environmental lawyer, having worked for more than 25 years now to promote the rights of indigenous peoples and local communities and the protection of the environment. Tony has been a lead negotiator for the Philippines in the climate change negotiations since 1997. He has played prominent and leadership roles in the processes especially on land use change and forestry issues and in Reducing Emissions from Deforestation and Degradation (REDD-plus) negotiations. He is now focused on the Paris Agreement on Climate Change, working for the integration of human rights and climate justice into an agreement which is ambitious and effective in overcoming the climate challenge.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="assets/images/uv/speakers/atem-ramsundersingh.jpg" class="img-responsive" />
      <h5 class="text-bold">Atem S. Ramsundersingh</h5>
      <div>Chief Executive Officer</div>
      <div>WEnergy Global</div>
    </div>
    <div class="col-sm-9">
      <p>
        Atem S. Ramsundersingh, is Co-Founder, Chief Executive Officer and Board Director of WEnergy Global Pte Ltd based in Singapore.
      </p>
      <p>
        He brings in over 27 years of extensive international experience and knowledge about business and project development in emerging economies and complex decision-making and financing environments. He further brings in his extensive knowledge and experience in industrial/equipment process and project management, supply chain and quality management, utility management, operations, human resources, financial management, deal structuring and commercialization of business opportunities. He has a vast network of contacts in over 70 countries and several Multilateral Agencies in the area of industry, energy, water and finance.
      </p>
      <p>
        Atem is a former Senior Manager with The World Bank Group (Washington DC, USA) and a Program Director with the UNESCO-IHE Institute for Water and Environment (Delft, The Netherlands). He obtained a Masters’ Degree in Infrastructure Engineering at Delft University of Technology in The Netherlands and has been trained at the Harvard Business School (in corporate renewal and change management) and Cambridge University in Sustainable Industrial Leadership.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="assets/images/uv/speakers/dan-roosegaarde.jpg" class="img-responsive" />
      <h5 class="text-bold">Daan Roosegaarde</h5>
      <div>Founder</div>
      <div>Studio Roosegaarde</div>
    </div>
    <div class="col-sm-9">
      <p>
        Artist and innovator Daan Roosegaarde (1979) is internationally known for creating social designs that explore the relation between people, technology and space. His Studio Roosegaarde is the social design lab with his team of designers and engineers based in the Netherlands and Shanghai.
      </p>
      <p>
        Roosegaarde is Young Global Leader at the World Economic Forum, in the top 5 of Sustainable Trouw 100 as most influential Dutch green leader, and selected as Talent of the Year 2015 by Kunstweek.
      </p>
      <p>
        With projects ranging from fashion to architecture his interactive designs such as Dune, Intimacy and Smart Highway are tactile high-tech environments in which viewer and space become one. This connection, established between ideology and technology, results in what Roosegaarde calls 'techno-poetry'.
      </p>
      <p>
        Roosegaarde has won the INDEX Design Award, World Technology Award, two Dutch Design Awards, Charlotte Köhler Award, Accenture Innovation Award, and China's Most Successful Design Award. He has been the focus of exhibitions at Rijksmuseum Amsterdam, Tate Modern, National Museum in Tokyo, Victoria and Albert Museum, and various public spaces in Rotterdam and Hong Kong.
      </p>
      <p>
        Selected by Forbes and Good 100 as a creative change-maker, Daan Roosegaarde is a frequent invited lecturer at international conferences such as TED and Design Indaba, and TV media guest at De Wereld Draait Door and CNN.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="assets/images/uv/speakers/rafael-lopa.jpg" class="img-responsive" />
      <h5 class="text-bold">Rafael Lopa</h5>
      <div>Executive Director</div>
      <div>Philippine Business for Social Progress (PBSP)</div>
    </div>
    <div class="col-sm-9">
      <p>
        Rafael “Rapa” Lopa leads PBSP’s efforts in organizing and managing platforms for collective engagements (PlaCEs) that leverage private business sector’s involvement with other stakeholders in addressing systemic social problems in the areas of Health, Education, Environment, Livelihood Development and Disaster Risk Management. Rapa also champions PBSP’s call for companies to develop more inclusive business models that that incorporates the marginalized sectors of society within the company‘s value chain as suppliers, consumers, distributors and/or employees in such a way that it creates shared value.
      </p>
      <p>
        Prior to his current responsibilities in PBSP, Rapa has invested thirty years in the development sector after graduating from the Ateneo de Manila University with a Bachelor of Arts Degree in Inter-disciplinary Studies. Rapa also served and currently serves as a director in other companies and foundations in the Philippines.
      </p>
    </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <img src="assets/images/uv/speakers/bill-luz.jpg" class="img-responsive" />
    <h5 class="text-bold">Guillermo Luz</h5>
    <div>Private Sector Co-Chairman</div>
    <div>National Competitiveness Council of the Philippines</div>
  </div>
  <div class="col-sm-9">
    <p>
      Guillermo “Bill” Luz is the private sector co-chairman of the National Competitiveness Council, a public-private body that develops strategy for the long-term competitiveness of the Philippines through policy reforms, project implementation, institution building and activities in real-estate development, banking and financial services, telecommunications, water infrastructure development and management, automotive dealership and distribution, business process outsourcing, electronics manufacturing solutions, and new investments in performance monitoring. He is associate director of Ayala Corporation, the holding company of one of the oldest and largest business groups in the Philippines, with business power, renewable energy and infrastructure.
    </p>
    <p>
      He is the Lead Coordinator for Private Sector of APEC National Organizing Council (APEC-NOC). APEC NOC is the government agency in charge of preparations for the Philippines Chairmanship of APEC in 2015. He also serves as the Chief Operating Officer of APEC 2015 CEO Summit Host Committee.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <img src="assets/images/uv/speakers/del-de-guzman.jpg" class="img-responsive" />
    <h5 class="text-bold">Hon. Del De Guzman</h5>
    <div>City Mayor</div>
    <div>Marikina City</div>
  </div>
  <div class="col-sm-9">
    <p>
      Del R. De Guzman is Marikina City's 20th Local Chief Executive. An advocate of pro-people policies and reforms, his vision for Marikina will continue to revolve around this theme, ensuring that every Marikenos reaps the gains of progress and achieves a high quality of life.
    </p>
    <p>
      Mayor Del had his first taste of public service and community involvement as a youth leader on the mid 1980s, actively participating in the 1987 and 1989 National Youth Conference. His political career officially started in 1988 as Marikina municipal councilor, then vice mayor in 1992-2001, and three-term Second District congressional representative. He was the lone representative in 2001 to 2007.
    </p>
    <p>
      Mayor Del received his Bachelor of Arts degree, major in Political Science, from the University of the East. He was a law student at the same university when he decided to pursue his political calling. He has received various recognitions, including the Icon of Youth Power Award from the National Movement of Young Legislators in 2010 and Outstanding Congressman of the Year from the Metropolitan Disseminators of Information Association, Inc. in 2005.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <img src="assets/images/uv/speakers/edgar-chua.jpg" class="img-responsive" />
    <h5 class="text-bold">Edgar Chua</h5>
    <div>Country Chairman</div>
    <div>Shell Companies in the Philippines</div>
  </div>
  <div class="col-sm-9">
    <p>
      Ed is the Country Chairman of the Shell companies in the Philippines. He has corporate responsibility
      for the various Shell companies in the exploration, manufacturing and marketing sector of the petroleum
      business and oversees the Chemicals businesses and Business Services.
    </p>
    <p>
      Concurrently, Ed serves as the Chairman of the Philippine Business for the Environment and the Energy Council of the Philippines; and is also the President of Pilipinas Shell Foundation, Inc.  Ed joined Shell in 1979 and has had many years of experience in the business fields of chemicals, auditing, supply planning and trading, marketing and sales, lubricants, corporate affairs and general management. He held senior positions outside the Philippines including transport analyst in Group Planning in the UK, GM of the Shell Company of Cambodia. Ed earned his Bachelor of Science degree in Chemical Engineering from De La Salle University and attended various international seminars and courses including the senior management course in INSEAD in Fontainebleau, France.
    </p>
  </div>
</div>
<div class="row">
  <p style="background: red; padding: 5px; color: white; font-weight: bold;">
    Host Moderator:
  </p>
  <div class="col-sm-3">
    <img src="assets/images/uv/speakers/quintin-pastrana.jpg" class="img-responsive" />
    <h5 class="text-bold">Quintin Jose V. Pastrana</h5>
    <div>Anchor</div>
    <div>Bloomberg Philippines</div>
  </div>
  <div class="col-sm-9">
    <p>
      Quintin graduated with degrees in Business Administration, International Relations, and Literature from the Universities of Georgetown, Cambridge, and Oxford.
    </p>
    <p>
      He has used his education to advance shared value and sustainable development in the minerals and energy sector as the Vice President of Gold Fields Philippines, Inc. and the Policy, Government and Public Affairs Manager of Chevron Geothermal and Power, following his public service as a career technocrat in the Philippine Senate, National Security Council, and House of Representatives. He has recently assumed the post of anchor and producer at Bloomberg TV Philippines, the country’s first business news channel.
    </p>
    <p>
      Quintin has won a Freedom through Literacy Award as founder and Managing Director of the Library Renewal Partnership (www.librarypartners.com). He is a Convenor for the Movement for Good Governance, the leading citizen-led reform movement, and has been named among the region's top young leaders by the Asia Society and the US-ASEAN Business Council, as well as a StartingBloc Global Fellow for Social Enterprise. Quintin promotes grassroots sports development as Secretary General of the Philippine Rowing Association, and Manager of the multi-medaled National Rowing Team and the Philippine Lacrosse Association.
    </p>
  </div>
</div>
<div class="row">
  <p style="background: red; padding: 5px; color: white; font-weight: bold;">
    Panel Moderator:
  </p>
  <div class="col-sm-3">
    <img src="assets/images/uv/speakers/cathy-yang.jpg" class="img-responsive" />
    <h5 class="text-bold">Cathy Yang</h5>
    <div>Anchor-Managing Editor</div>
    <div>ABS-CBN News Channel (ANC)</div>
  </div>
  <div class="col-sm-9">
    <p>
      Cathy Yang boasts an extensive broadcast career during which she has garnered global recognition for her work as a global financial journalist. After 15 years of covering the world’s biggest financial stories from Tokyo and Hong Kong, she has returned to her home network in the Philippines, ABS-CBN Corporation. She is currently Anchor-Managing Editor at ABS-CBN News Channel (ANC). Considered one of the network’s icons, she hosts “Market Edge with Cathy Yang” and “Business Nightly” five times a week, focusing on the most important financial news and economic stories. She has most recently led ANC’s coverage of the APEC meetings in Manila, becoming the only Filipino journalist to join the roster of foreign peers as a moderator at the APEC CEO Summit.
    </p>
    <p>
      She was previously the Hong Kong-based correspondent for the global English channel of China's state television CCTV. Previous to that, Cathy was reporter/presenter for Reuters TV Asia-Pacific for three years, also in Hong Kong. Cathy has anchored for Bloomberg Television Asia-Pacific for nearly 10 years, previously in Tokyo and then in Hong Kong.
    </p>
    <p>
      Cathy began her broadcast career in 1992 at ABS-CBN. In 1997, Cathy won an award for "Most Outstanding Investigative Journalist" which led to a scholarship and earned her a diploma at the University of Cardiff in Wales, UK.
    </p>
    <p>
      Cathy has also participated in CNN's International Partnership Program in Atlanta, U.S. and was chosen out of a pool of 200 international journalists for a Reuters Foundation journalism fellowship at Oxford University in England, where her 300-paged thesis on the merger of traditional and new media received distinction in 2000.
    </p>
  </div>
</div>
@stop