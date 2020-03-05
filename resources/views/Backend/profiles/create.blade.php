@extends('Backend.layout.app')

@php
    $page = " Create Profile";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4">Create Profile!</h1> </div>

     <form action="{{route('profiles.store')}}"  method="POST">

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

        <input type="text" class="form-control @error('address') is-invalid @enderror" name = "address" placeholder="Enter address">

        @error('address')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>

       <div class="form-group">

        <input type="number" class="form-control @error('whatsapp') is-invalid @enderror" name = "whatsapp"  placeholder="Enter whatsapp">

        @error('whatsapp')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


       <div class="form-group">

        <input type="email" class="form-control @error('facebook') is-invalid @enderror " name="facebook" placeholder="facebook">
        @error('facebook')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


       <div class="form-group">

        <input type="text" class="form-control @error('job') is-invalid @enderror " name="job" placeholder="job">
        @error('job')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>


        <button type="submit" class="btn btn-primary btn-user btn-block">  Create Post </button>

       </form>
      </div>





@endsection
