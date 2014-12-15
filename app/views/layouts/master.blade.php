<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Shell PPT Asia 2015">
		<meta name="author" content="">

		<title>Shell PPT Asia 2015</title>

		<!-- Bootstrap core CSS -->
		{{ HTML::style('assets/css/bootstrap.min.css') }}

		{{ HTML::style('assets/plugins/bootstrap-datetimepicker-3.1.3/css/bootstrap-datetimepicker.min.css') }}

		<!-- Custom styles for this template -->
		{{ HTML::style('assets/css/jumbotron-narrow.css') }}

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">
			<div id="navbar" class="navbar-collapse ">
				<nav>
					@section('navigation')
					@show
				</nav>
			</div>

			<div class="page-header table-responsive">
				<div>
					{{ HTML::image('assets/images/background.jpg' ,'a picture', array('width' => '720')) }}
				</div>
				
			</div>
			<hr>
			@yield('content')

			@section('footer')
			@show
			<footer class="footer">
				<p>&copy; Company 2014 - 2015</p>
			</footer>
		</div> <!-- /container -->
		{{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
		{{ HTML::script('assets/js/bootstrap.min.js') }}
		{{ HTML::script('assets/plugins/jqueryvalidation/jquery.validate.js') }}
		{{ HTML::script('assets/plugins/jqueryvalidation/additional-methods.js') }}

		{{ HTML::script('assets/plugins/moment/moment.js') }}
		{{ HTML::script('assets/plugins/bootstrap-datetimepicker-3.1.3/js/bootstrap-datetimepicker.min.js') }}
		{{ HTML::script('assets/plugins/masked-input-plugin/jquery.maskedinput.min.js') }}
		{{ HTML::script('assets/plugins/jquery-placeholder-2.0.8/jquery.placeholder.js') }}
        {{ HTML::script('assets/js/shell.js') }}
	</body>
</html>
