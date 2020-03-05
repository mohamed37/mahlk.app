@extends('Backend.layout.app')

@php
    $page = " Create Category";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4">{{$page}}!</h1> </div>

     <form action="{{route('categories.store')}}"  method="POST">

        {{ csrf_field() }}
        {{method_field('POST')}}


       <div class="form-group">

        <input type="text" class="form-control @error('name') is-invalid @enderror" name = "name" placeholder="Enter Name">

        @error('name')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>



        <button type="submit" class="btn btn-primary btn-user btn-block">  {{$page}} </button>

       </form>
      </div>





@endsection
