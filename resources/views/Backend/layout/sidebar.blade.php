 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa fa-job"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MAHLK.APP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="">
        <i class="fa fa-fw fa-dashboard"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      ADMINS
    </div>

    <!-- Nav Item - Users -->
    <li class="nav-item ">
     <a class="nav-link" href="{{route('users.index')}}">
      <i class="fa fa-fw fa-users"></i>
      <span>Users</span></a>
    </li>


    <!-- Nav Item - posts -->
    <li class="nav-item ">
        <a class="nav-link" href="{{route('posts.index')}}">
          <i class="fa fa-fw fa-book"></i>
          <span>Posts</span></a>
    </li>

     <!-- Nav Item - categories -->

     <li class="nav-item ">
        <a class="nav-link" href="{{route('categories.index')}}">
          <i class="fa fa-fw fa-th"></i>
          <span>Categories</span></a>
    </li>

    <!-- Nav Item - Comments -->
       <li class="nav-item ">
       <a class="nav-link" href="{{route('comments.index')}}">
         <i class="fa fa-fw fa-comments"></i>
         <span>Comments</span></a>
   </li>


   <!-- Nav Item - Asks -->
   <li class="nav-item ">
    <a class="nav-link" href="{{route('asks.index')}}">
     <i class="fa fa-fw fa-question"></i>
     <span>Asks</span></a>
   </li>




    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      USERS
    </div>

    <!-- Nav Item - Profiles -->
       <li class="nav-item ">
       <a class="nav-link" href="{{route('profiles.index')}}">
         <i class="fa fa-fw fa-id-card"></i>
         <span>Profiles</span></a>
   </li>




  <!-- Nav Item - Contacts -->
   <li class="nav-item ">
     <a class="nav-link" href="{{route('contacts.index')}}">
       <i class="fa fa-fw  fa-wifi"></i>
       <span>Contacts</span></a>
 </li>

 <!-- Nav Item - Chat -->
    <li class="nav-item ">
     <a class="nav-link" href="{{route('chat')}}">
      <i class="fa fa-fw "></i>
      <span>Chat</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class=" border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
