@extends('admin_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Эмчилгээ мэдээлэл</h4>
                            </div>
                            <a href="/reg_diagnose" class="btn btn-info" role="button">Нэмэх</a>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Оношилгоо</th>
                                        <th>Төрөл</th>
                                        <th>Үнэ</th>
                                        <th>Өөрчлөх</th>
                                        <th>Устгах</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($diagnose as $diag)
                                    {
                                        
                                        {
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $diag['name'] ?></td>
                                            <td><?php echo $diag['cat_name'] ?></td>
                                            <td><?php echo $diag['price'] ?></td>
                                            <td><a href="/edit_diagnose/<?php echo $diag['id'] ?>" class="btn btn-info" role="button">Засах</a></td>
                                            <td><a href="/deletediagnose/<?php echo $diag['id'] ?>" class="btn btn-info" role="button">Устгах</a></td>
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
