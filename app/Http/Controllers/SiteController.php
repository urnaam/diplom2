<?php
namespace App\Http\Controllers;
use Resources\Views;

class SiteController extends Controller{
	public function showSite()
	{
	return \View::make('sitemap');
	}
}
