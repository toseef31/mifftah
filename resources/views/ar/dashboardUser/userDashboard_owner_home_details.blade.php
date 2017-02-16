@extends('dashboardUser.dash_master_layout')
@section('content') 
<div class="detailsfulleft  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">

 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
  <div class="detailshead fulwidthm left">
   <div class="headleft left">
    <h6 class="detailsprpse lbluetext font-size14">Apartment Property For  Rent </h6>
    <h4 class="dname fontsize20 graytext">  </h4>
    <div class="locationlist lgraytext"><i class="fa fa-map-marker"></i>&nbsp;Chicago, IL 2444</div>
   </div>
   <div class="headright right text-right">
    <div class="drpice fontsize24 graytext" title="$ 25,000">$ 25,000/<span class="fontsize12"> Month</span></div>
   </div>
  </div>
  <!-- Details Head ends -->
  <div class="deatilssliderwrp mgnT20 fulwidthm left">

   <div class="GSlideShow" style="margin-bottom: 110px; background-image: url(&quot;userdata/List/1/3/cabin-68243_960_720.jpg&quot;); transition: background-image 800ms ease-in-out; height: 450px; border-style: solid; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 0px;">


    <img src="{{ asset('userdata/List/1/3/cabin-68243_960_720.jpg')}}" alt="" title="$listimages1[1]">


    <span class="GSlideShowGoLeft" style="font-family: icons; font-style: normal; font-size: 1.8em; background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border: 0px solid rgba(0, 0, 0, 0.498039); border-radius: 0px; display: block;">&lt;</span><span class="GSlideShowGoRight" style="background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border: 0px solid rgba(0, 0, 0, 0.498039); border-radius: 0px; font-family: icons; font-style: normal; font-size: 1.8em; display: block; box-shadow: rgba(0, 0, 0, 0) 0px 0px 10px 0px;">&gt;</span><span class="playPauseBtn" style="background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border: 0px solid rgba(0, 0, 0, 0.498039); border-radius: 0px; font-size: 1.6em;"></span><span class="GSlideShowTitle" style="background-color: rgba(0, 0, 0, 0.498039); color: rgb(255, 255, 255); border-left: 0px solid rgba(0, 0, 0, 0.498039); border-right: 0px solid rgba(0, 0, 0, 0.498039); border-bottom: 0px solid rgba(0, 0, 0, 0.498039); border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">1/1     "$listimages1[1]"</span><div class="GSlideShowNavBar" style="width: 100%; height: 100px; position: absolute; bottom: -110px; margin-left: -1px; text-align: center; background-color: rgb(255, 255, 255); border-width: 0px; border-color: rgb(255, 255, 255); border-style: solid; border-radius: 0px;"><span class="GSlideShowLeftNavButton" style="left: 0px; position: absolute; width: 49px; height: 100%; line-height: 100px; font-family: icons; font-size: 1.7em; cursor: pointer; color: rgb(255, 255, 255); text-align: center; border-radius: 0px;">&lt;</span><div class="GSlideShowNavBarContent" style="width: 100%; height: 100px; float: left; border-left: 1px solid rgba(0, 0, 0, 0); border-right: 1px solid rgba(0, 0, 0, 0);"><span class="GSlideShowNavBarImage" id="0" style="background-image: url(&quot;userdata/List/1/3/cabin-68243_960_720.jpg&quot;); height: 100px; opacity: 0.9; border-radius: 0px;"></span></div><span class="GSlideShowRightNavButton" style="right: 0px; position: absolute; width: 49px; height: 100%; line-height: 100px; font-family: icons; font-size: 1.7em; cursor: pointer; color: rgb(255, 255, 255); text-align: center; border-radius: 0px;">&gt;</span></div></div>
  </div>

 </section>
 <!-- Details Section ends -->  

 <section class="detailsection mgnB20 fulwidthm whitebg left ">
  <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
   <i class="facltyicon flaticon-squares37 lbluetext"></i>
   <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext" title="Home Size : 1,200 Sq.ft">1,200 Sq.ft</span>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
   <span class="facltyicon flaticon-beds5 dbluetext"></span>
   <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">5 Beds</span>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
   <span class="facltyicon flaticon-shower15 lbluetext"></span>
   <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext ">2 Bathrooms</span>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 text-center col-xs-6 comonfaclity-col">
   <span class="facltyicon flaticon-basic17 dbluetext"></span>
   <span class="faclitytilte mgnT05 robotoregular fontsize16 graytext">12 months ago</span>
  </div>
 </section>



 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
  <div class="ca_tb_btnwrp">
   <div class="cal_tab_btn active">
    Overview        </div>
   <div class="cal_tab_btn">
    Photos        </div>
   <div class="cal_tab_btn" id="xcxc">
    Location        </div>
  </div>


  <div class="cal_tabwrp fulwidthm left">
   <div class="cal_tabbox active">
    <div class="cal_tabbox_in pdgTB30">
     <div class="detlboxs  fulwidthm left ">
      <div class=" detlhead detlheadclick robotoregular fontsize18 graytext active">
       About this Property        </div>
      <div class="detlcontent fulwidthm left " style="display: block;">
       <p class=" font-size14 paragrphtext robotoregular graytext">
        Apartment in chicago for rent.
       </p>

      </div>

     </div>
     <!-- detal box ends -->

     <div class="detlboxs  fulwidthm left ">
      <div class="detlhead detlheadclick robotoregular fontsize18 graytext ">
       General Informations        </div>
      <div class="detlcontent  fulwidthm left ">
       <ul class="detillistingul ">
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-beds5"></i> Beds</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">5 Beds</span>

        </li>
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37 "></i> House Size</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">1200 Sq.ft </span>

        </li>
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-payment7"></i> Price</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">$ 25,000</span>

        </li>



        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-flag32"></i> Status</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">Active</span>

        </li>
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-shower15"></i> Bathrooms </span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">2 Bathrooms</span>

        </li>
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-squares37"></i> Lot Size</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">3000  Sq.ft  </span>

        </li>

        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-calendar146"></i> Year Built</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">2010</span>

        </li>



       </ul>

      </div>

     </div>
     <!-- detal box ends -->
     <div class="detlboxs  fulwidthm left ">
      <div class="detlhead detlheadclick robotoregular fontsize18 graytext ">
       Rental Informations 
      </div>
      <div class="detlcontent  fulwidthm left ">
       <ul class="detillistingul ">
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-calendar146"></i>Security Deposit</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">$ 250</span>

        </li>
        <li class="detaillistingli left mgnB20">
         <span class="detaillititle col-sm-6 col-xs-6 nopaddingL lgraytext"><i class="flaticon-calendar146"></i>Minimum Lease Period</span> <span class="detaillititledis col-sm-6 col-xs-6 nopaddingR robotomedium">5 Months</span>

        </li>

       </ul>

      </div>

     </div>
     <!-- detal box ends -->

     <div class="detlboxs  fulwidthm left ">
      <div class="detlhead detlheadclick robotoregular fontsize18 graytext ">
       Other Property Informations  
      </div>
      <div class="detlcontent  fulwidthm left ">
       <ul class="detillistingul ">
         <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-multiple25"></i> <span class="aminidis">Single Family</span> 
        </li>
      <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-home97"></i><span class="aminidis">family living room</span> 
        </li>
         <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-dining3"></i><span class="aminidis">Dining</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-hands17"></i><span class="aminidis">Guest Room</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-flatscreen"></i><span class="aminidis">Cable Tv</span> 
        </li>
     <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-globe41"></i><span class="aminidis">Internet</span> 
        </li>
     <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-globe41"></i><span class="aminidis">Internet</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-locked61"></i><span class="aminidis">Security Systems</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-terrace"></i><span class="aminidis">balcony</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-swimming22"></i><span class="aminidis">Pool</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-grass"></i><span class="aminidis">lawn</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-fence14"></i><span class="aminidis">Fence</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-modern13"></i><span class="aminidis">Modern Type</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-modern13"></i><span class="aminidis">contemporary </span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-house112"></i><span class="aminidis">Colonial</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-floor"></i><span class="aminidis">Tile</span> 
        </li>
     <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-dining9"></i><span class="aminidis">Carpet</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-triangular46"></i><span class="aminidis">concrete</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-floor"></i><span class="aminidis">Hard Wood</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-airconditioner"></i><span class="aminidis">air conditioner</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-tool225"></i><span class="aminidis">heater</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-river3"></i><span class="aminidis">natural  air</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-buildings8"></i><span class="aminidis">City</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-mountain40"></i><span class="aminidis">Mountain</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-kids4"></i><span class="aminidis">Park</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10">
        <i class="aminti_icon flaticon-city33"></i><span class="aminidis">Buildings</span> 
        </li>
        <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-modern13"></i> <span class="aminidis">Modern</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-home97"></i> <span class="aminidis">Office</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-dining3"></i> <span class="aminidis">Dining</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-terrace"></i> <span class="aminidis">Balcony</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-fence14"></i> <span class="aminidis">Fence</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-floor"></i> <span class="aminidis">Tile</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-tool225"></i> <span class="aminidis">Heater</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-home97"></i> <span class="aminidis">City View</span></li> <li class="detaillistingli fulwidthm left lgraytext mgnB10"><i class="aminti_icon flaticon-home97"></i> <span class="aminidis">Mountain View</span></li>         </ul>

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
        <li data-src=" userdata/List/1/3/cabin-68243_960_720.jpg" class="detailsgalleryli">
         <div class="thumbin imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;userdata/List/1/3/cabin-68243_960_720.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><img src="{{ asset('userdata/List/1/3/cabin-68243_960_720.jpg')}}" style="display: none;"></div>
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
<div class="col-xs-12 ">
 <div class="resultdlistingbottm whitebg pdg15 fulwidthm left mgnB30">
  <div class="newlsitingwrp">
   <div class="col-xs-12 col-sm-3">
    <h2 class="robotolight fontsize30 newliisthead">Popular <span class="robotomedium">Listings</span></h2>
    <p class="newlsitingp fontsize18 robotolight">Popular Listings in <br> For Sale Network</p>
    <div class="newlistingcontrol">
     <div class="n_l_prev n_lcontrl"><i class="flaticon-direction129"></i></div>
     <div class="n_l_next n_lcontrl"><i class="flaticon-fastforward4"></i></div>
    </div>
   </div>
   <div class="col-xs-12 col-sm-9 newlistingwrp">
    <div id="newlisting" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
     <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 20160px; left: 0px; display: block; transition: all 800ms ease; transform: translate3d(-560px, 0px, 0px);"><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/15/New-York-NY" class="graybg" title=" New York, NY 9700">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/2/15/beautiful_house_wallpaper_1a1a6.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05"> New York, NY 9700</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 2,700">$ 2,700</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,700 Sq.ft">1,700 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_15" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/22/Chicago-IL" class="graybg" title="Arcola, Chicago, IL 3223">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/3/22/ffffff.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Arcola, Chicago, IL 3223</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 3,650,000">$ 3,650,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,300 Sq.ft">1,300 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_22" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/122/Alexandria-VA" class="graybg" title="2eds, Alexandria, VA 11122">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/57/122/berlin-77791_960_720 - Copy.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">2eds, Alexandria, VA 11122</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 1,111">$ 1,111</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 200 Sq.ft">200 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_122" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/13/New-York-NY" class="graybg" title="Albany, New York, NY 4345">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/2/13/55cb83c7efc6b.image.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Albany, New York, NY 4345</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 3,400,000">$ 3,400,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">6</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">3.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/17/New-York-NY" class="graybg" title="Batavia, New York, NY 2345">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/3/17/eeee2.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Batavia, New York, NY 2345</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 3,800">$ 3,800</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,500 Sq.ft">1,500 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">6</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/4/San-Francisco-CA" class="graybg" title="Chinatown,New Street, San Francisco, CA 2144">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/1/4/home-794367_960_720.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Chinatown,New Street, San Francisco, CA 2144</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 18,530">$ 18,530</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 3,000 Sq.ft">3,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_4" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/129/New-York-NY" class="graybg" title="Gfjhtfg, New York, NY 11889">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/60/129/room.JPG')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Gfjhtfg, New York, NY 11889</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 500">$ 500</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 800 Sq.ft">800 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_129" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/8/New-York-NY" class="graybg" title="Niagra Nagar, New York, NY 9997">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/1/8/beautiful-21864_960_720.jpg')}}"></div>
              <div class="featuredim">
               <img title="Featured Property" src="{{ asset('images/featured.png')}}">
              </div>                          </div>
             <div class="photocount1">4 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Niagra Nagar, New York, NY 9997</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 2,300,000">$ 2,300,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,500 Sq.ft">1,500 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/140/Doral-FL" class="graybg" title="3265 NW 87th Ave, Doral, FL 33172">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/67/140/Cruise-ship-views-from-the-Amador-Causeway-Panama-1.jpg"></div>
              <div class="featuredim">
               <img title="Featured Property" src="images/featured.png">
              </div>                          </div>
             <div class="photocount1">5 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">3265 NW 87th Ave, Doral, FL 33172</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 333">$ 333</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 65,148 Sq.ft">65,148 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_140" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/7/Miami-FL" class="graybg" title="Indira Nagar,Nagpoor, Miami, FL 7568">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/0/7/house-164909_960_720.jpg"></div>
              <div class="featuredim">
               <img title="Featured Property" src="images/featured.png">
              </div>                          </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Indira Nagar,Nagpoor, Miami, FL 7568</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 4,582,000">$ 4,582,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_7" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">9</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/119/Huffman-TX" class="graybg" title="675 Afton Way, Huffman, TX 77336">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/56/119/slider02.jpg"></div>
              <div class="featuredim">
               <img title="Featured Property" src="images/featured.png">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">675 Afton Way, Huffman, TX 77336</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 1,000,000">$ 1,000,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Lot Size : 191 Acre">191 Acre</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_119" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/101/New-York-NY" class="graybg" title="234/45, New York, NY 1202223">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg"></div>
              <div class="featuredim">
               <img title="Featured Property" src="images/featured.png">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">234/45, New York, NY 1202223</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 70,000">$ 70,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 5,000 Sq.ft">5,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/5/Las-Vegas-NV" class="graybg" title="Opp.Park,TigerTown, Las Vegas, NV 2444">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/0/5/home-794367_960_720.jpg"></div>
              <div class="featuredim">
               <img title="Featured Property" src="images/featured.png">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Opp.Park,TigerTown, Las Vegas, NV 2444</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 3,500,000">$ 3,500,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_5" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/106/Nyack-NY" class="graybg" title="Dfghgfd,788/44,, Nyack, NY 10960">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/47/106/Unique-And-Beautiful-Wallpaper-HD.jpg"></div>
              <div class="featuredim">
               <img title="Featured Property" src="images/featured.png">
              </div>                          </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Dfghgfd,788/44,, Nyack, NY 10960</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 60,000">$ 60,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 5,000 Sq.ft">5,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_106" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">10</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">7</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/20/Las-Vegas-NV" class="graybg" title="Nevada, Las Vegas, NV 4565">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/3/20/pppp1.jpg"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Nevada, Las Vegas, NV 4565</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 3,400">$ 3,400</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,200 Sq.ft">1,200 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_20" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/23/Orlando-FL" class="graybg" title="Clermont, Orlando, FL 8758">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/2/23/jjjjjj1.jpg"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Clermont, Orlando, FL 8758</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 8,000">$ 8,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_23" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/1/New-York-NY" class="graybg" title=" New York, NY 2445">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/1/1/Beautiful-House-Wallpaper-For-Mobile-19.jpg"></div>
             </div>
             <div class="photocount1">4 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05"> New York, NY 2445</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 1,500,000">$ 1,500,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_1" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">9</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/105/New-York-NY" class="graybg" title="40 Wall Street, New York, NY 10005">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/48/105/room.JPG"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">40 Wall Street, New York, NY 10005</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 400,000">$ 400,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="HomeSize/LotSize Not Available">N.A</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/31/10-Hauvers" class="graybg" title="Middlesex, 10, Hauvers 1231">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/0/31/big.jpg"></div>
             </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Middlesex, 10, Hauvers 1231</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 456">$ 456</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,500 Sq.ft">2,500 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_31" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/128/New-York-NY" class="graybg" title="Carroll St 21, New York, NY 11523">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/0/128/room.JPG"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Carroll St 21, New York, NY 11523</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 500">$ 500</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 500 Sq.ft">500 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_128" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/127/Brooklyn-MS" class="graybg" title="Atlantic Ave, Brooklyn, MS 39425">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="userdata/List/Thumb/0/127/room.JPG"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Atlantic Ave, Brooklyn, MS 39425</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 500">$ 500</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 500 Sq.ft">500 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_127" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/104/Columbus-OH" class="graybg" title="34, Telling Street, US, Columbus, OH 3243">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/45/104/Sundarbans_a_few_months_after_cyclone_sidr.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">34, Telling Street, US, Columbus, OH 3243</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 100">$ 100</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="HomeSize/LotSize Not Available">N.A</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_104" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/59/San-Francisco-CA" class="graybg" title="H NO:#213$$$, San Francisco, CA 94101">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/21/59/san-fran1.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">H NO:#213$$$, San Francisco, CA 94101</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 15,000">$ 15,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 3,000 Sq.ft">3,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_59" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">7</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/123/New-York-NY" class="graybg" title="Sdftrr4r, New York, NY 11105">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/57/123/xfvbvb.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Sdftrr4r, New York, NY 11105</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 400">$ 400</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 200 Sq.ft">200 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_123" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/149/Universal-City-CA" class="graybg" title="House Name,appartment Number, Universal City, CA 12323435">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/72/149/rnn2.jpeg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">House Name,appartment Number, Universal City, CA 12323435</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 100">$ 100</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_149" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/14/New-York-NY" class="graybg" title=" New York, NY 4325">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/2/14/hd-nature-free-high-resolution-widescreen-beautiful-home-and-natural-graphic-design-fresh-gallery-276596.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05"> New York, NY 4325</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 3,500">$ 3,500</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,845 Sq.ft">1,845 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_14" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">3.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/2/Orlando-FL" class="graybg" title=" Orlando, FL 2432">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/1/2/home-54907_960_720.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05"> Orlando, FL 2432</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 2,500,000">$ 2,500,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_2" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/21/Los-Angeles-CA" class="graybg" title="Avalon, Los Angeles, CA 7568">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/3/21/uuuuu.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Avalon, Los Angeles, CA 7568</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 4,000">$ 4,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,500 Sq.ft">1,500 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_21" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/9/Orlando-FL" class="graybg" title=" Orlando, FL 47367">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/1/9/home-wallpaper-26.jpg')}}"></div>
             </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05"> Orlando, FL 47367</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 15,000,000">$ 15,000,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_9" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0.5</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/34/Atlanta-GA" class="graybg" title="Test, Atlanta, GA 1">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/0/34/Chrysanthemum.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Test, Atlanta, GA 1</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 12,000">$ 12,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="HomeSize/LotSize Not Available">N.A</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_34" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/6/Los-Angeles-CA" class="graybg" title=" Los Angeles, CA 65679">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/0/6/berlin-77791_960_720.jpg')}}"></div>
             </div>
             <div class="photocount1">2 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05"> Los Angeles, CA 65679</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 1,350,000">$ 1,350,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_6" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">6</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/96/Modesto-CA" class="graybg" title="3001 Tagura Drive, Modesto, CA 95355">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/37/96/6330 Jonah St Atwater CA 95301-large-001-7-Front View-1500x1000-72dpi.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">3001 Tagura Drive, Modesto, CA 95355</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 330,000">$ 330,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,543 Sq.ft">1,543 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_96" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/172/New-York-Statele-Unite-ale-Americii" class="graybg" title="Colorado 5th, New York, Statele Unite Ale Americii 123556">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/84/172/802bd2c44844e865880c1f2ddf93ba71.jpg')}}"></div>
             </div>
             <div class="photocount1">5 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Colorado 5th, New York, Statele Unite Ale Americii 123556</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 250,000">$ 250,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 250 Sq.ft">250 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_172" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/99/New-York-NY" class="graybg" title="1 New York, New York, NY 1005">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/42/99/fer.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">1 New York, New York, NY 1005</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 1,000,000">$ 1,000,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">1</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/150/Universal-City-CA" class="graybg" title="Appartment Name,appartment Address, Universal City, CA 34435456">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/73/150/rnn1.jpg')}}"></div>
             </div>
             <div class="photocount1">1 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">Appartment Name,appartment Address, Universal City, CA 34435456</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 200">$ 200</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 234 Sq.ft">234 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_150" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>

        </div></div><div class="owl-item" style="width: 280px;"><div class="item newlistingitem fulwidthm">
         <div class="newlistingitem_in pdgS10"> <a href="http://inout-realestate.demo.inoutscripts.net/home/details/201/Austin-Teksas" class="graybg" title="564564, Austin, Teksas 65456">
           <div class="listingimageouter fulwidthm left">
            <div class="listingimage">
             <div class=" listinimgcover">

              <div class="listinimgcoverin media-cover">  <img class="img-responsive-height" src="{{asset('userdata/List/Thumb/0/201/1600x1200-1.jpg')}}"></div>
             </div>
             <div class="photocount1">3 Photos</div>
             <div class="listinname whitetext fontsize13 pdg05">564564, Austin, Teksas 65456</div>

            </div>

           </div>
          </a>
          <div class="newlistingdetails fulwidthm left graybg">
           <div class="n_l_discptn">
            <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="$ 15,000">$ 15,000</div>
            <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 564 Sq.ft">564 Sq.ft</div>
            <div class="nl_bottom fulwidthm left pdg10">

             <div class="left"> 
              <span id="wishlist_201" class="hearlike wishlistopen "> <i class="flaticon-heart297"></i> </span>                                                             </div>
             <div class="n_botmrd right fontsize16 ">
              <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
              <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
             </div>
            </div>
           </div>
          </div>
         </div>



     <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
   </div>
  </div>
 </div>
</div
@endsection