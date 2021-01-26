<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">



<p>Select a category:</p>

<select ng-model="selectedCar" ng-options="x.name for x in cars">
</select>

<h1>You selected: {{selectedCar.name}}</h1>
<p>It's color is: {{selectedCar.id}}</p>

<p>select Doctor:</p>

<select ng-model="selectedemch" ng-options="o.name for o in selectedCar['emchs']">
</select>

<h1>You selected: {{selectedemch.name}}</h1>
<p>It's color is: {{selectedemch.reg_num}}</p>

<div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Төрсөн огноо</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}">
                            </div>
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
                                        	{name :'<?php echo $emch['name']; ?>',reg_num : '<?php echo $emch['reg_num']; ?>'}, 
                                        <?php
                                    	}
                                    	}
                                        ?>
                                        ]},
                                        <?php
                                            }
                                            ?>
    ];
	

});
</script>

<p>When you use the ng-options directive to create dropdown lists, the selected value can be an object.</p>
<p>In this example you can display both the model and the color of the selected element.</p>

</body>
</html>
