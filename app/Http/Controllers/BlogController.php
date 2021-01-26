<?php
namespace App\Http\Controllers;
use Resources\Views;
use App\news;
class BlogController extends Controller{
	
	public function showBlog($id)
	{
		
		$idnuud=$id;
		$id=$id-1;
		$skip=$limit*5;
		

		$newsuud=news::all()->count();
		$niit=count($newsuud);
	return \View::make('blog')->with('news',$news)->with('idnuud',$idnuud)->with('newsuud',$newsuud);
	}
	public function showSingle()
	{
	return \View::make('single');

	}
	// public function index()
 //    {
 //        $posts = Post::where('published_at', '<=', Carbon::now())
 //            ->orderBy('published_at', 'desc')
 //            ->paginate(config('blog.posts_per_page'));

 //        return view('blog.blog1', compact('posts'));
 //    }

 //    public function showPost($slug)
 //    {
 //        $post = Post::whereSlug($slug)->firstOrFail();

 //        return view('blog.post')->withPost($post);
 //    }
}
