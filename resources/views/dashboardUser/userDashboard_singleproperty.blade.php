@extends('dashboardUser.dash_master_layout')
@section('content')
<style>
 .dashfulright.col-lg-3.col-md-3.col-sm-12.col-xs-12.pull-right.mgnB15.nopaddingR{
   display: none !important;
 }
</style>
<div class="resultwraperfull">
 <div class="mainindexcontainer">
  <div class="mainontainer_in fulwidthm left">
   <div class="detailsfulleft  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
     <div class="detailshead fulwidthm left">
      <div class="headleft left">
       <h6 class="detailsprpse lbluetext font-size14"><?= $lang[129][$current] ?></h6>
       <h4 class="dname fontsize20 graytext">234/45  </h4>
       <div class="locationlist lgraytext"><i class="fa fa-map-marker"></i>&nbsp;New York, NY 1202223</div>
      </div>
      <div class="headright right text-right">
       <div class="drpice fontsize24 graytext" title="₪ 70,000">₪ 70,000</div>
       <div class="locationlist lgraytext"> <img src="{{ asset('images/featured.png') }}" title="Featured Property"> </div>
      </div>
     </div>
     <!-- Details Head ends -->
     <div class="deatilssliderwrp mgnT20 fulwidthm left">
      <div class="GSlideShow" style="margin-bottom: 110px; background-image: url(&quot;userdata/List/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg&quot;); transition: background-image 800ms ease-in-out; height: 450px; border-style: solid; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 0px;">
       <img src="{{ asset('userdata/List/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg') }}" alt="" title="$listimages1[1]">
       <span class="GSlideShowGoLeft" style="font-family: icons; font-style: normal; font-size: 1.8em; background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border: 0px solid rgba(0, 0, 0, 0.498039); border-radius: 0px; display: block; opacity: 0;">&lt;</span>
       <span class="GSlideShowGoRight" style="background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border: 0px solid rgba(0, 0, 0, 0.498039); border-radius: 0px; font-family: icons; font-style: normal; font-size: 1.8em; display: block; opacity: 0;">&gt;</span>
       <span class="playPauseBtn" style="background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border: 0px solid rgba(0, 0, 0, 0.498039); border-radius: 0px; font-size: 1.6em;"></span>
       <span class="GSlideShowTitle" style="background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border-left: 0px solid rgba(0, 0, 0, 0.498039); border-right: 0px solid rgba(0, 0, 0, 0.498039); border-bottom: 0px solid rgba(0, 0, 0, 0.498039); border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">1/1     "$listimages1[1]"</span>
       <div class="GSlideShowNavBar" style="width: 100%; height: 100px; position: absolute; bottom: -110px; margin-left: -1px; text-align: center; background-color: rgb(255, 255, 255); border-width: 0px; border-color: rgb(255, 255, 255); border-style: solid; border-radius: 0px;">
        <span class="GSlideShowLeftNavButton" style="left: 0px; position: absolute; width: 49px; height: 100%; line-height: 100px; font-family: icons; font-size: 1.7em; cursor: pointer; color: rgb(255, 255, 255); text-align: center; border-radius: 0px;">&lt;</span>
        <div class="GSlideShowNavBarContent" style="width: 100%; height: 100px; float: left; border-left: 1px solid rgba(0, 0, 0, 0); border-right: 1px solid rgba(0, 0, 0, 0);">
         <span class="GSlideShowNavBarImage" id="0" style="background-image: url(&quot;userdata/List/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg&quot;); height: 100px; opacity: 0.9; border-radius: 0px; box-shadow: none;">

         </span>
        </div><span class="GSlideShowRightNavButton" style="right: 0px; position: absolute; width: 49px; height: 100%; line-height: 100px; font-family: icons; font-size: 1.7em; cursor: pointer; color: rgb(255, 255, 255); text-align: center; border-radius: 0px;">&gt;</span>
       </div>
      </div>
     </div>
    </section>
    <!-- Details Section ends -->
    <section class="detailsection mgnB20 fulwidthm whitebg left ">
     <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col"> <i class="facltyicon flaticon-squares37 lbluetext"></i> <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext" title="Home Size : 5,000 Sq.ft">5,000 Sq.ft</span> </div>
     <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col"> <span class="facltyicon flaticon-beds5 dbluetext"></span> <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">5 Beds</span> </div>
     <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col"> <span class="facltyicon flaticon-shower15 lbluetext"></span> <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext ">5 Bathrooms</span> </div>
     <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col"> <span class="facltyicon flaticon-basic17 dbluetext"></span> <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">8 months ago</span> </div>
    </section>
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
     <div class="ca_tb_btnwrp">
      <div class="cal_tab_btn active"> <?= $lang[179][$current] ?> </div>
      <div class="cal_tab_btn"> <?= $lang[158][$current] ?> </div>
      <div class="cal_tab_btn" id="xcxc"> <?= $lang[181][$current] ?> </div>
     </div>
     <div class="cal_tabwrp fulwidthm left">
      <div class="cal_tabbox active">
       <div class="cal_tabbox_in pdgTB30">
        <div class="detlboxs  fulwidthm left ">
         <div class=" detlhead detlheadclick robotoregular fontsize18 graytext active"> <?= $lang[182][$current] ?> </div>
         <div class="detlcontent fulwidthm left " style="display: block;">
          <p class=" font-size14 paragrphtext robotoregular graytext"> fhhfhf520 </p>
         </div>
        </div>
        <!-- detal box ends -->
        <div class="detlboxs  fulwidthm left ">
         <div class="detlhead detlheadclick robotoregular fontsize18 graytext "> <?= $lang[183][$current] ?> </div>
         <div class="detlcontent  fulwidthm left ">
          <ul class="detillistingul ">
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-beds5"></i> Beds</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">5 Beds</span> </li>
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37 "></i> House Size</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">5000 Sq.ft </span> </li>
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-payment7"></i> Price</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">₪ 70,000</span> </li>
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-flag32"></i> Status</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">Active</span> </li>
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-shower15"></i> Bathrooms </span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">5 Bathrooms</span> </li>
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37"></i> Lot Size</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium"> N.A </span> </li>
           <li class="detaillistingli left mgnB20"> <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-calendar146"></i> Year Built</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">1850</span> </li>
          </ul>
         </div>
        </div>
        <!-- detal box ends -->
        <!-- detal box ends -->
        <div class="detlboxs  fulwidthm left ">
         <div class="detlhead detlheadclick robotoregular fontsize18 graytext "> <?= $lang[195][$current] ?> </div>
         <div class="detlcontent  fulwidthm left ">
          <ul class="detillistingul ">
       
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-house112"></i> <span class="aminidis"><?= $lang[412][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-home97"></i> <span class="aminidis"><?= $lang[400][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-hands17"></i> <span class="aminidis"><?= $lang[402][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-flatscreen"></i> <span class="aminidis"><?= $lang[403][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-globe41"></i> <span class="aminidis"><?= $lang[405][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-locked61"></i> <span class="aminidis"><?= $lang[406][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-terrace"></i> <span class="aminidis"><?= $lang[407][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-swimming22"></i> <span class="aminidis"><?= $lang[408][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-grass"></i> <span class="aminidis"><?= $lang[409][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-home97"></i> <span class="aminidis"><?= $lang[410][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-fence14"></i> <span class="aminidis"><?= $lang[411][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-dining9"></i> <span class="aminidis"><?= $lang[416][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-floor"></i> <span class="aminidis"><?= $lang[418][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-tool225"></i> <span class="aminidis"><?= $lang[420][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-river3"></i> <span class="aminidis"><?= $lang[421][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-vehicle34"></i> <span class="aminidis"><?= $lang[422][$current] ?></span>
           </li>
           <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-home97"></i> <span class="aminidis"><?= $lang[1030][$current] ?></span>
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
           <li data-src="{{ asset('userdata/List/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg') }}" class="detailsgalleryli">
            <div class="thumbin imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;{{ asset('userdata/List/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg')}}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img src="{{ asset('userdata/List/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg') }}" style="display: none;">
            </div>
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
     </div>
     <!-- Tab ends -->
     <!-- detal box ends -->
    </section>
   </div>
   <!-- detailsfullLeft ends -->
   <script>
     $(window).ready(function (e) {
       $('#xcxc').click(function () {
         if ($('#hand').val() == 0) {
           $('#hand').val("1");
           initialize('40.7127837', '-74.00594130000002');
         }
       });
       //alert('{$latxmap}');
       //markmarker('{$latxmap}','{$longxmap}','{$namexmap}','{$imagexmap}','{$pricexmap}','{$uiduid}','{$lidlid}');
     });

     function initialize(maillat, mainlong) {
       var mapOptions = {
         center: new google.maps.LatLng(maillat, mainlong),
         scrollwheel: false,
         navigationControl: false,
         mapTypeControl: false,
         scaleControl: false,
         mapTypeId: google.maps.MapTypeId.ROADMAP
       };
       map = new google.maps.Map(document.getElementById('js-map-container'), mapOptions);
       map.setZoom(14);
       var myCity = new google.maps.Circle({
         center: new google.maps.LatLng(maillat, mainlong),
         radius: 250,
         strokeColor: "#0000FF",
         strokeOpacity: 0.8,
         strokeWeight: 2,
         fillColor: "#0000FF",
         fillOpacity: 0.4
       });
       marker = new google.maps.Marker({
         position: new google.maps.LatLng(maillat, mainlong),
         icon: 'images/home-white.png',
         map: map
       });
       myCity.setMap(map);
     }
   </script>
   <div class="detailsfullright  col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
    <div class="reqstinfowrp fulwidthm left mgnB15">
     <div class="rqstinfotitle dblue_bg pdg15 fulwidthm fontsize16 left whitetext"><?= $lang[200][$current] ?></div>
     <div class="reqstinfowrp_in fulwidthm left  whitebg">
      <div class="rqstinfobrkerlist" style="overflow-y: hidden; outline: none;" tabindex="5000">
       <div class="rqstinfobrkerlistin pdg15">
        <ul class="borkerRul" id="brkrsel">
         <li class="brokerRli fulwidthm left mgnB15">
          <div class="borkerRleft left">
           <input type="checkbox" class="brkerinput left" value="0">
           <div class="brokerimg left"> <img src="{{ asset('userdata/Profile/0/alienware-chrome-phone-wallpaper.png') }}" alt=""> </div>
          </div>
          <div class="brokerright"> <a href="" class="borkerRname fontsize16 dbluetext robotoregular"> <?= $lang[984][$current] ?></a>
           <div class="brokerrating"> <i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i> <span class=" fontsize12">(1)</span> </div>
           <div class="brkerRbottom fontsize12"> <span class="brkRsalec lgraytext"><?= $lang[201][$current] ?></span> &nbsp;|&nbsp; <span class="brkRstsc lbluetext"><?= $lang[217][$current] ?></span>
           </div>
          </div>
         </li>
         <li class="brokerRli fulwidthm left mgnB15">
          <div class="borkerRleft left">
           <input type="checkbox" class="brkerinput left" value="1">
           <div class="brokerimg left"> <img src="{{ asset('userdata/Profile/1/girl-1252995_1920.png') }}" alt=""> </div>
          </div>
          <div class="brokerright"> <a href="" class="borkerRname fontsize16 dbluetext robotoregular"> <?= $lang[984][$current] ?></a>
           <div class="brokerrating"> <i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star ratingyellow"></i><i class="fa fa-star"></i> <span class=" fontsize12">(1)</span> </div>
           <div class="brkerRbottom fontsize12"> <span class="brkRsalec lgraytext"><?= $lang[201][$current] ?></span> &nbsp;|&nbsp; <span class="brkRstsc lbluetext"><?= $lang[217][$current] ?></span>
           </div>
          </div>
         </li>
         <li class="brokerRli fulwidthm left mgnB15">
          <div class="borkerRleft left">
           <input type="checkbox" class="brkerinput left" value="47">
           <div class="brokerimg left"> <img src="{{ asset('userdata/Profile/47/00fd612653a15c95c0080da520ede4591435913737.pnguserdata/Profile/47/00fd612653a15c95c0080da520ede4591435913737.png') }}" alt=""> </div>
          </div>
          <div class="brokerright"> <a href="" class="borkerRname fontsize16 dbluetext robotoregular"> <?= $lang[1031][$current] ?></a>
           <div class="brokerrating"> <span class=" fontsize12"></span> </div>
           <div class="brkerRbottom fontsize12"> <span class="brkRsalec lgraytext"><?= $lang[201][$current] ?></span> &nbsp;|&nbsp; <span class="brkRstsc lbluetext"><?= $lang[217][$current] ?></span>
           </div>
          </div>
         </li>
        </ul>
       </div>
      </div>
      <!-- Broker ends -->
      <div class="rqstinfoformswrp">
       <div class="pdg15 fulwidthm left rqstinfoformswrp_in">
        <div class="rqstfrmrow fulwidthm left mgnB15">
         <input class="rqstfrminput fulwidthm left" id="reqname" type="text" placeholder="Your Name">
         <div class="erorshown fulwidthm  left" id="namereqerr"><?= $lang[302][$current] ?></div>
        </div>
        <div class="rqstfrmrow fulwidthm left mgnB15">
         <input class="rqstfrminput fulwidthm left" id="reqemail" type="email" placeholder="Your Email">
         <div class="erorshown fulwidthm  left" id="emailreqerr"><?= $lang[302][$current] ?></div>
        </div>
        <div class="rqstfrmrow fulwidthm left mgnB15">
         <input class="rqstfrminput fulwidthm left" id="reqphno" type="text" placeholder="Contact Number">
         <div class="erorshown fulwidthm  left" id="phnreqerr"><?= $lang[302][$current] ?></div>
        </div>
        <div class="rqstfrmrow fulwidthm left mgnB15">
         <textarea class="rqstfrminput fulwidthm left" id="reqmess" placeholder="Your Message"></textarea>
         <div class="erorshown fulwidthm  left" id="msgreqerr"><?= $lang[302][$current] ?></div>
        </div>
        <div class="rqstfrmrow fulwidthm left mgnB15">
         <button class="lblue_bg fulwidthm left pdgTB10 fontsize18 reqstinfopoopen" id="requestbut"><?= $lang[199][$current] ?></button>
        </div>
        <div class="tremsRs lgraytext left fulwidthm  fontsize12 "><span style="color:red;"><?= $lang[1032][$current] ?></span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="detilwishlistbtn transition2 mgnB15 whitetext  text-center fulwidthm left whishorngnebtn" id="wishlistttt_101" title="Save to Wishlist"> <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>
     <h3 class="whsilisttile  robotoregular fontsize16"><?= $lang[197][$current] ?></h3> </div>
    <!--

<div class="contacthostopen">Msg</div>

    -->
    <div class="advertisment300s text-center pdg15 whitebg fulwidthm left mgnB15"> <span id="show_ads_65449edab1f71ef5039cf282bca8430c_1306"></span>
     <script language="javascript" type="text/javascript" src="{{ asset('http://www.inoutdemo.com/inout_adserver_enterprise/show-ads.js') }}"></script>
     <script language="javascript">
     if (window.ads_65449edab1f71ef5039cf282bca8430c) {
       ads_65449edab1f71ef5039cf282bca8430c += 1;
     } else {
       ads_65449edab1f71ef5039cf282bca8430c = 1;
     }
     ads_65449edab1f71ef5039cf282bca8430c_1306 = ads_65449edab1f71ef5039cf282bca8430c;
     timer_65449edab1f71ef5039cf282bca8430c1306 = window.setInterval(function () {
       if (window.gc4ca4238a0b923820dcc509a6f75849b) {
         setTimeout("showAdsforContent(1306,300,250,''," + ads_65449edab1f71ef5039cf282bca8430c_1306 + ",'ads_65449edab1f71ef5039cf282bca8430c')", 1000 * (ads_65449edab1f71ef5039cf282bca8430c_1306 - 1));
         window.clearInterval(timer_65449edab1f71ef5039cf282bca8430c1306);
       }
     }, 100);
     ads_65449edab1f71ef5039cf282bca8430c_1306_position = 0;
     </script>
    </div>
    <div class="advertisment300s text-center pdg15 whitebg fulwidthm left mgnB15"> <span id="show_ads_65449edab1f71ef5039cf282bca8430c_1307"></span>
     <script language="javascript" type="text/javascript" src="http://www.inoutdemo.com/inout_adserver_enterprise/show-ads.js"></script>
     <script language="javascript">
     if (window.ads_65449edab1f71ef5039cf282bca8430c) {
       ads_65449edab1f71ef5039cf282bca8430c += 1;
     } else {
       ads_65449edab1f71ef5039cf282bca8430c = 1;
     }
     ads_65449edab1f71ef5039cf282bca8430c_1307 = ads_65449edab1f71ef5039cf282bca8430c;
     timer_65449edab1f71ef5039cf282bca8430c1307 = window.setInterval(function () {
       if (window.gc4ca4238a0b923820dcc509a6f75849b) {
         setTimeout("showAdsforContent(1307,300,250,'http://www.inoutdemo.com/inout_adserver_enterprise/publisher-show-ads.php'," + ads_65449edab1f71ef5039cf282bca8430c_1307 + ",'ads_65449edab1f71ef5039cf282bca8430c')", 1000 * (ads_65449edab1f71ef5039cf282bca8430c_1307 - 1));
         window.clearInterval(timer_65449edab1f71ef5039cf282bca8430c1307);
       }
     }, 100);
     ads_65449edab1f71ef5039cf282bca8430c_1307_position = 0;
     </script>
    </div>
   </div>
   <!-- detailsfullright ends -->
   <div class="clearfix"></div>
   @include('')
   <!-- resultbootm listing ends -->
   <input type="hidden" value="0" id="hand"> </div>
  <!-- listing wraper ends -->
  <!-- mainontainer_in ends -->
 </div>
 <!-- mainindexcontainer ends -->
</div>

@endsection