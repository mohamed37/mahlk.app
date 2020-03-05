@extends('Backend.layout.app')

@php
    $page = " Edit User";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4"> <i class="fa fa-edit"></i> {{$page}}!</h1> </div>

      <form action="{{route('users.update',['id'=> $user->id])}}"  method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{method_field('put')}}

        <div class="form-group">
         <div class="photo">
          <i class="fa fa-camera"></i>
          <input type="file" class="form-control-file" name="image" value="{{$user->image_path}}">

           <img src="{{$user->image_path}}">

         </div>
        </div>


       <div class="form-group">

        <input type="text" class="form-control" value="{{$user->name}}" name = "name">

       </div>

       <div class="form-group">

        <input type="text" class="form-control " name = "fullname" value="{{$user->fullname}}">


       </div>

       <div class="form-group">

         <input type="email" class="form-control" value="{{$user->email}}" name = "email">

        </div>

        <div class="form-group">

         <input type="password" class="form-control" placeholder="If Leaves It, Will Keep Your Old Password"   name="password" >

        </div>


        <div class="form-group">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">

                @php
                  $models = ["users" , "posts" , "categories","comments", "profiles","contacts"];
                  $maps   = ["create","read", "update", "delete"];
                @endphp

              <ul class="nav nav-tabs">
               @foreach($models as $index=>$model)

                <li class="{{$index == '0' ? 'active' : ''}}">
                 <a href="#{{$model}}" class="nav-link" data-toggle="tab"> {{$model}} </a></li>

               @endforeach
              </ul>

              <div class="tab-content">

              @foreach ($models as $index=>$model)

               <div class="tab-pane fade show  {{$index == '0' ? 'active' : '' }}" id="{{$model}}">

                @foreach($maps as $map)

                <label><input type="checkbox" name="permissions[]"
                        value="{{$map ."-". $model}}"
                        {{$user->hasPermission($map ."_" . $model) ? 'checked' : ''}}> {{$map}}</label>


                @endforeach

                </div>

               @endforeach
             </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->

        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">  {{$page}}</button>

       </form>
      </div>





@endsection
