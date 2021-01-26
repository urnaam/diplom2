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

                                <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/addHistory') }}">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Оношилгоо</label>
                                                <select name="his_diag_id" class="form-control">
                                                    <?php
                                                    $catid='1';
                                                    $regdoc='a';
                                                    foreach($doctors as $doctor)
                                                    {
                                                        if($doctor['reg_num']==Auth::user()->reg_num)
                                                        {
                                                            $catid=$doctor['cat_id'];
                                                            $regdoc=$doctor['reg_num'];
                                                        }
                                                    }
                                    foreach ($diagnoses as $diagnose) {
                                        if($diagnose['category_id']==$catid)
                                        {
                                        ?>
                                        <option value="<?php echo $diagnose['id'] ?>"> <?php echo $diagnose['name'] ?><!--  - <?php echo $diagnose['price'] ?> --> </option>
                                        <?php
                                            }
                                            }
                                            ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Эмчилгээ</label>

                                                <textarea name="his_note" class="form-control"></textarea>
                                                <!-- <textarea id="wysiwyg"></textarea> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Эмийн жор</label>
                                                
                                                <input name="his_jor" class="form-control"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Файл</label>
                                                
                                                <?php echo Form::file('his_pic'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <input name="his_per_reg_num" class="form-control" type="hidden" value="<?php echo $reg_num ?>"></input>
                                                <input name="orderid" class="form-control" type="hidden" value="<?php echo $ord_id ?>"></input>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <input name="his_emch_reg_num" class="form-control" type="hidden" value="{{Auth::user()->reg_num}}"></input>
                                            </div>
                                        </div>
                                    </div>
                                            

                                     <button type="submit" class="btn btn-info btn-fill">Нэмэх</button>
                                    <div class="clearfix"></div>   
                                    

                                    
                                </form>
                                </div>

</div>
</div>

                </div>
            </div>
        </div>
@endsection