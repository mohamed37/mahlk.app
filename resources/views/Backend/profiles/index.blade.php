@extends('Backend.layout.app')

@php
    $page = "Profile";
@endphp

@section('title')
  {{$page}}
@endsection

@section('search')
 <!-- Topbar Search -->
 <form actoin="{{route('profiles.index')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

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

 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-th"></i> {{$page}} <span class="total">{{$profiles->total()}}</span></h1>


@if(auth()->user()->hasPermission('create_profiles'))
<div class="form-group">

    <a href="{{route('profiles.create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Create Profile</a>

 </div>

 @else
 <div class="form-group">

    <a href="" class="btn btn-outline-primary disabled"><i class="fa fa-plus"></i> Create User</a>

  </div>
 @endif

</div>
<div class="profile">

@if($profiles->count() > 0)
<div class="card-body">
  <div class="table-responsive">
    <table class="table">
     <thead class="text-primary">
      <tr>
        <th> Index</th>
        <th> Name </th>
        <th> Image </th>
        <th> Address </th>
        <th> Whatsapp </th>
        <th> Facebook </th>
        <th> Job </th>

        <th class="text-right"> Control </th>

      </tr>
     </thead>
     <tbody>
        @foreach ($profiles as  $index=>$profile)
        <tr>
          <td>{{$index}}</td>
          <td>{{$profile->user->name}}</td>
          <td><img src="{{asset($profile->user->image_path)}}" style="width:100px"></td>

          <td>{{$profile->address}}</td>
          <td>{{$profile->whatsapp}}</td>
          <td>{{$profile->facebook}}</td>
          <td>{{$profile->job}}</td>


          <td class="profile" style="width: 201px;
          display: inline-flex;">

          @if(auth()->user()->hasPermission('update_profiles'))

           <a href="{{route( 'profiles.edit', ['id' => $profile->id])}}"  class="btn btn-success col-sm-5">
             <i class="fa fa-edit"></i> edit
           </a>

           @else
           <a class="btn btn-success col-sm-5 disabled">
            <i class="fa fa-edit"></i> edit
          </a>
           @endif

           @if(auth()->user()->hasPermission('delete_profiles'))
          <form action="{{route( 'profiles.destroy', ['id' => $profile->id])}}" method="post">
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
    {!!$profiles->links()!!}
  </div>
</div>
@else
<h1 class="err"> <i class="fa fa-frown"></i> sorry, not_found_data</h1>
@endif
</div>

@endsection
