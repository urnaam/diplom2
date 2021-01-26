@extends('user_app')

@section('content')
<div>
<form role="form" method="POST" action="{{ url('/dateuserviewreport') }}">
                        <label><b>Хугацаа:</b>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <?php
                        if($type=="2")
                        {?>
                        <input type="text" name="begin" value="<?php echo $begin ?>" id="datepicker"/>-ээс
                        <input type="text" name="end" value="<?php echo $end ?>" id="datepicker1"/> хүртэл
                        <?php
                        }else
                        {
                        ?>
                        <input type="text" name="begin" id="datepicker"/>-ээс
                        <input type="text" name="end" id="datepicker1"/> хүртэл
                        <?php 
                        }
                        ?>
                        </label>         
                        <button type="submit">Харах</button>
                        </form>
                    </div>
                    <?php
                    if($count1==0)
                    {
                        echo "<label><b>Өгөгдөл олдсонгүй</b>";
                    }else
                    {
                    ?>
<div id="chart-div"></div>
</br>
</br>

<div id='chart-div-rep1'></div>

<?= $lava->render('DonutChart', 'IMDB', 'chart-div');?>

<?= $lava->render('PieChart', 'UserRep', 'chart-div-rep1');?>
<?php
}
?>
@endsection