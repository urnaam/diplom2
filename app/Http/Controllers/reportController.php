<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\History;
use App\diagnose;
use App\DoctorModel;
use App\Personals;
use Khill\Lavacharts\Lavacharts;
use Carbon\Carbon;
use Auth;
use DB;
class reportController extends Controller{
  public function showuserreportPost()
  {
    $begindate="";
    $enddate="";
    //shalgah
    $begin=$_POST['begin'];
    $end=$_POST['end'];
    if($begin==""||$end=="")
    {
      return redirect('/user_report');
    }
    else
    {
          $begindate=Carbon::createFromFormat('m/d/Y',$_POST['begin']);
    $enddate=Carbon::createFromFormat('m/d/Y',$_POST['end']);

    $doctors=Personals::where('reg_num','=',Auth::user()->reg_num)->get();
    $categoryid='1';
    foreach($doctors as $doctor)
    {
      $categoryid=$doctor['cat_id'];
    }
    $historys=History::where('his_per_reg_num','=',Auth::user()->reg_num)->where('created_at','>=',$begindate)->where('created_at','<=',$enddate)->get();
    $count1=History::where('his_per_reg_num','=',Auth::user()->reg_num)->where('created_at','>=',$begindate)->where('created_at','<=',$enddate)->count();
    $diagnoses=diagnose::all();
    $docuud=DoctorModel::all();

    $lava = new Lavacharts; // See note below for Laravel
     //$lava1 = new Lavacharts; // See note below for Laravel
     $reasons1 = $lava->DataTable();
     $reasons1->addStringColumn('Reasons')
         ->addNumberColumn('Percent');

         foreach($docuud as $doc)
         {
          $name1=$doc['name'];
          $count1=0;
          foreach($historys as $history)
          {
            if($doc['reg_num']==$history['his_emch_reg_num'])
            {
                $count1++;
            }

          }
          if($count1!=0)
          {
            $reasons1->addRow([$name1,$count1]);
          }
         }
    
    $reasons = $lava->DataTable();
    $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        foreach($diagnoses as $diagnose)
      {
        $name=$diagnose['name'];
        $count=0;
          foreach($historys as $history)
          {
            if($diagnose['id']==$history['his_diag_id'])
            {
                $count++;
            }
          }
          if($count!=0)
          {
          $reasons->addRow([$name,$count]);
          }
        }
    $lava->DonutChart('IMDB', $reasons, [
    'title' => 'Оношилгоо'
]);
     $lava->PieChart('UserRep', $reasons1, [
     'title' => 'Эмчилгээ хийлгэсэн эмч',
     'is3D'   => true
 ]);
     $type="2";
return \View::make('/user_report')->with('lava', $lava)->with('type', $type)->with('begin',$begin)->with('end',$end)->with('count1',$count1);

}

  }

	public function showuserreport()
	{
		$doctors=Personals::where('reg_num','=',Auth::user()->reg_num)->get();
		$categoryid='1';
		foreach($doctors as $doctor)
		{
			$categoryid=$doctor['cat_id'];
		}
		$historys=History::where('his_per_reg_num','=',Auth::user()->reg_num)->get();
    $count1=History::where('his_per_reg_num','=',Auth::user()->reg_num)->count();
		$diagnoses=diagnose::all();
		$docuud=DoctorModel::all();

		$lava = new Lavacharts; // See note below for Laravel
		 //$lava1 = new Lavacharts; // See note below for Laravel
		 $reasons1 = $lava->DataTable();
		 $reasons1->addStringColumn('Reasons')
         ->addNumberColumn('Percent');

         foreach($docuud as $doc)
         {
         	$name1=$doc['name'];
         	$count1=0;
         	foreach($historys as $history)
         	{
         		if($doc['reg_num']==$history['his_emch_reg_num'])
         		{
           			$count1++;
         		}

         	}
         	if($count1!=0)
         	{
         		$reasons1->addRow([$name1,$count1]);
         	}
         }
		
		$reasons = $lava->DataTable();
		$reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        foreach($diagnoses as $diagnose)
    	{
      	$name=$diagnose['name'];
      	$count=0;
      		foreach($historys as $history)
      		{
        		if($diagnose['id']==$history['his_diag_id'])
        		{
          			$count++;
        		}
      		}
          if($count!=0)
          {
      		$reasons->addRow([$name,$count]);
          }
      	}
		$lava->DonutChart('IMDB', $reasons, [
    'title' => 'Оношилгоо'
]);
		 $lava->PieChart('UserRep', $reasons1, [
     'title' => 'Эмчилгээ хийлгэсэн эмч',
     'is3D'   => true
 ]);
     $type="1";
return \View::make('/user_report')->with('lava', $lava)->with('type', $type)->with('count1',$count1);
// ->with('lava1',$lava1);
	}

