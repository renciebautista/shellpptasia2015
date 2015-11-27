@extends('layouts.master')


@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				{{ Form::open(array('action' => array('OnePageController@doregret', $code))) }}
				<div class="col-lg-12 alert alert-dismissable alert alert-info">
					<p>You have chosen not to attend the Shell Powering Progress Together Asia 2016 forum.</p>
				</div>
				<p>Please let us know why you declined:</p>
				<ul class="reason">
					@foreach($reasons as $reason)
					<li>{{ Form::radio('reason', $reason->id, null, array('class' => 'r-reason')) }}   {{ $reason->reason }}</li>
					@endforeach
				</ul>

				<div class="form-group">
					{{ Form::text('other','',array('class' => 'form-control r-other', 'placeholder' => 'Other')) }}
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-default btn-responsive">Submit</button>
			</div>
			
		{{ Form::close() }}
			</div>
		</div>
			
	</div>
</div>

@stop