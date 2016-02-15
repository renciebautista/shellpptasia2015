<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shell PPT Asia 2016">
    <meta name="author" content="">

    <title>Shell PPT Asia 2016</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    {{ HTML::style('assets/plugins/bootstrap-datetimepicker-3.1.3/css/bootstrap-datetimepicker.min.css') }}

    <!-- Custom styles for this template -->

    {{ HTML::style('assets/css/main.css') }}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="wrapper">
      <div class="topNav">
        <figure class="topBanner">
          <img src="assets/images/uv/banner.png">
        </figure>
        
        <nav class="navbar navbar-inverse navbar-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              @section('navigation')
              @show
            </div><!--/.nav-collapse -->
            
            
          </div>
        </nav>
      </div>
      
      <div class="wrapperBody">
        <div class="container">
          <div class="yellowBox" id="newsContainer">
            <span>LATEST NEWS</span>
            Save the date! The Shell Powering Progress Together will take place on Thursday, 3 March 2016, Manila Hotel
          </div>
        </div>
        
        @section('carousel')
        @show
        <div class="container">
          <!-- content starts here-->
          <div class="content">
            @yield('content')

          </div>
          <!-- ends here-->

          <!-- do not remove this. this is part of the template -->
          <div class="yellowBox bottomYellowBox clearfix">
            <figure class="pull-left">
              <img src="assets/images/uv/shell-03.png">
            </figure>

            <div class="pull-left yellowContent">
              <span>CATCH THE SHELL POWERING PROGRESS TOGETHER 2016 LIVESTREAM <br> ON RAPPLER.COM ON 3 MARCH 2016 STARTING 9AM</span> <br>
              Follow the discussion. Join in the conversation. Be part of the solution.
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <div class="wrapperFooter">
        <div class="container">
          <ul>
            <li>Shell Powering Progress Together 2016</li>
            <li>All rights Reserved</li>
          </ul>
        </div>
      </div>
      <!-- footer -->
    </div>
    {{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/plugins/jqueryvalidation/jquery.validate.js') }}
    {{ HTML::script('assets/plugins/jqueryvalidation/additional-methods.js') }}

    {{ HTML::script('assets/plugins/moment/moment.js') }}
    {{ HTML::script('assets/plugins/bootstrap-datetimepicker-3.1.3/js/bootstrap-datetimepicker.min.js') }}
    {{ HTML::script('assets/plugins/masked-input-plugin/jquery.maskedinput.min.js') }}
    {{ HTML::script('assets/plugins/jquery-placeholder-2.0.8/jquery.placeholder.js') }}
    {{ HTML::script('assets/js/shell.js') }}
    {{ HTML::script('assets/js/main.js') }}

  </body>
</html>
