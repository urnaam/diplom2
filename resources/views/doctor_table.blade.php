@extends('doctor_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Үзлэгийн хуваарь</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->

                            </div>
                            <?php
                                $userreg=Auth::user()->reg_num;
                                
                                ?>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Өвчтөний РД</th>
                                    	<th>Огноо</th>
                                    	<th>Цаг</th>
                                    	<th>Үйлдэл</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($order as $ord)
                                    {
                                        if($userreg==$ord['ord_emch_reg_num'])
                                        {
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $ord['ord_per_reg_num'] ?></td>
                                            <td><?php echo $ord['ord_date'] ?></td>
                                            <td><?php echo $ord['ord_hour'] ?></td>
                                            <td><a href="/doctor_view/<?php echo $ord['ord_per_reg_num'] ?>/<?php echo $ord['id'] ?>" type="button">Үзэх</a></td>
                                            </tr>
                                         <?php   
                                        }
                                     } ?>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
@endsection