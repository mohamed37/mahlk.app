@extends('Backend.layout.app')

@php
    $page = " Create Post";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4">Create Post!</h1> </div>

     <form action="{{route('posts.store')}}"  method="POST" enctype="multipart/form-data">

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

         <select  class="form-control @error('user_id') is-invalid @enderror" name = "user_id">
          <option value="">....</option>
          @foreach ($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
         </select>

            @error('user_id')
             <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>

        <div class="form-group">

        <select  class="form-control @error('category_id') is-invalid @enderror" name = "category_id">
            <option value="">....</option>
            @foreach ($categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

            @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>


       <div class="form-group">

        <input type="text" class="form-control @error('title') is-invalid @enderror" name = "title" placeholder="Enter Tilte">

        @error('title')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>

       <div class="form-group">

        <textarea class="form-control @error('content') is-invalid @enderror" name = "content"  placeholder="Enter Content">
        </textarea>
        @error('content')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


       <div class="form-group">

        <input type="text" class="form-control @error('location') is-invalid @enderror " name="location" placeholder="location">
        @error('location')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


        <button type="submit" class="btn btn-primary btn-user btn-block">  Create Post </button>

       </form>
      </div>





@endsection
