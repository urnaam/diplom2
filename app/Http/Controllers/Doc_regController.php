<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\category;
use App\Atushaal;
use App\roomNumber;
use App\diagnose;
use App\DoctorModel;
use DB;
class Doc_regController extends Controller{

	public function showDoc_reg()
	{

		$category=category::all();
		$Atushaals=Atushaal::all();
		$roomNumber=roomNumber::all();

	return \View::make('reg_doc')->with('category', $category)->with('Atushaals', $Atushaals)->with('roomNumber', $roomNumber);

	}
	public function showDiag_reg()
	{

		$category=category::all();

	return \View::make('reg_diagnose')->with('category', $category);
	}
	public function showDiag_edit()
  {
  	$Atushaals=Atushaal::all();
        $diagnose= diagnose::find($_POST["cat_id"]);
    
    $diagnose->name=$_POST["name"];
    $diagnose->category_id=$_POST["category_id"];
    $diagnose->price=$_POST["price"];
    $diagnose->type_id=$_POST["type_id"];

    $diagnose->save();
    
    return redirect('/admin_diag');
  
  }
  public function editDoctor()
  {
        $doctor= DoctorModel::find($_POST["id"]);
    
    $doctor->lastname=$_POST["lastname"];
    $doctor->name=$_POST["name"];
    $doctor->AT=$_POST["AT"];
    $doctor->roomNumber=$_POST["roomNumber"];
    $doctor->cat_id=$_POST["cat_id"];
    $doctor->gender=$_POST["gender"];
    $doctor->save();
    
    return redirect('/admin_doc');
  
  }
	public function showDoc()
	{
		$doctor=DoctorModel::join('category', 'doctor.cat_id','=','category.id')->select(DB::raw('doctor.*, category.name as cat_name'))->get();
		return \View::make('admin_doc')->with('doctor', $doctor);
	}
	public function showDiag()
	{
		$diagnose=diagnose::join('category','diagnose.category_id','=','category.id')->select(DB::raw('diagnose.*, category.name as cat_name'))->get();
		return \View::make('admin_diag')->with('diagnose', $diagnose);	
	}
}
