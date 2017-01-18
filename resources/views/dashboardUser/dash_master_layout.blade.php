@include('partials.header')
<div class="innerwraperful  pdgT15 fulwidthm left">
 <div class="resultwraperfull">
  <div class=" containerfluidgc">
   <div class="mainontainer_in fulwidthm left">
    @include('dashboardUser.partials.sidebar_dashboard')
    <!-- detailsfullright ends -->

    @yield('content') 
    
   </div>
   <!-- detailsfullLeft ends -->
  </div>
  <!-- listing wraper ends -->
  <!-- mainontainer_in ends -->
 </div>
 <!-- mainindexcontainer ends -->
</div>
@include('partials.footer')