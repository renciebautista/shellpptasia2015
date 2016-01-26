@extends('layouts.admin')

@section('content')
<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Attendee Information</h1>
		</div>
	</div>
</div>

<div class="row">

	<div id="show" class="col-lg-12">
		<table class="otherdetails">
		  <tr>
			<td>Name:</td>
			<td>{{ ucwords(strtolower($prefix->prefix))}} {{ ucwords(strtolower($attendee->first_name))}} {{ ucwords(strtolower($attendee->last_name))}}</td>
		  </tr>
		  <tr>
			<td>Preferred name printed on badge:</td>
			<td>{{ $attendee->prefered_name }}</td>
		  </tr>
		  <tr>
			<td>Email Address:</td>
			<td>{{ $attendee->email}}</td>
		  </tr>
		  <tr>
			<td>Onsite Mobile Phone:</td>
			<td>{{ $attendee->mobile_phone }}</td>
		  </tr>
		  <tr>
			<td>Assistant Name + number:</td>
			<td>{{ $attendee->assist_phone }}</td>
		  </tr>
		  <tr>
			<td>Alternative email address:</td>
			<td>{{ $attendee->alternative_email }}</td>
		  </tr>
		  <tr>
			<td>Company Name/ Department:</td>
			<td>{{ $attendee->company }}</td>
		  </tr>
		  <tr>
			<td>Address + city:</td>
			<td>{{ $attendee->address }}</td>
		  </tr>
		  <tr>
			<td>Job Title:</td>
			<td>{{ $attendee->job_title }}</td>
		  </tr>
		  <tr>
			<td>Country:</td>
			<td>{{ $country->name }}</td>
		  </tr>
		  <tr>
			<td>Special requirements:</td>
			<td>{{ $attendee->special }}</td>
		  </tr>
		</table>

		<h4>HOTEL INFORMATION</h4>
		<table class="otherdetails">
		  <tr>
			<td>Hotel room required:</td>
			<td>
			  @if($attendee->withhotel == 1)
			  YES
			  @else
			  NO
			  @endif
			</td>
		  </tr>
		  @if($attendee->withhotel == 1)
		  <tr>
			<td>Selected nights:</td>
			<td>
			  @foreach($nights as $row)
			  {{ date_format(date_create($row->available_night),"m/d/Y") }},
			  @endforeach
			</td>
		  </tr>
		  <tr>
			<td>Hotel:</td>
			<td>{{ $hotel->name }}</td>
		  </tr>
		  <tr>
			<td>Room Type:</td>
			<td>{{ $room->room_type }}</td>
		  </tr>
		  <tr>
			<td>Room rate:</td>
			<td>{{ $room->room_rate }}</td>
		  </tr>
		  <tr>
			<td>Billing Instructions:</td>
			<td>{{ $attendee->billing }}</td>
		  </tr>
		 @endif
		</table>

		<h4>TRAVEL INFORMATION</h4>
		<table class="otherdetails">
		  <tr>
			<td>Arrival transfer required:</td>
			<td>
			  @if($attendee->with_arrival == 1)
			  YES
			  @else
			  NO
			  @endif
			</td>
		  </tr>
		   @if($attendee->with_arrival == 1)
		  <tr>
			<td>Carrier:</td>
			<td>{{ $attendee->arrival_carrier }}</td>
		  </tr>
		  <tr>
			<td>Flight Number:</td>
			<td>{{ $attendee->arrival_no }}</td>
		  </tr>
		  <tr>
			<td>Arrival Date:</td>
			<td>{{ date_format(date_create($attendee->arrival_date),"m/d/Y") }}</td>
		  </tr>
		  <tr>
			<td>Arrival Time:</td>
			<td>{{ $attendee->arrival_time }}</td>
		  </tr>
		  <tr>
			<td>Arrival Port:</td>
			<td>{{ $attendee->arrival_port }}</td>
		  </tr>
		  @endif
		</table>

		<table class="otherdetails">
		  <tr>
			<td>Departure transfer required:</td>
			<td>
			  @if($attendee->with_departure == 1)
			  YES
			  @else
			  NO
			  @endif
			</td>
		  </tr>
			@if($attendee->with_departure == 1)
		  <tr>
			<td>Carrier:</td>
			<td>{{ $attendee->departure_carrier }}</td>
		  </tr>
		  <tr>
			<td>Flight Number:</td>
			<td>{{ $attendee->departure_no }}</td>
		  </tr>
		  <tr>
			<td>Arrival Date:</td>
			<td>{{ date_format(date_create($attendee->departure_date),"m/d/Y") }}</td>
		  </tr>
		  <tr>
			<td>Arrival Time:</td>
			<td>{{ $attendee->departure_time }}</td>
		  </tr>
		  <tr>
			<td>Arrival Port:</td>
			<td>{{ $attendee->departure_port }}</td>
		  </tr>
			@endif
		</table>

		<h4>PARKING INFORMATION</h4>
		<table class="otherdetails">
		  <tr>
			<td>Parking at venue required:</td>
			<td>
			  @if($attendee->withparking == 1)
			  YES
			  @else
			  NO
			  @endif
			</td>
		  </tr>
		 @if($attendee->withparking == 1)
		  <tr>
			<td>Plate number of vehicle to be used</td>
			<td>
			  {{ $attendee->plate_no }}
			</td>
		  </tr>
		  @endif
		</table>

		<h4>EMERGENCY CONTACT INFORMATION</h4>
		<table class="otherdetails">
		  <tr>
			<td>Contact Name:</td>
			<td>{{ $attendee->e_name }}</td>
		  </tr>
		  <tr>
			<td>Contact Number:</td>
			<td>{{ $attendee->e_number }}</td>
		  </tr>
		  <tr>
			<td>Relationship to attendee:</td>
			<td>{{ $attendee->e_relationship }}</td>
		  </tr>
		</table>
		<br>
		<div class="form-group">
			{{ HTML::linkRoute('attendee.index', 'Back', array(), array('class' => 'btn btn-default')) }}
		</div>
	</div>


</div>
@stop