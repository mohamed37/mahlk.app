@extends('Backend.layout.app')

@php
    $page = "Ask";
@endphp

@section('title')
  {{$page}}
@endsection

@section('search')
 <!-- Topbar Search -->
 <form actoin="{{route('asks.index')}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

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

 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-th"></i> {{$page}} <span class="total">{{$asks->total()}}</span></h1>

</div>
<div class="profile">

@if($asks->count() > 0)
<div class="card-body">
@foreach ($asks as $index=>$ask)
<div class="col-sm-12">
    <div class="card border-bottom-primary shadow mb-4">
     <!-- Card Header  -->
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

        <h6 class="m-0 font-weight-bold text-primary">{{$index}} </h6>

       </div>
       <!-- Card Body -->
       <div class="card-body">
        <div class="row">

          <div class="col-sm-12">

            <div class="asks text-right">
                <h2>{{$ask->ask}}</h2>
                <span>{{$ask->answer}}</span>
            </div>


            <div class="action">


                <ul class=" list-unstyled buttons">
                <li> <form action="{{route('categories.destroy', ['id'=> $ask->id])}}" method="post">
                  {{ csrf_field() }} {{method_field('delete')}}

                  <button   class="btn btn-danger"><i class="fa fa-remove"></i> </button>

                 </form>
                </li>
                <li>

                 <a href="{{route('asks.edit', ['id' => $ask->id])}}" class="btn btn-outline-primary">
                    Answer
                 </a>
                </li>
                </ul>
               </div>
        </div>
        </div>




       </div>


    </div>
   </div>
@endforeach
</div>
@else
<h1 class="err"> <i class="fa fa-frown-o"></i> sorry, not_found_data</h1>
@endif
</div>

@endsection
