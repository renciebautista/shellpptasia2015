@extends('layouts.master')

@section('navigation')
  <ul class="nav navbar-nav">
    <li class="active"><a href="/">Home</a></li>

    <li><a href="/overview">Event Overview</a></li>
    <li><a href="/programme">Programme</a></li>
    <li><a href="/speakers">Speakers</a></li>
    <li><a href="/hotel">Hotel</a></li>
    @if(!User::regret())
    <li><a href="/register">Event Registration</a></li>
    @endif
    <li><a href="/logout">Logout</a></li>
  </ul>
@stop

@section('carousel')
<div class="carousel slide menu-slider" data-ride="carousel" id="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/images/uv/slideshow/savethedate.jpg" alt="Save the Date" data-holder-rendered="true" class="img-responsive">
    </div>
    <div class="item">
      <img src="assets/images/uv/slideshow/shell-word-cloud-2.jpg" alt="Shell PPT Asia Word Cloud" class="img-responsive" />
    </div>
    <div class="item">
      <a href="/overview"><img src="assets/images/uv/slideshow/EventOverview.jpg" alt="Event Overview" class="img-responsive" /></a>
      <h1 class="caption">event overview</h1>
    </div>
    <div class="item">
      <a href="/programme"><img src="assets/images/uv/slideshow/Programme.jpg" alt="Programme" class="img-responsive"/></a>
      <h1 class="caption">programme</h1>
    </div>
    <div class="item">
      <a href="/speakers"><img src="assets/images/uv/slideshow/ModeratorsandSpeakers.jpg" alt="Moderators and Speakers" class="img-responsive"/></a>
      <h1 class="caption">moderators and speakers</h1>
    </div>
    <div class="item">
      <a href="/hotel"><img src="assets/images/uv/slideshow/Manila-Hotel.jpg" alt="Hotel H20" class="img-responsive"/></a>
      <h1 class="caption">hotel</h1>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    &#60;
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    &#62;
  </a>
</div>
@stop

@section('content')

<p>Shell Powering Progress Together is a series of conferences that spark new thinking on how to increase resilience in the face of growing pressure on the world’s vital resources. It brings together leading thinkers from business, government and society fot three main events in Asia, Europe and the Americas. Manila is the host of the conference from 2014 to 2016.</p>

<p>As the culmination of the three-year forum hoste in Manila, the theme for Powering Progress Together 2016 is “Collaboration for a Sustainable Future”. It aims to build on previous years’ discussions and to present, as well as celebrate, concrete examples of collaborative action as we transition to a more resilient and sustainable future, where all sectors of society work together to address vital resource challenges while taking care of the environtment and promoting quality of life.</p>

<p>Visit the Shell Powering Progress Together <strong><i><a href="http://www.shell.com/about-us/events/powering-progress-together.html">website</a></i></strong> to learn more. </p>

<div class="row thumb">
  <figure class="col-md-3 col-sm-6">
    <a href="https://www.youtube.com/watch?v=U66ui8u0_lQ" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/1.jpg');"></a>
    <figcaption>
      <a href="https://www.youtube.com/watch?v=U66ui8u0_lQ" target="_blank" title="WATCH: Shell Powering Progress Together Asia 2015 Lookback Film">
        <span>WATCH:</span> Shell Powering Progress Together Asia 2015 Lookback Film
      </a>
    </figcaption>
  </figure>

  <figure class="col-md-3 col-sm-6">
    <a href="https://www.flickr.com/photos/royaldutchshell/sets/72157651035892831" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/2.jpg');"></a>
    <figcaption>
      <a href="https://www.flickr.com/photos/royaldutchshell/sets/72157651035892831" target="_blank" title="VIEW: Shell Powering Progress Together Asia 2015 in Photos">
        <span>VIEW:</span> Shell Powering Progress Together Asia 2015 in Photos
      </a>
    </figcaption>
  </figure>

  <figure class="col-md-3 col-sm-6">
    <a href="https://www.youtube.com/watch?v=7jKg_gh_fBs" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/3.jpg');"></a>
    <figcaption>
      <a href="https://www.youtube.com/watch?v=7jKg_gh_fBs" target="_blank" title="WATCH: Shell Powering Progress Together Asia 2014 Lookback Film">
        <span>WATCH:</span> Shell Powering Progress Together Asia 2014 Lookback Film
      </a>
    </figcaption>
  </figure>

  <figure class="col-md-3 col-sm-6">
    <a href="https://www.flickr.com/photos/royaldutchshell/sets/72157640568553595/" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/4.jpg');"></a>
    <figcaption>
      <a href="https://www.flickr.com/photos/royaldutchshell/sets/72157640568553595/" target="_blank" title="VIEW: Shell Powering Progress Together Asia 2014 in Photos">
        <span>VIEW:</span> Shell Powering Progress Together Asia 2014 in Photos
      </a>
    </figcaption>
  </figure>
</div>
<div class="row thumb">
  <figure class="col-md-3 col-sm-6">
    <a href="http://www.shell.com/global/aboutshell/events/powering-progress-together.html" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/5.jpg');"></a>
    <figcaption>
      <a href="http://www.shell.com/global/aboutshell/events/powering-progress-together.html" target="_blank" title="DISCOVER: Shell Powering Progress Together Asia 2015 – Urbanisation and Resilience">
        <span>DISCOVER:</span> Shell Powering Progress Together Asia 2015 – Urbanisation and Resilience
      </a>
    </figcaption>
  </figure>

  <figure class="col-md-3 col-sm-6">
    <a href="http://www.shell.com/global/environment-society/environment/climate-change.html" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/6.jpg');"></a>
    <figcaption>
      <a href="http://www.shell.com/global/environment-society/environment/climate-change.html" target="_blank" title="KNOW MORE: Shell and Climate Change">
        <span>KNOW MORE:</span> Shell and Climate Change
      </a>
    </figcaption>
  </figure>

  <figure class="col-md-3 col-sm-6">
    <a href="http://www.shell.com/global/future-energy/scenarios/future-cities.html" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/7.jpg');"></a>
    <figcaption>
      <a href="http://www.shell.com/global/future-energy/scenarios/future-cities.html" target="_blank" title="DOWNLOAD: New Lenses on Future Cities">
        <span>DOWNLOAD:</span> New Lenses on Future Cities
      </a>
    </figcaption>
  </figure>

  <figure class="col-md-3 col-sm-6">
    <a href="https://www.youtube.com/watch?v=x_S_1LPhefs" target="_blank" class="thumb-image" style="background-image: url('assets/images/uv/footer-photos/8.jpg');"></a>
    <figcaption>
      <a href="https://www.youtube.com/watch?v=x_S_1LPhefs" target="_blank" title="WATCH: NatGeo Video: “Energy-Water-Food: In Search of Resilience”">
        <span>WATCH:</span> NatGeo Video: “Energy-Water-Food: In Search of Resilience”
      </a>
    </figcaption>
  </figure>
</div>
@stop