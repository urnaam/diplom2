<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\category;
use App\DoctorModel;
use App\Order;
use App\time;
use App\History;
use App\Personals;
use App\diagnose;
use Carbon\Carbon;
use Auth;
use DB;

class UserController extends Controller{

	public function showU_order()
	{
	$categorys=category::all();
		$emchs=DoctorModel::all();
		$orders=Order::where('ord_status','=','open')->get();
		$time=time::all();
	return \View::make('u_order')->with('categorys',$categorys)->with('emchs',$emchs)->with('orders',$orders)->with('time',$time);
	}
	public function showUser()
	{
		$personal=Personals::where('reg_num','=',Auth::user()->reg_num)->get();
	return \View::make('user')->with('personal', $personal);
	}
	public function showU_history()
	{
		$type="1";
		$historys=History::join('diagnose','history.his_diag_id','=','diagnose.id')->join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->where('history.his_per_reg_num','=',Auth::user()->reg_num)->select(DB::raw('history.*,doctor.name as doc_name,diagnose.name as diag_name'))->get();
		$count1=History::join('diagnose','history.his_diag_id','=','diagnose.id')->join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->where('history.his_per_reg_num','=',Auth::user()->reg_num)->select(DB::raw('history.*,doctor.name as doc_name,diagnose.name as diag_name'))->count();
		return \View::make('u_history')->with('historys',$historys)->with('type',$type)->with('count1',$count1);
		// return \View::make('u_history')->with('history',$history)->with('diagnoses',$diagnoses);
		// return $historys;
	}
	public function showU_historyPost()
	{
		    $begindate="";
    		$enddate="";
    //shalgah
    $begin=$_POST['begin'];
    $end=$_POST['end'];
    if($begin==""||$end=="")
    {
      return redirect('/u_history');
    }
    else
    {
          $begindate=Carbon::createFromFormat('m/d/Y',$_POST['begin']);
    $enddate=Carbon::createFromFormat('m/d/Y',$_POST['end']);
		$historys=History::join('diagnose','history.his_diag_id','=','diagnose.id')->join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->where('history.his_per_reg_num','=',Auth::user()->reg_num)->select(DB::raw('history.*,doctor.name as doc_name,diagnose.name as diag_name'))->get();
		$count1=History::join('diagnose','history.his_diag_id','=','diagnose.id')->join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->where('history.his_per_reg_num','=',Auth::user()->reg_num)->select(DB::raw('history.*,doctor.name as doc_name,diagnose.name as diag_name'))->count();
		$type="2";
		return \View::make('u_history')->with('historys',$historys)->with('count1',$count1)->with('type',$type)->with('begin',$begin)->with('end',$end);
		// return \View::make('u_history')->with('history',$history)->with('diagnoses',$diagnoses);
		// return $historys;
	}
	}
	public function showU_ref()
	{
		$history=History::all();
		$diagnoses=diagnose::join('category','diagnose.category_id','=','category.id')->select(DB::raw('diagnose.*, category.name as cat_name'))->get();
		return \View::make('user_reference')->with('diagnoses', $diagnoses)->with('history', $history);
	}
	// public function showU_desc()
	// {

	// 	$history=History::join('diagnose','history.his_diag_id','=','diagnose.id')->select(DB::raw('history.*, diagnose.name as diag_name'))->get();
	// 	return \View::make('his_desc')->with('history',$history)->with('diagnose', $diagnose);
	// }
}
