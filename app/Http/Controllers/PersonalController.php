<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
use Resources\Views;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Resources\Views\Auth;
use App\Personals;
use App\User;

class PersonalController extends Controller{

	public function addUser(Request $request)
	{
		$destinationPath='public';
		$filename='123';
		$error_msg = array();
			//$huulah="boloogui";
		if ($request->hasFile('image')) {
    		$destinationPath='public';
    		//public/public/filename.extention
    		$filename=$_POST["cardNumber"];
    		$request->file('image')->move($destinationPath,$filename.'.jpg');
    		//$huulah="bolson";
		}

		$name=$_POST["name"];
		$password=$_POST["password"];
		$email=$_POST["email"];

		User::create([

            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role'=>'uvchtun',
            'reg_num' => $_POST["reg_num"],

            ]);

		$UserPerson= new Personals;

		//$UserPerson->userid='';
		$UserPerson->name=$_POST["name"];
		$UserPerson->lastname=$_POST["lastname"];
		$UserPerson->cardNumber=$_POST["cardNumber"];
		$UserPerson->birthdate=$_POST["birthdate"];
		$UserPerson->reg_num=$_POST["reg_num"];
		$UserPerson->phone=$_POST["phone"];
		$UserPerson->address=$_POST["address"];
		$UserPerson->gender=$_POST["gender"];
		$UserPerson->user_pic=$destinationPath.'/'.$filename.'.jpg';

		$UserPerson->save();
		
		        
		//return $huulah;
		return \View::make('auth/login');
	}

	public function viewUser()
	{
		return \View::make('register1');
	}
}
