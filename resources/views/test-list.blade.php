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
						<h2>Үйлчилгээний үнэ</h2>
						<h6>Төлбөрт эмчилгээний үнэ</h6>
					</div>
				</div>
			</div>
			<!--- Test-list ---->
			<div class="test-list">
				<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Оношилгоо нэр</th>
                                    	<th>Төрөл</th>
                                    	<th>Үнэ</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($diagnoses as $diag)
                                    {
                                    	$i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $diag['name'] ?></td>
                                            <td><?php echo $diag['cat_name'] ?></td>
                                            <td><?php echo $diag['price'] ?></td>
                                            </tr>
                                         <?php   
                                     } ?>

                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!--- /Test-list ---->
		</section>
		<!-- //Test-list-section -->
		@endsection