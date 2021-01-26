<?php
namespace App\Http\Controllers;
use Resources\Views;

class AboutController extends Controller{

	public function showAbout()
	{
	return \View::make('about');
	}
	public function showAbout1()
	{
	return \View::make('about1');
	}
	public function showCareer()
	{
	return \View::make('career');
	}
	public function showJobs()
	{
	return \View::make('jobs_single');
	}
}
