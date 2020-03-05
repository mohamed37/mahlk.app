<?php

namespace App\Http\Controllers\BackEnd;

use App\Ask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    public function index()
    {
        $asks = Ask::paginate();

        return view('Backend.asks.index', compact('asks'));
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'ask'     => 'required',
        ]);

        $data = $request->all();

        $ask = Ask::create($data);

        $ask->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $ask = Ask::findOrFail($id);
        return view('Backend.asks.edit', compact('ask'));
    }

    public function update(Request $request, $id)
    {
        $ask = Ask::findOrFail($id);


        $data = $request->all();

        //dd($request->all());

        $ask->update($data);

        return redirect()->route('asks.index');
    }

    public function destroy($id)
    {
        $ask = Ask::findOrFail($id);
        $ask->delete();
        return redirect()->route('asks.index');
    }
}
