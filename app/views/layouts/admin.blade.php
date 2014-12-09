<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shell PPT Asia 2015 Admin Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('assets/plugins/twitter-bootstrap/css/bootstrap.css') }}
		{{ HTML::style('assets/plugins/twitter-bootstrap/css/bootswatch.min.css') }}
		{{ HTML::style('assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css') }}
		{{ HTML::style('assets/css/style.css') }}
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
		  <script src="../bower_components/respond/dest/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
		body {
			  padding-top: 50px;
			}
		.page-header{
			border-bottom: 1px solid #eeeeee;
			margin: 0 0 20px;
			padding-bottom: 9px;
		}
		.main{
			padding-top: 30px;
		}
		</style>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <a href="../" class="navbar-brand">Shell PPT Asia</a>
			  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-main">
			  <ul class="nav navbar-nav">
				<li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Transaction <span class="caret"></span></a>
				  <ul class="dropdown-menu" aria-labelledby="themes">
					<li>
						{{ HTML::linkAction('DashboardController@index', 'Dashboard') }}
					</li>
					<li>
						{{ HTML::linkAction('AttendeeController@index', 'Attendee') }}
					</li>	
					<li>
						{{ HTML::linkAction('ExportController@index', 'Export List') }}
					</li>	
					<li>
						{{ HTML::linkAction('ExportController@gms', 'Export For GMS') }}
					</li>	
				  </ul>
				</li>
				
			  </ul>

			  <ul class="nav navbar-nav navbar-right">
				<li>
				  {{ HTML::linkAction('OnePageController@logout', 'Logout') }}
				</li>
			  </ul>

			</div>
		  </div>
		</div>

		<div class="container">
			@yield('content')
		</div>
	{{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
	{{ HTML::script('assets/plugins/twitter-bootstrap/js/bootstrap.min.js') }}
		<script type="text/javascript">
		$(document).ready(function() { 
		   	$('input[name=status]').change(function(){
				$('#get-form').submit();
		   	});

		   	$('#selecctall').click(function(event) {  //on click
		        if(this.checked) { // check select status
		            $('.checkbox1').each(function() { //loop through each checkbox
		                this.checked = true;  //select all checkboxes with class "checkbox1"              
		            });
		        }else{
		            $('.checkbox1').each(function() { //loop through each checkbox
		                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
		            });        
		        }
		    });
		});
		</script>

	</body>
</html>
