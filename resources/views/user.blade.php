@extends('user_app')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Хувийн мэдээлэл</h4>
                                <!-- <p class="category">Here is a subtitle for this table</p> -->
                            </div>
                            <div class="content">
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
                                                <label>Картын дугаар</label>
                                                <label class="form-control"><?php echo $person['cardNumber'] ?></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                                    <!-- <button  type="submit" class="btn btn-info btn-fill pull-right">Нэмэх</button> -->
                                </form>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                    </div>
                </div>
            </div>
        </div>        
    </div>
@endsection