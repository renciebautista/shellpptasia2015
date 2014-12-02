@extends('layouts.master')

@section('navigation')
<ul class="nav nav-pills pull-right">
	<li><a href="/">Home</a></li>
	<li><a href="/programme">Programme</a></li>
	<li><a href="/hotel">Hotel</a></li>
	<li class="active"><a href="/register">Event Registration</a></li>
</ul>
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Registration Form</h2>
			</div>
		</div>
			
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<form role="form">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Attendee Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="prefix">Prefix/ Title</label>
						{{ Form::select('prefix', array('default' => 'Please Select') + $prefixes, 'default', array('class' => 'form-control')) }}
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
						<label for="prefered_name">Prefered name printed on badge (if different from given name)</label>
						{{ Form::text('prefered_name','',array('class' => 'form-control', 'placeholder' => 'Prefered name printed on badge (if different from given name)')) }}
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						{{ Form::email('email','',array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
					</div>
					<div class="form-group">
						<label for="mobile_phone">Onsite Mobile Phone (including country code)</label>
						{{ Form::text('mobile_phone','',array('class' => 'form-control', 'placeholder' => 'Onsite Mobile Phone (including country code)')) }}
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
						<label for="special">Do you have any special requirements?</label>
						{{ Form::text('special','',array('class' => 'form-control', 'placeholder' => 'Do you have any special requirements?')) }}
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
						{{ Form::select('withhotel', array('default' => 'Please Select') + $yesno, 'default', array('class' => 'form-control')) }}
						<p class="help-block">Please note a hotel room is at your own expense.</p>
					</div>
					<div class="form-group">
						<label for="job_title">For which nights do you need accommodation?</label>
						<br>
						@foreach ($available_nights as $row)
						<label class="checkbox-inline">
							{{ Form::checkbox('night[]',$row->id ) }}
							{{ $row->available_night }}
						</label>
						@endforeach
						
					</div>
					<div class="form-group">
						<label for="hotel">Please select a hotel below.</label>
						{{ Form::select('hotel', array('default' => 'Please Select') + $hotels, 'default', array('class' => 'form-control')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group">
						<label for="room_type">Room Type</label>
						{{ Form::select('room_type', array('default' => 'Please Select') + $hotels, 'default', array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						<label for="rate">Room rate (per night including tax)</label>
						{{ Form::text('rate','',array('class' => 'form-control', 'placeholder' => 'Room rate (per night including tax)')) }}
					</div>
					<div class="form-group">
						<label for="billing">Billing Instructions</label>
						{{ Form::text('billing','',array('class' => 'form-control', 'placeholder' => 'Billing Instructions')) }}
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
						{{ Form::select('with_arrival', array('default' => 'Please Select') + $yesno, 'default', array('class' => 'form-control')) }}
						<p class="help-block">Please note an arrival transfer is at your own expense.</p>
					</div>
					<div class="form-group">
						<label for="arrival_carrier">Carrier</label>
						{{ Form::text('arrival_carrier','',array('class' => 'form-control', 'placeholder' => 'Carrier')) }}
					</div>
					<div class="form-group">
						<label for="arrival_no">Flight Number</label>
						{{ Form::text('arrival_no','',array('class' => 'form-control', 'placeholder' => 'Flight Number')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group">
						<label for="arrival_date">Arrival Date</label>
						{{ Form::text('arrival_date','',array('class' => 'form-control', 'placeholder' => 'Arrival Date')) }}
					</div>
					<div class="form-group">
						<label for="arrival_time">Arrival Time</label>
						{{ Form::text('arrival_time','',array('class' => 'form-control', 'placeholder' => 'Arrival Time')) }}
					</div>
					<div class="form-group">
						<label for="arrival_port">Arrival Port</label>
						{{ Form::text('arrival_port','',array('class' => 'form-control', 'placeholder' => 'Arrival Port')) }}
					</div>
					<br>
					<br>
					<div class="form-group">
						<label for="with_departure">Departute transfer required?</label>
						{{ Form::select('with_departure', array('default' => 'Please Select') + $yesno, 'default', array('class' => 'form-control')) }}
						<p class="help-block">Please note an arrival transfer is at your own expense.</p>
					</div>
					<div class="form-group">
						<label for="departure_carrier">Carrier</label>
						{{ Form::text('departure_carrier','',array('class' => 'form-control', 'placeholder' => 'Carrier')) }}
					</div>
					<div class="form-group">
						<label for="departure_no">Flight Number</label>
						{{ Form::text('departure_no','',array('class' => 'form-control', 'placeholder' => 'Flight Number')) }}
						<p class="help-block">Further hotel information you can find in the Hotel information page.</p>
					</div>
					<div class="form-group">
						<label for="departure_date">Departute Date</label>
						{{ Form::text('arrival_date','',array('class' => 'form-control', 'placeholder' => 'Departute Date')) }}
					</div>
					<div class="form-group">
						<label for="departure_time">Departute Time</label>
						{{ Form::text('arrival_time','',array('class' => 'form-control', 'placeholder' => 'Departute Time')) }}
					</div>
					<div class="form-group">
						<label for="departure_port">Departute Port</label>
						{{ Form::text('arrival_port','',array('class' => 'form-control', 'placeholder' => 'Departute Port')) }}
					</div>

				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Parking Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="job_title">VIP Parking at venue required?</label><br>
						@foreach ($yesno as $index => $row)
						<label class="radio-inline">
							{{ Form::radio('parking',$index ) }}
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
						<label for="job_title">Emergency Contact Name</label>
						<input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
					</div>
					<div class="form-group">
						<label for="job_title">Emergency Contact Telephone Number</label>
						<input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
					</div>
					<div class="form-group">
						<label for="job_title">Relationship to attendee</label>
						<input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
@stop