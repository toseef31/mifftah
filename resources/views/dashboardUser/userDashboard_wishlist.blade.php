@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15 mgnB20">
      <h4 class="robotolight fontsize24 graytext mgnB10">WishList : Mywishlist (<?= count($data) ?>) </h4>
      <h6 class="robotoregular lgraytext font-size14 mgnT05 mgnB05  fulwidthm left">By: <?= (Auth::check()) ? Auth::user()->name : '';?></h6>
    </section>
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <div class="whislistings fulwidthm left">
        <div class="row">
          
          @foreach ($data as $active_wishlists)
            <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12 listinwihlist mgnB10">
              <div class=" newlistingitem fulwidthm">
                <div class="newlistingitem_in ">
                  <a href="{{ url('search/preview/') }}/{{$active_wishlists->wishitem->id}}" class="graybg" title="{{$active_wishlists->wishitem->propertytype}},{{$active_wishlists->wishitem->region}},{{$active_wishlists->wishitem->street}}">
                    <div class="listingimageouter fulwidthm left">
                      <div class="listingimage">
                        <div class="featuredim">
                          <?php foreach ($active_wishlists->wishitem->imagedata as $listingimage) { ?>
                          {{--<img title="Featured Property" src="{{ asset('uploads/'.$listingimage->name) }}">--}}
                          <?php break;}?>
                        </div>
                        <div class=" listinimgcover">
                          <?php foreach ($active_wishlists->wishitem->imagedata as $listingimage) { ?>
                          {{--<img title="Featured Property" src="{{ asset('uploads/'.$listingimage->name) }}">--}}
                          <div class="listinimgcoverin media-cover"><img src="{{asset('uploads/'.$listingimage->name) }}" alt="" class="img-responsive-height">
                          </div>
                          <?php break;}?>
                        </div>
                        <div class="photocount1"><?= count($active_wishlists->wishitem->imagedata) ?></div>
                        <div class="listinname whitetext fontsize13 pdg05">
                          {{$active_wishlists->wishitem->propertytype}} , {{$active_wishlists->wishitem->region}} , {{$active_wishlists->wishitem->street}}
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="newlistingdetails fulwidthm left graybg">
                    <div class="n_l_discptn">
                      <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular fontsize16" title="Price :$ {{$active_wishlists->wishitem->price}}">$ {{$active_wishlists->wishitem->price}}</div>
                      <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular fontsize16" title="Home Size : {{$active_wishlists->wishitem->homesize}} Sq.ft">{{$active_wishlists->wishitem->homesize}} Sq.ft</div>
                      <div class="nl_bottom fulwidthm left pdg10">
                        <div class="left">
                          <a href="{{ url('/remove/wishlist/'.$active_wishlists->wishitem->id) }}"><span class="removelstfromwish  btn btn-danger" id="41"><?= $lang[623][$current] ?></span></a>
                        </div>
                        <div class="n_botmrd right fontsize16 ">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">{{$active_wishlists->wishitem->beds}}</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">{{$active_wishlists->wishitem->bathrooms}}</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        
        
        </div>
      
      </div>
    </section>
  
  
  </div>

@endsection