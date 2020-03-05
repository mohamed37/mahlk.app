@extends('Backend.layout.app')

@php
    $page = " Edit Contact";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

  <div class="p-5">

   <div class="text-center"> <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-edit"></i> {{$page}}!</h1> </div>

    <form action="{{route('contacts.update',['id'=> $contact->id])}}"  method="POST">

      {{ csrf_field() }}
      {{method_field('put')}}



      <div class="form-group">

        <select  class="form-control" name = "user_id">
         @foreach ($users as $user)
         <option value="{{$user->id}}">{{$user->name}}</option>
         @endforeach
        </select>
      </div>


      <div class="form-group">

       <input type="number" class="form-control" name = "phone" value="{{$contact->phone}}">

      </div>

      <div class="form-group">

       <textarea  class="form-control" name = "message">
        {{$contact->message}}
       </textarea>
      </div>


      <button type="submit" class="btn btn-block btn-primary">{{$page}}</button>

    </form>
  </div>
@endsection