  public function showdocreportPost()
  {
    $begindate="";
    $enddate="";
    //shalgah
    $begin=$_POST['begin'];
    $end=$_POST['end'];
    if($begin==""||$end=="")
    {
      return redirect('/doc_report');
    }
    else
    {
    $begindate=Carbon::createFromFormat('m/d/Y',$_POST['begin']);
    $enddate=Carbon::createFromFormat('m/d/Y',$_POST['end']);

    $doctors=DoctorModel::where('reg_num','=',Auth::user()->reg_num)->get();
    $categoryid='1';
    foreach($doctors as $doctor)
    {
      $categoryid=$doctor['cat_id'];
    }
    $historys=History::where('his_emch_reg_num','=',Auth::user()->reg_num)->where('created_at','>=',$begindate)->where('created_at','<=',$enddate)->get();

    $count1=History::where('his_emch_reg_num','=',Auth::user()->reg_num)->where('created_at','>=',$begindate)->where('created_at','<=',$enddate)->count();

    $diagnoses=diagnose::where('category_id','=',$categoryid)->get();
    $docuud=DoctorModel::all();
    
    $lava = new Lavacharts; // See note below for Laravel
    $reasons = $lava->DataTable();
    $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        foreach($diagnoses as $diagnose)
      {
        $name=$diagnose['name'];
        $count=0;
          foreach($historys as $history)
          {
            if($diagnose['id']==$history['his_diag_id'])
            {
                $count++;
            }
          }
          $reasons->addRow([$name,$count]);
        }
    $lava->DonutChart('IMDB', $reasons, [
    'title' => 'Оношилгоо'
]);
    $type="2";
return \View::make('/doc_report')->with('lava', $lava)->with('historys',$historys)->with('diagnoses',$diagnoses)->with('type',$type)->with('begin',$begin)->with('end',$end)->with('count1',$count1);
//return $historys;

}

  }


	public function showdocreport()
	{
		$doctors=DoctorModel::where('reg_num','=',Auth::user()->reg_num)->get();
		$categoryid='1';
		foreach($doctors as $doctor)
		{
			$categoryid=$doctor['cat_id'];
		}
		$historys=History::where('his_emch_reg_num','=',Auth::user()->reg_num)->get();
    $count1=History::where('his_emch_reg_num','=',Auth::user()->reg_num)->count();
		$diagnoses=diagnose::where('category_id','=',$categoryid)->get();
		$docuud=DoctorModel::all();
		
		$lava = new Lavacharts; // See note below for Laravel
		$reasons = $lava->DataTable();
		$reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        foreach($diagnoses as $diagnose)
    	{
      	$name=$diagnose['name'];
      	$count=0;
      		foreach($historys as $history)
      		{
        		if($diagnose['id']==$history['his_diag_id'])
        		{
          			$count++;
        		}
      		}
      		$reasons->addRow([$name,$count]);
      	}
		$lava->DonutChart('IMDB', $reasons, [
    'title' => 'Оношилгоо'
]);
    $type="1";
return \View::make('/doc_report')->with('lava', $lava)->with('historys',$historys)->with('diagnoses',$diagnoses)->with('type',$type)->with('count1',$count1);
	}


