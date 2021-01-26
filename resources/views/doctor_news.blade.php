@extends('doctor_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Эмчийн блог</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->

                            </div>
                            
                            <div class="content table-responsive table-full-width">
                            <a href="newNews" class="btn btn-info" role="button">Нэмэх</a> 
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Гарчиг</th>
                                    	<th>Товч мэдээлэл</th>
                                    	<th>Мэдээлэл</th>
                                    	<th>Огноо</th>
                                        <th>Зураг</th>
                                        <th>Засах</th>
                                        <th>Хасах</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $i=0;
                                    $userreg=Auth::user()->reg_num;
                                    foreach($news as $new)
                                    {
                                        if($userreg==$new['doc_reg_num'])
                                        {
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $new['title'] ?></td>
                                            <td><?php echo $new['short'] ?></td>
                                            <td><?php echo $new['desc'] ?></td>
                                            <td><?php echo $new['created_at'] ?></td>
                                            <td><img width="30" height="30" src="/<?php echo $new['picture'] ?>"></td>
                                            <td><a href="" class="btn btn-info" type="button">Засах</a></td>
                                            <td><a href="" class="btn btn-info" type="button">Устгах</a></td>
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