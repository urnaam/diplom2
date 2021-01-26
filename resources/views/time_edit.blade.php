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

                                <form role="form" method="POST" enctype="multipart/form-data"  action="{{ url('/addNews') }}">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Гарчиг</label>
                                                <input type="text" name="title" class="form-control"></input>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Товч мэдээлэл</label>
                                                <input type="text" name="short" class="form-control"></input>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Мэдээлэл</label>
                                                
                                                <textarea name="desc" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Зураг</label>
                                                
                                                <?php echo Form::file('postpic'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control" name="doc_reg_num" value="{{Auth::user()->reg_num}}">
                                            </input>
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