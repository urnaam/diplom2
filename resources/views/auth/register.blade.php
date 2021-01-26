@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Бүртгүүлэх</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addUser') }}">
                        {!! csrf_field() !!}

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
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Овог</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cardNumber') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Картын дугаар</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cardNumber" value="{{ old('cardNumber') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Төрсөн огноо</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('reg_num') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">РД</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reg_num" value="{{ old('reg_num') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Утас</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Хаяг</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Хүйс</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                            </div>
                        </div>    
                        
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Зургийн файл</label>
                            <div class="col-md-6">
                                <input type="file" name="pic_file" class="form-control"  value="{{ old('pic_file') }}">
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
    </div>
</div>
@endsection
