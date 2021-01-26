<?php
namespace App\Http\Controllers;
use Resources\Views;

class ErrorController extends Controller{

	public function show404()
	{
	return \View::make('404');
	}
}