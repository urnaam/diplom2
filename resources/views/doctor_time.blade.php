@extends('doctor_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Цагийн хуваарь</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->
                            </div>
                            <?php
                                $userreg=Auth::user()->reg_num;
                                
                                ?>
                            <div class="content table-responsive table-full-width">
                            <a href="/time_add" class="btn btn-info" role="button">Нэмэх</a>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Цаг</th>
                                    	<th>Устгах</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($time as $tim)
                                    {
                                        if($userreg==$tim['emch_reg_num'])
                                        {
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $tim['time'] ?></td>
                                            <td><a href="/deleteorder/<?php echo $tim['id'] ?>" type="button">Устгах</a></td>
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