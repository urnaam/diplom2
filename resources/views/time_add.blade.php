@extends('doctor_app')

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="header">
                                <h4 class="title">Цагийн хуваарь</h4>

                         <form role="form" method="POST" enctype="multipart/form-data"  action="{{ url('/addTime') }}">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="row">
                          <div class="col-md-5">
                          <select type="text" name="time">
                            <option>08:20</option>
                            <option>08:40</option>
                            <option>09:00</option>
                            <option>09:20</option>
                            <option>09:40</option>
                            <option>10:00</option>
                            <option>10:20</option>
                            <option>10:40</option>
                            <option>11:00</option>
                            <option>11:20</option>
                            <option>11:40</option>
                            <option>12:00</option>
                            <option>12:20</option>
                            <option>12:40</option>
                            <option>13:00</option>
                            <option>13:20</option>
                            <option>13:40</option>
                            <option>14:00</option>
                            <option>14:20</option>
                            <option>14:40</option>
                            <option>15:00</option>
                            <option>15:20</option>
                            <option>15:40</option>
                            <option>16:00</option>
                          </select>
                          </div>
                          </div>
                          <div class="row">
                          <input type="hidden" class="form-control" name="emch_reg_num" value="{{Auth::user()->reg_num}}">
                          </div>
                          <div class="row">
                          <button type="submit" class="btn btn-info btn-fill">Нэмэх</button>
                          </div>
                          <div class="clearfix"></div>     
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection