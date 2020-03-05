<?php

namespace App\Http\Controllers\ForntEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Comment;
use App\User;
use App\Post;
use App\Profile;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{



    public function index(Request $request)
    {
        $categories =  Category::all();
        $users = User::all();

        $posts = Post::when($request->search, function($query) use($request) {
            return $query->where('title', 'Like', '%' . $request->search . '%');
            return $query->where('location', 'Like', '%' . $request->search . '%');
        })->paginate();

        return view('home',compact('categories','users','posts'));

    }

    public function category($category_id)
    {
        $posts = Post::where('category_id', $category_id)->get();
        $comments = Comment::with('post')->paginate();
        $categories = Category::all();

        return view('website\posts',compact('posts', 'comments','categories'));
    }

    public function profile()
    {
        $posts = Post::paginate();
        $comments = Comment::paginate();
        $profiles = Profile::paginate();


        return view('website.profile', compact('profiles', 'posts' ,'comments'));
    }

    public function post()
    {
        $posts = Post::paginate();
        $comments = Comment::paginate();

        $post = Post::where('id', 'user_id')->get();


        return view('website.post', compact('posts' ,'comments', 'post'));
    }

    public function show($categoryid)
    {
      $categories = Category::paginate();

      $posts = Post::where('category_id', $categoryid)->get();

      return view('Forntend.post',compact('posts'));
    }



    public function welcome()
    {
        $user = DB::select('select users.id from users');
        $profiles = Profile::paginate();
        return view('welcome', compact('user', 'profiles'));
    }




    public function service()
    {
        $categories = Category::paginate();

        return view('website.service', compact('categories'));
    }




    public function choose()
    {
        return view('website.choose');
    }


    public function create()
    {
        $posts = Post::all();

        $categories = Category::all();

        return view('website.createpost', compact('posts', 'categories'));
    }


}
