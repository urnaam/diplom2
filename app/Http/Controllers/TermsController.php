<?php
namespace App\Http\Controllers;
use Resources\Views;

class TermsController extends Controller{
	public function showTerms()
	{
	return \View::make('terms');
	}
}
