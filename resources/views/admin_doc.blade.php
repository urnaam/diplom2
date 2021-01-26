@extends('admin_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-14">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Эмчийн мэдээлэл</h4>
                            </div>
                            <a href="/reg_doc" class="btn btn-info" role="button">Нэмэх</a>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>№</th>
                                        <th>Овог</th>
                                        <th>Нэр</th>
                                        <th>Хүйс</th>
                                        <th>Төрөл</th>
                                        <th>Мейл хаяг</th>
                                        <th>Өрөө</th>
                                        <th>Зураг</th>      
                                        <th>Засах</th>
                                        <th>Устгах</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($doctor as $doc)
                                    {
                                            $i++;
                                            ?>
                                            <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $doc['lastname'] ?></td>
                                            <td><?php echo $doc['name'] ?></td>
                                            <td><?php echo $doc['gender'] ?></td>
                                            <td><?php echo $doc['cat_name'] ?></td>
                                            <td><?php echo $doc['email'] ?></td>
                                            <td><?php echo $doc['roomNumber'] ?></td>
                                            <td><img width="30" height="30" src="/<?php echo $doc['doc_pic'] ?>"></td>
                                             <td><a href="/edit_doctor/<?php echo $doc['id'] ?>" class="btn btn-info" role="button">Засах</a></td>
                                            <td><a href="/deletedoctor/<?php echo $doc['id'] ?>" class="btn btn-info" role="button">Устгах</a></td>
                                            </tr>
                                         <?php   
                                        }
                                      ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
