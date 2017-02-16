@extends('dashboardUser.dash_master_layout')
@section('content')
  <?php
  if (strpos($_SERVER['REQUEST_URI'], 'search') == true) {
    echo "
  <style>
  #sider.dashfulright.col-lg-3.col-md-3.col-sm-12.col-xs-12.pull-right.mgnB15.nopaddingR {display: none !important;}
  footer.mainfooter.fulwidthm.left {display: none !important;}
  .innerwraperful.pdgT15.fulwidthm.left {margin-top: 60px !important;}
</style>
";
  }
  ?>
  <div class="innerwraperful fulwidthm left" style="margin-top:0px;">
    <div class="row">
      <div class="resultfilterwrp fulwidthm left lblue_bg">
        <div class=" pdgS10 fulwidthm left">
          
          <!-- form filters -->
          <!-- simple form -->
          <form class="" role="form" method="post" action="{{ url('/search') }}" id="filterform">
            <div class="firstfilter left col-md-6 col-sm-9 col-xs-10  nopadding">
              <div class="pricefilter  left col-sm-6 col-md-6 col-xs-12 nopaddingLR">
                <div class="pricefilterhalf ">
                  <select id="" class="priceselect filterselect" style="width: 100%; display: none;" tabindex="-1" name="minprice">
                    <option value="50000">$ 50000</option>
                    <option value="100000">$ 100000</option>
                    <option value="150000">$ 150000</option>
                    <option value="200000">$ 200000</option>
                    <option value="250000">$ 250000</option>
                    <option value="300000">$ 300000</option>
                    <option value="350000">$ 350000</option>
                    <option value="400000">$ 400000</option>
                    <option value="450000">$ 450000</option>
                    <option value="500000">$ 500000</option>
                  </select>
                </div>
                <span class=" pricefmidle">إلى</span>
                <div class="pricefilterhalf ">
                  <select id="" class="priceselect filterselect" style="width: 100%; display: none;" tabindex="-1" name="maxprice">
                    <option value="5000000">$ 5000000</option>
                    <option value="10000000">$ 10000000</option>
                    <option value="15000000">$ 15000000</option>
                    <option value="20000000">$ 20000000</option>
                    <option value="25000000">$ 25000000</option>
                    <option value="30000000">$ 30000000</option>
                    <option value="35000000">$ 35000000</option>
                    <option value="40000000">$ 40000000</option>
                    <option value="45000000">$ 45000000</option>
                    <option value="50000000">$ 50000000</option>
                  </select>
                </div>
              </div>
              <div class="bedfilter  col-sm-3 left nopadding">
                <div class="bedfilterin">
                  <select id="" class="priceselect filterselect" style="width: 100%; " tabindex="-1" name="beds">
                    <option value="0">0Beds</option>
                    <option value="1">1 Beds</option>
                    <option value="2">2 Beds</option>
                    <option value="3">3 Beds</option>
                    <option value="4">4 Beds</option>
                    <option value="5">5 Beds</option>
                    <option value="6">6 Beds</option>
                    <option value="7">7 Beds</option>
                    <option value="8">8 Beds</option>
                    <option value="9">9 Beds</option>
                    <option value="10">10+ Beds</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="morefilterbtn left col-sm-1 col-md-2 col-xs-2 nopadding">
            <span class="morefilterclick">
              <span class="mobnone">المزيد من المرشحات</span>
              <i class="flaticon-arrow486"></i>
            </span>
            </div>
           <script>
