<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\contacts;
use App\User;

class ContactController extends Controller{

	public function showContact()
	{
	return \View::make('/contact');
	}
	public function addContact()
	{
		$contacts= new contacts;
		$contacts->comment=$_POST["comment"];
		$contacts->reg_num=$_POST["reg_num"];

		$contacts->save();
		return redirect('index');
	}
}
