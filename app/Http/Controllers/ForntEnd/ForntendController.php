<?php

namespace App\Http\Controllers\ForntEnd;

use App\Ask;
use App\Contact;
use App\Feadback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class ForntendController extends Controller
{
    public function index()
     {
         $opinions = Contact::all();
         return view('website.contact')->with('opinions',$opinions);
     }

     public function ask()
     {
         $asks = Ask::paginate();

         return view('website.asks', compact('asks'));
     }


     public function gallery()
     {
         $posts = Post::paginate();
         return view('website.gallery', compact('posts'));
     }

     public function show()
     {
         $feads = Feadback::paginate();
         return view('website\testimonials', compact('feads'));
     }

     public function store(Request $request)
     {
         if($request->ajax()) {
            $this->validate($request, [
                    'user_id' => 'required',
                    'content'     => 'required',
         ]);
       }

        $data = $request->all();

       $fead = Feadback::create($data);
        /*  $fead = new Feadback();

         $fead->user_id = $request->user_id;
         $fead->content = $request->content;

         $fead->save();

         return redirect()->route('testimonials');
         */
     }
}
