@extends('Backend.layout.app')

@php
    $page = " Answer";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

  <div class="p-5">

   <div class="text-center"> <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-edit"></i> {{$page}}!</h1> </div>

    <form action="{{route('asks.update',['id'=>$ask->id])}}"  method="POST">

      {{ csrf_field() }}
      {{method_field('put')}}



      <div class="form-group">

        <input type="text" class="form-control" name="user_id" value="{{$ask->user_id}}" >

       </div>

      <div class="form-group">

       <input type="text" class="form-control" name="ask" value="{{$ask->ask}}" >

      </div>

      <div class="form-group">

        <input type="text" class="form-control" name="answer" value="{{$ask->answer}}">

       </div>

      <button type="submit" class="btn btn-block btn-primary">{{$page}}</button>

    </form>
  </div>
@endsection
