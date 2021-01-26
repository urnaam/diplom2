@extends('homepage1')

@section('content')
		<!-- about-section -->
		<section class="about">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index">Урьдчилан сэргийлэх <span>эмчилгээнээс илүү.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Бидний тухай</h2>
					</div>
				</div>
			</div>
			<div class="about-grids">
				<div class="container">
					<div class="col-md-4 abt-grid">
						<h3>Танилцуулга</h3>
						<i class="fa fa-hospital-o"></i>
						<div class="clearfix"></div>
						<p>Ард түмэн бол аливаа улсын жинхэнэ баялаг мөн. Улсын Хоёрдугаар Төв Эмнэлэгийн хамт олон бид 80 шахам жилийн туршид төр түмнийхээ өмнө өргөсөн тангарагтаа үнэнч байж, ард түмнийхээ эрүүл энхийн манаанд хором ч ажралгүй зогссоор ирлээ.</p>
						<a href="about1">Цааш унших</a>
					</div>
					<div class="col-md-4 abt-grid">
						<h3>Зургийн цомог</h3>
						<i class="glyphicon glyphicon-camera"></i>
						<div class="clearfix"></div>
						<p>80 жилийн ой</p>
						<p>Мэс заслын үеэр</p>
						<a href="about1">Цааш унших</a>
					</div>
					<div class="col-md-4 abt-grid">
						<h3>Ажлын байр</h3>
						<i class="glyphicon glyphicon-globe"></i>
						<div class="clearfix"></div>
						<p>Нээлттэй ажлын байрны тухай</p>
						<a href="about1">Цааш унших</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
		<section class="happy-patients">
			<div class="container">
				<div class="happy-patients-head text-center">
					<h3>Талархалын хуудас</h3>
					<h4>Хэрэглэгчийн сэтгэгдэл</h4>
				</div>
				<div class="happy-patients-grids">
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-left text-right hvr-bounce-to-right dir-arrr">
							<p>Сэтгэлээрээ сайхан үйлчилдэг баярлалаа.</p>
							<h4>Б.Батнасан</h4>
						</div>
						<div class="happy-patients-grid-right">
							<img src="images/p1.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-right another1 dir-arrl">
							<img src="images/p2.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="happy-patients-grid-left another2 hvr-bounce-to-left">
							<p>Танай эмнэлэгт амжилт хүсье.</p>
							<h4>У.Уртнасан</h4>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-left text-right hvr-bounce-to-right dir-arrr">
							<p>Ажлын амжилт хүсье.</p>
							<h4>Л.Анхилуун</h4>
						</div>
						<div class="happy-patients-grid-right">
							<img src="images/p3.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-right another1 dir-arrl">
							<img src="images/p4.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="happy-patients-grid-left another2 hvr-bounce-to-left">
							<p>Хурдан шаламгай үйлчлүүлсэнд баярлаа.</p>
							<h4>Б.Бат</h4>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
			<!--team-->
			<section class="team text-center">
				<div class="container">
					<h3 class="title">Манай хамт олон</h3>
					<p class="w-text"></p>
					<div class="team-row">
						<div class="col-md-3 team-grids">
							<h5>Халиун</h5>
							<p>Чих, хамар, хоолойн эмч</p>
							<div class="abt-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
							<div class="team-img">
								<img src="images/d1.jpg" alt="">
							</div>
						</div>
						<div class="col-md-3 team-grids team-mdl">
							<h5>Чулуунбаатар</h5>
							<p>Чих хамар хоолойн эмч</p>
							<div class="abt-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
							<div class="team-img">
								<img src="images/d2.jpg" alt="">
							</div>
						</div>
						<div class="col-md-3 team-grids team-mdl1">
							<h5>Уянга</h5>
							<p>Нүд судлал эмч</p>
							<div class="abt-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
							<div class="team-img">
								<img src="images/d3.jpg" alt="">
							</div>
						</div>
						<div class="col-md-3 team-grids">
							<h5>Бат</h5>
							<p>Нүд судлал эмч</p>
							<div class="abt-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
							<div class="team-img">
								<img src="images/d4.jpg" alt="">
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!--//team-->
		</section>
		<!--who-we-are-->
		<div class="who-are-we">
			<div class="container">
				<h3>Бидний давуу тал <span> </span></h3>
				<div class="col-md-6 who-grids">
					<ul class="whogrid_info">
						<li class="tick">Он удаан жил хэвшсэн үйлчлэгчээ дээдлэх соёлтой.</li>
						<li class="tick">Нарийн мэргэшсэн өндөр ур чадвартай хүний нөөцийн чадавхитай.</li>
						<li class="tick">Орчин үеийн оношлогоо, эмчилгээний тоног төхөөрөмжтэй.</li>
					</ul>
				</div>
				<div class="col-md-6 who-grids">
					<ul class="whogrid_info">
						<li class="tick">Эмнэлгийн түргэн тусламжийг бие дааж зохион байгуулах автопарк түргэн тусламжийн албатай.</li>
						<li class="tick">Байршил, имидж хувьд зах зээлийн марктенгийн боломжтой.</li>
						<li class="tick">Гадаад харилцааг хөгжүүлэх боломжтой. Япон, Тайван, ОХУ, Хятад, Солонгос, АНУ-ын эмнэлгийн байгууллагуудтай хийсэн гэрээтэй.</li>
					</ul>
				</div>
			</div>
		</div>
		<!--/who-we-are-->
		<!-- //about-section -->
		@endsection