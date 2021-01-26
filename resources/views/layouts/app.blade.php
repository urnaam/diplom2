<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{URL::asset('styles.css')}}">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>

<title>Цахим эмнэлэг</title>
<link href="{{URL::asset('css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prevention Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//fonts-->  
<!-- js -->
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/modernizr.custom.js')}}"></script>
<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom.css')}}" />
    <script type="text/javascript" src="{{URL::asset('js/modernizr.custom.79639.js')}}"></script>   
    <!-- js for news -->
    <script src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/pignose.layerslider.js')}}"></script>
    <script type="text/javascript">
      //<![CDATA[
        $(window).load(function() {
          $('#visual').pignoseLayerSlider({
            play    : '.btn-play',
            pause   : '.btn-pause',
            next    : '.btn-next',
            prev    : '.btn-prev'
          });
        });
      //]]>
      </script>
    <!-- /js for news -->
    
    <!-- for smooth scrolling -->
    <script type="text/javascript" src="{{URL::asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/easing.js')}}"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
      });
    });
    </script>
    <!-- //for smooth scrolling -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('demo.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('menu.css')}}" type="text/css" media="screen" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
  <!-- header -->
      <!-- Large modal -->
      <div class="selectpackage">
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    </div>
  </div>
  <nav class="navbar nav_bottom" role="navigation">
   <div class="container">
   <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Цэс
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
     </div> 
     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
      <ul class="nav navbar-nav nav_1">
        <li><a href="index">Нүүр</a></li>
        <li class="dropdown">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Бидний тухай<span class="caret"></span></a>
        <ul class="dropdown-menu drop_menu" role="menu">
          <li><a href="about">Танилцуулга</a></li>
          <li><a href="career">Ажлын байр</a></li>
          </ul>
          </li>
        <li class="dropdown">
          <a href="/test-list">Үйлчилгээ</a>
        </li>
        <li class="dropdown">
          <a href="blog/1">Блог</a>
        </li>
        <li class="dropdown">
          <a href="contact">Холбоо барих</a>
        </li>
           @if (Auth::guest())
        <li class="current_page"><a href="{{ url('/login') }}">Нэвтрэх</a></li>
        <li><a href="{{ url('/register1') }}">Бүртгүүлэх</a></li>
        @else
        <li class="dropdown">
        <a href='#' class="dropdown-toggle" data-toggle="dropdown">

                         {{ Auth::user()->name }}
                         <span class="caret"></span></a>
                          <ul class="dropdown-menu drop_menu" role="menu">
          @if (Auth::user()->role=='admin')
          <li><a href="reg_doc">Админ мэдээлэл</a></li>
          @elseif (Auth::user()->role=='emch')
          <li><a href="doctor_table">Эмчийн мэдээлэл</a></li>
          @else (Auth::user()->role=='uvchtun')
          <li><a href="user">Өвчтөний мэдээлэл</a></li>
          @endif
          <li><a href="{{ URL::to('logout') }}">Гарах</a></li>
          </ul>
                          </li>
         @endif           
      </ul>
     </div><!-- /.navbar-collapse -->
     </div>
  </nav>
  <!-- //header -->
<div>
@yield('content')
</div>    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
