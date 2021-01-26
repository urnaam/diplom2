<!DOCTYPE html>
<html>
<head>
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

</head>
<body>
	<!-- header -->
	{!! csrf_field() !!}
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
				<li class="current_page"><a href="index">Нүүр</a></li>
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
				<li><a href="{{ url('/login') }}">Нэвтрэх</a></li>
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
	 @yield('content')
		<!-- footer -->
		<footer>
			<div class="footer-grids">
				<div class="container">
					<div class="col-md-3 footer one">
						<h3>Бидний тухай</h3>
						<p> Эрүүл мэндийн цогц, шуурхай, чанартай үйлчилгээг өндөр мэдлэг, чадвар бүхий эмч, мэргэжилтнүүд дэвшилтэт технологид тургуурлан үзүүлж үйлчүүлэгчдийнхээ амьдралын чанарыг сайжруулна.</p>
						<p class="adam">- Улсын Хоёрдугаар Төв Эмнэлэгийн захирал,
Анагаах Ухааны Доктор
Г.Баясгалан</p>
						<div class="clear"></div>
					</div>
					<div class="col-md-3 footer one tweet">
						<h3>Tweets</h3>
						<ul>
							<li>
								<a href="#">.
								<i></i></a>
								<span>15 минутын өмнө<span>
							</span></span></li>
							<li>
								<a href="#">
								<i></i></a>
								<span>Өдрийн өмнө<span>
							</span></span></li>
						</ul>
					</div>
					<div class="col-md-3 footer two">
						<h3>Холбоо барих</h3>
						<ul>
							<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
							<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
							<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
							<li><a class="fb3" href="#"><i class="fa fa-dribbble"></i>Follow us on Dribbble</a></li>
							<li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer three">
						<h3>Холбоо барих мэдээлэл</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i><p>Улаанбаатар хот, <span>Баянзvрх дvvрэг, Энх тайвны өргөн чөлөө, </span>Клиникийн 2-р эмнэлгийн байр. </p><div class="clearfix"></div> </li>
							<li><i class="fa fa-phone"></i><p>70150308, 70150235, 70150234</p> <div class="clearfix"></div> </li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:urnaamgl1105@gmail.com">urnaamgl1105@gmail.com</a> <div class="clearfix"></div></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- maps -->
			<div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5081.961805541802!2d106.93693858909121!3d47.91771149032704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x5d96923cfcc7e479%3A0x2940496b8805dd0c!2z0JrQu9C40L3QuNC60LjQudC9INCd0Y3Qs9C00YHRjdC9IElJINCt0LzQvdGN0LvRjdCzLCBVbGFhbmJhYXRhciwgTW9uZ29saWE!3m2!1d47.9194842!2d106.93764569999999!5e0!3m2!1sen!2s!4v1461807240190"  allowfullscreen frameborder="0" style="border:0"></iframe>
			</div>
			<div class="copy-right-grids">
				<div class="container">
					<div class="copy-left">
							<p class="footer-gd">© 2016. Зохиогчийн бүх эрх хуулиар хамгаалагдсан болно.| Гүйцэтгэсэн <a href="https://w3layouts.com/" target="_blank">Урангуа</a></p>
					</div>
					<div class="footer-links">
						<ul>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
		<!-- //footer -->
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>