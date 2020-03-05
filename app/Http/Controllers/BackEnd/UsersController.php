<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['Permission:read_users'])->only('read');
        $this->middleware(['Permission:create_users'])->only('create');

        $this->middleware(['Permission:update_users'])->only('update');
        $this->middleware(['Permission:delete_users'])->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        $users = User::paginate();

        return view('Backend.users.index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.users.create');
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
            'name'       => 'required',
            'fullname'   => 'required',
            'email'      => 'required',
            'image'      => 'required',
            'password'   => 'required|confirmed',
            'permissions' => 'required|min:1'

        ]);

        $request_data = $request->all();

        $request_data =  $request->except(['password','password_confirmation','image','permissions']);

        //Make Hash Password
        $request_data['password'] = Hash::make($request->password);

        //Make Image
        if($request->image)
        {
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/users_images/'. $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }//End Of Make Image


        $user = User::create($request_data);

        //Make Permissions
        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);

        $user->save();

        return redirect()->route('users.index');
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
        $user = User::findOrFail($id);

        return view('Backend.users.edit', compact('user'));
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
        $user = User::findOrFail($id);


        $request_data = $request->except(['password','image','permissions']);

        if(request()->has('password') && request()->get('password') != '')
        {
         $request_data['password'] = Hash::make($request->password);
        }


        if($user->image)
        {
         if($request->image)
         {
            //Storage::disk('public_uploads')->delete('uploads/users_images/'. $user->image);

            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/users_images/'. $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
         }
        }


        $user->update($request_data);

         //Make Permissions[]
         $user->syncPermissions($request->permissions);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
