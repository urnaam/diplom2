<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\History;
use App\diagnose;
use DB;

class IndexController extends Controller{
	public function showIndex()
	{
	return \View::make('index');
	}
	public function showRef()
	{
		$history=History::all();
		$diagnoses=diagnose::join('category','diagnose.category_id','=','category.id')->select(DB::raw('diagnose.*, category.name as cat_name'))->get();
		return \View::make('test-list')->with('diagnoses', $diagnoses)->with('history', $history);
	}
}
