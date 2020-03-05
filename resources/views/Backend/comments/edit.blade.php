@extends('Backend.layout.app')

@php
    $page = " Edit Comment";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

  <div class="p-5">

   <div class="text-center"> <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-edit"></i> {{$page}}!</h1> </div>

    <form action="{{route('categories.update',['id'=> $comt->id])}}"  method="POST">

      {{ csrf_field() }}
      {{method_field('put')}}

       <div class="form-group">

        <select  class="form-control @error('user_id') is-invalid @enderror" name = "user_id">
         @foreach ($users as $user)
         <option value="{{$user->id}}"{{$comt->user_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
         @endforeach
        </select>

           @error('user_id')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
            </span>
           @enderror
       </div>

       <div class="form-group">

        <select  class="form-control @error('post_id') is-invalid @enderror" name = "post_id">

            @foreach ($posts as $post)
             <option value="{{$post->id}}" {{$comt->post_id == $post->id ? 'selected' : ''}}>{{$post->title}}</option>
            @endforeach
        </select>

            @error('post_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>


      <div class="form-group">

       <input class="form-control" name = "name" value="{{$comt->comment}}">

      </div>

    <button type="submit" class="btn btn-block btn-primary">{{$page}}</button>

    </form>
  </div>
@endsection
