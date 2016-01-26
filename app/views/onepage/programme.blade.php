@extends('layouts.master')

@section('navigation')
<ul class="nav navbar-nav">
  <li><a href="/">Home</a></li>

  <li><a href="/overview">Event Overview</a></li>
  <li class="active"><a href="/programme">Programme</a></li>
  <li><a href="/speakers">Speakers</a></li>
  <li><a href="/hotel">Hotel</a></li>
  @if(!User::regret())
  <li><a href="/register">Event Registration</a></li>
  @endif
  <li><a href="/logout">Logout</a></li>
</ul>
@stop

@section('content')
<h4 class="uppercase text-center text-bold">programme</h4>

<div class="table-responsive">
  <table class="programme">
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
          <strong>Opening Panel Session: “Energy Transitions and the Climate Challenge”</strong><br>
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
        <td>12:25 – 12:50</td>
        <td>
          <strong>Special Topic: “The Dynamics of Innovation, Art and the Environment”</strong><br>
          <p>Goal:  To inspire the audience to take a stake in the future by making innovative and ambitious goals towards a low-carbon and climate-resilient future.</p>
        </td>
      </tr>
      <tr>
        <td>12:50 – 1:00</td>
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
      <tr>
        <td>1:20 – 2:30</td>
        <td>
          <strong>Lunch at the Maynila Ballroom</strong><br>
        </td>
      </tr>

    </tbody>
  </table>
 </div>
@stop