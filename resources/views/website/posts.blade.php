@include('Forntend.navbar')
<div class="container">
    <div class="row">
      <div class="col-12 offset-1">
        <div class="create">
            <div class="d-flex bd-highlight">

               <a href="{{route('create.posts')}}" class="btn btn-outline-success">
                <i class="fa fa-plus"></i> Create Post</a>

            </div>

        </div>

      </div>
    </div>
</div>

@foreach ($posts as $index=>$post)



<div class="my-post">
    <div class="container-fuild">
     <div class="row">

      <div class="col-7 offset-md-1">
        <div class="post">
            <div class="d-flex bd-highlight">

                <div class="img_cont">
                  <img id="image-user" src="{{$post->user->image_path}}" class="userimg">
                  <span id="user-name">{{$post->user->name}} </span>
                </div>

            </div>
         <div class="title">
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
         </div>

         <div class="image-post">
            <img src="{{asset($post->image_path)}}">
         </div>

         <h6>
             <i class="fa fa-clock-o"></i> Time: {{date(' H:I A', strtotime($post->created_at))}}
             <i class="fa fa-map-marker"></i> {{$post->location}}
         </h6>



            <div class="comment" >

                <form action="{{route('comments.store')}}" method="POST">
                  {{ csrf_field() }}
                  {{method_field('POST')}}
                  <div class="row form-group">
                    <div class="col-5 mb-3 mb-md-0">
                   <input type="text" name="comment" class="form-control @error('comment') is-invalid @enderror" placeholder="Write Comment...">

                   @error('comment')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror

                    <button type="submit" class="btn btn-primary"><i class="fa fa-comment"></i></button>

                  </div>
                 </div>

                 <input type="text" name="user_id" value ="{{auth()->user()->id}}" hidden>

                 <input type="text" name="post_id" value ="{{$post->id}}" hidden>

                </form>



                 @foreach ($comments as $index=>$comment)
                  @if($post->id == $comment->post_id)
                  <div class="row">
                   <div class="col-sm-12">
                    <img src="{{asset($comment->user->image_path)}}" class="userimage">
                      {{$comment->user->name}}
                      <h4 class="comment-user"> {{$comment->comment}} </h4>
                      <span>{{$comment->created_at}}</span>
                      <hr style="width:60%">
                   </div>
                  </div>

                 @endif
                 @endforeach

            </div>


        </div>
      </div>
     </div>
    </div>
</div>





@endforeach
@include('Forntend.footer')


