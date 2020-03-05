@extends('Backend.layout.app')

@php
    $page = "Posts";
@endphp

@section('title')
  {{$page}}
@endsection

@section('search')
 <!-- Topbar Search -->
 <form actoin="{{route('posts.index')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." value="{{request()->search}}">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">
          <i class="fa fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>
@endsection

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">

 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-pen"></i> {{$page}} <span class="total">{{$rows->total()}}</span></h1>

 <div class="form-group">
  @if(auth()->user()->hasPermission('create_posts'))

   <a href="{{route('posts.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Create Post</a>
  @else
    <a  class="btn btn-outline-primary disabled"><i class="fa fa-plus"></i> Create Post</a>
  @endif
 </div>

</div>
<div class="row">

@if($rows->count() > 0)
@foreach($rows as $index=>$row)
<div class="col-lg-4 col-md-6 col-sm-12">
 <div class="card border-bottom-primary shadow mb-4">
  <!-- Card Header  -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

     <h6 class="m-0 font-weight-bold text-primary">{{$row->category->name}} </h6>

    </div>
    <!-- Card Body -->
    <div class="card-body">
     <div class="image">

     <img src="{{$row->image_path}}">

     </div>

     <div class="details">
        <h4 class="email"><i class="fa fa-address"></i> {{$row->title}}</h4>
       <h4 class="email"><i class="fa fa-user"></i> {{$row->user->name}}</h4>
       <h4 class="email"><i class="fa fa-content"></i> {{$row->content}}</h4>
       <h4 class="location"><i class="fa fa-map-marker"></i> {{$row->location}}</h4>

      </div>

      <div class="action">

       @if(auth()->user()->hasPermission('delete_posts'))


        <form action="{{route('posts.destroy',['id' => $row->id])}}" method="post">
          {{method_field('delete')}}{{ csrf_field() }}

         <button   class="btn btn-danger"><i class="fa fa-remove"></i> Delete </button>

        </form>

        @else
        <button   class="btn btn-danger disabled"><i class="fa fa-remove"></i> Delete </button>
        @endif

        @if(auth()->user()->hasPermission('update_posts'))


              <a href="{{route('posts.edit',['id' => $row->id])}}" class="btn btn-success">
          <i class="fa fa-edit"></i> Edit</a>

        @else
          <a  class="btn btn-success disabled">
             <i class="fa fa-edit"></i> Edit</a>
        @endif
       </div>


    </div>


 </div>
</div>
@endforeach

@else
<h1><i class="fa fa-frown-o"></i> sorry, not_found_data</h1>
@endif
</div>

@endsection
