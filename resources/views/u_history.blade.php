@extends('user_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Цахим түүх</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->
                                <form role="form" method="POST" action="{{ url('/u_historypost') }}">
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
                    </label>
                            
                            <?php
                                $userreg=Auth::user()->reg_num;
                                
                                ?>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Эмч</th>
                                        <th>Оношилгоо</th>
                                        <th>Эм</th>
                                        <th>Огноо</th>
                                        <th>Эмчилгээ</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($historys as $his)
                                    {
                                        
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $his['doc_name'] ?></td>
                                            <td><?php echo $his['diag_name'] ?></td>
                                            <td><?php echo $his['his_jor'] ?></td>
                                            <td><?php echo $his['created_at'] ?></td>
                                            <td><a href="his_desc/<?php echo $his['id'] ?>" type="button">Цааш унших</a></td>
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
        </div>
        <?php 
    }
        ?>
@endsection