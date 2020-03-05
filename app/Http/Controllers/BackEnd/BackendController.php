<?php

namespace App\Http\Controllers\BackEnd;

use App\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{



    protected $model;

    public function __construct(Model $model)
    {
         $this->model = $model;
    }


    public function getModelName()
    {

        return str_plural(strtolower(class_basename($this->model)));

    }
    public function index(Request $request)
    {
        $rows = $this->model->paginate();
        return view("Backend." . $this->getModelName() . ".index",compact('rows'));
    }


    public function create()
    {
        return view("Backend." . $this->getModelName() . ".create");
    }

    public function edit($id)
    {
        $row = $this->model->findOrFail($id);

        return view("Backend." . $this->getModelName() . ".edit",compact('row'));
    }

    public function destroy($id)
    {
        $row = $this->model->findOrFail($id);
        $row->delete();
        return redirect()->route($this->getModelName());

    }


}
