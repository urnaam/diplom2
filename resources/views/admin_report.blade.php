@extends('admin_app')

@section('content')
<div>
<form role="form" method="POST" action="{{ url('/dateadmviewreport') }}">
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
                    {?>
                        <label><b>Өгөгдөл олдсонгүй</b>
                    <?php
                    }else
                    {
                    ?>
<div id="chart-div"></div>
<!-- <div id="chart-div1"></div> -->
<div id="chart-huis"></div>
<div id="chart-money"></div>
<div id="chart-emchil"></div>
</br>
</br>

<?= $lava->render('PieChart', 'Admindoc', 'chart-div');?>

<?= $lava->render('PieChart', 'huis', 'chart-huis');?>

<?= $lava->render('PieChart', 'Adminmoney', 'chart-money');?>

<?= $lava->render('PieChart', 'Adminemchilgee', 'chart-emchil');?>
<?php
}
?>
@endsection