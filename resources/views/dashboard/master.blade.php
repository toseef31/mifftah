<!-- including header --> 
@include('dashboard.partials.header')

<!-- include side bar --> 
@include('dashboard.partials.sidebar')

<!-- include Bread Cum--> 
@include('dashboard.partials.breadcum')

<!-- yield the main page conten --> 
@yield('content')

<!-- including footer --> 
@include('dashboard.partials.footer')