  public function showadmreport()
  {
    $lava = new Lavacharts; // See note below for Laravel

    $emchnuud=History::join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->groupBy('history.his_emch_reg_num')->select(DB::raw('count(*) as countuud,history.his_emch_reg_num,doctor.name'))->get();
    $count1=History::join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->groupBy('history.his_emch_reg_num')->select(DB::raw('count(*) as countuud,history.his_emch_reg_num,doctor.name'))->count();
    $reasons = $lava->DataTable();
    $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        foreach($emchnuud as $emch)
        {
          $reasons->addRow([$emch['name'],$emch['countuud']]);
        }

        $humuus=Personals::groupBy('gender')->select(DB::raw('count(*) as too,gender'))->get();
        //huisiin haritsaa
        $reasons1 = $lava->DataTable();
        $reasons1->addStringColumn('Reasons')
        ->addNumberColumn('Percent');

        foreach($humuus as $hun)
        {
          $reasons1->addRow([$hun['gender'],$hun['too']]);
        }

        //hamgiin ih orlogo olson
        $niitolsonmungu=History::join('diagnose','history.his_diag_id','=','diagnose.id')->join('doctor','his_emch_reg_num','=','doctor.reg_num')->groupBy('history.his_emch_reg_num')->select(DB::raw('sum(diagnose.price) as niilber,history.his_emch_reg_num,doctor.name'))->get();
            
    $reasons2 = $lava->DataTable();
        $reasons2->addStringColumn('Reasons')
        ->addNumberColumn('Percent');

        foreach($niitolsonmungu as $mungunuud)
        {
          $reasons2->addRow([$mungunuud['name'],$mungunuud['niilber']]);
        }


        //hamgiin ih orlogo olson

        //select his_emch_reg_num,doc.name,sum(d.price) from (history as h inner join diagnose as d on h.his_diag_id=d.id) inner join doctor as doc on h.his_emch_reg_num=doc.reg_num group by h.his_emch_reg_num
        $ihdiagnose=History::join('diagnose','history.his_diag_id','=','diagnose.id')->groupBy('history.his_diag_id')->select(DB::raw('count(*) as diag,diagnose.name'))->get();

        //hamgiin ih hiilgesen emchilgee
        //select d.name, count(h.his_diag_id) from history as h inner join diagnose as d on h.his_diag_id=d.id group by h.his_diag_id
        $reasons3 = $lava->DataTable();
        $reasons3->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        $ihdiagnose=History::join('diagnose','history.his_diag_id','=','diagnose.id')->groupBy('history.his_diag_id')->select(DB::raw('count(*) as diag,diagnose.name'))->get();
    foreach($ihdiagnose as $diag)
        {
          $reasons3->addRow([$diag['name'],$diag['diag']]);
        }        
        

        $lava->PieChart('Admindoc', $reasons, [
     'title' => 'Эмчилгээ хийсэн эмч',
     'is3D'   => true
 ]);
        $lava->PieChart('huis', $reasons1, [
     'title' => 'Өвчтөний хүйсийн харьцаа',
     'is3D'   => true
 ]);
         $lava->PieChart('Adminmoney', $reasons2, [
     'title' => 'Эмч нарын олсон мөнгө',
     'is3D'   => true
 ]);
         $lava->PieChart('Adminemchilgee', $reasons3, [
     'title' => 'Эмчилгээ хийлгэсэн тоо',
     'is3D'   => true
 ]);
         $type='1';
   return \View::make('/admin_report')->with('lava', $lava)->with('type',$type)->with('count1',$count1);
    // return $ihdiagnose;


  }

public function showadmreportPost()
  {
        $begindate="";
    $enddate="";
    //shalgah
    $begin=$_POST['begin'];
    $end=$_POST['end'];
    if($begin==""||$end=="")
    {
      return redirect('/admin_report');
    }
    else
    {
    $begindate=Carbon::createFromFormat('m/d/Y',$_POST['begin']);
    $enddate=Carbon::createFromFormat('m/d/Y',$_POST['end']);

    $lava = new Lavacharts; // See note below for Laravel

    $emchnuud=History::join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->groupBy('history.his_emch_reg_num')->select(DB::raw('count(*) as countuud,history.his_emch_reg_num,doctor.name'))->get();
    $count1=History::join('doctor','history.his_emch_reg_num','=','doctor.reg_num')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->groupBy('history.his_emch_reg_num')->select(DB::raw('count(*) as countuud,history.his_emch_reg_num,doctor.name'))->count();
    $reasons = $lava->DataTable();
    $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        foreach($emchnuud as $emch)
        {
          $reasons->addRow([$emch['name'],$emch['countuud']]);
        }

        $humuus=Personals::groupBy('gender')->select(DB::raw('count(*) as too,gender'))->get();
        //huisiin haritsaa
        $reasons1 = $lava->DataTable();
        $reasons1->addStringColumn('Reasons')
        ->addNumberColumn('Percent');

        foreach($humuus as $hun)
        {
          $reasons1->addRow([$hun['gender'],$hun['too']]);
        }

        //hamgiin ih orlogo olson
        $niitolsonmungu=History::join('diagnose','history.his_diag_id','=','diagnose.id')->join('doctor','his_emch_reg_num','=','doctor.reg_num')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->groupBy('history.his_emch_reg_num')->select(DB::raw('sum(diagnose.price) as niilber,history.his_emch_reg_num,doctor.name'))->get();
            
    $reasons2 = $lava->DataTable();
        $reasons2->addStringColumn('Reasons')
        ->addNumberColumn('Percent');

        foreach($niitolsonmungu as $mungunuud)
        {
          $reasons2->addRow([$mungunuud['name'],$mungunuud['niilber']]);
        }


        //hamgiin ih orlogo olson

        //select his_emch_reg_num,doc.name,sum(d.price) from (history as h inner join diagnose as d on h.his_diag_id=d.id) inner join doctor as doc on h.his_emch_reg_num=doc.reg_num group by h.his_emch_reg_num
        $ihdiagnose=History::join('diagnose','history.his_diag_id','=','diagnose.id')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->groupBy('history.his_diag_id')->select(DB::raw('count(*) as diag,diagnose.name'))->get();

        //hamgiin ih hiilgesen emchilgee
        //select d.name, count(h.his_diag_id) from history as h inner join diagnose as d on h.his_diag_id=d.id group by h.his_diag_id
        $reasons3 = $lava->DataTable();
        $reasons3->addStringColumn('Reasons')
        ->addNumberColumn('Percent');
        $ihdiagnose=History::join('diagnose','history.his_diag_id','=','diagnose.id')->where('history.created_at','>=',$begindate)->where('history.created_at','<=',$enddate)->groupBy('history.his_diag_id')->select(DB::raw('count(*) as diag,diagnose.name'))->get();
    foreach($ihdiagnose as $diag)
        {
          $reasons3->addRow([$diag['name'],$diag['diag']]);
        }        
        

        $lava->PieChart('Admindoc', $reasons, [
     'title' => 'Эмчилгээ хийсэн эмч',
     'is3D'   => true
 ]);
        $lava->PieChart('huis', $reasons1, [
     'title' => 'Өвчтөний хүйсийн харьцаа',
     'is3D'   => true
 ]);
         $lava->PieChart('Adminmoney', $reasons2, [
     'title' => 'Эмч нарын олсон мөнгө',
     'is3D'   => true
 ]);
         $lava->PieChart('Adminemchilgee', $reasons3, [
     'title' => 'Эмчилгээ хийлгэсэн тоо',
     'is3D'   => true
 ]);
         $type='2';
   return \View::make('/admin_report')->with('lava', $lava)->with('type',$type)->with('count1',$count1)->with('begin',$begin)->with('end',$end);
    // return $ihdiagnose;

  }
  }


  // public function _construct()
  // {
  //   $this->middleware('guest');
  // }
  // public function index()
  // {
  //   return view('report');
  // }
  // public function post()
  // {
  //   $database = \Config::get('database.connections.mysql');
  //   $output = public_path().'/report/'.time().'_codelution';
  //   $ext="pdf";

  //   \JasperPHP::process(
  //     public_path().'/report/codelution.jasper',
  //     $output,
  //     array($ext),
  //     array(),
  //     $database,
  //     false,
  //     false)->execute();
  //   header('Content-Description:File Transfer');
  //   header('Content-Type:application/octet-stream');
  //   header('Content-Disposition:attachmnet; filename='.time().'_codelution.'.$ext);
  //   header('Content-Transfer-Encoding:binary');
  //   header('Expires:0');
  //   header('Cache-Control:must-revalidate, post-check=0, pre-check=0');
  //   header('Pragma:public');
  //   header('Content-Length'.file($output.'.'.$text));
  //   flush();
  //   readfile($output.'.'.$ext);
  //   unlink($output.'.'.$ext);

  //   return Redirect::to('/reporting');
  // }
}
