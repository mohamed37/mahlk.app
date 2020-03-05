@extends('Backend.layout.app')

@php
    $page = " Create User";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1> </div>

     <form action="{{route('users.store')}}"  method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{method_field('POST')}}

        <div class="form-group">

         <input type="file" class="form-control-file  @error('image') is-invalid @enderror" name = "image">
         @error('image')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
         @enderror
        </div>


       <div class="form-group">

        <input type="text" class="form-control @error('name') is-invalid @enderror" name = "name" placeholder="First Name">

        @error('name')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>

       <div class="form-group">

        <input type="text" class="form-control @error('fullname') is-invalid @enderror" name = "fullname" placeholder="Enter fullname">

        @error('fullname')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>

       <div class="form-group">

        <input type="email" class="form-control @error('email') is-invalid @enderror" name = "email"  placeholder="Email Address">

        @error('email')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


       <div class="form-group">
        <i class="fa fa-eye-slash show-pass"></i>
        <input type="password" class="form-control password @error('password') is-invalid @enderror " name="password" placeholder="Password">
        @error('password')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


       <div class="form-group">

        <input type="password"
               class="form-control @error('password_confirmation') is-invalid @enderror"
               name = "password_confirmation"
               placeholder="Password_Confirmation">
        @error('password_confirmation')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror

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

                <label><input type="checkbox" class=" @error('permissions') is-invalid @enderror" name="permissions[]"
                        value="{{$map ."-". $model}}" > {{$map}}</label>


                @endforeach

                </div>

               @endforeach
             </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
            @error('permissions[]')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
            </span>
           @enderror

        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">  Register Account </button>

       </form>
      </div>





@endsection
