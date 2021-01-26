@extends('admin_app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/addDoctor') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Овог</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Нэр</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('reg_num') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">РД</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reg_num" value="{{ old('reg_num') }}">

                                @if ($errors->has('reg_num'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reg_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('AT') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Албан тушаал</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control" name="AT" value="{{ old('AT') }}">
                                     <?php
                                    foreach ($Atushaals as $Atushaal) {
                                        ?>
                                        <option value="<?php echo $Atushaal['name'] ?>"> <?php echo $Atushaal['name'] ?> </option>
                                        <?php
                                            }
                                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('roomNumber') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Өрөөний дугаар</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control" name="roomNumber" value="{{ old('roomNumber') }}">
                                     <?php
                                    foreach ($roomNumber as $room) {
                                        ?>
                                        <option value="<?php echo $room['number'] ?>"> <?php echo $room['number'] ?> </option>
                                        <?php
                                            }
                                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Төрөл</label>
                            <div class="col-md-6">
                            
                                <select type="text" class="form-control" name="cat_id" value="{{ old('cat_id') }}">
                                     <?php
                                    foreach ($category as $categor) {
                                        ?>
                                        <option value="<?php echo $categor['id'] ?>"> <?php echo $categor['name'] ?> </option>
                                        <?php
                                            }
                                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Хүйс</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                                <option>эрэгтэй</option>
                                <option>эмэгтэй</option>
                                </select>
                            </div>
                        </div>    
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">И-мейл хаяг</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Зургийн файл</label>
                            <div class="col-md-6">
                                <?php echo Form::file('image'); ?>
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Нууц үг</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Нүүц үг давтах</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Бүртгүүлэх
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        
    </div>
</div>
@endsection
