<?php
namespace App\Http\Controllers;
use Resources\Views;

class Privacy_policyController extends Controller{
	public function showPrivacy_policy()
	{
	return \View::make('privacy_policy');
	}
}
