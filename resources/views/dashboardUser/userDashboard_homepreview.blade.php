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
  .info_content{}
  .info_content h3{
    margin: 0px;
    font-size: 1em;
  }
  .info_content p{
  margin: 0px !important;
  }
  .info_content img{
      max-width: 103px;
      display: inline;
  }
</style>";
  }
  ?>
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
                <?php
                $active = 'active';
                foreach ($data->imagedata as $image){  ?>
                <div class='item <?= $active ?>'>
                  <img src="{{ asset('uploads/'.$image->name)}}" alt=''/>
                </div>
                <?php
                $active = '';
                }
                ?>
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
              <?php
              $active = 'active';
              $slide = 0;
              foreach ($data->imagedata as $image){  ?>
              <li data-target='#carousel-custom' data-slide-to='<?= $slide ?>' class='<?= $active ?>'><img src="{{ asset('uploads/'.$image->name)}} " alt=''/></li>
              <?php
              $active = '';
              $slide++;
              }
              ?>
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
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext" title="Home Size : 1,000 Sq.ft">{{$data->homesize }} <?= $lang[146][$current] ?></span>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <span class="facltyicon flaticon-beds5 dbluetext"></span>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">{{$data->beds }}<?= $lang[129][$current] ?></span>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <span class="facltyicon flaticon-shower15 lbluetext"></span>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext ">{{$data->bathrooms }}<?= $lang[144][$current] ?></span>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
        <span class="facltyicon flaticon-basic17 dbluetext"></span>
        <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">{{$data->yearmodified }}<?= $lang[576][$current] ?></span>
      </div>
    </section>
    
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <div class="ca_tb_btnwrp">
        <div class="cal_tab_btn active">
          <?= $lang[179][$current] ?>
        </div>
      </div>
      
      
      <div class="cal_tabwrp fulwidthm left">
        <div class="cal_tabbox active">
          <div class="cal_tabbox_in pdgTB30">
            <div class="detlboxs  fulwidthm left ">
              <div class=" detlhead detlheadclick robotoregular fontsize18 graytext active">
                <?= $lang[182][$current] ?>
              </div>
              <div class="detlcontent fulwidthm left " style="display: block;">
                <p class=" font-size14 paragrphtext robotoregular graytext">
                  <?= $lang[1003][$current] ?>
                </p>
              </div>
            </div>
            <!-- detal box ends -->
            
            <div class="detlboxs  fulwidthm left ">
              <div class="detlhead detlheadclick robotoregular fontsize18 graytext active">
                <?= $lang[183][$current] ?>
              </div>
              <div class="detlcontent  fulwidthm left  " style="display: block;">
                <ul class="detillistingul ">
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-beds5"></i> <?= $lang[129][$current] ?></span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->beds }}   <?= $lang[129][$current] ?></span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37 "></i> <?= $lang[184][$current] ?></span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->homesize }}   <?= $lang[146][$current] ?> </span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-payment7"></i> <?= $lang[185][$current] ?></span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">$ {{$data->price }}</span>
                  
                  </li>
                  
                  
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-flag32"></i> Status</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">Active</span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-shower15"></i> <?= $lang[144][$current] ?> </span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->bathrooms }}   <?= $lang[144][$current] ?></span>
                  
                  </li>
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37"></i> <?= $lang[188][$current] ?></span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->homesize }}  <?= $lang[146][$current] ?> </span>
                  
                  </li>
                  
                  <li class="detaillistingli left mgnB20">
                    <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-calendar146"></i> <?= $lang[189][$current] ?></span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">{{$data->yearbuilt }}</span>
                  </li>
                </ul>
              
              </div>
            
            </div>
            <!-- detal box ends -->
            <!-- detal box ends -->
            
            <div class="detlboxs  fulwidthm left ">
              <div class="detlhead detlheadclick robotoregular fontsize18 graytext active ">
                <?= $lang[195][$current] ?>
              </div>
              <div class="detlcontent  fulwidthm left " style="display: block;">
                <ul class="detillistingul ">
                  
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-house112"></i> <span class="aminidis">{{ $data->architecturalmodel }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-dining3"></i>
                    <span class="aminidis">{{ $data->dinning }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-home97"></i>
                    <span class="aminidis">{{ $data->living }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-hands17"></i>
                    <span class="aminidis">{{ $data->guest }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-flatscreen"></i>
                    <span class="aminidis">{{ $data->cabelTv }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-fans2"></i>
                    <span class="aminidis">{{ $data->fans }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-globe41"></i>
                    <span class="aminidis">{{ $data->internet }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-locked61"></i>
                    <span class="aminidis">{{ $data->securitysys }} </span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-swimming22"></i>
                    <span class="aminidis">{{ $data->pool }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-home97"></i>
                    <span class="aminidis">{{ $data->garden }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-triangular46"></i>
                    <span class="aminidis">{{ $data->cabelTv }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-airconditioner"></i>
                    <span class="aminidis">{{ $data->aircondition }}</span>
                  </li>
                  <li class="detaillistingli fulwidthm left lgraytext mgnB10">
                    <i class="aminti_icon flaticon-cars7"></i>
                    <span class="aminidis">{{ $data->garagetype }} </span>
                  </li>
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
  <div class="detailsfullright  col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
    <div class="reqstinfowrp fulwidthm left mgnB15">
      <!-- simple form -->
      <form class="" role="form" method="post" action="{{ url('form/submit/booking/') }}">
        
        {{ csrf_field() }}
        <div class="rqstinfotitle dblue_bg pdg15 fulwidthm fontsize16 left whitetext"> <?= $lang[200][$current] ?></div>
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
                      <span class="brkRsalec lgraytext"> <?= $lang[201][$current] ?></span> &nbsp;|&nbsp; <span class="brkRstsc lbluetext"> <?= $lang[202][$current] ?></span></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Broker ends -->
          <div class="rqstinfoformswrp">
            <div class="pdg15 fulwidthm left rqstinfoformswrp_in">
              <input type="hidden" name="propertyID" value="{{ $data->id }}"/>
              <input type="hidden" name="vendorID" value="{{ $data->postedBy }}"/>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <ul class="list-group">
                  <?= (Session::has('status')) ?'<li class="list-group-item list-group-item-success">'. session('status') .'</li>': ''; ?>
                  <?php
                  if(count($errors) > 0){
                  foreach ($errors->all() as $error) { ?>
                  <li class="list-group-item list-group-item-danger"><?= $error ?></li>
                  <?php } } ?>
                </ul>
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <input class="rqstfrminput fulwidthm left" id="reqname" name="name" type="text" required="required" placeholder="Your Name" value="<?= (Auth::check())?Auth::user()->name:''; ?> ">
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <input class="rqstfrminput fulwidthm left" id="reqemail" name="email" type="email" required="required" placeholder="Your Email" value="<?= (Auth::check())?Auth::user()->email:''; ?> ">
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <input class="rqstfrminput fulwidthm left" id="reqphno" name="phone" type="tel" required="required" placeholder="Contact Number" value="<?= (Auth::check())?Auth::user()->phone:''; ?>">
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <textarea class="rqstfrminput fulwidthm left" name="message" id="reqmess" required="required" placeholder="Your Message"></textarea>
              </div>
              <div title="Book NOw" style="padding-bottom: 12px;">
                <select class="form-control" name="bookingStatus" required="required">
                  <option value="1"><?= $lang[1006][$current] ?></option>
                  <option value="0"> <?= $lang[1007][$current] ?></option>
                </select>
              </div>
              <div style="padding-bottom: 12px;">
                <input type="date" class="robotoregular fontsize16" id="" value="<?php echo date('Y-m-d',strtotime(date('y-m-d'))) ?>" required="required" placeholder="Schedual to Visit"/>
              </div>
              <div class="rqstfrmrow fulwidthm left mgnB15">
                <button class="lblue_bg fulwidthm left pdgTB10 fontsize18 reqstinfopoopen" id="requestbut"> <?= $lang[199][$current] ?></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-12">
      <div id="map_wrapper" style="max-height: 180px; margin-bottom: 20px;">
        <a href="#" data-toggle="modal" data-target="#myModal">
          <div id="map_canvas" class="mapping" style="max-height: 180px;"></div>
        </a>
      </div>
      <div class="col-lg-12">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <div class="modal-body">
                <div id="map_wrapper" style="max-height: 70vh; margin-bottom: 20px;">
                  <div id="map_3" class="mapping" style="min-height: 60vh;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <style>
        #map_wrapper {
          height: 400px;
        }
        
        #map_canvas {
          width: 100%;
          height: 100%;
        }
      </style>
    </div>
    
    <div class="detilwishlistbtn transition2 mgnB15 whitetext  text-center fulwidthm left whishorngnebtn" id="wishlistttt_3" title="Save to Wishlist">
      <a href="{{ url('search/preview/'.$data->id) }}"></a>
      <span id="wishlist_3" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>
      <h3 class="whsilisttile  robotoregular fontsize16"> <?= $lang[197][$current] ?></h3>
    </div>
    
    <div class="col-lg-12">
      <div class="resultmap" style="width: 100%; display: none">
        <div id="map2" style="width: 100%; height: 316px;"></div>
      </div>
    </div>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    
    
    <!-------School Map Start-------->
    <div class="col-md-4" style="width: 100%;">
      
      <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 100%;
        }
        
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
      </style>
    </div>
    <!----------map end---------------->
  </div>
  <!-- owl carosel -->
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
  <!-- scroll -->
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
  <!-- school map api -->
  <script type="text/javascript">
    var map;
    var infowindow;
    function initMap() {
      var pyrmont = {lat: <?= $data->latitude ?>, lng: <?= $data->longitude ?>};
//          var pyrmont = {lat: 33.6516295, lng: 73.0804872};
      map = new google.maps.Map(document.getElementById('map2'), {
        center: pyrmont,
        zoom: 14
      });
      infowindow = new google.maps.InfoWindow();
      var service = new google.maps.places.PlacesService(map);
      service.nearbySearch({
        location: pyrmont,
        radius: 1500,
        type: ['school']
      }, schoolCallback);
      
      
      /*properties functions*/
      map2 = new google.maps.Map(document.getElementById('map_canvas'), {
        center: pyrmont,
        zoom: 6
      });
      properties(map2);
      
      map3 = new google.maps.Map(document.getElementById('map_3'), {
        center: pyrmont,
        zoom: 6
      });
      properties(map3);
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
        icon: "http://icons.iconarchive.com/icons/icons8/windows-8/16/Science-School-icon.png",
        map: map,
        position: place.geometry.location
      });
      google.maps.event.addListener(marker, 'click', function () {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
      });
    }
    function properties(map2) {
      var map;
      map = map2;
      var bounds = new google.maps.LatLngBounds();
      var mapOptions = {
        mapTypeId: 'roadmap'
      };
      // Display a map on the page
      map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      map.setTilt(45);
      
      // Multiple Markers
      var markers = [
//        ['London Eye, London', 51.503454, -0.119562],
          <?php
          foreach ($properties as $row) {
          if(!empty($row->latitude) && !empty($row->longitude)){
          ?>
        ['<?= $row->title ?>', <?= $row->latitude  ?>, <?= $row->longitude ?>],
        <?php
        }
        }
        ?>
      ];
      
      // Info Window Content
      var infoWindowContent = [
          <?php
          foreach ($properties as $row) {
          if(!empty($row->latitude) && !empty($row->longitude)){
          ?>
        ['<div class="info_content">' +
        '<h3><?= $row->title ?></h3>' +
        '<p><?php foreach ($row->imagedata as $image){ echo '<img src="'. asset('uploads/'.$image->name).'" alt=""';break;} ?></p>' +
        '<p><?= $row->otherrentdetail ?></p>' +
        '<p><a class="btn btn-sm btn-default" href="<?= url('search/preview/'.$row->id) ?>">View</a></p>' +
        '</div>'],
        <?php
        }
        }
        ?>
      
      
      ];
      
      // Display multiple markers on a map
      var infoWindow = new google.maps.InfoWindow(), marker, i;
      
      // Loop through our array of markers & place each one on the map
      for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
          position: position,
          map: map,
          title: markers[i][0]
        });
        
        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
          return function () {
            infoWindow.setContent(infoWindowContent[i][0]);
            infoWindow.open(map, marker);
          }
        })(marker, i));
        
        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
      }
      
      // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
      var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
        this.setZoom(12);
        google.maps.event.removeListener(boundsListener);
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRYGewN8AZljJsCC-vWzJrO2ZQr7ZR-og&libraries=places&callback=initMap" async defer></script>
  <script>
    $(function () {
      $("#calendar").datepicker();
    });
  </script>
@endsection
