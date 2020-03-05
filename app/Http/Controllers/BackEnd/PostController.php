<?php

namespace App\Http\Controllers\BackEnd;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
use App\User;
use App\Category;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $rows  = Post::When($request->search, function($query) use($request){
            return $query->where('name', 'Like', '%' . $request->search . '%');
             })->paginate();

        return view('Backend\posts\index',compact('rows'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();

        if($categories->count() > 0)

         return view("Backend.posts.create",compact('users','categories'));

        else

         return view('Backend.categories.create');
    }



    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id'       => 'required',
            'category_id'   => 'required',
            'image'         => 'required',
            'title'         => 'required',
            'content'       =>'required',
            'location'      => 'required'
        ]);

        $request_data = $request->all();

        $request_data = $request->except(['image']);

        if($request->image)
        {
            Image::make($request->image)->resize('300', null, function($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/posts_images/'.$request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }

        //dd($request_data);

        $post = Post::create($request_data);

        $post->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $row = Post::findOrFail($id);
        $users = User::all();
        $categories = Category::all();


        return view("Backend.posts.edit",compact('row','users','categories'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request_data = $request->except(['image']);

        if($request->image)
        {
            Image::make($request->image)->resize('300', null, function($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/posts_images/'.$request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }

        $post->update($request_data);

        return redirect()->route('posts.index');

    }

    public function destroy($id)
    {
        $row = Post::findOrFail($id);
        $row->delete();
        return redirect()->route('posts.index');

    }
}
