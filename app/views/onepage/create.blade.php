@extends('layouts.master')

@section('navigation')
<ul class="nav nav-pills pull-right">
	<li><a href="/">Home</a></li>
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
				<h2 class="section-heading">Registration Form</h2>
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
		
		{{ Form::open(array('action' => 'RegisterController@store', 'id' => 'register')) }}
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Attendee Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="prefix">Prefix/ Title</label>
						{{ Form::select('prefix', array('0' => 'Please Select') + $prefixes, 'default', array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						<label for="first_name">First Name</label>
						{{ Form::text('first_name','',array('class' => 'form-control', 'placeholder' => 'First Name')) }}
					</div>
					<div class="form-group">
						<label for="last_name">Last Name/Family Name</label>
						{{ Form::text('last_name','',array('class' => 'form-control', 'placeholder' => 'Last Name/Family Name')) }}
					</div>
					<div class="form-group">
						<label for="prefered_name">Preferred name printed on badge (if different from given name)</label>
						{{ Form::text('prefered_name','',array('class' => 'form-control', 'placeholder' => 'Preferred name printed on badge (if different from given name)')) }}
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						{{ Form::email('email','',array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
					</div>
					<div class="form-group">
						<label for="mobile_phone">Onsite Mobile Phone (country code and mobile number)</label>
						{{ Form::text('mobile_phone','',array('class' => 'form-control', 'placeholder' => 'Onsite Mobile Phone (country code and mobile number)')) }}
					</div>
					<div class="form-group">
						<label for="assist_phone">Assistant Name + number (if applicable)</label>
						{{ Form::text('assist_phone','',array('class' => 'form-control', 'placeholder' => 'Assistant Name + number (if applicable)')) }}
					</div>
					<div class="form-group">
						<label for="alternative_email">Alternative email address (assistant, group manager)</label>
						{{ Form::text('alternative_email','',array('class' => 'form-control', 'placeholder' => 'Alternative email address (assistant, group manager)')) }}
					</div>
					<div class="form-group">
						<label for="company">Company Name/ Department</label>
						{{ Form::text('company','',array('class' => 'form-control', 'placeholder' => 'Company Name/ Department')) }}
					</div>
					<div class="form-group">
						<label for="address">Address + city</label>
						{{ Form::text('address','',array('class' => 'form-control', 'placeholder' => 'Address + city')) }}
					</div>
					<div class="form-group">
						<label for="job_title">Job Title</label>
						{{ Form::text('job_title','',array('class' => 'form-control', 'placeholder' => 'Job Title')) }}
					</div>
					<div class="form-group">
						<label for="country">Country</label>
						{{ Form::select('country', array('default' => 'Please Select') + $countries, 'default', array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						<label for="special">Do you have any special dietary requirements?</label>
						{{ Form::text('special','',array('class' => 'form-control', 'placeholder' => 'Do you have any special dietary requirements?')) }}
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
						{{ Form::select('withhotel', array('0' => 'Please Select') + $yesno, 0, array('class' => 'form-control', 'id' => 'withhotel')) }}
						<p class="help-block">Please note a hotel room is at your own expense.</p>
					</div>
					<div class="form-group hotel">
						<label for="night">For which nights do you need accommodation?</label>
						<br>
						@foreach ($available_nights as $row)
						<label class="checkbox-inline hotel">
							{{ Form::checkbox('night[]',$row->id, null, array('id' => 'night')) }}
							{{ date('j F Y', strtotime($row->available_night)) }}
						</label>
						@endforeach
						
					</div>
					<div class="form-group hotel">
						<label for="hotel">Please select a hotel below.</label>
						{{ Form::select('hotel', array('default' => 'Please Select') + $hotels, 'default', array('class' => 'form-control', 'id' => 'hotel')) }}
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
						{{ Form::text('billing','',array('class' => 'form-control', 'placeholder' => 'Billing Instructions', 'id' => 'billing')) }}
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
						{{ Form::select('with_arrival',array('0' => 'Please Select') + $yesno, 0, array('class' => 'form-control', 'id' => 'with_arrival')) }}
						<p class="help-block">Please note an arrival transfer is at your own expense.</p>
					</div>
					<div class="form-group arrive">
						<label for="arrival_carrier">Carrier</label>
						{{ Form::text('arrival_carrier','',array('class' => 'form-control', 'placeholder' => 'Carrier')) }}
					</div>
					<div class="form-group arrive">
						<label for="arrival_no">Flight Number</label>
						{{ Form::text('arrival_no','',array('class' => 'form-control', 'placeholder' => 'Flight Number')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group arrive">
						<label for="arrival_date">Arrival Date</label>
						{{ Form::text('arrival_date','',array('class' => 'form-control', 'placeholder' => 'Arrival Date', 'id' => 'arrival_date')) }}
					</div>
					<div class="form-group arrive">
						<label for="arrival_time">Arrival Time</label>
						{{ Form::text('arrival_time','',array('class' => 'form-control', 'placeholder' => 'Arrival Time', 'id' => 'arrival_time' ,'data-date-format' => 'hh:mm A/PM')) }}
					</div>
					<div class="form-group arrive">
						<label for="arrival_port">Arrival Port</label>
						{{ Form::text('arrival_port','',array('class' => 'form-control', 'placeholder' => 'Arrival Port')) }}
					</div>
					<br>
					<div class="form-group">
						<label for="with_departure">Departure transfer required?</label>
						{{ Form::select('with_departure', array('0' => 'Please Select') + $yesno, 0, array('class' => 'form-control' , 'id' => 'with_departure')) }}
						<p class="help-block">Please note a departure transfer is at your own expense.</p>
					</div>
					<div class="form-group departure">
						<label for="departure_carrier">Carrier</label>
						{{ Form::text('departure_carrier','',array('class' => 'form-control', 'placeholder' => 'Carrier')) }}
					</div>
					<div class="form-group departure">
						<label for="departure_no">Flight Number</label>
						{{ Form::text('departure_no','',array('class' => 'form-control', 'placeholder' => 'Flight Number')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group departure">
						<label for="departure_date">Departure Date</label>
						{{ Form::text('departure_date','',array('class' => 'form-control', 'placeholder' => 'Departure Date', 'id' => 'departure_date')) }}
					</div>
					<div class="form-group departure">
						<label for="departure_time">Departure Time</label>
						{{ Form::text('departure_time','',array('class' => 'form-control', 'placeholder' => 'Departure Time','id' => 'departure_time' ,'data-date-format' => 'hh:mm A/PM')) }}
					</div>
					<div class="form-group departure">
						<label for="departure_port">Departure Port</label>
						{{ Form::text('departure_port','',array('class' => 'form-control', 'placeholder' => 'Departure Port')) }}
					</div>

				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Parking Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="withhotel">Parking at venue required?</label><br>
						@foreach ($yesno as $index => $row)
						<label class="radio-inline">

							{{ Form::radio('withparking',$index ,$index == 2 ? true:false,  array('class' => 'w_park', 'id' => 'withparking')) }}
							{{ $row }}
						</label>
						@endforeach

					</div>

					<div class="form-group plate" >
						<label for="plate">Plate number of car to be used:</label>
						{{ Form::text('plate','',array('class' => 'form-control', 'placeholder' => 'Plate number')) }}
						<p style="font-style:italic;color:#a94442;">*Please note that this information will be used for parking reservation at the venue. Parking fee is complimentary.</p>
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
						{{ Form::text('e_name','',array('class' => 'form-control', 'placeholder' => 'Emergency Contact Name')) }}
					</div>
					<div class="form-group">
						<label for="e_number">Emergency Contact Telephone Number</label>
						{{ Form::text('e_number','',array('class' => 'form-control', 'placeholder' => 'Emergency Contact Telephone Number')) }}
					</div>
					<div class="form-group">
						<label for="e_relationship">Relationship to attendee</label>
						{{ Form::text('e_relationship','',array('class' => 'form-control', 'placeholder' => 'Relationship to attendee')) }}
					</div>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default btn-responsive">Submit</button>
			</div>
			
		{{ Form::close() }}
	</div>
</div>
@stop

@section('footer')
<ul class="nav nav-pills pull-right">
	<li><a href="/">Event Overview</a></li>
	<li><a href="/programme">Programme</a></li>
	<li><a href="/hotel">Hotel</a></li>
	<li class="active"><a href="/register">Event Registration</a></li>
</ul>
@stop