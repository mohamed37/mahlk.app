
@include('Forntend.navbar')

@foreach ($profiles as $profile)
@if(Auth::user()->id == $profile->user_id)
<div class="profile">

<div class="container">
 <div class="row">

   <!--left side-->
   <div class="col-md-5 col-sm-12">
    <div class="detalis">

        <ul class="menu-box-menu">
            <li>
                <a class="menu-box-tab" href="#6"><span class="icon fontawesome-envelope scnd-font-color"></span>Posts
                    <div class="menu-box-number">{{auth()->user()->posts->count()}}</div></a>
               </li>

             <li>
               <a class="menu-box-tab" href="#8"><span class="icon entypo-paper-plane scnd-font-color"></span>Comments
                <div class="menu-box-number">{{auth()->user()->comments->count()}}</div></a>
             </li>


        </ul>
    </div>
   </div>
    <!-- MIDDLE-CONTAINER -->
   <div class="col-md-7 col-sm-12">
    <div class="image_user">

            <div class="profile-picture big-profile-picture clear">
                <img width="150px" alt="Anne Hathaway picture" src="{{asset(auth()->user()->image_path)}}" >
            </div>
            <h1 class="user-name">{{auth()->user()->name}}</h1>
            <div class="profile-description">
                <ul class="scnd-font-color">
                    <li><i class="fa fa-whatsapp"></i> {{auth()->user()->profile->whatsapp}}</li>
                    <li><i class="fa fa-facebook"></i> {{auth()->user()->profile->facebook}}</li>
                    <li><i class="fa fa-map-marker"></i> {{auth()->user()->profile->address}}</li>
                    <li><i class="fa fa-suitcase"></i> {{auth()->user()->profile->job}}</li>

                </ul>
            </div>
        </div>
    </div>
   </div>
 </div>
</div>
@endif
@endforeach


@include('Forntend.footer')


