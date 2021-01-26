<?php
namespace App\Http\Controllers;
use Resources\Views;

class ListController extends Controller{

	public function showList()
	{
	return \View::make('test-list');
	}
}
