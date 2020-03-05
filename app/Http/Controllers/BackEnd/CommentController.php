<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\User;
use App\Post;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comts = Comment::when($request->search, function($query) use($request) {
               return $query->where('comment', 'Like', '%' . $request->search . '%');
        })->paginate(8);
        return view('Backend.comments.index',compact('comts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $posts = Post::all();


        return view('Backend.comments.create',compact('users','posts'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'post_id' => 'required',
            'comment' => 'required',
        ]);

        $request_data = $request->all();
        $comt = Comment::create($request_data);

        $comt->save();

         return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comt = Comment::findOrFail($id);

        $users = User::all();
        $posts = Post::all();

        return view('Backend.comments.edit',compact('comt','users','posts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comt = Comment::findOrFail($id);
        $request_date = $request->all();
        $comt->update($request_date);

        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comt = Comment::findOrFail($id);
        $comt->delete();
        return redirect()->route('comments.index');

    }
}
