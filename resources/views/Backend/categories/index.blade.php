@extends('Backend.layout.app')

@php
    $page = "Categories";
@endphp

@section('title')
  {{$page}}
@endsection

@section('search')
 <!-- Topbar Search -->
 <form actoin="{{route('categories.index')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." value="{{request()->search}}">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fa fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>
@endsection

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">

 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-th"></i> {{$page}} <span class="total">{{$rows->total()}}</span></h1>

 <div class="form-group">
 @if(auth()->user()->hasPermission('create_categories'))

   <a href="{{route('categories.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Create Category</a>
 @else
    <a class="btn btn-outline-primary disabled"><i class="fa fa-plus"></i> Create Category</a>
 @endif

</div>

</div>
<div class="row">

@if($rows->count() > 0)
<div class="card-body">
  <div class="table-responsive">
    <table class="table">
     <thead class="text-primary">
      <tr>
        <th> Index</th>
        <th> Name </th>
        <th> Number </th>
        <th> Relation </th>

        <th class="text-right"> Control </th>

      </tr>
     </thead>
     <tbody>
        @foreach ($rows as  $index=>$row)
        <tr>
          <td>{{$index}}</td>
          <td> <i class="{{$row->fonts}}"></i> {{$row->name}}</td>
          <td>{{$row->posts->count()}}</td>
          <td><a href="{{route('posts.index',[$row->id  => 'category_id'])}}">Posts</a></td>
          <td class="row">
          @if(auth()->user()->hasPermission('update_categories'))

           <a href="{{route( 'categories.edit', ['id' => $row->id])}}"  class="btn btn-success col-sm-5">
             <i class="fa fa-edit"></i>
           </a>

           @else
           <a  class="btn btn-success disabled">
              <i class="fa fa-edit"></i> </a>
           @endif

          @if(auth()->user()->hasPermission('delete_categories'))

          <form action="{{route( 'categories.destroy', ['id' => $row->id])}}" method="post">
           {{method_field('delete')}}
              {{ csrf_field() }}
              <button   type="submit" class="btn btn-danger">
              <i class="fa fa-remove"></i>
           </button>
          </form>
          @else
          <button   class="btn btn-danger disabled"><i class="fa fa-remove"></i>  </button>
          @endif

         </td>
        </tr>

        @endforeach
        </tbody>
    </table>
    {!!$rows->links()!!}
  </div>
</div>
@else
<h1 class="err"> <i class="fa fa-frown"></i> sorry, not_found_data</h1>
@endif
</div>

@endsection
