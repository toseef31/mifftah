@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="dashdetialshead fulwidthm left dblue_bg">
      <div class="dashdetialsimg">
        <?php if(!empty($data->img) || $data->img != null){ ?>
        <img src="{{ asset('uploads/'.$data->img) }}" alt="user" title="Steve James" style="min-height: 200px;">
        <?php }else { ?>
        <img src="{{ asset('uploads/default_user.png') }}" alt="user" title="Steve James" style="min-height: 200px;">
        <?php } ?>
      </div>
      <div class="dashdetailsright dblue_bg">
        <div class="dashdetailsright_in">
          <div class="dashdetialsful pdg15 left fulwidthm ">
            <div class="dashdetailsleft">
              <h3 class="dashname fontsize24"></h3>
              <?php //dd($data); ?>
              <p class="dahpo fontsize16 lbluetext">
                <?php if (Auth::user()->role == 1) {
                echo "Vendor / Agent";
                } else {
                echo "Buyer / Lead Requester";
                } ?>
              </p>
              <h4 class="dashdate fontsize13">Member Since : <?php  $date = explode(' ', Auth::user()->created_at); echo "$date[0]";?></h4></div>
            <?php if(Auth::user()->role == 1 ){ ?>
            <div class="dashsdetailright">
              <div class="premagntdash right">
                <span class="left mgnS05">
                  <img src="{{ asset('images/premiumagnticon.png') }}" alt="">
                  </span>
                <span class="  premimumagntname left whitetext lblue_bg fontsize12 pdg05">Premium Agent</span>
              </div>
              <div class="clearfix"></div>
              <div class="dashrating fontsize16 right mgnT05"><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star lgraytext"></i><span class=" fontsize12"> (1) </span></div>
            </div>
            <?php } ?>
          </div>
          
          <?php if(Auth::user()->role == 0){ ?>
          <div class="usercountf yellowbg fulwidthm left">
            <div class="usercountbox col-sm-12 col-xs-12 text-center dbluetext">
              <span class="fontsize24 ">92</span>
              <span class="font-size14 usercntbrk">In Wishlist</span>
            </div>
          </div>
          <?php }else{ ?>
          <div class="usercountf yellowbg fulwidthm left">
            <?php if(Auth::user()->role == 1 ){ ?>
            <div class="usercountbox col-sm-4 col-xs-4 text-center dbluetext">
              <span class="fontsize24 "><?= count($listing) ?></span> <span class="font-size14 usercntbrk">Total Listings</span>
            </div>
            <div class="usercountbox middleyellow col-sm-4 col-xs-4 text-center dbluetext">
              <span class="fontsize24 "><?= count($listing) ?></span> <span class="font-size14 usercntbrk">Total Active Listings</span>
            </div>
            <div class="usercountbox col-sm-4 col-xs-4 text-center dbluetext">
              <span class="fontsize24 "><?= 0 ?></span> <span class="font-size14 usercntbrk">Total Sold Listings</span>
            </div>
            <?php }elseif (Auth::user()->role == 2) { ?>
            <div class="usercountbox col-sm-12 col-xs-12 text-center dbluetext">
              <span class="fontsize24 "><?= count($wishlist); ?></span> <span class="font-size14 usercntbrk">Wishlist</span>
            </div>
            <?php } ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <section class="fulwidthm left whitebg pdg15 mgnB15">
      <div class="adressdash"><i class="fa fa-envelope graytext" title="Email"></i> <span class="ad_details font-size14 lgraytext"><?= Auth::user()->email ?></span></div>
      <div class="adressdash"><i class="fa fa-map-marker graytext" title="Business Name"></i>
        <span class="ad_details font-size14 lgraytext"><?= (isset($info['baddress'])) ? $info['baddress'] : ''; ?></span></div>
      <div class="adressdash">
        <i class="fa fa-phone graytext" title="Business Contact Number"></i>
        <span class="ad_details font-size14 lgraytext"><?= (isset($info['phone'])) ? $info['phone'] : ''; ?></span></div>
    </section>
    <section class="fulwidthm left whitebg agentinfowrp  mgnB15">
      <div class="col-sm-3 col-xs-12 agntinftitle text-center">
        <h4 class="robotoregular dbluetext fontsize20 mgnT25">
          <?= (Auth::user()->role == 1) ? 'Vendor' : 'Buyer'; ?> Info
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer">
              Details of other users &amp; their listings/properties that are handled by you as an agent is displayed here. The previous details of the listing are based
              on the listings created/owned by you as a seller and not as an agent.
            </div>
          </div>
        </h4>
      </div>
      <?php if (Auth::user()->role == 2) { ?>
      <div class="col-sm-9 col-xs-9 agntinfobx text-center lblue_bg whitetext pdgTB10">
        <span class="fontsize24 "><?= count($wishlist) ?></span>
        <span class="font-size14 usercntbrk"> Wish Lists</span>
      </div>
      <?php }elseif(Auth::user()->role == 1) { ?>
      <div class="col-sm-3 col-xs-12 agntinfobx text-center lblue_bg whitetext pdgTB10">
        <span class="fontsize24 "><?= count($listing) ?></span>
        <span class="font-size14 usercntbrk"> Total Lead Listings</span>
      </div>
      <div class="col-sm-3 col-xs-12 agntinfobx text-center agntmiddle whitetext pdgTB10">
        <span class="fontsize24 ">0</span>
        <span class="font-size14 usercntbrk"> Total Lead Listings Sold</span>
      </div>
      <div class="col-sm-3 col-xs-12 agntinfobx lblue_bg text-center whitetext pdgTB10">
        <span class="fontsize24 ">0</span>
        <span class="font-size14 usercntbrk"> Total Active Leads/Clients</span>
      </div>
      <?php } ?>
    </section>
  </div>
  <?php
  if(Auth::user()->role == 1 ){  /** then we have vendor profile **/
  ?>
  <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
    <li class="notificationwrp fulwidthm left">
      <h4 class="robotolight fontsize24 graytext">
        Notifications
        <div class="helpqust mgnT05 graytext">
          <i class="fa fa-question-circle"></i>
          <div class="helpanswer">
            You can find the important facts about your account from here
          </div>
        </div>
      </h4>
      <ul class="notficationul fulwidthm mgnT25 left">
        <li class="notificaionli fulwidthm left mgnB10 pdgB10">
          <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
            You have <?= (isset($inactivelisting))?$inactivelisting:''; ?> Incomplete Listings.
          </div>
          <div class="clearfix"></div>
          <div class="notoficationbtn">
            <a href="{{ url('user/managelist') }}" class="btn dblue_bg whitetext">Complete Now</a>
          </div>
        </li>
        <li class="notificaionli fulwidthm left mgnB10 pdgB10">
          <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
            Make Your Listings Featured to Get more Attention. You have 4 Listings that is not Featured.
          </div>
          <div class="clearfix"></div>
          <div class="notoficationbtn">
            <a href="#" class="btn dblue_bg whitetext">Upgrade to Featured Status</a>
          </div>
        </li>
        <li class="notificaionli fulwidthm left mgnB10 pdgB10">
          <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
            Premium status for your agent account has been expired on 08/01/2017 and extended to a grace period of 7 days.
            In order to continue as a premium agent please make the payment before the grace period.
          </div>
          <div class="clearfix"></div>
          <div class="notoficationbtn">
            <a href="#" class="btn dblue_bg whitetext">Pay Now</a>
          </div>
        </li>
        <li class="notificaionli fulwidthm left mgnB10 pdgB10">
          <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
            Featured status of some of your listing are in grace period.
            <div class="helpqust mgnT05 graytext">
              <i class="fa fa-question-circle"></i>
              <div class="helpanswer">
                Grace period is the number of days after expiry.
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="notoficationbtn">
            <a href="#" class="btn dblue_bg whitetext">Retain Featured Status</a>
          </div>
        </li>
        <li class="notificaionli fulwidthm left mgnB10 pdgB10">
          <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
            Some of listing are currently in grace period and will be expired soon.
            <div class="helpqust mgnT05 graytext">
              <i class="fa fa-question-circle"></i>
              <div class="helpanswer">
                Grace period is the number of days after expiry.
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="notoficationbtn">
            <a href="#" class="btn dblue_bg whitetext"> Click to Extend</a>
          </div>
          
        </li>
      </ul>
    </li>
  </section>
  
  <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
    <div class="wishlistwrp fulwidthm left">
      <h4 class="robotolight fontsize24 graytext">
        My Latest Listing (<?= count($listing) ?>) </h4>
    </div>
    
    <div class="wishlistshowwrp fulwidthm mgnT25 left">
      @foreach ($listing as $listingitem)
        <div class="col-lg-4 col-md-4 col-sm-4  col-xs-6 resultlisting">
          <a class="left fulwidthm" href="{{ url('/home/preview/'.$listingitem['id']) }}">
            <div class="resultimagewrper panel-image listing-img transition2">
              
              <div class="resultimage  media-cover">
                <div class="listing-img-container media-cover text-center">
                  <?php
                  if(count($listingitem->imagedata) >= 1){
                  foreach ($listingitem->imagedata as $singleimage) {
                  ?>
                  <img src="{{ asset('uploads/' . $singleimage['name'])}}" alt="" class="img-responsive-height">
                  <?php
                  break;}
                  }
                  ?>
                </div>
              </div>
              <div class="wishlistlistingho">
                <h2 class="wishlistcount lblue_bg">For : <?= strtoupper($listingitem['type']);?> </h2>
              </div>
            </div>
            <div class="wishlistdis pdgTB15 left fulwidthm whitebg lgray_border ">
              <div class=" fulwidthm text-center left pdgS10">
                <div class="reusltheading robotomedium fontsize18 graytext"><?= $listingitem['title'] ?></div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  
  </section>
  <?php }elseif(Auth::user()->role == 2 ){ ?>
  <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
    <div class="wishlistwrp fulwidthm left">
      <h4 class="robotolight fontsize24 graytext">
        My WishLists (<?= count($wishlist) ?>) </h4>
    </div>
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      
      <li class="notificationwrp fulwidthm left">
        <h4 class="robotolight fontsize24 graytext">
          Notifications
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer">
              You can find the important facts about your account from here
            </div>
          </div>
        </h4>
        <ul class="notficationul fulwidthm mgnT25 left">
          
          
          <li class="notificaionli fulwidthm left mgnB10 pdgB10">
            <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
              You have 102 Incomplete Listings.
            </div>
            
            <div class="clearfix"></div>
            <div class="notoficationbtn">
              <a href="http://inout-realestate.demo.inoutscripts.net/user/managelist" class="btn dblue_bg whitetext">Complete Now</a>
            </div>
          
          
          </li>
          
          <li class="notificaionli fulwidthm left mgnB10 pdgB10">
            <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
              Make Your Listings Featured to Get more Attention. You have 4 Listings that is not Featured.
            </div>
            <div class="clearfix"></div>
            <div class="notoficationbtn">
              <a href="http://inout-realestate.demo.inoutscripts.net/user/managelist" class="btn dblue_bg whitetext">Upgrade to Featured Status</a>
            </div>
          
          </li>
          <li class="notificaionli fulwidthm left mgnB10 pdgB10">
            <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
              Premium status for your agent account has been expired on 08/01/2017 and extended to a grace period of 7 days.
              In order to continue as a premium agent please make the payment before the grace period.
            </div>
            <div class="clearfix"></div>
            <div class="notoficationbtn">
              <a href="http://inout-realestate.demo.inoutscripts.net/user/agentaccount" class="btn dblue_bg whitetext">Pay Now</a>
            </div>
          
          </li>
          <li class="notificaionli fulwidthm left mgnB10 pdgB10">
            <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
              Featured status of some of your listing are in grace period.
              <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                <div class="helpanswer">
                  Grace period is the number of days after expiry.
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="notoficationbtn">
              <a href="http://inout-realestate.demo.inoutscripts.net/user/managelist" class="btn dblue_bg whitetext">Retain Featured Status</a>
            </div>
          
          </li>
          
          <li class="notificaionli fulwidthm left mgnB10 pdgB10">
            <div class="notificationmsg lgraytext font-size14 robotoregular mgnB10">
              Some of listing are currently in grace period and will be expired soon.
              <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                <div class="helpanswer">
                  Grace period is the number of days after expiry.
                </div>
              </div>
            
            
            </div>
            <div class="clearfix"></div>
            <div class="notoficationbtn">
              <a href="http://inout-realestate.demo.inoutscripts.net/user/managelist" class="btn dblue_bg whitetext"> Click to Extend</a>
            </div>
          
          </li>
        
        
        </ul>
      
      </li>
    </section>
    
    
    <div class="wishlistshowwrp fulwidthm mgnT25 left">
      @foreach ($wishlist as $active_wishlists)
        
        <a class="left fulwidthm" href="{{ url('search/preview/'.$active_wishlists['id']) }}">
          <div class="col-lg-4 col-md-4 col-sm-4  col-xs-6 resultlisting">
            <div class="resultimagewrper panel-image listing-img transition2">
              
              <div class="resultimage  media-cover">
                <div class="listing-img-container media-cover text-center">
                  <img src="{{ asset('userdata/List/Thumb/48/105/room.JPG')}}" alt="" class="img-responsive-height"></div>
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
          </div>
        </a>
      @endforeach
    </div>
  
  </section>
  <?php } ?>
@endsection