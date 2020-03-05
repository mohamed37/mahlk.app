@extends('Backend.layout.app')

@php
    $page = " Create Contact";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4">{{$page}}!</h1> </div>

     <form action="{{route('contacts.store')}}"  method="POST">

        {{ csrf_field() }}
        {{method_field('POST')}}


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

        <input type="number" class="form-control @error('phone') is-invalid @enderror" name = "phone" placeholder="Enter phone">

        @error('phone')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>

       <div class="form-group">

        <teaxtarea class="form-control @error('message') is-invalid @enderror" name = "message"  placeholder="Enter message">

        </teaxtarea>
        @error('message')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">  Create Post </button>

       </form>
      </div>





@endsection
