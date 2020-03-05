<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function index(Request $request)
    {
        $rows = Category::paginate();
        return view("Backend.categories.index",compact('rows'));
    }

    public function create()
    {
        return view("Backend.categories.create");
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'fonts' => 'required',

        ]);

        $cat = new Category;

        $cat->name = $request->name;
        $cat->fonts = $request->fonts;


        $cat->save();

        return redirect()->route('categories.index');
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



    public function edit($id)
    {
        $row = Category::findOrFail($id);

        return view("Backend.categories.edit",compact('row'));
    }


    public function update(Request $request, $id)
    {
        $cat = Category::findOrFail($id);

        $cat->update([

            'name' => $request->name,
            'fonts' => $request->fonts,

        ]);

        return redirect()->route('categories.index');
    }



    public function destroy($id)
    {
        $row = Category::findOrFail($id);
        $row->delete();
        return redirect()->route('categories.index');

    }


}
