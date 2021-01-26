<?php
namespace App\Http\Controllers;
use Resources\Views;

class AdminController extends Controller{

	public function showAdmin()
	{
	return \View::make('admin');
	}
}
