@extends('user_app')

@section('content')
<div id="chart-div"></div>
// With the lava object
<?= $lava->render('DonutChart', 'title', 'chart-div') ?>
@endsection