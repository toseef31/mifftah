
<section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
<div class="wishlistwrp fulwidthm left">
 <h4 class="robotolight fontsize24 graytext">
My WishLists  (<?= count($wishlist) ?>) </h4>
</div>

<div class="wishlistshowwrp fulwidthm mgnT25 left">
 @foreach ($wishlist as $active_wishlists)
 
 <div class="col-lg-4 col-md-4 col-sm-4  col-xs-6 resultlisting">
           <a class="left fulwidthm" href="{{ url('/home/preview/'.$active_wishlists['id']) }}">
   	<div class="resultimagewrper panel-image listing-img transition2">
     
     <div class="resultimage  media-cover">
      <div class="listing-img-container media-cover text-center">
   <img src="{{ asset('userdata/List/Thumb/48/105/room.JPG')}}" alt="" class="img-responsive-height">    </div>
     </div>
     <div class="wishlistlistingho">
     	<h2 class="wishlistcount lblue_bg"><?= count($listing)?> Listings</h2>
     </div>
    </div>
    <div class="wishlistdis pdgTB15 left fulwidthm whitebg lgray_border ">
    <div class=" fulwidthm text-center left pdgS10">
    <div class="reusltheading robotomedium fontsize18 graytext">My Wishlist</div>
    </div>
    </div>
    </a>
   </div>
  @endforeach
</div>

</section>
