@extends('user_app')

@section('content')
 <div class="content">
 <div ng-app="myApp" ng-controller="myCtrl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Цаг захиалга</h4>
                                
                            </div>
                            <div class="content">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/addOrder') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>
                <div>
                    
                    <div class="form-group">
                            <label class="col-md-4 control-label">Төрөл сонгох</label>
                        <div class="col-md-6">
                            <select class="form-control" ng-model="selectedCar" ng-options="x.name for x in cars">
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Эмч сонгоно уу</label>
                        <div class="col-md-6">
                            <select class="form-control" name="ord_emch_reg_num" type="text" ng-model="selectedemch" ng-options="op.name for op in selectedCar['emchs'] track by op.reg_num">
                            <!-- <option ng-repeat="option in selectedCar['emchs']" value="<%option.reg_num%>">
                                <%option.name%>
                            </option> -->
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Огноо сонгоно уу</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control" name="ord_date" ng-model="selecteddate" ng-options="opt.date2 for opt in selectedemch['dateuud'] track by opt.date1">
                                <!-- <option ng-repeat="option1 in selectedemch['dateuud']" value="<%option1.date1%>">
                                <%option1.date1%>
                            </option> -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Цаг сонгоно уу</label>
                        <div class="col-md-6">
                            <select class="form-control" type="text" name="ord_hour" ng-model="selectedtime" ng-options="o.times1 for o in selecteddate['times'] track by o.times1">
                            
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" class="form-control" name="ord_per_reg_num" value="{{ Auth::user()->reg_num }}">
                        </div>

                            <script>
                            var app = angular.module('myApp', []);
                            app.controller('myCtrl', function($scope) {
                            $scope.cars = [
                                     <?php
                                    foreach ($categorys as $category) {
                                        ?>
                                        {id : '<?php echo $category['id']; ?>', 
                                        name : '<?php echo $category['name']; ?>', 
                                        emchs : [

                                        <?php
                                        foreach ($emchs as $emch) {
                                            if($category['id']==$emch['cat_id'])
                                            {
                                        ?>
                                            {name :'<?php echo $emch['name']; ?>',
                                            reg_num : '<?php echo $emch['reg_num']; ?>',
                                            docpic:'<?php echo $emch['doc_pic'] ?>',
                                            dateuud : [
                                            {date1 : '<?php $today=strtotime("+1 days"); echo date("Y-m-d",$today); ?>',
                                             date2 : '<?php $datee1=date("Y-m-d",$today); echo $datee1; echo " Маргааш"; ?>',
                                             times : [
                                             <?php
                                             foreach($time as $tim)
                                             {
                                                $haha=0;
                                                foreach($orders as $order)
                                                {
                                                    if($order['ord_emch_reg_num']==$emch['reg_num'] && $order['ord_date']==$datee1)
                                                    {
                                                        if($order['ord_hour']==$tim['time'])
                                                        {
                                                            $haha=1;
                                                        }
                                                    }
                                                    
                                                }
                                                if($haha==0 && $emch['reg_num']==$tim['emch_reg_num'])
                                                {
                                                    ?>
                                                    { times1 : '<?php echo $tim['time']; ?>'},
                                                    <?php

                                                }

                                             }
                                             ?>
                                             ]
                                        },
                                            {date1 : '<?php $tomorrow=strtotime("+2 days"); echo date("Y-m-d",$tomorrow); ?>',
                                            date2 : '<?php  $datee=date("Y-m-d",$tomorrow); echo $datee; echo " Нөгөөдөр"; ?>',
                                            times : [
                                            <?php
                                             foreach($time as $tim)
                                             {
                                                $haha=0;
                                                foreach($orders as $order)
                                                {
                                                    if($order['ord_emch_reg_num']==$emch['reg_num'] && $order['ord_date']==$datee1)
                                                    {
                                                        if($order['ord_hour']==$tim['time'])
                                                        {
                                                            $haha=1;
                                                        }
                                                    }
                                                    
                                                }
                                                if($haha==0 && $emch['reg_num']==$tim['emch_reg_num'])
                                                {
                                                    ?>
                                                    { times1 : '<?php echo $tim['time']; ?>'},
                                                    <?php

                                                }

                                             }
                                             ?>
                                            ]
                                        }
                                            
                                            
                                        
                                            ]
                                        }, 
                                        <?php
                                        }
                                        }
                                        ?>
                                        ]},
                                        <?php
                                            }
                                            ?>
    ];
    

}
);
                            app.config(function ($interpolateProvider)
                            {
                                $interpolateProvider.startSymbol('<%');
                                $interpolateProvider.endSymbol('%>');
                            });
                            
</script>

<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Бүртгүүлэх
                                </button>
                            </div>
                        </div>

                                        </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="/<%selectedemch['docpic']%>" alt="..."/>
                                      <h4 class="title"><%selectedemch['name']%><br />
                                         <small></small>
                                      </h4>
                                    </a>
                                <p class="description text-center">
                                </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
