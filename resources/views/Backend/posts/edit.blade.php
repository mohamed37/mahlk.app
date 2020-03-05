@extends('Backend.layout.app')

@php
    $page = " Edit Post";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

  <div class="p-5">

   <div class="text-center"> <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-edit"></i> {{$page}}!</h1> </div>

    <form action="{{route('posts.update',['id'=> $row->id])}}"  method="POST" enctype="multipart/form-data">

      {{ csrf_field() }}
      {{method_field('put')}}




      <div class="form-group">
        <div class="photo">
        <i class="fa fa-camera"></i>
        <input type="file" class="form-control-file" name="image" value="{{$row->image_path}}">

          <img src="{{$row->image_path}}">

        </div>
      </div>

      <div class="form-group">

        <select  class="form-control" name = "user_id">
         @foreach ($users as $user)
         <option value="{{$user->id}}" {{$row->user_id == $user->id ? 'selected' : ' '}}>{{$user->name}}</option>
         @endforeach
        </select>
      </div>

       <div class="form-group">

        <select  class="form-control" name = "category_id">
           @foreach ($categories as $category)
            <option value="{{$category->id}}" {{$row->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
           @endforeach
        </select>


       </div>

      <div class="form-group">

       <input type="text" class="form-control" name = "title" value="{{$row->title}}">

      </div>

      <div class="form-group">

       <textarea class="form-control" name = "content">  {{$row->content}} </textarea>

      </div>


      <div class="form-group">

       <input type="text" class="form-control" name="location" value="{{$row->location}}">

      </div>

      <button type="submit" class="btn btn-block btn-primary">{{$page}}</button>

    </form>
  </div>
@endsection
