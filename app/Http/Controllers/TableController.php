<?php
namespace App\Http\Controllers;
use Resources\Views;

class TableController extends Controller{

	public function showTable()
	{
	return \View::make('table');
	}
}
