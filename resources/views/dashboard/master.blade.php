<!-- including header -->
<style>
  footer.footer{
    display:none !important;
  }
</style>
@include('dashboard.partials.header')

<!-- include side bar -->
@include('dashboard.partials.sidebar')

@include('dashboard.partials.breadcum')
<!-- include Bread Cum-->

<!-- yield the main page conten --> 
@yield('content')

<!-- including footer --> 
@include('dashboard.partials.footer')