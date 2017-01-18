
<!-- START APP HEADER -->
<div class="app-header">
 <ul class="app-header-buttons">
  <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
  <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-list4"></span></a></li>
 </ul>
 <form class="app-header-search" action="" method="post">        
  <input type="text" name="keyword" placeholder="Search">
 </form>    

 <ul class="app-header-buttons pull-right">
  <li>
   <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls">
    <img src="{{ asset('_admin/assets/images/users/user_1.jpg') }}" alt="John Doe">
    <div class="contact-container">
     <a href="#"><?= Auth::user()->name ?></a>
     <span>Administrator</span>
    </div>
    <div class="contact-controls">
     <div class="dropdown">
      <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-cog"></span></button>                        
      <ul class="dropdown-menu dropdown-left">
       <li><a href="{{ url('/admin/udatecuser') }}"><span class="icon-cog"></span> Settings</a></li>  
       <li class="divider"></li>
       <li><a href="{{ url('/logout') }}"><span class="icon-exit-right"></span> Log Out</a></li> 
      </ul>
     </div>                    
    </div>
   </div>
  </li>        
 </ul>
</div>
<!-- END APP HEADER  -->
<div class="app-heading app-heading-bordered app-heading-page">
 <div class="icon icon-lg">
  <span class="icon-laptop-phone"></span>
 </div>
 <div class="title">
  <h1>Welcome to  - Revolutionary Mifftah</h1>
  <p>Build According to your Needs </p>
 </div>               
 <!--<div class="heading-elements">
     <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
 </div>-->
</div>