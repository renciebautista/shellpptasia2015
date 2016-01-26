@extends('layouts.master')

@section('navigation')
<ul class="nav navbar-nav">
  <li><a href="/">Home</a></li>

  <li class="active"><a href="/overview">Event Overview</a></li>
  <li><a href="/programme">Programme</a></li>
  <li><a href="/speakers">Speakers</a></li>
  <li><a href="/hotel">Hotel</a></li>
  @if(!User::regret())
  <li><a href="/register">Event Registration</a></li>
  @endif
  <li><a href="/logout">Logout</a></li>
</ul>
@stop

@section('content')
<h1>Event Overview</h1>

<div class="row thumb eventsThumb">
  <figure class="col-md-4 col-sm-6">
    <div class="thumb-image" style="background-image: url('assets/images/uv/events/1.jpg');"></div>
  </figure>

  <figure class="col-md-4 col-sm-6">
    <div class="thumb-image" style="background-image: url('assets/images/uv/events/2.jpg');"></div>
  </figure>

  <figure class="col-md-4 col-sm-6">
    <div class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/8.jpg');"></div>
  </figure>
</div>

<p>
  Shell Powering Progress Together is a business forum that seeks to tackle the world’s challenges
  on the energy-water-food stress nexus, with the end in view of creating greater societal resilience
  through multi-sector collaboration and action. The conference is being held in Europe, America and Asia,
  with Manila as host of the annual Asian conference from 2014 to 2016.
</p>

<p>
  In the 2014 Shell Powering Progress Together forum, we discussed the stress nexus and explored how we can
  all work together to survive, adapt and grow in a volatile world. In 2015, the forum focused on environmental
  and urban resilience and presented innovative solutions, particularly in the face of rapid urbanisation,
  resource stresses and climate impacts.
</p>

<p>
  As the culmination of the three-year forum hosted by Shell in Manila,
  the theme for Powering Progress Together 2016 conference is <strong><i>“Collaboration for a Sustainable Future”</i></strong>.
  It aims to build on previous years’ discussions and to present, as well as celebrate,
  concrete examples of collaborative action as we transition to a more resilient and sustainable future,
  where all sectors of society work together to address vital resource challenges while taking care of the environment and promoting quality of life.
</p>

<p>
  The 2016 programme will feature a diverse group of leading experts, among others
  <strong>Jeremy Bentham</strong> (<i>Vice President Global Business Environment and Head of Shell Scenarios, Royal Dutch Shell</i>),
  <strong>Dr. Antonio La Viña</strong> (<i>Dean of the Ateneo School of Government</i>),
  <strong>Prof. Dr. Edvin Aldrian</strong> (<i>Vice Chair, Intergovernmental Panel on Climate Change – Working Group 1</i>),
  <strong>Atem Ramsundersingh</strong> (<i>CEO, WEnergy Global</i>),
  <strong>Daan Roosegaarde</strong> (<i>Dutch artist and innovator, Founder of Studio Roosegaarde</i>),
  <strong>Henry Abreu</strong> (<i>CEO, TalinoEV Management Systems, Inc.</i>),
  <strong>Rafael Lopa</strong> (<i>Executive Director, Philippine Business for Social Progress</i>),
  <strong>Hon. Del de Guzman</strong> (<i>Mayor of Marikina City</i>),
  <strong>Guillermo Luz</strong> (<i>Private Sector Co-Chairman, National Competitiveness Council of the Philippines</i>),
  and <strong>Edgar Chua</strong> (<i>Country Chairman, Shell companies in the Philippines</i>).
</p>


<p>
  As in the past Powering Progress Together - Manila conferences and other Powering Progress Together fora across the world,
  you can expect the event to be richly packed with engaging panel discussions and networking opportunities.
  The Manila conference will also be livestreamed via the social news network <i><u><a href="http://www.rappler.com">www.rappler.com</a></u></i> for greater interactivity and reach.
</p>

<p>
  Powering Progress Together Asia 2016 once more coincides with <i><u><a href="http://www.shell.com/global/environment-society/ecomarathon/events/asia.html">Shell Eco-marathon Asia</a></u></i>,
  a unique event bringing together hundreds of student teams from countries across Asia and the Middle East to design, build, test and compete in self-built cars to
  travel a set distance on the least amount of fuel – in the process pushing the boundaries of fuel efficiency
</p>

@stop