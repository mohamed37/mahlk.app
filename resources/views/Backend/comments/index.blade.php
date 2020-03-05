@extends('Backend.layout.app')

@php
    $page = "comments";
@endphp

@section('title')
  {{$page}}
@endsection

@section('search')
 <!-- Topbar Search -->
 <form actoin="{{route('comments.index')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

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

 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-th"></i> {{$page}} <span class="total">{{$comts->total()}}</span></h1>

 <div class="form-group">
  @if(auth()->user()->hasPermission('create_comments'))

   <a href="{{route('comments.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Create Comment</a>
  @else
   <a  class="btn btn-outline-primary disabled">
      <i class="fa fa fa-plus"></i>  Create Comment</a>
  @endif

</div>

</div>
<div class="row">

@if($comts->count() > 0)
<div class="card-body">
  <div class="table-responsive">
    <table class="table">
     <thead class="text-primary">
      <tr>
        <th> Index</th>
        <th> Comment </th>
        <th> UserName </th>
        <th> PostTitle </th>


        <th class="text-right"> Control </th>

      </tr>
     </thead>
     <tbody>
        @foreach ($comts as  $index=>$comt)
        <tr>
          <td>{{$index}}</td>
          <td>{{$comt->comment}}</td>

          <td>{{$comt->user->name}}</td>


          <td>{{$comt->post->title}}</td>

          <td class="row">
          @if(auth()->user()->hasPermission('update_comments'))

           <a href="{{route( 'comments.edit', ['id' => $comt->id])}}"  class="btn btn-success col-sm-5">
             <i class="fa fa-edit"></i> edit
           </a>

          @else
           <a  class="btn btn-success disabled">
              <i class="fa fa-edit"></i> Edit</a>
          @endif

          @if(auth()->user()->hasPermission('delete_comments'))

          <form action="{{route( 'comments.destroy', ['id' => $comt->id])}}" method="post">
           {{method_field('delete')}}
              {{ csrf_field() }}
              <button   type="submit" class="btn btn-danger">
              <i class="fa fa-remove"></i> Delete
           </button>
          </form>


          @else
          <button   class="btn btn-danger disabled"><i class="fa fa-remove"></i> Delete </button>
          @endif

         </td>
        </tr>

        @endforeach
        </tbody>
    </table>
    {!!$comts->links()!!}
  </div>
</div>
@else
<h1><i class="fa fa-frown-o"></i> sorry, not_found_data</h1>
@endif
</div>

@endsection
