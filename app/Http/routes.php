<?php
use App\Personals;
use App\History;
use App\diagnose;
use App\DoctorModel;
use App\Order;
use App\news;
use App\comment;
use App\roomNumber;
use App\category;
use App\time;
use App\Atushaal;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', 'IndexController@showIndex');
Route::get('/about', 'AboutController@showAbout');
Route::get('/about1', 'AboutController@showAbout1');
Route::get('/career', 'AboutController@showCareer');
Route::get('/jobs_single', 'AboutController@showJobs');
Route::get('/user_report', 'reportController@showuserreport');
Route::post('dateviewreport','reportController@showdocreportPost');
Route::get('/blog/{id}', function ($id)
	{
		$idnuud=$id;
		$id=$id-1;
		$skip=$id*5;

		$newsuud=news::all()->count();
		$news=news::take(5)->skip($skip)->orderBy('created_at','desc')->get();
	return \View::make('blog')->with('news',$news)->with('idnuud',$idnuud)->with('newsuud',$newsuud);
	});
// Route::get('blog', 'BlogController@index');
// Route::get('blog/{slug}', 'BlogController@showPost');
Route::get('/single/{id}', function ($id)
	{
		$news=news::find($id);
		$comments=comment::where('news_id','=',$id)->get();
	return \View::make('single')->with('news',$news)->with('comments',$comments);

	});
Route::get('/contact', 'ContactController@showContact');
Route::post('/addContact', 'ContactController@addContact');
Route::get('/services', 'ServicesController@showServices');
Route::get('/index', 'IndexController@showIndex');
Route::get('/sitemap', 'SiteController@showSite');
Route::get('/privacy_policy', 'Privacy_policyController@showPrivacy_policy');
Route::get('/test-list', 'IndexController@showRef');
Route::get('/template', 'TemplateController@showTemplate');
Route::get('/404', 'ErrorController@show404');

//admin
Route::get('/register1', 'PersonalController@viewUser');
Route::post('/addUser', 'PersonalController@addUser');
Route::post('/addOrder', 'OrderController@addOrder');

Route::get('/angularselect','angularController@showAngular');
Route::get('/admin', 'AdminController@showAdmin');
Route::get('/reg_doc', 'Doc_regController@showDoc_reg');
Route::get('/reg_diagnose', 'Doc_regController@showDiag_reg');
Route::get('/admin_diag', 'Doc_regController@showDiag');
Route::get('/admin_doc', 'Doc_regController@showDoc');
Route::get('/edit_diagnose/{id}', function($id)
  {
    $diag=diagnose::find($id);
    $category=category::all();
  return \View::make('edit_diagnose')->with('diag',$diag)->with('category',$category);
  });
Route::get('/edit_doctor/{id}', function ($id)
  {
  	$roomNumber=roomNumber::all();
    $doctor=DoctorModel::find($id);
    $category=category::all();
    $Atushaals=Atushaal::all();
  return \View::make('edit_doctor')->with('doctor',$doctor)->with('category',$category)->with('Atushaals', $Atushaals)->with('roomNumber', $roomNumber);
  });
Route::post('/editDoctor', 'Doc_regController@editDoctor');
Route::get('/deletediagnose/{diag_id}', function($diag_id)
	{
		$diag=diagnose::find($diag_id);
		$diag->delete();
		return redirect('/admin_diag');
	});
Route::get('/deletedoctor/{doc_id}', function($doc_id)
    {
        $doctor=DoctorModel::find($doc_id);
        $doctor->delete();
        return redirect('/admin_doc');
    });
Route::post('/editDiag', 'Doc_regController@showDiag_edit');
Route::post('/addDoctor', 'DoctorController@addDoctor');
Route::post('/addDiag', 'DoctorController@addDiag');
Route::post('/addHistory', 'DoctorController@addHistory');
Route::post('/addComment', 'NewsController@addComment');
Route::get('/table', 'TableController@showTable');
Route::get('/newNews', 'NewsController@viewAddNews');
Route::post('/addNews', 'NewsController@addNews');
Route::get('/viewNews', 'NewsController@viewNews');
Route::post('/addTime', 'TimeController@addTime');
Route::get('/deleteorder/{time_id}', function($time_id)
	{
		$time=time::find($time_id);
		$time->delete();
		return redirect('/doctor_time');
	});
Route::auth();

//doctor
// Route::get('/report', 'reportController@showemchreport');
Route::get('/doc_report', 'reportController@showdocreport');
Route::get('/doctor', 'DoctorController@showDoctor');
Route::get('/doctor_table', 'DoctorController@showDoctor_table');
Route::get('/doctor_add/{reg_num}/{ord_id}', function($reg_num,$ord_id)
	{
		$diagnoses=diagnose::all();
		$doctors=DoctorModel::all();
		return \View::make('doctor_add')->with('diagnoses',$diagnoses)->with('reg_num',$reg_num)->with('doctors',$doctors)->with('ord_id',$ord_id);
	});
Route::get('/doctor_view/{reg_num}/{ord_id}', function($reg_num,$ord_id)
	{
		$personal=Personals::where('reg_num','=',$reg_num)->get();
		$reg_num1=$reg_num;
		$historys=History::where('his_per_reg_num','=',$reg_num1)->get();
		return \View::make('doctor_view')->with('personal',$personal)->with('historys',$historys)->with('ord_id',$ord_id);
	});
Route::get('doctor_time', 'DoctorController@showDoc_time');
Route::get('time_add', 'DoctorController@showTime');
//Route::get('/doctor_view', 'DoctorController@showDoctor_view1');

//user
Route::get('/his_desc/{id}', function($id)
	{
		$diagnose=diagnose::all();
		$history=History::join('diagnose','history.his_diag_id','=','diagnose.id')->where('history.id','=',$id)->select(DB::raw('history.*, diagnose.name as diag_name'))->get();
		return \View::make('his_desc')->with('diagnose',$diagnose)->with('history',$history);
	});
Route::get('/user', 'UserController@showUser');
Route::get('/u_history', 'UserController@showU_history');
Route::post('/u_historypost', 'UserController@showU_historypost');
Route::get('/u_order', 'UserController@showU_order');
Route::get('/user_reference', 'UserController@showU_ref');
Route::post('/dateuserviewreport', 'reportController@showuserreportPost');
Route::get('/order_closed/{ord_id}',function($ord_id)
	{
		$orderup=Order::find($ord_id);
		$orderup->ord_status="closed";
		$orderup->save();

		$order=order::where('ord_status','=','open')->get();
		return \View::make('doctor_table')->with('order',$order);
	});

Route::get('/admin_report', 'reportController@showadmreport');
Route::post('/dateadmviewreport', 'reportController@showadmreportPost');