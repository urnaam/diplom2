@extends('homepage1')

@section('content')
		<!-- Careers-section -->
		<section class="career-page">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index3">Урьдчилан сэргийлэх <span>эмчилгээнээс илүү.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Холбоо барих</h2>
					</div>
				</div>
			</div>
			<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="map">
				<h4>ХОЛБОО БАРИХ ХАЯГ</h4>
				<div id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5081.961805541802!2d106.93693858909121!3d47.91771149032704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x5d96923cfcc7e479%3A0x2940496b8805dd0c!2z0JrQu9C40L3QuNC60LjQudC9INCd0Y3Qs9C00YHRjdC9IElJINCt0LzQvdGN0LvRjdCzLCBVbGFhbmJhYXRhciwgTW9uZ29saWE!3m2!1d47.9194842!2d106.93764569999999!5e0!3m2!1sen!2s!4v1461807240190" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
			<div class="contact-infom">
				<h4>Холбогдох мэдээлэл</h4>
				<p>Та өөрийн саналаа бичнэ үү.</p>
			</div>	
			<div class="address">
				<div class="row">
					<div class="col-md-4 location">
						<h4>Хаяг1 :</h4>
						<p>Улсын 2-р эмнэлэг</p>
						<p>Улаанбаатар хот, Баянзvрх дvvрэг, Энх тайвны өргөн чөлөө, Клиникийн 2-р эмнэлгийн байр</p>
						<p>Утас : 70150308, 70150235, 70150234</p>
						<p>Факс : 70150200</p>
						<p>Мейл хаяг : <a href="mailto:sh_mikah@yahoo.com">sh_mikah@yahoo.com</a></p>
					</div>
					<div class="col-md-4 location">
						<h4>Хаяг2 :</h4>
						<p>Улсын 2-р эмнэлэг</p>
						<p>Улаанбаатар хот, Баянзvрх дvvрэг, Энх тайвны өргөн чөлөө, Клиникийн 2-р эмнэлгийн байр</p>
						<p>Утас : 70150308, 70150235, 70150234</p>
						<p>Факс : 70150200</p>
						<p>Мейл хаяг : <a href="mailto:sh_mikah@yahoo.com">sh_mikah@yahoo.com</a></p>
					</div>	
					<div class="col-md-4 location">
						<h4>Хаяг3 :</h4>
						<p>Улсын 2-р эмнэлэг</p>
						<p>Улаанбаатар хот, Баянзvрх дvvрэг, Энх тайвны өргөн чөлөө, Клиникийн 2-р эмнэлгийн байр</p>
						<p>Утас : 70150308, 70150235, 70150234</p>
						<p>Факс : 70150200</p>
						<p>Мейл хаяг : <a href="mailto:sh_mikah@yahoo.com">sh_mikah@yahoo.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="contact-form">
				<h4>ХОЛБОО БАРИХ ХЭСЭГ</h4>
				@if(!Auth::guest())
				<form role="form" method="POST" enctype="multipart/form-data"  action="{{ url('/addContact') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<!-- <input type="text" value="Нэр" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Мейл хаяг" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Утас" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required=""> -->
					<div >
						<input name="reg_num" type="hidden" value="{{Auth::user()->reg_num}}" >
					</div>
					<textarea name="comment" class="form-control"></textarea>
					<input type="submit" value="Баталгаажуулах" >
				</form>
				@endif
				<p>Нэвтэрч орно уу</p>
			</div>
			
		</div>
	</div>
		</section>
		<!-- //contact-section -->
		
		
		@endsection