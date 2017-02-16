@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15 mgnB20">
      <h4 class="robotolight fontsize24 graytext mgnB10">WishList : Mywishlist (<?= count($data) ?>) </h4>
      <h6 class="robotoregular lgraytext font-size14 mgnT05 mgnB05  fulwidthm left">By: <?= (Auth::check())?Auth::user()->name:'';?></h6>
    </section>
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <div class="whislistings fulwidthm left">
        <div class="row">
          
          @foreach ($data as $active_wishlists)
              @if($active_wishlists != null)
            <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12 listinwihlist mgnB10">
              <div class=" newlistingitem fulwidthm">
                <div class="newlistingitem_in "><a href="{{ url('home/preview/') }}/{{$active_wishlists->id}}" class="graybg" title="{{$active_wishlists->propertytype}},{{$active_wishlists->region}},{{$active_wishlists->street}}">
                    <div class="listingimageouter fulwidthm left">
                      <div class="listingimage">
                        <div class="featuredim"><img title="Featured Property" src="{{ asset('images/featured.png')}}"></div>
                        <div class=" listinimgcover">
                          <div class="listinimgcoverin media-cover"><img src="{{asset('userdata/List/Thumb/1/8/beautiful-21864_960_720.jpg')}}" alt="" class="img-responsive-height"></div>
                        </div>
                        <div class="photocount1">4 Photos</div>
                        <div class="listinname whitetext fontsize13 pdg05">{{$active_wishlists->propertytype}},{{$active_wishlists->region}},{{$active_wishlists->street}} </div>
                      </div>
                    </div>
                  </a>
                  <div class="newlistingdetails fulwidthm left graybg">
                    <div class="n_l_discptn">
                      <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular fontsize16" title="Price :$ {{$active_wishlists->price}}">$ {{$active_wishlists->price}}</div>
                      <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular fontsize16" title="Home Size : {{$active_wishlists->homesize}} Sq.ft">{{$active_wishlists->homesize}} Sq.ft</div>
                      <div class="nl_bottom fulwidthm left pdg10">
                        <div class="left">
                          <a href="{{ url('/remove/wishlist/'.$active_wishlists->id) }}"><span class="removelstfromwish  btn btn-danger" id="41">Remove</span></a>
                        </div>
                        <div class="n_botmrd right fontsize16 ">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">{{$active_wishlists->beds}}</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">{{$active_wishlists->bathrooms}}</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          
          @endif
          @endforeach
        
        
        </div>
      
      </div>
    </section>
  
  
  </div>

@endsection