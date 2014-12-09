@extends('layouts.admin')

@section('content')

<div class="page-header" id="banner">
	<div class="row">
		<div class="col-lg-12">
			<h1>Dashboard</h1>
		</div>
	</div>
</div>

<!-- /.row -->
<div class="row">
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-thumbs-o-up fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $attending }}</div>
						<div>Registered Attendee</div>
					</div>
				</div>
			</div>
			<a href="/attendee?status=2&s=">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-user fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $pending }}</div>
						<div>Pending Attendee</div>
					</div>
				</div>
			</div>
			<a href="/attendee?status=3&s=">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-thumbs-o-down fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $regrets }}</div>
						<div>Regrets Attendee</div>
					</div>
				</div>
			</div>
			<a href="/attendee?status=4&s=">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
</div>
<!-- /.row -->

@stop