$(document).ready(function(){
    $("showhide").click(function(){
        $("firstfilter left col-md-4 col-sm-4 col-xs-10  nopadding").toggle();
    });
});
</script>
           <div class="morefilterdiv " >
            <div class="morefilterdivin">
             <div class="mainindexcontainer">
              <div class="col-md-7 col-xs-12 mgnTB10">


               <div class="mfrow mgnTB10 pdgTB10 graybg fulwidthm left">
                <div class="mfsection col-xs-12" id="htype">
                 <div class="mfsectionhead mgnB20 graytext fontsize20">Home Type</div>
                 <div class="filterechwrp">
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" value="1" name="hometype" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Single Family</span> </div>
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" value="2" name="hometype" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Multi Family</span> </div>
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" value="3" name="hometype" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname"> Apartment  </span> </div>
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" value="4" name="hometype" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname"> Vacant Land</span> </div>



                 </div>
                </div>
               </div>
               <div class="mfrow mgnTB10 pdgTB10 graybg fulwidthm left">
                <div class="mfsection col-xs-12 ">
                 <div class="mfsectionhead mgnB20 graytext fontsize20"> Activities</div>
                 <div class="filterechwrp">
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="open" name="open" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Open House</span> </div>
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="newlist" name="newlist" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">New Listing</span> </div>
                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="pricered" name="pricered" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname"> Price Reduced </span> </div>

                  <div class="echfilter">
                   <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="forclosure" name="forclosure" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                   <span class=" pdgS05 robotomedium font-size14 graytext  aminitname"> Foreclosure </span> </div>


                 </div>
                </div>
               </div>

              </div>
              <div class="col-md-5  mgnTB10">
               <div class="mfrow mobileonlyfilter mgnTB10 pdg10 graybg fulwidthm left">
                <div class="morfleft left">
                 <h3 class="morflefttilte graytext fontsize16">Beds</h3>
                </div>
                <div class="morfright onmoblefilter left">
                 <select id="beds1" class="priceselect filterselect xo" style="width: 100%; display: none;" tabindex="-1">
                  <option value="">All Beds</option>
                  <option value="0">0 Bed</option>
                  <option value="1">1 Beds</option>
                  <option value="2">2 Beds</option>
                  <option value="3">3 Beds</option>
                  <option value="4">4 Beds</option>
                  <option value="5">5 Beds</option>
                  <option value="6">6 Beds</option>
                  <option value="7">7 Beds</option>
                  <option value="8">8 Beds</option>
                  <option value="9">9 Beds</option>
                  <option value="10">10+ Beds</option>
                 </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-beds1-container"><span class="select2-selection__rendered" id="select2-beds1-container" title="All Beds">All Beds</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
               </div>
               <div class="mfrow mgnTB10 pdg10 graybg fulwidthm left">
                <div class="morfleft left">
                 <h3 class="morflefttilte graytext fontsize16">Baths</h3>
                </div>
                <div class="morfright left">
                 <select id="bathrooms" class="bathfilter filterselect xo" style="width: 100%; display: none;" tabindex="-1">
                  <option value="">Bathrooms</option>
                  <option value="0">0 Bathroom</option>
                  <option value="1">1 Bathrooms</option>
                  <option value="2">2 Bathrooms</option>
                  <option value="3">3 Bathrooms</option>
                  <option value="4">4 Bathrooms</option>
                  <option value="5">5 Bathrooms</option>
                  <option value="6">6 Bathrooms</option>
                  <option value="6">7+ Bathrooms</option>
                 </select>
