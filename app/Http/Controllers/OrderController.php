<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\DoctorModel;
use App\category;
use App\Order;


class OrderController extends Controller{

	public function addOrder()
	{

		$Order= new Order;
		
		$Order->ord_per_reg_num=$_POST["ord_per_reg_num"];
		$Order->ord_emch_reg_num=$_POST["ord_emch_reg_num"];
		$Order->ord_date=$_POST["ord_date"];
		$Order->ord_hour=$_POST["ord_hour"];
		$Order->ord_status='open';

		$Order->save();
		$songolt=$_POST["ord_emch_reg_num"];
		return redirect('user');
	}

	// public function viewbyDoctor()
	// {
	// 	$orders= Order::all();

	// 	return \View::make('register2')->with('orders',$orders);
	// }
}
