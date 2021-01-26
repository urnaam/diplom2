<?php
namespace App\Http\Controllers;
use Resources\Views;
use illuminate\Http\Request;
use App\DoctorModel;
use App\User;
use App\Order;
use App\Personals;
use App\History;
use App\news;
use App\comment;
class NewsController extends Controller{

	public function addNews(Request $request)
	{
		$destinationPath='news';
		$filename='123';
		$news= new news;

		$news->title=$_POST["title"];
		$news->short=$_POST["short"];
		$news->desc=$_POST["desc"];

		$news->doc_reg_num=$_POST["doc_reg_num"];
		


		$news->save();

		$insertedid=$news->id;
		if ($request->hasFile('postpic')) {
    		$destinationPath='news';
    		//public/public/filename.extention
    		$filename=$insertedid;
    		$request->file('postpic')->move($destinationPath,$filename.'.jpg');
    		//$huulah="bolson";
    		$news->picture=$destinationPath.'/'.$filename.'.jpg';
			$news->save();
		}
		
		
		return redirect('blog/1');
	}

	public function viewAddNews()
	{
		return \View::make('doctor_post');
	}

	public function viewNews()
	{
		$news=news::all();
		return \View::make('doctor_news')->with('news',$news);
	}

	public function addComment()
	{
		$username='';
		$picture='';
		if($_POST['roles']=='emch')
		{
			$doctor=DoctorModel::where('reg_num','=',$_POST["reg_num"])->get();
			foreach($doctor as $doc)
			{
				$username=$doc['name'];
				$picture=$doc['doc_pic'];
			}
		}else
		{
			$doctor=Personals::where('reg_num','=',$_POST["reg_num"])->get();
			foreach($doctor as $doc)
			{
				$username=$doc['name'];
				$picture=$doc['user_pic'];
			}
		}
		$comment=new comment;
		$comment->value=$_POST["comment"];
		$comment->news_id=$_POST["news_id"];
		$comment->username=$username;
		$comment->reg_num=$_POST["reg_num"];
		$comment->picture=$picture;

		$comment->save();
		return redirect('/single/'.$_POST["news_id"]);
	}


}