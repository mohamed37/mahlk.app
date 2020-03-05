@extends('Backend.layout.app')

@php
    $page = " Edit Category";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

  <div class="p-5">

   <div class="text-center"> <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-edit"></i> {{$page}}!</h1> </div>

    <form action="{{route('categories.update',['id'=> $row->id])}}"  method="POST">

      {{ csrf_field() }}
      {{method_field('put')}}



      <div class="form-group">

       <input class="form-control" name = "name" value="{{$row->name}}">

      </div>

    <button type="submit" class="btn btn-block btn-primary">{{$page}}</button>

    </form>
  </div>
@endsection
