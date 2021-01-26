@extends('doctor_app')

@section('content')        
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Өвчтөний хувийн мэдээлэл</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->

                                <form>
                                <?php
                                foreach($personal as $person)
                                {

                                ?>
                                <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <img src="/<?php echo $person['user_pic'];?>" width="200" height="200">
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Овог</label>
                                                <label class="form-control"><?php echo $person['lastname'] ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Нэр</label>
                                                <label class="form-control"><?php echo $person['name'] ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Картын дугаар</label>
                                                <label class="form-control"><?php echo $person['cardNumber'] ?></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Төрсөн огноо</label>
                                                <label class="form-control"><?php echo $person['birthdate'] ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>РД</label>
                                                <label class="form-control"><?php echo $person['reg_num'] ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Утас</label>
                                                <label class="form-control"><?php echo $person['phone'] ?></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Хаяг</label>
                                                <label class="form-control"><?php echo $person['address'] ?></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Хүйс</label>
                                                <label class="form-control"><?php echo $person['gender'] ?></label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <div class="card">

                                    <?php
                                }
                                ?>
                            <div class="header">
                                <h4 class="title">Өвчтөний цахим түүх</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->

                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Эмчийн РД</th>
                                        <th>Тэмдэглэл</th>
                                        <th>Эмийн жор</th>
                                        <th>Оношилгоо</th>
                                        <th>Огноо</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($historys as $history)
                                    {
                                        if($person['reg_num']==$history['his_per_reg_num'])
                                        {
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $history['his_emch_reg_num'] ?></td>
                                            <td><?php echo $history['his_note'] ?></td>
                                            <td><?php echo $history['his_jor'] ?></td>
                                            <td><?php echo $history['his_diag_id']?></td>
                                            <td><?php echo $history['created_at'] ?></td>
                                            </tr>
                                         <?php   
                                        }
                                     } ?>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                                    <!-- <button  type="submit" class="btn btn-info btn-fill pull-right">Нэмэх</button> -->
                                    <a href="/doctor_add/<?php echo $person['reg_num'] ?>/<?php echo $ord_id ?>" class="btn btn-info" role="button">Нэмэх</a>
                                     <a href="/order_closed/<?php echo $ord_id ?>" class="btn btn-info" role="button">Дуусгах</a>
                                    <div class="clearfix"></div>
                                </form>


                            </div>

@endsection