<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Цахим эмнэлэг</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{URL::asset('assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::asset('assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="{{URL::asset('assets/img/sidebar-5.jpg')}}">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index" class="simple-text">
                    Админ хэсэг
                </a>
            </div>
            <ul class="nav">
                <!-- <li class="selecetd">
                    <a href="admin">
                        <i class="pe-7s-graph"></i>
                        <p>Нүүр</p>
                    </a>
                </li> -->
                <li>
                    <a href="admin_doc">
                        <i class="pe-7s-user"></i>
                        <p>Эмчийн мэдээлэл</p>
                    </a>
                </li>
                <li>
                    <a href="admin_diag">
                        <i class="pe-7s-note2"></i>
                        <p>Эмчилгээ</p>
                    </a>
                </li>
                <li>
                    <a href="admin_report">
                        <i class="pe-7s-science"></i>
                        <p>Тайлан гаргах</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <!-- <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li> -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Цэс
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="index">Нүүр</a></li>
                                <li><a href="about">Бидний тухай</a></li>
                                <li><a href="blog/1">Блог</a></li>
                                <li><a href="contact">Холбоо барих</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="{{ URL::to('logout') }}">
                                Гарах
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">   
                            <div class="content">
 @yield('content')
                            </div>
                                                     
                    </div>
                    

                
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Урангуа</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>
</html>

