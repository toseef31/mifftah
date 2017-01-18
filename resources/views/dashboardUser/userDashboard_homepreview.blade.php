<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@extends('dashboardUser.dash_master_layout')
@section('content')
  
  <?php
  if (strpos($_SERVER['REQUEST_URI'], 'home/preview') == true) {
    echo "
  <style>
  #sider.dashfulright.col-lg-3.col-md-3.col-sm-12.col-xs-12.pull-right.mgnB15.nopaddingR {display: none !important;}
  .innerwraperful.pdgT15.fulwidthm.left {margin-top: 60px !important;}
</style>
";
  } else {
    echo "<style>
  div#sider{display: none !important;}
</style>";
  }
  ?>
  <div class="innerwraperful  pdgT15 fulwidthm left">
  </div>
  
  <div class="detailsfulleft  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <div class="detailshead fulwidthm left">
        <div class="headleft left">
          <h6 class="detailsprpse lbluetext font-size14">{{$data->propertytype }} </h6>
          <h4 class="dname fontsize20 graytext"></h4>
          <div class="locationlist lgraytext"><i class="fa fa-map-marker"></i>&nbsp;{{$data->region }}, {{$data->street }} </div>
        </div>
        <div class="headright right text-right">
          <div class="drpice fontsize24 graytext" title="$ {{$data->price }}">$ {{$data->price }}</div>
        </div>
      </div>
      <!-- Details Head ends -->
      <div class="deatilssliderwrp mgnT20 fulwidthm left">
        <div class="GSlideShow">
        
        
        <!--          <div id="myCarousel" class="carousel slide" data-ride="carousel">
             Indicators
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            
             Wrapper for slides
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt="" title="$listimages1[1]">
              </div>
              
              <div class="item">
                <img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt="" title="$listimages1[1]">
              </div>
              
              <div class="item">
                <img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt="" title="$listimages1[1]">
              
              </div>
              
              <div class="item">
                <img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt="" title="$listimages1[1]">
              </div>
            </div>
            
             Left and right controls
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>-->
          
          
          <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
            <div class='carousel-outer'>
              <!-- Wrapper for slides -->
              <div class='carousel-inner maxheight'>
                
                <div class='item'>
                  <img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/>
                </div>
                <div class='item'>
                  <img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt=''/>
                </div>
                
                <div class='item'>
                  <img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/>
                </div>
                <div class='item'>
                  <img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt=''/>
                </div>
                <div class='item'>
                  <img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/>
                </div>
                <div class='item active'>
                  <img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt=''/>
                </div>
              </div>
              
              <!-- Controls -->
              <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                <span class='glyphicon glyphicon-chevron-left'></span>
              </a>
              <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                <span class='glyphicon glyphicon-chevron-right'></span>
              </a>
            </div>
            
            <!-- Indicators -->
            <ol class='carousel-indicators mCustomScrollbar'>
              <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/></li>
              <li data-target='#carousel-custom' data-slide-to='1'><img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt=''/></li>
              <li data-target='#carousel-custom' data-slide-to='2'><img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/></li>
              <li data-target='#carousel-custom' data-slide-to='3'><img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt=''/></li>
              <li data-target='#carousel-custom' data-slide-to='4'><img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/></li>
              <li data-target='#carousel-custom' data-slide-to='5'><img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}" alt=''/></li>
              <li data-target='#carousel-custom' data-slide-to='6'><img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}" alt=''/></li>
            
            </ol>
          </div>
        
        
        </div>
      </div>
    
    </section>
    <!-- Details Section ends -->
    <?php // dd($data); ?>
    <section class="detailsection mgnB20 fulwidthm whitebg left ">
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <i class="facltyicon flaticon-squares37 lbluetext"></i>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext" title="Home Size : 1,000 Sq.ft">{{$data->homesize }} Sq.ft</span>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <span class="facltyicon flaticon-beds5 dbluetext"></span>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">{{$data->beds }} Beds</span>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <span class="facltyicon flaticon-shower15 lbluetext"></span>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext ">{{$data->bathrooms }} Bathrooms</span>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <span class="facltyicon flaticon-basic17 dbluetext"></span>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">{{$data->yearmodified }} months ago</span>
      </div>
    </section>
    
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <div class="ca_tb_btnwrp">
        <div class="cal_tab_btn active">
          Overview
        </div>
      </div>
      
      
      <div class="cal_tabwrp fulwidthm left">
        <div class="cal_tabbox active">
          <div class="cal_tabbox_in pdgTB30">
            <div class="detlboxs  fulwidthm left ">
              <div class=" detlhead detlheadclick robotoregular fontsize18 graytext active">
                About this Property
              </div>
              <div class="detlcontent fulwidthm left " style="display: block;">
                <p class=" font-size14 paragrphtext robotoregular graytext">
                  Apartment for sale.
                </p>
              </div>
            </div>
            <!-- detal box ends -->
            
            <div class="detlboxs  fulwidthm left ">
              <div class="detlhead detlheadclick robotoregular fontsize18 graytext active">
                General Informations
              </div>
              <div class="detlcontent  fulwidthm left  " style="display: block;">
                <ul class="detillistingul ">
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-beds5"></i> Beds</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->beds }} Beds</span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37 "></i> House Size</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->homesize }} Sq.ft </span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-payment7"></i> Price</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">$ {{$data->price }}</span>
                  
                  </li>
                  
                  
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-flag32"></i> Status</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">Active</span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-shower15"></i> Bathrooms </span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->bathrooms }} Bathrooms</span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37"></i> Lot Size</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->homesize }} Sq.ft  </span>
                  
                  </li>
                  
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-calendar146"></i> Year Built</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->yearbuilt }}</span>
                  
                  </li>
                
                
                </ul>
              
              </div>
            
            </div>
            <!-- detal box ends -->
            <!-- detal box ends -->
            
            <div class="detlboxs  fulwidthm left ">
              <div class="detlhead detlheadclick robotoregular fontsize18 graytext active ">
                Other Property Informations
              </div>
              <div class="detlcontent  fulwidthm left " style="display: block;">
                <ul class="detillistingul ">
                  
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-house112"></i> <span class="aminidis">{{$data->architecturalmodel }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-dining3"></i>
                    <span class="aminidis">{{$data->dinning }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-home97"></i>
                    <span class="aminidis">{{$data->living }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-hands17"></i>
                    <span class="aminidis">{{$data->guest }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-flatscreen"></i>
                    <span class="aminidis">{{$data->cabelTv }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-fans2"></i>
                    <span class="aminidis">{{$data->fans }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-globe41"></i>
                    <span class="aminidis">{{$data->internet }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-locked61"></i>
                    <span class="aminidis">{{$data->securitysys }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-swimming22"></i>
                    <span class="aminidis">{{$data->pool }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-home97"></i>
                    <span class="aminidis">{{$data->garden }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-triangular46"></i>
                    <span class="aminidis">{{$data->cabelTv }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-airconditioner"></i>
                    <span class="aminidis">{{$data->aircondition }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-cars7"></i>
                    <span class="aminidis">{{$data->garagetype }} </span>
                  </li>
                  {{--<li class="detaillistingli fulwidthm left lgraytext mgnB10">--}}
                    {{--<i class="aminti_icon flaticon-home97"></i>--}}
                    {{--<span class="aminidis">City View</span>--}}
                  {{--</li>--}}
                  {{--<li class="detaillistingli fulwidthm left lgraytext mgnB10">--}}
                    {{--<i class="aminti_icon flaticon-home97"></i>--}}
                    {{--<span class="aminidis"> Water View  </span>--}}
                  {{--</li>--}}
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-home97"></i>
                    <span class="aminidis">{{$data->buildingview }}</span>
                  </li>
                </ul>
              
              </div>
            
            </div>
            <!-- detal box ends -->
          </div>
        </div>
        <!-- tab1 ends -->
        
        
        <div class="cal_tabbox ">
          <div class="cal_tabbox_in pdgTB30">
            <div class="detailsechbox lgray_border fulwidthm left mgnB30">
              
              <div class="detailcontent pdg30 fulwidthm left">
                <ul id="lightGallery" class="detailsgallery">
                  <li data-src="userdata/List/1/9/home-wallpaper-26.jpg" class="detailsgalleryli">
                    <div class="thumbin imgLiquidFill imgLiquid"><img src="{{ asset('userdata/List/1/9/home-wallpaper-26.jpg')}}"/></div>
                  </li>
                  <li data-src="userdata/List/1/9/family-room-670270_1920.jpg" class="detailsgalleryli">
                    <div class="thumbin imgLiquidFill imgLiquid"><img src="{{ asset('userdata/List/1/9/family-room-670270_1920.jpg')}}"/></div>
                  </li>
                </ul>
              </div>
            
            </div>
          </div>
        </div>
        <!--  tab2 ends -->
        
        <div class="cal_tabbox">
          <div class="cal_tabbox_in pdgTB30">
            <div id="js-map-container" style="width:100%;height:400px;"></div>
          </div>
        </div>
        <!-- Tab3 -->
      </div><!-- Tab ends --> <!-- detal box ends -->
    </section>
  </div>
  <input type="hidden" value="0" id="hand">
  <div class="detailsfullright  col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
    
    <div class="reqstinfowrp fulwidthm left mgnB15">
      <!-- simple form -->
      <form class="" role="form" method="post" action="{{ url('') }}">
        <div class="rqstinfotitle dblue_bg pdg15 fulwidthm fontsize16 left whitetext">Tell Me More About This Property</div>
        <div class="reqstinfowrp_in fulwidthm left  whitebg">
          
          <div class="rqstinfobrkerlist" style="overflow-y: hidden; outline: none; cursor: -webkit-grab;">
            <div class="rqstinfobrkerlistin pdg15">
              <ul class="borkerRul" id="brkrsel">
                
                <li class="brokerRli fulwidthm left mgnB15">
                  <div class="borkerRleft left">
                    <!--            <input type="checkbox" class="brkerinput left" value="0">-->
                    <div class="brokerimg left">
                      <img src="{{asset('userdata/Profile/0/alienware-chrome-phone-wallpaper.png')}}" alt="">
                    </div>
                  </div>
                  <div class="brokerright">
                    <a href="" class="borkerRname fontsize16 dbluetext robotoregular"><?= (Auth::check())?Auth::user()->name:''; ?></a>
                    <div class="brokerrating">
                      <i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i>
                      <span class=" fontsize12">(1)</span>
                    </div>
                    <div class="brkerRbottom fontsize12">
                      <span class="brkRsalec lgraytext">1 Recent Sales</span> &nbsp;|&nbsp; <span class="brkRstsc lbluetext">Premium Agent</span></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Broker ends -->
          <div class="rqstinfoformswrp">
            <div class="pdg15 fulwidthm left rqstinfoformswrp_in">
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <input class="rqstfrminput fulwidthm left" id="reqname" type="text" placeholder="Your Name" value="<?= (Auth::check())?Auth::user()->name:''; ?> ">
                <div class="erorshown fulwidthm  left" id="namereqerr">Please Enter Your First Name</div>
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <input class="rqstfrminput fulwidthm left" id="reqemail" type="email" placeholder="Your Email" value="<?= (Auth::check())?Auth::user()->email:''; ?> ">
                <div class="erorshown fulwidthm  left" id="emailreqerr">Please Enter Your First Name</div>
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <input class="rqstfrminput fulwidthm left" id="reqphno" type="text" placeholder="Contact Number" value="<?= (Auth::check())?Auth::user()->phone:''; ?>">
                <div class="erorshown fulwidthm  left" id="phnreqerr">Please Enter Your First Name</div>
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <textarea class="rqstfrminput fulwidthm left" id="reqmess" placeholder="Your Message"></textarea>
                <div class="erorshown fulwidthm  left" id="msgreqerr">Please Enter Your First Name</div>
              </div>
              <div title="Book NOw" style="padding-bottom: 12px;">
                <select class="form-control" name="bookingStatus" required>
                  <option selected="selected">Select a Booking Status</option>
                  <option value="1">Book Now</option>
                  <option value="0">Book Later</option>
                </select>
              </div>
              <div style="padding-bottom: 12px;">
                <input type="date" class="robotoregular fontsize16" id="" placeholder="Schedual to Visit"/>
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <button class="lblue_bg fulwidthm left pdgTB10 fontsize18 reqstinfopoopen" id="requestbut">Request Info</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    
    <div class="detilwishlistbtn transition2 mgnB15 whitetext  text-center fulwidthm left whishorngnebtn" id="wishlistttt_3" title="Save to Wishlist">
      <span id="wishlist_3" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>
      <h3 class="whsilisttile  robotoregular fontsize16">Save to WishList</h3>
    </div>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    
    <script>
      $(function () {
        $("#calendar").datepicker();
      });
    </script>
    <!-------School Map Start-------->
    <div class="col-md-4" style="width: 100%;" >
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRYGewN8AZljJsCC-vWzJrO2ZQr7ZR-og&libraries=places&callback=initMap" async defer></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map { height: 100%;}
      /* Optional: Makes the sample page fill the window. */
      html, body { height: 100%;margin: 0;padding: 0;}
    </style>
    <script type="text/javascript">
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?libraries=places">

      var map;
      var infowindow;

      function initMap() {
        var pyrmont = {lat: 33.6516295, lng: 73.0804872 };

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 1500,
          type: ['school']
        }, schoolCallback);
		
		

      }

      function schoolCallback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createSchoolMarker(results[i]); //results doesn't contain anything related to type (school,store,etc)
          }
        }
      }
	  
	  

      function createSchoolMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
        icon:"http://icons.iconarchive.com/icons/icons8/windows-8/16/Science-School-icon.png",
          map: map,
          position: place.geometry.location
        });

		
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
	  
	  
	   
    </script>
  
 
    <div id="map"></div>
 


     
    </div>
    <!----------map end---------------->
  </div>
  <script type="text/javascript">
    $(document).ready(function (e) {
      
      var owl_newlisting = $("#newlisting");
      
      owl_newlisting.owlCarousel({
        autoPlay: true,
        center: true,
        pagination: true,
        lazyLoad: true,
        navigation: false,
        rewindSpeed: 200,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
      });
      
      $(".n_l_next").click(function () {
        owl_newlisting.trigger('owl.next');
      })
      $(".n_l_prev").click(function () {
        owl_newlisting.trigger('owl.prev');
      });
      
    });
  </script>
  
  <script type="text/javascript">
    
    $(document).ready(function (e) {
      
      $(".rqstinfobrkerlist").niceScroll({
        cursorcolor: "#09cae7",
        cursorborder: "1px solid #09cae7",
        background: "#e8e6e6",
        autohidemode: false,
        cursorminheight: 32,
        smoothscroll: true,
        horizrailenabled: false,
      });
      
      $('.detlheadclick').click(function (e) {
        
        
        $(this).siblings(".detlcontent").stop().slideToggle(200);
        
        
        $(this).stop().toggleClass("active");
      });
      
      
      $('.detlcontent:eq(0)').show();
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".mCustomScrollbar").mCustomScrollbar({axis: "x"});
    });
  </script>

@endsection

