<?php
namespace App\Http\Controllers;
use Resources\Views;

class TemplateController extends Controller{

	public function showTemplate()
	{
	return \View::make('template');
	}
}
