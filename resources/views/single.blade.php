@extends('homepage1')

@section('content')
		<!-- blog-section -->
		<section class="blog-single-post">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index3">Урьдчилан сэргийлэх <span>эмчилгээнээс илүү.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<?php $print='<h2>'.$news['title'].'</h2>'; 
						echo $print;?>
					</div>
				</div>
			</div>
			<!--- blog ---->
			<?php
			$print='<div class="blog">
				<div class="container">
					<div class="single">		
				<div class="single-top">
					<center><img src="/'.$news['picture'].'" alt="" /></center>
				</div>
				<div class="top-single">
						<i class="fa fa-calendar"></i>'.$news['created_at'].' 
					</div>
					<p class="eget">'.$news['desc'].'</p>';

					echo $print;
			?>
			
						
						<div class="top-comments">
						<h3>Сэтгэгдэл</h3>
						<?php
							foreach($comments as $comment)
							{
							$commentuud='<div class="met">
							<div class="code-in">
								<p class="smith"><a href="#">'.$comment['username'].'</a> <span>'.$comment['created_at'].'</span></p>
								<div class="clearfix"> </div>
							</div>
							<div class="comments-top-top">
								<div class="men" >
									<img width="75" heigth="75" src="/'.$comment['picture'].'" alt=""> 
								</div>					
									<p class="men-it">'.$comment['value'].'</p>
								<div class="clearfix"> </div>
							</div>
						</div>';
						echo $commentuud;
						}
						?>
						
						
						
					</div>
					<div class="leave">
					@if(!Auth::guest())
						<h3>Санал бичих</h3>
							<form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/addComment') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="text-top">
									<div class="col-md-8 text-in">
										<textarea  name="comment"placeholder="Тайлбар" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Comment';}" required="">Тайлбар</textarea>
									</div>
									<div >
										<input name="reg_num" type="hidden" value="{{Auth::user()->reg_num}}" >
									</div>
									<div >
										<input name="news_id" type="hidden" value="<?php echo $news['id']; ?>" >
									</div>
									<div >
										<input name="roles" type="hidden" value="{{Auth::user()->role}}" >
									</div>

									<div class="col-md-2 text-in">
										<input type="submit" value="Илгээх" >
									</div>
									<div class="clearfix"> </div>
								</div>
							</form>
							@endif
							</div>
						</div>			
					</div>
					</div>
					</div>
				</div>
			</div>
			<!--- /blog ---->
		</section>
		<!-- //blog-section -->
@endsection