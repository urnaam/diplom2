<?php
namespace App\Http\Controllers;
use Resources\Views;
use illuminate\Http\Request;
use App\DoctorModel;
use App\User;
use App\Order;
use App\Personals;
use App\History;
use App\diagnose;
use App\time;
use Khill\Lavacharts\Lavacharts;
use Auth;
class DoctorController extends Controller{

	public function addDoctor(Request $request)
	{
		$destinationPath='public';
		$filename='123';
		$name=$_POST["name"];
		$password=$_POST["password"];
		$email=$_POST["email"];

				 User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role'=>'emch',
            'reg_num' => $_POST["reg_num"],
            ]);

		$doctor= new DoctorModel;

		
		$doctor->name=$_POST["name"];
		$doctor->lastname=$_POST["lastname"];
		$doctor->reg_num=$_POST["reg_num"];
		$doctor->gender=$_POST["gender"];
		$doctor->email=$_POST["email"];
		$doctor->AT=$_POST["AT"];
		$doctor->roomNumber=$_POST["roomNumber"];
		$doctor->cat_id=$_POST["cat_id"];
		$doctor->doc_pic=$destinationPath.'/'.$filename.'.jpg';

		$doctor->save();
		$insertedid=$doctor->id;
		if ($request->hasFile('image')) {
    		$destinationPath='emch';
    		//public/public/filename.extention
    		$filename=$insertedid;
    		$request->file('image')->move($destinationPath,$filename.'.jpg');
    		//$huulah="bolson";
    		$doctor->doc_pic=$destinationPath.'/'.$filename.'.jpg';
			$doctor->save();
		}
		
		return redirect('reg_doc');
	}
	public function addDiag(Request $request)
	{
		$diag= new diagnose;

		$diag->name=$_POST["name"];
		$diag->category_id=$_POST["category_id"];
		$diag->price=$_POST["price"];
		$diag->type_id=$_POST["type_id"];
		
		$diag->save();
		
		return redirect('reg_diagnose');
	}

	// public function viewDoctor()
	// {
	// 	return \View::make('register2');
	// }


	public function showDoctor()
	{
		$open="open";
		$order=order::all();
		return \View::make('doctor')->with('order',$order);
	}
	public function showDoctor_table()
	{
		$open="open";
		$order=order::where('ord_status','=','open')->get();;
		return \View::make('doctor_table')->with('order',$order);
	}
	public function showDoctor_view($reg_num)
	{
		$personal=Personals::where('reg_num','=','$reg_num');
		$historys=History::where('his_per_reg_num','=','$reg_num');
		return \View::make('doctor_view')->with('personal',$personal)->with('historys',$historys);
	}
	// public function showDoctor_view1()
	// {
	// 	$order=order::all();
	// 	return \View::make('doctor_view')->with('order',$order);
	// }
	public function showDoctor_add()
	{
		$order=order::all();
		return \View::make('doctor_add')->with('order',$order);
	}
	public function addHistory(Request $request)
	{
		$destinationPath='emchilgee';
		$filename='123';

		$history= new History;
		
		$history->his_per_reg_num=$_POST["his_per_reg_num"];
		$history->his_emch_reg_num=$_POST["his_emch_reg_num"];
		$history->his_diag_id=$_POST["his_diag_id"];
		$history->his_note=$_POST["his_note"];
		$history->his_jor=$_POST["his_jor"];

		$history->save();

		$insertedid=$history->id;
		if ($request->hasFile('his_pic')) {
    		$destinationPath='his_pic';
    		//public/public/filename.extention
    		$extension=$request->file('his_pic')->getClientOriginalExtension();
    		$filename=$insertedid.'.'.$extension;
    		// 
    		$request->file('his_pic')->move($destinationPath,$filename);
    		//$huulah="bolson";
    		$history->his_pic=$destinationPath.'/'.$filename;
			$history->save();
		}

		return redirect('/doctor_view/'.$_POST["his_per_reg_num"].'/'.$_POST["orderid"]);
	}
	public function showDoc_time()
	{
		$time=time::all();
		return \View::make('doctor_time')->with('time',$time);
	}
	public function showTime()
	{
		$time=time::all();
		return \View::make('time_add')->with('time',$time);
	}
}