@extends('layouts.master')

@section('navigation')
<ul class="nav nav-pills pull-right">
	<li><a href="/">Event Overview</a></li>
	<li><a href="/programme">Programme</a></li>
	<li><a href="/hotel">Hotel</a></li>
	@if(!User::regret())
	<li class="active"><a href="/register">Event Registration</a></li>
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
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Update Registration Form</h2>
				@if ($errors->any())
				    <ul id="notification">
				        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
				    </ul>
				@endif
			</div>
		</div>
			
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		
		{{ Form::open(array('action' => array('RegisterController@update'), 'method' => 'PUT','id' => 'register')) }}
		{{ Form::hidden('at_id', $attendee->id) }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Attendee Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="prefix">Prefix/ Title</label>
						{{ Form::select('prefix', array('0' => 'Please Select') + $prefixes, $attendee->prefix_id, array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						<label for="first_name">First Name</label>
						{{ Form::text('first_name', ucwords(strtolower($attendee->first_name)), array('class' => 'form-control', 'placeholder' => 'First Name')) }}
					</div>
					<div class="form-group">
						<label for="last_name">Last Name/Family Name</label>
						{{ Form::text('last_name',ucwords(strtolower($attendee->last_name)),array('class' => 'form-control', 'placeholder' => 'Last Name/Family Name')) }}
					</div>
					<div class="form-group">
						<label for="prefered_name">Preferred name printed on badge (if different from given name)</label>
						{{ Form::text('prefered_name',$attendee->prefered_name,array('class' => 'form-control', 'placeholder' => 'Preferred name printed on badge (if different from given name)')) }}
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						{{ Form::email('email',$attendee->email,array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
					</div>
					<div class="form-group">
						<label for="mobile_phone">Onsite Mobile Phone (country code and mobile number)</label>
						{{ Form::text('mobile_phone',$attendee->mobile_phone,array('class' => 'form-control', 'placeholder' => 'Onsite Mobile Phone (country code and mobile number)')) }}
					</div>
					<div class="form-group">
						<label for="assist_phone">Assistant Name + number (if applicable)</label>
						{{ Form::text('assist_phone',$attendee->assist_phone, array('class' => 'form-control', 'placeholder' => 'Assistant Name + number (if applicable)')) }}
					</div>
					<div class="form-group">
						<label for="alternative_email">Alternative email address (assistant, group manager)</label>
						{{ Form::text('alternative_email',$attendee->alternative_email,array('class' => 'form-control', 'placeholder' => 'Alternative email address (assistant, group manager)')) }}
					</div>
					<div class="form-group">
						<label for="company">Company Name/ Department</label>
						{{ Form::text('company',ucwords($attendee->company),array('class' => 'form-control', 'placeholder' => 'Company Name/ Department')) }}
					</div>
					<div class="form-group">
						<label for="address">Address + city</label>
						{{ Form::text('address',ucwords(strtolower($attendee->address)),array('class' => 'form-control', 'placeholder' => 'Address + city')) }}
					</div>
					<div class="form-group">
						<label for="job_title">Job Title</label>
						{{ Form::text('job_title',ucwords(strtolower($attendee->job_title)),array('class' => 'form-control', 'placeholder' => 'Job Title')) }}
					</div>
					<div class="form-group">
						<label for="country">Country</label>
						{{ Form::select('country', array('default' => 'Please Select') + $countries, $attendee->country_id, array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						<label for="special">Do you have any special requirements?</label>
						{{ Form::text('special',$attendee->special,array('class' => 'form-control', 'placeholder' => 'Do you have any special requirements?')) }}
					</div>
				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Hotel Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="withhotel">Will you require a hotel room?</label>
						{{ Form::select('withhotel', array('0' => 'Please Select') + $yesno, ($attendee->withhotel == 1) ? 1:2, array('class' => 'form-control', 'id' => 'withhotel')) }}
						<p class="help-block">Please note a hotel room is at your own expense.</p>
					</div>
					<div class="form-group hotel">
						<label for="night">For which nights do you need accommodation?</label>
						<br>
						@foreach ($available_nights as $row)
						<label class="checkbox-inline hotel">
							{{ Form::checkbox('night[]',$row->id, in_array($row->id, $nights), array('id' => 'night')) }}
							{{ $row->available_night }}
						</label>
						@endforeach
						
					</div>
					<div class="form-group hotel">
						<label for="hotel">Please select a hotel below.</label>
						{{ Form::select('hotel', array('0' => 'Please Select') + $hotels, $attendee->hotel_id, array('class' => 'form-control', 'id' => 'hotel')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group hotel">
						<label for="room_type">Room Type</label>
						<select class="form-control" data-placeholder="SELECT CATEGORY" id="room_type" name="room_type"></select>
					</div>
					<div class="form-group hotel">
						<label for="rate">Room rate (per night including tax)</label>
						{{ Form::text('rate','',array('class' => 'form-control', 'placeholder' => 'Room rate (per night including tax)', 'readonly' => '', 'id' => 'rate')) }}
					</div>
					<div class="form-group hotel">
						<label for="billing">Billing Instructions</label>
						{{ Form::text('billing',$attendee->billing,array('class' => 'form-control', 'placeholder' => 'Billing Instructions', 'id' => 'billing')) }}
					</div>
					
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Travel Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="with_arrival">Arrival transfer required?</label>
						{{ Form::select('with_arrival',array('0' => 'Please Select') + $yesno, $attendee->with_arrival, array('class' => 'form-control', 'id' => 'with_arrival')) }}
						<p class="help-block">Please note an arrival transfer is at your own expense.</p>
					</div>
					<div class="form-group arrive">
						<label for="arrival_carrier">Carrier</label>
						{{ Form::text('arrival_carrier',$attendee->arrival_carrier,array('class' => 'form-control', 'placeholder' => 'Carrier', 'id' => 'arrival_carrier')) }}
					</div>
					<div class="form-group arrive">
						<label for="arrival_no">Flight Number</label>
						{{ Form::text('arrival_no',$attendee->arrival_no,array('class' => 'form-control', 'placeholder' => 'Flight Number', 'id' => 'arrival_noe')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group arrive">
						<label for="arrival_date">Arrival Date</label>
						@if($attendee->arrival_date == '')
							{{ Form::text('arrival_date', '',array('class' => 'form-control', 'placeholder' => 'Arrival Date', 'id' => 'arrival_date')) }}
						@else
							{{ Form::text('arrival_date', date_format(date_create($attendee->arrival_date),"m/d/Y") ,array('class' => 'form-control', 'placeholder' => 'Arrival Date', 'id' => 'arrival_date')) }}
						@endif
						
					</div>
					<div class="form-group arrive">
						<label for="arrival_time">Arrival Time</label>
						{{ Form::text('arrival_time',$attendee->arrival_time,array('class' => 'form-control', 'placeholder' => 'Arrival Time', 'id' => 'arrival_time' ,'data-date-format' => 'hh:mm A/PM')) }}
					</div>
					<div class="form-group arrive">
						<label for="arrival_port">Arrival Port</label>
						{{ Form::text('arrival_port',$attendee->arrival_port,array('class' => 'form-control', 'placeholder' => 'Arrival Port')) }}
					</div>
					<br>
					<div class="form-group">
						<label for="with_departure">Departure transfer required?</label>
						{{ Form::select('with_departure', array('0' => 'Please Select') + $yesno, $attendee->with_departure, array('class' => 'form-control' , 'id' => 'with_departure')) }}
						<p class="help-block">Please note a departure transfer is at your own expense.</p>
					</div>
					<div class="form-group departure">
						<label for="departure_carrier">Carrier</label>
						{{ Form::text('departure_carrier',$attendee->departure_carrier,array('class' => 'form-control', 'placeholder' => 'Carrier', 'id' => 'departure_carrier')) }}
					</div>
					<div class="form-group departure">
						<label for="departure_no">Flight Number</label>
						{{ Form::text('departure_no',$attendee->departure_no,array('class' => 'form-control', 'placeholder' => 'Flight Number', 'id' => 'departure_no')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group departure">
						<label for="departure_date">Departure Date</label>
						@if($attendee->departure_date == '')
							{{ Form::text('departure_date', '',array('class' => 'form-control', 'placeholder' => 'Departure Date', 'id' => 'departure_date')) }}
						@else
							{{ Form::text('departure_date', date_format(date_create($attendee->departure_date),"m/d/Y") ,array('class' => 'form-control', 'placeholder' => 'Departure Date', 'id' => 'departure_date')) }}
						@endif
					</div>
					<div class="form-group departure">
						<label for="departure_time">Departure Time</label>
						{{ Form::text('departure_time',$attendee->departure_time,array('class' => 'form-control', 'placeholder' => 'Departure Time','id' => 'departure_time' ,'data-date-format' => 'hh:mm A/PM')) }}
					</div>
					<div class="form-group departure">
						<label for="departure_port">Departure Port</label>
						{{ Form::text('departure_port',$attendee->departure_port,array('class' => 'form-control', 'placeholder' => 'Departure Port' ,'id' => 'departure_port')) }}
					</div>

				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Parking Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="withparking">Parking at venue required?</label><br>
						@foreach ($yesno as $index => $row)
						<label class="radio-inline">
							{{ Form::radio('withparking',$index ,($index == $attendee->withparking) ? true : false) }}
							{{ $row }}
						</label>
						@endforeach
					</div>
				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Emergency Contact Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="e_name">Emergency Contact Name</label>
						{{ Form::text('e_name',ucwords(strtolower($attendee->e_name)),array('class' => 'form-control', 'placeholder' => 'Emergency Contact Name')) }}
					</div>
					<div class="form-group">
						<label for="e_number">Emergency Contact Telephone Number</label>
						{{ Form::text('e_number',$attendee->e_number,array('class' => 'form-control', 'placeholder' => 'Emergency Contact Telephone Number')) }}
					</div>
					<div class="form-group">
						<label for="e_relationship">Relationship to attendee</label>
						{{ Form::text('e_relationship',ucwords(strtolower($attendee->e_relationship)),array('class' => 'form-control', 'placeholder' => 'Relationship to attendee')) }}
					</div>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default btn-responsive">Update</button>
			</div>
			
		{{ Form::close() }}
	</div>
</div>
@stop