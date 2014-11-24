
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Shell Powering Progress Together Asia 2015</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
       <!--  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'> -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

    </head>

    <body>

        <!-- Header -->
        <div class="container">
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        {{ HTML::linkAction('HomeController@index', 'Home') }}
                    </li>
                    <li>
                        {{ HTML::linkAction('HomeController@create', 'Login') }}
                    </li>
                    <li>
                        {{ HTML::linkAction('HomeController@show', 'Programme') }}
                    </li>
                </ul>
            </div>
        </div>

        <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="span12">

                            <h2>Shell Powering Progress Together</h2>
                            <h3>Forum on energy, water and food</h3>
                            <p>Manila, Philippines - February 6th 2014</p>
                            <div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span> <br>days
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <br>hours
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <br>minutes
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <br>seconds
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
            <div class="row">
                <div class="span12 social">
                    <a href="" class="facebook" rel="tooltip" data-placement="top" data-original-title="Facebook"></a>
                    <a href="" class="twitter" rel="tooltip" data-placement="top" data-original-title="Twitter"></a>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/jquery.countdown.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