<!--<span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-bathrooms-container"><span class="select2-selection__rendered" id="select2-bathrooms-container" title="Bathrooms">Bathrooms</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->
                </div>
               </div>
               <div class="mfrow mgnTB10 pdg10 graybg fulwidthm left">
                <div class="morfleft left">
                 <h3 class="morflefttilte graytext fontsize16">Square Feet</h3>
                </div>
                <div class="morfright left">
                 <select id="homesize" class="bathfilter filterselect xo" style="width: 100%; display: none;" tabindex="-1">

                  <option value="">Any Home Size</option>
                  <option value="500">500 sqft</option>
                  <option value="750">750 sqft</option>
                  <option value="1000">1,000 sqft</option>
                  <option value="2000">2,000 sqft</option>
                  <option value="3000">3,000 sqft</option>
                  <option value="4000">4,000 sqft</option>
                  <option value="5000">5,000 sqft</option>
                  <option value="6000">6,000 sqft</option>
                  <option value="7000">7,000 sqft</option>
                  <option value="8000">8,000+sqft</option>

                 </select>

                </div>
               </div>

               <div class="mfrow mgnTB10 pdg10 graybg fulwidthm left">
                <div class="morfleft left">
                 <h3 class="morflefttilte graytext fontsize16">Year Build</h3>
                </div>
                <div class="morfright left">
                 <select id="yearbuilt" class="priceselect filterselect xo" style="width: 100%; display: none;" tabindex="-1">
                  <option value="">All</option>
                  <option value="1850">1850</option>
                  <option value="1851">1851</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option> 
                 </select>
                </div>
               </div>


               <div class="mfrow mgnTB10 pdg10 graybg fulwidthm left">
                <div class="morfleft left">
                 <h3 class="morflefttilte graytext fontsize16">Days on For Sale Network</h3>
                </div>
                <div class="morfright left">
                 <select id="dayss" class="bathfilter filterselect xo" style="width: 100%; display: none;" tabindex="-1">
                  <option value="">All</option>
                  <option value="1">1 Month</option>
                  <option value="3">3 Months</option>
                  <option value="6">6 Months</option>
                  <option value="9">9 Months</option>
                  <option value="12">12 Months</option>
                  <option value="15">15 Months</option>
                  <option value="18">18 Months</option>
                  <option value="21">21 Months</option>
                  <option value="24">24 Months</option>

                 </select>
                </div>
               </div>

              </div>
             </div>

             <!-- bottom fixed button -->
             <div class="bottomfixedfilter pdg10 whitebg">
              <div class="pull-right">
               <button class="morefiltercancel btn dblue_bg">Cancel</button>
               <button class="morefilteraply btn lblue_bg" id="advancefil" disabled=""> Apply Filter </button>
              </div>
             </div>
             <!-- Bottom fixed buttons ends -->
            </div>
           </div>
           
            <!-- third filter -->
            <div id="showhide" class="firstfilter left col-md-4 col-sm-4 col-xs-10  nopadding">
              <div class="pricefilter  left col-sm-6 col-md-6 col-xs-12 nopaddingLR">
                <div class="pricefilterhalf ">
                  <select id="" class="priceselect filterselect" style="width: 100%; display: none;" tabindex="-1" name="minprice">
                    <option selected>Select a Property Type</option>
                    <option value="all">All</option>
                    <option value="rent">rent</option>
                    <option value="buy">Buy</option>
                  </select>
                </div>
               
                <div class="pricefilterhalf ">
                  <select id="" class="priceselect filterselect" style="width: 100%; display: none;" tabindex="-1" name="maxprice">
                    <option selected>Select a Property type</option>
                    <option value="all">Select a type</option>
                    <option value="Single Family">Single Family</option>
                    <option value="Multi Family">Multi Family</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Vacant Land">Vacant Land</option>
                    <option value="apartamente">apartamente</option>
                    <option value="Pocket Listings">Pocket Listings</option>
                    <option value="Farm">Farm</option>
                  </select>
                </div>
              </div>
            </div>
          
          </form>
        </div>
      </div>
      <div class="resultwraperfull">
        <div class="resultsidebar">
          <!-- Results starts -->
          <div class="resultwraper">
            <div class="resultlistingfull relsonly" style="min-height: 219px;">
              <div class="whitebg fulwidthm left pdg10">
                {{--<div class="resultplace col-sm-8 col-xs-12 mgnTB05" id="abovedivpage">To Matched Total   results</div>--}}
                <div class="reultasoart  pull-right col-sm-4 col-xs-12">
                  <select id="sortby" class="filterselect " style="width: 100%; display: none;" tabindex="-1">
                    <option value="1">Sort by Featured</option>
                    <option value="2">Sort by Price Low to High</option>
                    <option value="3">Sort by Price High to Low</option>
                  </select>
                </div>
              </div>
              <!-- Soarting ends -->
              <div id="list_results">
                <?php if(!empty($data) || !null == $data){ ?>
                @foreach($data as $property)
                  <div class="col-xs-12 resultlisting mgnTB20" id="xyz-8">
                    <div class="whitebg fulwidthm resultlisting_in left lgray_border">
                      <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2" title="Niagra Nagar, New York, NY 9997">
                        <a href="{{ url('/search/preview/'.$property->id ) }}">
                          <div class="resultn_image" style="background: url('userdata/List/Thumb/1/8/beautiful-21864_960_720.jpg') no-repeat;">
                            <div class="featuredim"><img src="images/featured.png" title="Featured Property"></div>
                            <div class="photocount"><?= rand(0, 5) ?> Photos</div>
                          </div>
                        </a>
                      </div>
                      <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg">
                        <div class="resulthead">
                          <a href="{{ url('home/preview/'.$property->id) }}"
                             class="fontsize18 robotomedium graytext resultname" title="Niagra Nagar, New York, NY 9997"><?= $property->propertytype ?></a>
                          <p class="postdate lgraytext robotomedium fontsize12">Open: 12/22/2015-10:00 am to 1:00 pm,02/10/2016-9:00 am to 2:00 pm</p>
                        </div>
                        <div class="resultmiddle mgnTB10 fulwidthm left">
                          <div class="priceresult left robotoregular fontsize24"><i class="flaticon-down126 greentext" title="Price Reduced"></i> <span class="pricespan lbluetext" title="$ 2,300,000">$ <?= $property->price ?></span></div>
                          <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="Home Size : 1,500 Sq.ft"> <?= $property->homesize ?> Sq.ft</div>
                        </div>
                        <div class="resultbottom fulwidthm left  pdgT10">
                          <div class="n_botmrd left">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24" title="Beds"></i><span class="n_botmrdcount"><?= $property->beds ?></span>
                            </div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24" title="Bathrooms"></i><span class="n_botmrdcount"><?= $property->bathrooms ?></span>
                            </div>
                          </div>
                          <div class="right"><span id="wishlist_8" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                <?php }else{ ?>
                <h2>Sorry No listing found according to your Search </h2>
                <?php }?>
              </div>
              <!-- Each result ends -->
            </div>
            <div class="pagination_gc">
              <div class="col-xs-12">
                {{--<div id="valpagediv" class="results_count col-xs-12 mgnTB10"> Showing 1 – 12 of 12 Homes</div>--}}
                <div class="paginationnumber">
                  {{ $data->links() }}
                </div>
              </div>
            </div>
            <!-- Footer section -->
            <div class="clearfix"></div>
            <div class="fulfooter fulwidthm left resultfooterr">
              <div class="coprightbtm fulwidthm left text-center footerbg">
                <div class="sociallinks">
                  <ul class="socialul text-center">
                    <li class="sociali left"><a class="sociala" href="http://www.facebook.com"><i class="flaticon-facebook55"></i></a>
                    </li>
                    <li class="sociali left"><a class="sociala" href="http://twitter.com"><i class="flaticon-twitter1"></i></a></li>
                    <li class="sociali left"><a class="sociala" href="http://www.google-plus.com"><i class="flaticon-google116"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"></div>
                <div style="width: 100%;">
                  <div align="center" class="mgnTB20 text-center fontsize12 graytext"><b>Please Note - </b>The labels marked on the Map are slightly changed from its original positions.</div>
                </div>
                <div class="text-capitalize text-center graytext fontsize13 robotoregular fulwidthm mgnB30">Copyright © 20<?= date('y') ?> For Sale Network. All Rights Reserved.</div>
              </div>
            </div>
            <!-- Footer section Ends -->
            <!-- Animation ends -->
            <!-- Date Range Picker -->
            <script type="text/javascript" src="js/moment.min.js"></script>
            <script type="text/javascript" src="js/simpledatpiker/datepiker.js"></script>
            <!-- Date Range Picker Ends -->
            <!--  Menuu -->
            <script type="text/javascript">
              $(document).ready(function (e) {
                $('.innerheader .myacounthover').hover(function () {
                  $(this).children('.myacountdropdown').stop().fadeIn(200);
                }, function () {
                  $(this).children('.myacountdropdown ').stop().fadeOut(200);
                });
                // RESPONSIVE MENU Starts
                var menucontent = $('.rightmenu').html(); // main menu's Html
                $('.responsive_menulist').html(menucontent); // adding main menu to responsive menu
                // if width > 1000px responsive menu and close btn Hide Starts
                // if width > 1000px responsive menu and close btn Hide Ends
                $('.responsivebtn').click(function (e) {
                  $(this).toggleClass("active");
                  $('.responsive_menulist').fadeToggle(200);
                  //$('.responsive_menulist').toggle( "drop", { direction: "right" }, 200);
                });
                $('.responsivebtn, .responsive_menulist').click(function (event) {
                  event.stopPropagation();
                });
                $(document).click(function (e) {
                  $('.responsivebtn').removeClass("active");
                  $('.responsive_menulist').fadeOut(200);
                });
                // Sub Menu showing in Responsive menu
                $(".responsive_menulist .myacounthover").click(function () {
                  $(this).children('.responsive_menulist .myacountdropdown ').slideToggle(200);
                });
                // Sub Menu showing in Responsive menu	 Ends
                // RESPONSIVE MENU ENDS
              });
            </script>
            <script type="text/javascript" src="js/signinpopup.js"></script>
            <!-- Menu ends -->
            <!-- animation and select -->
            <script type="text/javascript" src="js/animate/animate.js"></script>
            <script type="text/javascript" src="js/animate/wow.js"></script>
            <script type="text/javascript" src="js/select2.js"></script>
            <script type="text/javascript">
              $(document).ready(function (e) {
                $(".selectsearch, .footerselect, .formselect, .filterselect").select2();
                wow = new WOW({
                  animateClass: 'animated',
                  mobile: false,
                  offset: 100
                });
                wow.init();
                // slect style
              });
            </script>
          </div>
          <!-- Results Ends -->
        </div>
        <!-- Result side bar ends -->
        <div class="resultmap">
          <div id="map" style="width: 100%; height: 576px;"></div>
        </div>
      </div>
    </div>
  </div>
  
  
  <script src="http://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
  <script type="text/javascript">
    
    "use strict";
    
    // variable to hold a map
    var map;
    
    // variable to hold current active InfoWindow
    var activeInfoWindow;
    
    // ------------------------------------------------------------------------------- //
    // initialize function
    // ------------------------------------------------------------------------------- //
    function initialize() {
      
      // map options - lots of options available here
      var mapOptions = {
        zoom: 2,
        draggable: true,
        center: new google.maps.LatLng(46.2276, 2.2137),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      
      // create map in div called map-canvas using map options defined above
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
      
      // define three Google Map LatLng objects representing geographic points
        
        <?php foreach($data  as $key=>$location){?>
      
      var locations = new google.maps.LatLng(<?= $location->latitude; ?>,<?= $location->longitude; ?>);
      
      fnPlaceMarkers(locations, "<?=$location->propertytype?>");
      <?php }?>
      //        var stPaul 			= new google.maps.LatLng(44.95273,-93.08915);
      //        var minneapolis 	= new google.maps.LatLng(44.97994,-93.26630);
      //        var falconHeights 	= new google.maps.LatLng(44.9917,-93.1664);
      // place markers
//        for( var e=0; e<=locations.length ; e++){
//            fnPlaceMarkers(locations[e],"St Paul");
//        }

//        fnPlaceMarkers(minneapolis,"Minneapolis");
//        fnPlaceMarkers(falconHeights,"Falcon Heights");
    }
    
    // ------------------------------------------------------------------------------- //
    // create markers on the map
    // ------------------------------------------------------------------------------- //
    function fnPlaceMarkers(myLocation, myCityName) {
      
      var marker = new google.maps.Marker({
        position: myLocation
      });
      
      // Renders the marker on the specified map
      marker.setMap(map);
      
      // create an InfoWindow - for mouseover
      var infoWnd = new google.maps.InfoWindow();
      
      // create an InfoWindow -  for mouseclick
      var infoWnd2 = new google.maps.InfoWindow();
      
      // -----------------------
      // ON MOUSEOVER
      // -----------------------
      
      // add content to your InfoWindow
      infoWnd.setContent('<div class="scrollFix"><strong>' + myCityName + '</strong></div>');
      
      // add listener on InfoWindow for mouseover event
      google.maps.event.addListener(marker, 'mouseover', function () {
        
        // Close active window if exists - [one might expect this to be default behaviour no?]
        if (activeInfoWindow != null) activeInfoWindow.close();
        
        // Close info Window on mouseclick if already opened
        infoWnd2.close();
        
        // Open new InfoWindow for mouseover event
        infoWnd.open(map, marker);
        
        // Store new open InfoWindow in global variable
        activeInfoWindow = infoWnd;
      });
      
      // on mouseout (moved mouse off marker) make infoWindow disappear
      google.maps.event.addListener(marker, 'mouseout', function () {
        infoWnd.close();
      });
      
      // --------------------------------
      // ON MARKER CLICK - (Mouse click)
      // --------------------------------
      
      // add content to InfoWindow for click event
      infoWnd2.setContent('<div class="scrollFix">' + myCityName + '. <br/>Organise Event</div>');
      
      // add listener on InfoWindow for click event
      google.maps.event.addListener(marker, 'click', function () {
        
        //Close active window if exists - [one might expect this to be default behaviour no?]
        if (activeInfoWindow != null) activeInfoWindow.close();
        
        // Open InfoWindow - on click
        infoWnd2.open(map, marker);
        
        // Close "mouseover" infoWindow
        infoWnd.close();
        
        // Store new open InfoWindow in global variable
        activeInfoWindow = infoWnd2;
      });
      
    }
    
    // ------------------------------------------------------------------------------- //
    // initial load
    // ------------------------------------------------------------------------------- //
    google.maps.event.addDomListener(window, 'load', initialize);
  
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa-O7jKdRNT_YuLql_7dDfJ6lgoCG0G2U&libraries=places&sensor=false&callback=initialize"></script>


@endsection

