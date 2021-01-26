@extends('homepage1')

@section('content')
		<!-- blog-section -->
		<section class="error">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index">Урьдчилан сэргийлэх <span>эмчилгээнээс илүү.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Зөвөлгөө</h2>
						<h6>Эмч нарын зөвөлгөө</h6>
					</div>
				</div>
			</div>
			<!--- blog ---->
			<div class="blog">
				<div class="container">
					<div class="bolg-posts">
						<?php
						 foreach($news as $new)
						 {
						 	$newsecho='<div class="col-md-12 blog-top">
								<div class="blog-in">
									<a href="single" class="blog-post"><img src="/'.$new['picture'].'" alt=" "></a>
									<div class="blog-grid">
										<div class="date">
											<span class="date-in"><i class="fa fa-calendar"></i>'.$new['created_at'].'</span>
											<div class="clearfix"> </div>
										</div>
										<h3><a href="single">'.$new['title'].'</a></h3>
										<p>'.$new['short'].'</p>
										<a href="/single/'.$new['id'].'" class="smore">ЦААШ УНШИХ</a>										
									</div>
									<div class="clearfix"></div>					
								</div>
								<i class="black"> </i>
							</div>';
							echo $newsecho;
						 }
						?>
							
							
							<div class="clearfix"> </div>
							<ul class="start">
									<li><a href="#"><span class="prev">Өмнөх</span></a></li>
									<?php
									$huudas=$newsuud/5;
									$huudasuldegdel=$newsuud%5;
									if($huudasuldegdel!=0)
									{
									$huudas=$huudas+1;
									}
									for($i=1;$i<=$huudas;$i++)
									{
										if($i==$idnuud)
										{
											$hevleh='<li><span background="red">'.$i.'</span></li>';
											echo $hevleh;		
										}
										else
										{
											$hevleh1='<li><a href="/blog/'.$i.'">'.$i.'</a></li>';
											echo $hevleh1;
										}
									}
									?>
									
									<li><a href="#" class="next">Дараагийн</a></li>
								</ul>
					</div>
				</div>
			</div>
			<!--- /404 ---->
		</section>
		<!-- //404-section -->
		@endsection