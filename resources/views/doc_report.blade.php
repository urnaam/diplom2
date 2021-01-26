@extends('doctor_app')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
		  <div class=card>      	
		        	<div>
                    <form role="form" method="POST" action="{{ url('/dateviewreport') }}">
                        <label><b>Хугацаа:</b>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <?php
                        if($type=="2")
                        {?>
                        <input type="text" name="begin" value="<?php echo $begin ?>" id="datepicker"/>-ээс
                        <input type="text" name="end" value="<?php echo $end ?>" id="datepicker1"/> хүртэл
                        <?php
                        }else
                        {
                        ?>
                        <input type="text" name="begin" id="datepicker"/>-ээс
                        <input type="text" name="end" id="datepicker1"/> хүртэл
                        <?php 
                        }
                        ?>
                        </label>         
                        <button type="submit">Харах</button>
                        </form>
                    </div>
                    <?php
                    if($count1==0)
                    {?>
                        <label><b>Өгөгдөл олдсонгүй</b>
                    <?php
                    }else
                    {
                    ?>
			<div id="chart-div-doc"></div>
		<?= $lava->render('DonutChart', 'IMDB', 'chart-div-doc') ?>

        
		</div>
                    <div class="card">
                    <div class="header">
                                <h4 class="title">Хийсэн эмчилгээ</h4>
<!--                                 <div>
                        <label><b>Хугацаа:</b>
                        <input type="text" id="datepicker2"/>-ээс
                        <input type="text" id="datepicker3"/> хүртэл
                        </label>         
                        <button type="submit">Харах</button>
                    </div> -->
								<div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Өвчтөний РД</th>
                                    	<th>Оношилгоо</th>
                                    	<th>Огноо</th>
                                    </thead>
                                    <tbody>
							<?php
                                    $i=0;
                                    $niit=0;
                                    foreach($historys as $history)
                                    {
                                        $une=0;
                                        $name="";
                                        foreach($diagnoses as $diagnose)
                                        {
                                        	if($diagnose['id']==$history['his_diag_id'])
                                        	{
                                        		$une=$diagnose['price'];
                                        		$name=$diagnose['name'];
                                        	}
                                        }
                                            $i++;
                                            $niit=$niit+$une;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $history['his_per_reg_num'] ?></td>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $history['created_at'] ?></td>
                                            </tr>
                                         <?php   
                                        
                                     } ?>
                                    </tbody>
                                </table>
                            	</div>
                            </div>
                        </div>
                        <?php
        }
        ?>
                    </div>
                </div>
            </div>
        </div>
@endsection