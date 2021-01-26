@extends('admin_app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/addDiag') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Оношилгоо</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Төрөл</label>
                            <div class="col-md-6">
                            
                                <select type="text" class="form-control" name="category_id" value="{{ old('category_id') }}">
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
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Үнэ</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="price" value="{{ old('price') }}">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="type_id" value="1">

                                @if ($errors->has('type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_id') }}</strong>
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
