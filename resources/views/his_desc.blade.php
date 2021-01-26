@extends('user_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Эмчилгээ дэлгэрэнгүй</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->

                                <form role="form">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                  <?php
                                foreach($history as $his)
                                {
                                ?>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Оношилгоо</label>
                                                <label class="form-control"><?php echo $his['diag_name'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Эмчилгээ</label>
                                                <label class="form-control"><?php echo $his['his_note'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Эм</label>
                                                <label class="form-control"><?php echo $his['his_jor'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Огноо</label>
                                                <label class="form-control"><?php echo $his['created_at'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Файл</label>
                                                <a href="/<?php echo $his['his_pic'] ?>" class="form-control"><?php echo $his['his_pic'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>   
                                    <?php 
                                }
                                    ?>
                                </form>
                                <a href="/u_history" type="button" class="btn btn-info btn-fill">Буцах</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection