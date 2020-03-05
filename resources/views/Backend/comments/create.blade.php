@extends('Backend.layout.app')

@php
    $page = " Create Comment";
@endphp

@section('title')
 {{$page}}
@endsection

@section('content')

     <div class="p-5">

      <div class="text-center"> <h1 class="h4 text-gray-900 mb-4">{{$page}}!</h1> </div>

     <form action="{{route('comments.store')}}"  method="POST">

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
           
           <select  class="form-control @error('post_id') is-invalid @enderror" name = "post_id">
               <option value="">....</option>
               @foreach ($posts as $post)
                <option value="{{$post->id}}">{{$post->title}}</option>  
               @endforeach
           </select> 
       
               @error('post_id')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
               @enderror        
            </div>
                 


       <div class="form-group">

        <input type="text" class="form-control @error('comment') is-invalid @enderror" name = "comment" placeholder="Enter Comment">

        @error('comment')
         <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
        @enderror
       </div>



        <button type="submit" class="btn btn-primary btn-user btn-block">  {{$page}} </button>

       </form>
      </div>





@endsection
