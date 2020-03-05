<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>محلك </title>

        <!-- Fonts -->
       <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

        <link rel="stylesheet" href="{{asset('css/aos.css')}}">

        <link rel="stylesheet" href="{{asset('css/web.css')}}">

        <link rel="stylesheet" href="{{asset('css/profile.css')}}">





        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">






    </head>
    <body>

        <div class="site-wrap">




            <!-- .site-mobile-menu -->




<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<div class="site-navbar-wrap js-site-navbar bg-white">

    <div class="container">
      <div class="site-navbar bg-light">
        <div class="row align-items-center">
          <div class="col-10">
              <nav class="site-navigation" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span>
                        </a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li> <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto " style="display:inline-block">
                                <!-- Authentication Links -->
                                @guest
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                 </li>

                                @if (Route::has('register'))
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                 </li>
                                @endif
                                @else
                                 <li class="nav-item dropdown">
                                    <img src="{{asset(Auth::user()->image_path)}}" class="user_image">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>



                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{route('profile',['user_id'])}}">
                                        <i class="fa fa-photo"></i> My Profile
                                    </a>

                                    <a class="dropdown-item" href="{{route('post',['user_id'])}}">
                                        <i class="fa fa-flag"></i> My Posts
                                    </a>

                                    <a class="dropdown-item" href="{{route('chat')}}">
                                        <i class="fa fa-voice"></i> My Chat
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>  {{ __('Logout') }}
                                    </a>




                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </div>
                                 </li>

                                @endguest




                            </ul>
                        </li>
                      <li class="has-children">
                        <a href="#">من نحن</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="{{route('testimonials')}}">قالوا عنا</a></li>
                          <li><a href="{{route('gallery')}}">مبيعاتنا</a></li>
                          <li><a href="{{route('choose')}}">لما اخترتنا</a></li>

                          <li class="has-children">
                            <a href="#">قائمة مختصرة</a>
                            <ul class="dropdown">
                              <li><a href="{{route('testimonials')}}">قالوا عنا</a></li>
                              <li><a href="{{route('gallery')}}">مبيعاتنا</a></li>
                              <li><a href="{{route('choose')}}"> لما اخترتنا</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="{{route('service')}}">خدماتنا</a></li>

                      <li><a href="{{route('asks')}}">اسئلة</a></li>
                      <li><a href="{{route('contact')}}">للتواصل معانا</a></li>
                      <li><a href="{{route('welcome')}}"><span class="d-inline-block bg-primary text-white btn btn-primary">الرئيسية</span></a></li>

                    </ul>
                  </div>
              </nav>
          </div>




          <div class="col-2">
           <h2 class="mb-0 site-logo">
            <a href="#" class="font-weight-bold">
            محلك
              <img src="{{asset('fonts/showcase.png')}}" width="20px">

            </a>
           </h2>
          </div>


        </div>
      </div>
    </div>
  </div>
