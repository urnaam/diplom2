<?php
namespace App\Http\Controllers;
use Resources\Views;
use illuminate\Http\Request;
use App\time;

class TimeController extends Controller{

	public function addTime()
	{
		$time= new time;

		$time->time=$_POST["time"];
		$time->emch_reg_num=$_POST["emch_reg_num"];

		$time->save();
		
		return redirect('/doctor_time');
	}
}