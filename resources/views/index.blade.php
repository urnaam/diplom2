@extends('homepage')

@section('content')
	<!-- //header -->
	<div class="demo-2">	
		<header class="logo">
			<h1><a class="cd-logo link link--takiri" href="index">Цахим эмнэлэг</a></h1>
		</header>
            <div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h3>Эрүүл мэнд</h3>
							
							<blockquote><p>Эрүүлийг хүсвээс эмнэлгийг хүс.</p><cite>Д.Нацагдорж</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-5"></div>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

        </div>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
		
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="col-md-4 timing">
					<div class="opening-hours">
						<h3><i class="fa fa-clock-o"></i>Цагийн хуваарь</h3>
						<ul>
							<li>Даваа - Баасан</li>
							<li>8:20 - 16:20</li>
							<div class="clearfix"></div>
						</ul>
						<ul>
							<li>Амралтын өдөр</li>
							<li>Амарна</li>
							<div class="clearfix"></div>
						</ul>
						<ul>
							<li>Өдөрт үйлчлүүлэх хүний тоо</li>
							<li>700</li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div class="col-md-4 abt-img">
					<img src="images/president.jpg" alt="doctor" title="doctor" />
				</div>
				<div class="col-md-4 abt-dec">
					<h2>Анагаах Ухааны Доктор
Г.Баясгалан</h2>
					<p class="diff">Иргэн Та, </p>
					<p>Манай цахим хуудасны байнгын уншигч байж, санаа бодлоо харамгүй ирүүлж, хамтран ажиллана гэдэгт гүнээ итгэж байна.</p>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
		<!-- //banner-bottom -->
		
		<!-- Stats -->
		<div class="stats">
			<div class="container">
				<p class="slideanim"></p>
				<div class="stats-info">
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-smile-o"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='18000' data-delay='.5' data-increment="50">18000</div>
						<p class="stats-info">Сэтгэл ханамж</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-facebook"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5">1700</div>
						<p class="stats-info">Facebook Likes</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-twitter"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='21500' data-delay='.5' data-increment="20">21500</div>
						<p class="stats-info">Twitter Followers</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-flask"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='285' data-delay='.5' data-increment="1">285</div>
						<p class="stats-info">Манай үйлчлүүлэгчид</p>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		<!-- //Stats -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		
		<!-- tabs -->	
		<div class="vertical-tabs">
			<div class="container">
				<h3 class="title text-center">Бидний үйл ажиллагаа</h3>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
						  <div class="list-group">
							<a href="#" class="list-group-item active text-center">
							    Үйл ажиллагаа
							</a>
							<a href="#" class="list-group-item text-center">
							    Сургалт
							</a>
							<a href="#" class="list-group-item text-center">
							    Арга хэмжээ
							</a>
							<a href="#" class="list-group-item text-center">
							    Судалгаа
							</a>
							<a href="#" class="list-group-item text-center">
							    Хамтран ажиллагаа
							</a>
						  </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
							<!-- flight section -->
							<div class="bhoechie-tab-content active">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser1.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
									<h3>Үйл ажиллагааны чиглэл</h3>
										<p>КНIIЭ нь “Сайд нарын”, “Тусгай” гэсэн нэрээ 1990-ээд оноос гээсэн хэдий ч үйлчилгээний хүрээний хүн амыг харахад энэхүү тусгай гэсэн тодотгол хадгалагдсаар байна.Тус эмнэлэг нь Эрүүл Мэндийн Сайдын 2008 оны 176 дугаар тушаалын дагуу төрийн тодорхой хүрээний албан тушаалтнууд, МУ-ын ерөнхийлөгчдийн зарлигаар олгогдсон гавъяа шагналтнууд зэрэг тусгайлан нэр заасан хүн ам (18000 орчим) эмнэлгийн тусламж үйлчилгээг үзүүлдэг.</p><p>
Сүхбаатар Дүүргийн иргэдийн яаралтай болон төлөвлөгөөт мэс заслын албыг хариуцдаг.
										</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- train section -->
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser2.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Сургалт, Эрдэм шинжилгээ</h3>
										<p>Манай эмнэлгийн нийт эмч нарын 61 хувь нь эмчийн ба эрдмийн зэрэгтэй, сувилахуйн мэргэжилтний 32 хувь бакалавар болон сувилагчийн зэрэгтэй байна. 37 жмилийн турш эмч, сувилагч нарын онол практикийн хурлыг жилд удаа хийж, бүтээлийг нэгтгэн дугаарлан хэвлүүлдэг.
										</p>
										<p>Дотрын Өвчин судлалын чиглэлээр Мэргэжил олгох резидентурын сургалт явуулж байна.
										</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
				
							<!-- hotel search -->
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser3.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>On the other hand, we denounce with righteous indignation</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser4.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Laboris nisi ut aliquip ex ea commodo consequat</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser5.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Temporibus autem quibusdam et aut officiis debitis</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
			  </div>
			</div>
		</div>
		<script type="text/javascript" src="js/tabs.js"></script>		
		<!-- //tabs -->
		<!-- quick links -->
		<div class="news-section" id="news">
			<div class="container">
				<div class="news-section-head text-center">
					<h3>Сүүлийн үеийн мэдээ</h3>	
				</div>
				<div class="news-section-grids">
					<div class="col-md-4 news-section-grid">
						<img src="images/406.jpg" alt="" />
						<div class="info">
							<a class="news-title" href="single">Өнөөдөр “Хөдөлмөрийн аюулгүй байдал, Эрүүл ахуйн дэлхийн өдөр”</a>
							<label>2016-04-28</label>
							<p>Хөдөлмөрийн эрүүл ахуй гэдэг нь үйлдвэрлэл, үйлчилгээний явцад хими, физикийн болон биологийн хүчин зүйлээс шалтгаалан ажиллагсдын бие бялдар, мэдрэл сэтгэхүйд өөрчлөлт орж өвчлөх, хөдөлмөрийн чадвар буурах явдлаас урьдчилан сэргийлэхэд чиглэсэн арга</p>
							<a class="more" href="single">Цааш унших</a>
						</div>
					</div>
					<div class="col-md-4 news-section-grid">
						<img src="images/400.jpg" alt="" />
						<div class="info">
							<a class="news-title" href="single">"Амилуулах суурь тусламж" сарын аян</a>
							<label>2016-04-22</label>
							<p>Амилуулах тусламжинд суралцах нь нийгмийн хариуцлагатай холбоотой бөгөөд аливаа хүнд ямар нэгэн гэнэтийн зүйл тохиолдоход түүнд аль ойр байгаа хүмүүс нь амилуулах тусламжийг үзүүлэх шаардлагатай болдог.</p>
							<a class="more" href="single">Цааш унших</a>
						</div>
					</div>
					<div class="col-md-4 news-section-grid">
						<img src="images/391.jpg" alt="" />
						<div class="info">
						    <a class="news-title" href="single">Хоол хүнсээр дамжих халдварт өвчнөөс сэргийлье</a>
							<label>2016-04-11</label>
							<p>Дэлхийн эрүүл мэндийн байгууллагын судалгаагаар бидний биед үүсдэг олон төрлийн өвчний 90 орчим хувьнь буруу хооллосноос үүсэлтэйг нотолсон байдаг.</p>
							<a class="more" href="single">Цааш унших</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<!-- //quick links -->
@endsection