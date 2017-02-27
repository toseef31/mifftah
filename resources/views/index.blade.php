<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Comprar, vender, alugar, trocar ou dar.">
  <meta name="description" content="Desapegue a sua Sogra !!!! rsrsrs">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate/animate.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
  <style>
    .sd {
      padding-right: 30px;
    }
  </style>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDGHTQK0M4LQfkfFjsVE3lnLFMCLs22Dt4&sensor=false&amp;libraries=places"></script>
  <script type="text/javascript">
    
    
    google.maps.event.addDomListener(window, 'load', function () {
      var options = {
        types: ['(cities)'],
        componentRestrictions: {
          country: "ae"
        }
      };
      var places = new google.maps.places.Autocomplete(document.getElementById('citysearch'), options);
      google.maps.event.addListener(places, 'place_changed', function () {
        var place = places.getPlace();
        var address = place.formatted_address;
        var latitude = place.geometry.location.lat();
        var longitude = place.geometry.location.lng();
        var fulllocation = document.getElementById('citysearch')
          .value;
        //alert(address);alert(fulllocation);
        //$('form#searchsubmit').submit();
        $('#location')
          .val(fulllocation);
        //  $('#address').val(address);
        $('#lat')
          .val(latitude);
        $('#long')
          .val(longitude);
        var tempx = [];
        tempx = fulllocation.split(",");
        if (tempx.length >= 3) {
          fulllocation = fulllocation.substr(0, fulllocation.lastIndexOf(","));
        }
        //alert(fulllocation);
        /*
         var city=tempx[0];
         var citycode=tempx[1];
         var cookival=city+","+citycode;
         */
        Set_Cookie('location_temp', fulllocation, 0, "index.html");
        Set_Cookie('location_lat', latitude, 0, "index.html");
        Set_Cookie('location_long', longitude, 0, "index.html");
      });
    });
    
    function Set_Cookie(name, value, expires, path, domain, secure) {
      document.cookie = name + "=" + escape(value) + ((path) ? ";path=" + path : "") + ((domain) ? ";domain=" + domain : "") + ((secure) ? ";secure" : "");
    }
    
    function Get_Cookie(name) {
      var start = document.cookie.indexOf(name + "=");
      var len = start + name.length + 1;
      if ((!start) && (name != document.cookie.substring(0, name.length))) {
        return null;
      }
      if (start == -1)
        return null;
      var end = document.cookie.indexOf(";", len);
      if (end == -1)
        end = document.cookie.length;
      return unescape(document.cookie.substring(len, end));
    }
  </script>
  <!-- Slider -->
  <link rel="stylesheet" href="css/superslides.css">
  <!-- Slider ends -->
  <!-- Date range picker -->
  <link rel="stylesheet" href="css/simpledatepicker/datepicker.css" type="text/css">
  <!-- Date Range piker ends -->
  <link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.skinFlat.css"/>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery_ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="css/sangaslider/ie8.css" type="text/css">
  <script src="js/html5shiv.js"></script>
  
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    html,
    body {
      width: 100%;
      height: 100%;
    }
    
    .mainslider {
      width: 100%;
      height: 100%;
      background-color: #EBEFEF;
      margin-bottom: 30px;
    }
    
    .slides-container {
      z-index: 1;
    }
  </style>
</head>

<body>
<!--  Login Starts -->
<div class="loginwrperoverlay"></div>
@include('auth.login')
@include('auth.register')
<!-- Login ends -->
<!-- Main MEnu Ends -->
@include('partials.sidebar')
<div class="slidemenuoverlay"></div>
<!-- Main Right menu ends -->
<div class="indexheaderwrper">
  <div class="mainindexcontainer">
    <div class="indexlogo pull-left">
      <a href="#" class="fulwidthm left"><img src="{{ asset('userdata/logo/logo.png') }}" alt="For Sale Network Logo" title="For Sale Network"> </a>
    </div>
    <div class="indexright rightmenu pull-right">
      <ul class="indexul left">
        
        <a href="{{ url('/ar-home') }}" class="indexli left  language" style=" margin-right: 12px;
    padding: 7px 0px;
    /*background-color: rgba(0, 153, 25, 0.06);*/
    border-radius: 3px;
    color: white;
    min-width: 68px;
    text-align: center;
    margin-top: -5px;">Ar</a>
        {{--<a href="#" class="indexli left  language" style="margin-right: 12px;"><img class="img-responsive img-language" src="{{ asset('userdata/logo/flag.png') }}" alt="Language" title="Language"/></a>--}}
        
        <a href="<?= (Auth::check()) ? url('/user/newlist') : '#'; ?>" class=" <?= (!Auth::check()) ? 'signinclickmain robotomedium' : ''; ?>indexli left btn_rent btn-custom">Add listing</a>
        <?php if(!Auth::check()){?>
        <li class="indexli left"><a class="signinclickmain robotomedium">Sign In</a></li>
        <li class="indexli left"><a class="signupclickmain robotomedium"><?= $lang[24][$current] ?></a></li>
        <?php }else{ ?>
        <li class="indexli" style="display: inline-block;"><a class="robotomedium" href="{{ url('/user/dashboard') }}" style="color: white;text-transform: uppercase;"><?= Auth::user()->name; ?></a></li>
      </ul>
      <?php } ?>
      </ul>
      <div class="menuouter left">
        <div class="mainmenuclick">
          <div class="burgermenu left"><span class="burgerspan"></span> <span class="burgerspan burgrmidle"></span> <span class="burgerspan"></span></div>
          <span class="menunaem left whitetext robotoregular font-size14"><?= $lang[25][$current] ?></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Header Ends --->
<div class="contentslider">
  <div class="middle">
    <div class="inner">
      <div class="mainindexcontainer">
        <h1 class=" robotolight scontentheading"> Look Up Homes to <span class="robotomedium changecontent">Buy</span></h1>
        <p class="robotolight scontentp" id="temptextchange">The most complete source of homes for buying</p>
        <div class="searchloactionwrp fulwidthm left">
          <div class="searchloactionwrpin  fulwidthm left">
            <div class="searchloctionbtnwrp">
              <div class="btnsef">
                <button class="indexlocbtn lblue_bg btn_rent robotoregular active" id="buyx"><?= $lang[13][$current] ?></button>
              </div>
              <div class="btnsef">
                <button class="indexlocbtn dblue_bg btn_sell robotoregular " id="rentx"><?= $lang[12][$current] ?></button>
              </div>
            </div>
          </div>
        </div>
        <div class="seinwrp fulwidthm left">
          <div class="seinwrp_in">
            <!-- simple form -->
            <form class="" role="form" method="post" action="{{ url('/search') }}">
              {{  csrf_field() }}
              <input class="maininexinput" type="text" name="citysearch" id="citysearch2" placeholder="<?= $lang[35][$current] ?>" value="">
              <button class="maininputbtn lblue_bg" id="searchnx"><i class="flaticon-magnifying-glass34"></i></button>
            </form>
          </div>
          <div id="errordisp" style="visibility:hidden;"><b><i class="fa fa-arrow-circle-up"></i><?= $lang[37][$current] ?></b></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="slides" class='mainslider'>
  <div class='slides-container'>
    <div class='sangar-content'><img src='userdata/Public/SlideImages/slide-1.jpg'></div>
    <div class='sangar-content'><img src='userdata/Public/SlideImages/slide-2.jpg'></div>
    <div class='sangar-content'><img src='userdata/Public/SlideImages/slide-3.jpg'></div>
    <div class='sangar-content'><img src='userdata/Public/SlideImages/LoganStandout1.jpg'></div>
  </div>
  <nav class="slides-navigation">
    <a href="#" class="next slidernav"></a>
    <a href="#" class="prev slidernav"></a>
  </nav>
</div>
<!-- Slider ends -->
<div class="overlayb"></div>
<!-- wishlist popup starts -->
<div class="wishlistouter">
  <div class="loouter " style="">
    <div class="lomiddle">
      <div class="loinner col-md-8 col-sm-8 col-lg-8  col-center nopadding">
        <div class="lobox whitebg fulwidthm left pdg30 ">
          <div class=" wishlistclose lgraytext"><i class="flaticon-cross97"></i></div>
          <div id="listimagewishdiv" class="leftpopimage col-sm-3 nopaddingL"></div>
          <div class="wishlistpopright col-sm-9 nopaddingR">
            <h4 class="whislisttilt fulwidthm robotomedium  singledot graytext fontsize16" id="listaddresswish"></h4>
            <p class=" robotoregular font-size14 lgraytext"></p>
            <div class="wiscatwrper fulwidthm">
              <div class="wishlistlitingwrp"> <?= (isset($lang)) ? $lang[174][$current] : ''; ?> !
                <select id="wishlistselectopt" class="wishlistselect" style="width:100%" multiple="multiple" data-placeholder="Click to Select!"> </select>
              </div>
              <div class="createwishlist">
                <h3 class=" robotomedium graytext  mgnTB15 font-size14 createnew_wclick"><?= $lang[174][$current] ?> &nbsp;<i class="flaticon-arrow486"></i></h3>
                <div class="cratewinput fulwidthm graybg pdg05 left mgnB10">
                  <div class="col-md-6 nopadding ">
                    <input id="wishlistname" class="fulwidthm commoninput  text-left whitebg lgray_border lgraytext pdg05" type="text" placeholder="Enter the WishList Name"></div>
                  <input id="wishids" type="hidden" value=""/>
                  <input id="actuallistid" type="hidden" value=""/>
                  <div class="col-md-3 nopadding" style="padding-left:14px !important;">
                    <button class="btn lblue_bg" onclick="createwishlist()"><?= $lang[173][$current] ?></button>
                  </div>
                </div>
                <div class="clearfix"></div>
             <?= $lang[176][$current] ?>
                <div class="comentwishlistwrp mgnB15">
                  <textarea id="wish_desc" class="fulwidthm lgray_border lgraytext pdg05 "> </textarea>
                </div>
                <div class="clearfix"></div>
                <button class="btn lblue_bg" onclick="mapwishlist()"><?= $lang[172][$current] ?></button>
                <div id="errordivwish" style="color:red;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- wishlist popup ens -->
<form name="searchsubmit" action="#" id="searchsubmit" method="POST">
  <input type="hidden" name="location" id="location" value="">
  <!--<input type="hidden" name="address" id="address" value="">
   -->
  <input type="hidden" name="lat" id="lat" value="">
  <input type="hidden" name="long" id="long" value="">
  <input type="hidden" name="searchtype" id="searchtype" value="1">
</form>
<div class="clearfix"></div>
<div class="indexcwrper fulwidthm left mgnB20 ">
  <div class="mainindexcontainer">
    <div class="mainontainer_in fulwidthm left">
      <section style="display: none;" class="indexbox  mgnTB15 whitebg fulwidthm left">
        <div class="indexbox_in pdg20 fulwidthm left">
          <div class="newlsitingwrp">
            <div class="col-xs-12 col-sm-3">
              <h2 class="robotolight fontsize30 newliisthead"><?= $lang[39][$current] ?> <span class="robotomedium"><?= $lang[41][$current] ?></span></h2>
              <p class="newlsitingp fontsize18 robotolight"><?= $lang[40][$current] ?>
                <br> For Sale Network</p>
              <div class="newlistingcontrol">
                <div class="n_l_prev n_lcontrl"><i class="flaticon-direction129"></i></div>
                <div class="n_l_next n_lcontrl"><i class="flaticon-fastforward4"></i></div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-9 newlistingwrp">
              <div id="newlisting" class="owl-carousel">
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Batavia, New York, NY 2345">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/3/17/eeee2.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Batavia, New York, NY 2345</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 3,800">₪ 3,800
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,500 Sq.ft">1,500 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_17" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">6</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="675 Afton Way, Huffman, TX 77336">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/56/119/slider02.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">675 Afton Way, Huffman, TX 77336</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 1,000,000">₪ 1,000,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Lot Size : 191 Acre">191 Acre
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_119" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Chinatown,New Street, San Francisco, CA 2144">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/4/home-794367_960_720.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Chinatown,New Street, San Francisco, CA 2144</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 18,530">₪ 18,530
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 3,000 Sq.ft">3,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_4" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="234/45, New York, NY 1202223">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">234/45, New York, NY 1202223</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 70,000">₪ 70,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 5,000 Sq.ft">5,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_101" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Colorado 5th, New York, Statele Unite Ale Americii 123556">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/84/172/802bd2c44844e865880c1f2ddf93ba71.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Colorado 5th, New York, Statele Unite Ale Americii 123556</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 250,000">₪ 250,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 250 Sq.ft">250 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_172" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Gfjhtfg, New York, NY 11889">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/60/129/room.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Gfjhtfg, New York, NY 11889</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 500">₪ 500
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 800 Sq.ft">800 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_129" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="3265 NW 87th Ave, Doral, FL 33172">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/67/140/Cruise-ship-views-from-the-Amador-Causeway-Panama-1.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">3265 NW 87th Ave, Doral, FL 33172</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 333">₪ 333
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 65,148 Sq.ft">65,148 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_140" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Niagra Nagar, New York, NY 9997">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/8/beautiful-21864_960_720.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Niagra Nagar, New York, NY 9997</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 2,300,000">₪ 2,300,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,500 Sq.ft">1,500 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_8" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" New York, NY 9700">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/2/15/beautiful_house_wallpaper_1a1a6.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05"> New York, NY 9700</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 2,700">₪ 2,700
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,700 Sq.ft">1,700 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_15" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Dfghgfd,788/44,, Nyack, NY 10960">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/47/106/Unique-And-Beautiful-Wallpaper-HD.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Dfghgfd,788/44,, Nyack, NY 10960</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 60,000">₪ 60,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 5,000 Sq.ft">5,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_106" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">10</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">7</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Opp.Park,TigerTown, Las Vegas, NV 2444">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/5/home-794367_960_720.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Opp.Park,TigerTown, Las Vegas, NV 2444</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 3,500,000">₪ 3,500,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_5" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Albany, New York, NY 4345">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/2/13/55cb83c7efc6b.image.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Albany, New York, NY 4345</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 3,400,000">₪ 3,400,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_13" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">6</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">3.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="2eds, Alexandria, VA 11122">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/57/122/berlin-77791_960_720%20-%20Copy.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">2eds, Alexandria, VA 11122</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 1,111">₪ 1,111
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 200 Sq.ft">200 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_122" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="House No: 26. Missouri City , Houston, Texas City. USA, Texas City, TX 34134">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/175/The_Most_Minimalist_House_Ever_Designed_featured_on_architecture_beast_33%20(1).jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">House No: 26. Missouri City , Houston, Texas City. USA, Texas City, TX 34134</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 4,000">₪ 4,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 4,000 Sq.ft">4,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_175" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Arcola, Chicago, IL 3223">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/3/22/ffffff.jpg"></div>
                            <div class="featuredim"><img title="Featured Property" src="images/featured.png"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Arcola, Chicago, IL 3223</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 3,650,000">₪ 3,650,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,300 Sq.ft">1,300 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_22" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="House Name,appartment Number, Universal City, CA 12323435">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/72/149/rnn2.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">House Name,appartment Number, Universal City, CA 12323435</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 100">₪ 100
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_149" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Appartment Name,appartment Address, Universal City, CA 34435456">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/73/150/rnn1.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Appartment Name,appartment Address, Universal City, CA 34435456</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 200">₪ 200
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 234 Sq.ft">234 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_150" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Test, Atlanta, GA 1">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/34/Chrysanthemum.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Test, Atlanta, GA 1</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 12,000">₪ 12,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="HomeSize/LotSize Not Available">N.A
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_34" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Fdgdg/gtd Street, NY, United States 16021">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/108/interior_design_style_house_villa_75564_2048x1152.html"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Fdgdg/gtd Street, NY, United States 16021</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 2,000">₪ 2,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="HomeSize/LotSize Not Available">N.A
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_108" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Atlantic Ave, Brooklyn, MS 39425">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/127/room.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Atlantic Ave, Brooklyn, MS 39425</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 500">₪ 500
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 500 Sq.ft">500 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_127" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">2</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" Orlando, FL 47367">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/9/home-wallpaper-26.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05"> Orlando, FL 47367</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 15,000,000">₪ 15,000,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_9" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" Orlando, FL 2432">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/2/home-54907_960_720.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05"> Orlando, FL 2432</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 2,500,000">₪ 2,500,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_2" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Avalon, Los Angeles, CA 7568">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/3/21/uuuuu.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Avalon, Los Angeles, CA 7568</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 4,000">₪ 4,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,500 Sq.ft">1,500 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_21" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="3001 Tagura Drive, Modesto, CA 95355">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/37/96/6330%20Jonah%20St%20Atwater%20CA%2095301-large-001-7-Front%20View-1500x1000-72dpi.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">3001 Tagura Drive, Modesto, CA 95355</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 330,000">₪ 330,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,543 Sq.ft">1,543 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_96" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Clermont, Orlando, FL 8758">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/2/23/jjjjjj1.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Clermont, Orlando, FL 8758</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 8,000">₪ 8,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_23" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" New York, NY 4325">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/2/14/hd-nature-free-high-resolution-widescreen-beautiful-home-and-natural-graphic-design-fresh-gallery-276596.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05"> New York, NY 4325</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 3,500">₪ 3,500
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,845 Sq.ft">1,845 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_14" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">3.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="1 New York, New York, NY 1005">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/42/99/fer.jpg"></div>
                          </div>
                          <div class="photocount1">1 Photos</div>
                          <div class="listinname whitetext fontsize13 pdg05">1 New York, New York, NY 1005</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 1,000,000">₪ 1,000,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_99" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">1</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" New York, NY 2445">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/1/Beautiful-House-Wallpaper-For-Mobile-19.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05"> New York, NY 2445</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 1,500,000">₪ 1,500,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_1" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">9</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="H NO:#213$$$, San Francisco, CA 94101">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/21/59/san-fran1.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">H NO:#213$$$, San Francisco, CA 94101</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 15,000">₪ 15,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 3,000 Sq.ft">3,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_59" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">7</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" Los Angeles, CA 65679">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/6/berlin-77791_960_720.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05"> Los Angeles, CA 65679</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 1,350,000">₪ 1,350,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_6" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">6</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="564564, Austin, Teksas 65456">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/201/1600x1200-1.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">564564, Austin, Teksas 65456</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 15,000">₪ 15,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 564 Sq.ft">564 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_201" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="40 Wall Street, New York, NY 10005">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/48/105/room.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">40 Wall Street, New York, NY 10005</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 400,000">₪ 400,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="HomeSize/LotSize Not Available">N.A
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_105" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Nevada, Las Vegas, NV 4565">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/3/20/pppp1.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Nevada, Las Vegas, NV 4565</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 3,400">₪ 3,400
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,200 Sq.ft">1,200 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_20" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">4</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="34, Telling Street, US, Columbus, OH 3243">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/45/104/Sundarbans_a_few_months_after_cyclone_sidr.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">34, Telling Street, US, Columbus, OH 3243</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 100">₪ 100
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="HomeSize/LotSize Not Available">N.A
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_104" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Sdftrr4r, New York, NY 11105">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/57/123/xfvbvb.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Sdftrr4r, New York, NY 11105</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 400">₪ 400
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 200 Sq.ft">200 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_123" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">3</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Indira Nagar,Nagpoor, Miami, FL 7568">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/7/house-164909_960_720.jpg"></div>
                          </div>
                          <div class="photocount1"><?= $lang[158][$current] ?></div>
                          <div class="listinname whitetext fontsize13 pdg05">Indira Nagar,Nagpoor, Miami, FL 7568</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 4,582,000">₪ 4,582,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_7" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">9</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Carroll St 21, New York, NY 11523">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/128/room.jpg"></div>
                          </div>
                          <div class="photocount1">1 Photos</div>
                          <div class="listinname whitetext fontsize13 pdg05">Carroll St 21, New York, NY 11523</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 500">₪ 500
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 500 Sq.ft">500 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_128" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title=" Chicago, IL 2444">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/1/3/cabin-68243_960_720.jpg"></div>
                          </div>
                          <div class="photocount1">1 Photos</div>
                          <div class="listinname whitetext fontsize13 pdg05"> Chicago, IL 2444</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 25,000">₪ 25,000
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 1,200 Sq.ft">1,200 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_3" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item newlistingitem fulwidthm">
                  <div class="newlistingitem_in pdgS10">
                    <a href="#" class="graybg" title="Middlesex, 10, Hauvers 1231">
                      <div class="listingimageouter fulwidthm left">
                        <div class="listingimage">
                          <div class=" listinimgcover">
                            <div class="listinimgcoverin media-cover"><img class="img-responsive-height" src="userdata/List/Thumb/0/31/big.jpg"></div>
                          </div>
                          <div class="photocount1">2 Photos</div>
                          <div class="listinname whitetext fontsize13 pdg05">Middlesex, 10, Hauvers 1231</div>
                        </div>
                      </div>
                    </a>
                    <div class="newlistingdetails fulwidthm left graybg">
                      <div class="n_l_discptn">
                        <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular
                   font-size14" title="₪ 456">₪ 456
                        </div>
                        <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular
                   font-size14" title="Home Size : 2,500 Sq.ft">2,500 Sq.ft
                        </div>
                        <div class="nl_bottom fulwidthm left pdg10">
                          <div class="left"><span id="wishlist_31" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span></div>
                          <div class="n_botmrd right fontsize16 ">
                            <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
                            <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- New Listing Ends -->
      <section class="indexbox  mgnTB15 whitebg fulwidthm left">
        <div class="indexbox_in pdg20 fulwidthm left">
          <div class="listingstuts fulwidthm left">
            <div class="listingstutstilte text-center">
              <h4 class="robotolight fontsize24"><?= $lang[14][$current] ?> </h4>
              <!--
  <p class="listsub robotolight fontsize16">In the last 24 Hours</p>
         -->
            </div>
            <div class="stusboxwrp mgnT30 row">
              <div class="ststusbox text-center col-lg-3 col-sm-6 col-xs-12 mgnB10">
                <div class="ststusbox_in">
                  <div class="ststusicon dblue_bg whitetext"><i class="flaticon-list67"></i></div>
                  <div class="status_dindex graybg robotolight">
                    <h4 class="ststuscount fontsize24 robotolight dbluetext">40</h4>
                    <p class="stsusname fontsize18 robotolight"><?= $lang[29][$current] ?></p>
                  </div>
                </div>
              </div>
              <div class="ststusbox text-center col-lg-3 col-sm-6 col-xs-12 mgnB10">
                <div class="ststusbox_in">
                  <div class="ststusicon lblue_bg whitetext"><i class="flaticon-home153"></i></div>
                  <div class="status_dindex graybg">
                    <h4 class="ststuscount fontsize24 robotolight dbluetext">19</h4>
                    <p class="stsusname fontsize18 robotolight"><?= $lang[31][$current] ?></p>
                  </div>
                </div>
              </div>
              <div class="ststusbox text-center col-lg-3 col-sm-6 col-xs-12 mgnB10">
                <div class="ststusbox_in">
                  <div class="ststusicon dblue_bg whitetext"><i class="flaticon-tag77"></i></div>
                  <div class="status_dindex graybg">
                    <h4 class="ststuscount fontsize24 robotolight dbluetext">10</h4>
                    <p class="stsusname fontsize18 robotolight"><?= $lang[32][$current] ?></p>
                  </div>
                </div>
              </div>
              <div class="ststusbox text-center col-lg-3 col-sm-6 col-xs-12 mgnB10">
                <div class="ststusbox_in">
                  <div class="ststusicon lblue_bg whitetext"><i class="flaticon-download168"></i></div>
                  <div class="status_dindex graybg">
                    <h4 class="ststuscount fontsize24 robotolight dbluetext">12</h4>
                    <p class="stsusname fontsize18 robotolight"><?= $lang[33][$current] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Ststus Section ends -->
      <section class="indexbox  mgnTB15 whitebg fulwidthm left">
        <div class="indexbox_in pdg20 fulwidthm left">
          <div class="listingstutstilte text-center">
            <h4 class="robotolight fontsize24"><?= $lang[34][$current] ?> <span class=" robotomedium"></span></h4>
            <p class="listsub robotolight fontsize16"><?= $lang[35][$current] ?></p>
          </div>
          <div class="populrcitwrp fulwidthm mgnT30 left">
            <div class="row">
              
              <!-- Top Cites ends -->
              <section class="indexbox mgnTB15 whitebg fulwidthm left">
                <div class="indexbox_in pdg20 fulwidthm left">
                  <div class="indexcaluclatorwrp">
                    <div class="ca_tb_btnwrp">
                      <div class="cal_tab_btn active"> <?= $lang[358][$current] ?></div>
                      <div class="cal_tab_btn"><?= $lang[358][$current] ?></div>
                      <div class="cal_tab_btn"> <?= $lang[360][$current] ?></div>
                    </div>
                    <div class="cal_tabwrp fulwidthm left">
                      <div class="cal_tabbox active">
                        <div class="cal_tabbox_in pdgTB30">
                          <p class="tabsp lgraytext font-size14">Use this calculator to determine the price limit of a house you can afford. By entering details about your monthly affordable payment, down payment, and loan tenure. you can estimate the maximum budget you can afford by these calculations.</p>
                          <div class="clearfix"></div>
                          <div class="row mgnT60">
                            <div class="calculatorleft col-sm-4 col-xs-12">
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"><?= $lang[347][$current] ?></label>
                                <input id="monthlypayment" class="gcinput fulwidthm left" type="text" value="2000">
                                <div class=" rederror fulwidthm left" id="err1" style="visiblity:hidden;"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"> <?= $lang[348][$current] ?></label>
                                <input id="downpayment" class="gcinput fulwidthm left" type="text" value="20000">
                                <div class=" rederror fulwidthm left" id="err2" style="visiblity:hidden;"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"> <?= $lang[349][$current] ?></label>
                                <input id="rateofinterest" class="gcinput fulwidthm left" type="text" value="3.98">
                                <div class=" rederror fulwidthm left" id="err3" style="visiblity:hidden;"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"><?= $lang[350][$current] ?></label>
                                <select id="noofyears" class="formselect" style="width:100%">
                                  <option value="5">5</option>
                                  <option value="10">10</option>
                                  <option value="15">15</option>
                                  <option value="20">20</option>
                                  <option value="25">25</option>
                                  <option selected="selected" value="30">30</option>
                                </select>
                                <div class=" rederror fulwidthm left"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <button id="homeaffordcalbut" class="whitetext lblue_bg fontsize16 border-radius3 pdg10 clacluatebtn fulwidthm left"><?= $lang[356][$current] ?></button>
                              </div>
                            </div>
                            <div class="calcuright col-sm-7 col-xs-12 pull-right">
                              <div class="clacicon dblue_bg whitetext"><i class="flaticon-home153"></i></div>
                              <div class="calcuright_in graybg pdg20">
                                <div class="clacamountwrp text-center">
                                  <p class="fontsize18 graytext robotoregular"><?= $lang[362][$current] ?> </p>
                                  <h2 class="amountcal fontsize30 robotoregular" id="amthomeafford">₪ 439,936</h2>
                                  <p class="robotoregular fontsize13 mgnTB20"><?= $lang[363][$current] ?></p>
                                  <div class=" clearfix"></div>
                                  <div class="indexcalpricerange">
                                    <div class="indexcalpricerangeimgs fulwidthm left mgnB10">
                                      <div class="pricerangeleft pricon left"><i class="flaticon-tag77"></i></div>
                                      <div class="pricerangeright pricon right"><i class="flaticon-home153"></i></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input type="text" id="range" value="222" name="range"/></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- tab1 ends -->
                      <div class="cal_tabbox ">
                        <div class="cal_tabbox_in pdgTB30">
                          <p class="tabsp lgraytext font-size14">Use this calculator to estimate your monthly mortgage payment, excluding taxes and insurance. Simply enter the price of the home, your down payment, and details about the loan tenure to calculate your monthly payment.</p>
                          <div class="clearfix"></div>
                          <div class="row mgnT60">
                            <div class="calculatorleft col-sm-4 col-xs-12">
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"> <?= $lang[351][$current] ?></label>
                                <input id="mortageamt" class="gcinput fulwidthm left" type="text" value="520000">
                                <div class=" rederror fulwidthm left" id="er1" style="visiblity:hidden;"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"> <?= $lang[348][$current] ?></label>
                                <input id="dwnpay" class="gcinput fulwidthm left" type="text" value="20000">
                                <div class=" rederror fulwidthm left" id="er2" style="visiblity:hidden;"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"> <?= $lang[349][$current] ?>)</label>
                                <input id="mortagerateintrst" class="gcinput fulwidthm left" type="text" value="3.98">
                                <div class=" rederror fulwidthm left" id="er3" style="visiblity:hidden;"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"><?= $lang[350][$current] ?></label>
                                <select id="noofyearsmor" class="formselect" style="width:100%">
                                  <option value="5">5</option>
                                  <option value="10">10</option>
                                  <option value="15">15</option>
                                  <option value="20">20</option>
                                  <option value="25">25</option>
                                  <option selected="selected" value="30">30</option>
                                </select>
                                <div class=" rederror fulwidthm left"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <button id="mortgagecalbut" class="whitetext lblue_bg fontsize16 border-radius3 pdg10 clacluatebtn fulwidthm left"><?= $lang[356][$current] ?></button>
                              </div>
                            </div>
                            <div class="calcuright col-sm-7 col-xs-12 pull-right">
                              <div class="clacicon dblue_bg whitetext"><i class="flaticon-home153"></i></div>
                              <div class="calcuright_in graybg pdg20">
                                <div class="clacamountwrp text-center">
                                  <p class="fontsize18 graytext robotoregular"> <?= $lang[98][$current] ?></p>
                                  <h2 class="amountcal fontsize30 robotoregular" id="amtmotgagemonth">₪ 2,381</h2>
                                  <p class="robotoregular fontsize13 mgnTB20"><?= $lang[99][$current] ?></p>
                                  <div class=" clearfix"></div>
                                  <div class="indexcalpricerange">
                                    <div class="indexcalpricerangeimgs fulwidthm left mgnB10">
                                      <div class="pricerangeleft pricon left"><i class="flaticon-tag77"></i></div>
                                      <div class="pricerangeright pricon right"><i class="flaticon-home153"></i></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input type="text" id="range2" value="" name="range"/></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--  tab2 ends -->
                      <div class="cal_tabbox ">
                        <div class="cal_tabbox_in pdgTB30">
                          <p class="tabsp lgraytext font-size14">Use this calculator to help make a vice decision about renting or buying is better. If you are looking for a long term stay, most cases buying will be better.</p>
                          <div class="clearfix"></div>
                          <div class="row mgnT60">
                            <div class="calculatorleft col-sm-4 col-xs-12">
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"> <?= $lang[352][$current] ?></label>
                                <input id="desiredhomeprice" class="gcinput fulwidthm left" type="text" value="800000">
                                <div class=" rederror fulwidthm left" id="e1"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <label class="callabel robotoregular fontsize18 mgnB10 graytext"><?= $lang[353][$current] ?></label>
                                <input id="desiredrent" class="gcinput fulwidthm left" type="text" value="8000">
                                <div class=" rederror fulwidthm left" id="e2"></div>
                              </div>
                              <div class="calrow fulwidthm left mgnB20">
                                <button id="rentbuycalbut" class="whitetext lblue_bg fontsize16 border-radius3 pdg10 clacluatebtn fulwidthm left"><?= $lang[356][$current] ?></button>
                              </div>
                            </div>
                            <div class="calcuright col-sm-7 col-xs-12 pull-right">
                              <div class="clacicon dblue_bg whitetext"><i class="flaticon-home153"></i></div>
                              <div class="calcuright_in graybg pdg20">
                                <div class="clacamountwrp text-center">
                                  <p class="fontsize18 graytext robotoregular" id="nomonthsbuy"> <?= $lang[354][$current] ?></p>
                                  <div class=" clearfix"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Tab3 -->
                    </div>
                  </div>
                </div>
              </section>
              <!--   calculator  section ends -->
              <section class="indexbox  mgnTB15 whitebg fulwidthm left">
                <div class="indexbox_in pdg20 fulwidthm left">
                  <div class="listingstutstilte text-center">
                    <h4 class="robotolight fontsize24"><?= $lang[43][$current] ?> <span class=" robotomedium">For Sale Network ?</span></h4>
                    <p class="listsub robotolight fontsize16">On For Sale Network everything you need to find a home is well served.</p>
                  </div>
                  <div class="row">
                    <div class="whyuswrp fulwidthm left mgnT30">
                      <div class="whyusbox col-sm-4 col-xs-12 mgnB10">
                        <div class="whyusboxin listforubox">
                          <h4 class="robotomedium graytext fontsize18"><?= $lang[48][$current] ?></h4>
                          <p class="robotoregular font-size14 lgraytext"> <?= $lang[75][$current] ?></p> <a href="#" class=" robotomedium lbluetext"><?= $lang[56][$current] ?>>> </a></div>
                      </div>
                      <div class="whyusbox col-sm-4 col-xs-12 mgnB10">
                        <div class="whyusboxin hwselbox">
                          <h4 class="robotomedium graytext fontsize18">Want To Sell</h4>
                          <p class="robotoregular font-size14 lgraytext">For Sale Network helps you to sell your home in record time </p> <a href="#" class=" robotomedium lbluetext"><?= $lang[56][$current] ?>>> </a></div>
                      </div>
                      <div class="whyusbox col-sm-4 col-xs-12 mgnB10">
                        <div class="whyusboxin hwwrk">
                          <h4 class="robotomedium graytext fontsize18"> <?= $lang[83][$current] ?></h4>
                          <p class="robotoregular font-size14 lgraytext"><?= $lang[55][$current] ?></p> <a href="#" class=" robotomedium lbluetext"> <?= $lang[56][$current] ?>>> </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- Why us section ends -->
            </div>
          </div>
        </div>
        <!-- indexmainwrpr ends -->
        <script type="text/javascript">
          function createwishlist() {
            var wishlistname = $('#wishlistname')
              .val()
              .trim();
            var wishlisttype = 1;
            $('#errordivwish')
              .html('');
            //alert(wishlisttype);
            if (wishlistname == "") {
              $('#errordivwish')
                .html('Wishlist Name Cannot be Null');
              return false;
            }
            if (wishlisttype == "") {
              $('#errordivwish')
                .html('Wishlist Type Cannot be Null');
              return false;
            }
            if (wishlisttype != "" && wishlistname != "") {
              //alert(wishlistname);
              $.ajax({
                type: "POST",
                cache: false,
                url: "#",
                data: {
                  'wishlistname': wishlistname,
                  'wishlisttype': wishlisttype
                },
                success: function (data) {
                  //alert(data);
                  if (data == 1) {
                    $('#errordivwish')
                      .html('Wishlist Name Cannot be Null');
                    return false;
                  }
                  if (data == 2) {
                    $('#errordivwish')
                      .html('Wishlist Type Cannot be Null');
                  }
                  if (data == 3) {
                    $('#errordivwish')
                      .html('Invalid User');
                    return false;
                  }
                  if (data == 5) {
                    $('#errordivwish')
                      .html('Wishlist Name Already Exists');
                    return false;
                  }
                  if (data == 4) {
                    wishlistview();
                    $('.cratewinput')
                      .fadeToggle(200);
                  }
                }
              });
            }
          }
          
          function mapwishlist() {
            //wish_desc
            var wish_sesc = $('#wish_desc')
              .val()
              .trim();
            var wishlists = $('#wishlistselectopt')
              .val();
            var listid = $('#actuallistid')
              .val();
            var type = 1;
            $('#errordivwish')
              .html('');
            if (wishlists == "" || wishlists == null) {
              $('#errordivwish')
                .html('Select a WishList for Adding');
              return false;
            }
            var wishlists_arr = new Array();
            wishlists_arr = wishlists.toString()
              .split(',');
            wisglistarr1 = JSON.stringify(wishlists_arr);
            //alert(wish_sesc);exit;
            if (wishlists != "") {
              $.ajax({
                type: "POST",
                cache: false,
                url: "#",
                //data: {'wish_sesc':wish_sesc,'wishlists[]':wisglistarr1,'listid':listid},
                data: {
                  data: wisglistarr1,
                  'wish_sesc': wish_sesc,
                  'listid': listid,
                  'type': type
                },
                success: function (data) {
                  //alert(data);
                  var details = data.split('??');
                  if (details[0] == 3) {
                    $('#errordivwish')
                      .html('Invalid User');
                    return false;
                  }
                  if (details[0] == 4) {
                    //var c=$("#wishiconmap_"+listid).val();
                    //alert(c);
                    //	$("#wishiconmap_"+listid).replaceWith( details[1] );
                    //alert($("#wishiconmap_3").attr(""));
                    $("#wishlist_" + listid)
                      .replaceWith(details[1]);
                    $(document.body)
                      .find('.nope')
                      .addClass("hearliked");
                    //alert($(document.body).find('.nope').attr("Class"));
                    $('.wishlistouter, .overlayb')
                      .fadeOut(200);
                  }
                }
              });
            }
          }
          
          function wishlistview() {
            $.ajax({
              type: "POST",
              cache: false,
              url: "#",
              success: function (data) {
                //alert(data);
                if (data != 0) {
                  $('#wishlistselectopt')
                    .html(data);
                }
              }
            });
          }
        </script>
        
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript">
          $(document)
            .ready(function (e) {
              var owl_newlisting = $("#newlisting");
              owl_newlisting.owlCarousel({
                autoPlay: true,
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
              $(".n_l_next")
                .click(function () {
                  owl_newlisting.trigger('owl.next');
                })
              $(".n_l_prev")
                .click(function () {
                  owl_newlisting.trigger('owl.prev');
                });
            });
        </script>
        <!-- Main Slider -->
        <script type="text/javascript" src="js/jquery.superslides.js"></script>
        <script type='text/javascript'>
          function number_format(number, decimals, decPoint, thousandsSep) {
            decimals = decimals || 0;
            number = parseFloat(number);
            if (!decPoint || !thousandsSep) {
              decPoint = '.';
              thousandsSep = ',';
            }
            var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
            var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
            var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
            var formattedNumber = "";
            while (numbersString.length > 3) {
              formattedNumber += thousandsSep + numbersString.slice(-3)
              numbersString = numbersString.slice(0, -3);
            }
            return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
          }
          $(document)
            .ready(function () {
              function removedisps() {
                $('.rederror')
                  .css('visibility', 'hidden');
                return true;
              }
              
              $("#rentbuycalbut")
                .click(function () {
                  var desiredrent = $('#desiredrent')
                    .val()
                    .trim();
                  var desiredhomeprice = $('#desiredhomeprice')
                    .val()
                    .trim();
                  if (desiredhomeprice == "") {
                    $('#e1')
                      .html("Desired home price cannot be null.");
                    $('#e1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (desiredrent == "") {
                    $('#e2')
                      .html("Desired Rent amount cannot be null.");
                    $('#e2')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (isNaN(desiredhomeprice)) {
                    $('#e1')
                      .html("Desired home price must be a number.");
                    $('#e1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (!parseInt(desiredhomeprice) > 0) {
                    $('#e1')
                      .html("Desired home price must be greater than zero.");
                    $('#e1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (isNaN(desiredrent)) {
                    $('#e2')
                      .html("Desired Rent amount  must be a number.");
                    $('#e2')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (!parseInt(desiredrent) > 0) {
                    $('#e2')
                      .html("Desired Rent amount  must be greater than zero.");
                    $('#e2')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (desiredhomeprice < 0) {
                    $('#e1')
                      .html("Please enter a positive value.");
                    $('#e1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (desiredrent < 0) {
                    $('#e2')
                      .html("Please enter a positive value.");
                    $('#e2')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  var homeprice = parseInt(desiredhomeprice);
                  var rent = parseInt(desiredrent);
                  var nomonthss = homeprice / rent;
                  month = Math.round(nomonthss, 0);
                  if (month >= 12) {
                    years = parseInt(month / 12);
                    months = month % 12;
                    yearx = Math.round(years, 0);
                    monthx = Math.round(months, 0);
                    $('#nomonthsbuy')
                      .html('Buying will be better than rent after ' + yearx + ' Years and ' + monthx + ' Months');
                  } else {
                    $('#nomonthsbuy')
                      .html('Buying will be better than rent after ' + month + ' Months');
                  }
                });
              $("#mortgagecalbut")
                .click(function () {
                  var mortageamt = $('#mortageamt')
                    .val()
                    .trim();
                  var rateofinterest = $('#mortagerateintrst')
                    .val()
                    .trim();
                  var noofyears = $('#noofyearsmor')
                    .val()
                    .trim();
                  var downpay = $('#dwnpay')
                    .val()
                    .trim();
                  if (mortageamt == "") {
                    $('#er1')
                      .html("Mortgage amount cannot be null.");
                    $('#er1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (mortageamt < 0) {
                    $('#er1')
                      .html("Please enter a positive value.");
                    $('#er1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (downpay == "" || downpay == undefined) {
                    downpay = 0;
                  }
                  if (downpay != "") {
                    if (isNaN(downpay)) {
                      $('#er2')
                        .html("Down payment must be a number.");
                      $('#er2')
                        .css('visibility', 'visible');
                      setTimeout(removedisps, 3000);
                      return false;
                    }
                    if (downpay < 0) {
                      $('#er2')
                        .html("Please enter a positive value.");
                      $('#er2')
                        .css('visibility', 'visible');
                      setTimeout(removedisps, 3000);
                      return false;
                    }
                    if (parseInt(downpay) != 0) {
                      if ((!parseInt(downpay) > 0)) {
                        $('#er2')
                          .html("Down payment must be greater than or equal to zero.");
                        $('#er2')
                          .css('visibility', 'visible');
                        setTimeout(removedisps, 3000);
                        return false;
                      }
                    }
                  }
                  if (isNaN(mortageamt)) {
                    $('#er1')
                      .html("Mortgage amount must be a number.");
                    $('#er1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (!parseInt(mortageamt) > 0) {
                    $('#er1')
                      .html("Mortgage amount must be greater than zero.");
                    $('#er1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (rateofinterest == "") {
                    $('#er3')
                      .html("Rate of interest cannot be null.");
                    $('#er3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (rateofinterest < 0) {
                    $('#er3')
                      .html("Please enter a positive value.");
                    $('#er3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (!parseInt(rateofinterest) > 0) {
                    $('#er3')
                      .html("Rate of interest must be greater than zero.");
                    $('#er3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (parseInt(rateofinterest) > 20) {
                    $('#er3')
                      .html("Rate of interest must be less than 20.");
                    $('#er3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  var slidern = $("#range2")
                    .data("ionRangeSlider");
                  if (mortageamt > 5000000) {
                    slidern.update({
                      from: 5000000
                    });
                  } else {
                    slidern.update({
                      from: mortageamt
                    });
                  }
                  // M = P [ i(1 + i)n ] / [ (1 + i)n - 1]
                  var mortageamtpay = parseInt(mortageamt);
                  var sflag = 0;
                  if (downpay >= mortageamtpay) {
                    sflag = 1;
                  } else {
                    mortageamtpay = mortageamtpay - downpay;
                  }
                  var rate = parseFloat(rateofinterest);
                  var noyr = parseInt(noofyears);
                  var ratenomonth = rate / (12 * 100); //i
                  //alert(ratenomonth);
                  var rateadd = parseFloat(ratenomonth) + 1; //i+1
                  var nomonth = noyr * 12; //n
                  var i;
                  var numpow = 1;
                  //alert(nomonth);
                  //alert(nomonth);
                  //alert(rateadd);
                  for (i = 1; i <= nomonth; i++) {
                    numpow = parseFloat(numpow) * parseFloat(rateadd);
                  }
                  //alert(numpow);
                  var motgagemonth = (mortageamtpay * (numpow * ratenomonth)) / (numpow - 1);
                  //
                  //motgagemonth=Math.round(motgagemonth,2);
                  //	alert("motgagemonth="+motgagemonth);
                  if (sflag == 1) {
                    motgagemonth = 0;
                  }
                  var newfdf = number_format(motgagemonth, 0);
                  $('#amtmotgagemonth')
                    .html("₪" + " " + newfdf);
                });
              $("#homeaffordcalbut")
                .click(function () {
                  var monthlypayment = $('#monthlypayment')
                    .val()
                    .trim();
                  var downpayment = $('#downpayment')
                    .val()
                    .trim();
                  var rateofinterest = $('#rateofinterest')
                    .val()
                    .trim();
                  var noofyears = $('#noofyears')
                    .val()
                    .trim();
                  if (monthlypayment == "") {
                    $('#err1')
                      .html("Monthly payment cannot be null.");
                    $('#err1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (monthlypayment < 0) {
                    $('#err1')
                      .html("Please enter a positive value.");
                    $('#err1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (isNaN(monthlypayment)) {
                    $('#err1')
                      .html("Monthly payment must be a number.");
                    $('#err1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (!parseInt(monthlypayment) > 0) {
                    $('#err1')
                      .html("Monthly payment must be greater than zero");
                    $('#err1')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (downpayment != "") {
                    if (isNaN(downpayment)) {
                      $('#err2')
                        .html("Down payment must be a number.");
                      $('#err2')
                        .css('visibility', 'visible');
                      setTimeout(removedisps, 3000);
                      return false;
                    }
                    if (downpayment < 0) {
                      $('#err2')
                        .html("Please enter a positive value.");
                      $('#err2')
                        .css('visibility', 'visible');
                      setTimeout(removedisps, 3000);
                      return false;
                    }
                    if (parseInt(downpayment) != 0) {
                      if ((!parseInt(downpayment) > 0)) {
                        $('#err2')
                          .html("Down payment must be greater than or equal to zero.");
                        $('#err2')
                          .css('visibility', 'visible');
                        setTimeout(removedisps, 3000);
                        return false;
                      }
                    }
                  }
                  if (rateofinterest == "") {
                    $('#err3')
                      .html("Rate of interest cannot be null.");
                    $('#err3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (rateofinterest < 0) {
                    $('#err3')
                      .html("Please enter a positive value.");
                    $('#err3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (!parseInt(rateofinterest) > 0) {
                    $('#err3')
                      .html("Rate of interest must be greater than zero.");
                    $('#err3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  if (parseInt(rateofinterest) > 20) {
                    $('#err3')
                      .html("Rate of interest must be less than 20.");
                    $('#err3')
                      .css('visibility', 'visible');
                    setTimeout(removedisps, 3000);
                    return false;
                  }
                  // 2000((1+0.00331667)^360-1)/(0.00331667(1+0.00331667)^360
                  var monthpay = parseFloat(monthlypayment);
                  var slider = $("#range")
                    .data("ionRangeSlider");
                  if (monthpay > 50000) {
                    slider.update({
                      from: 50000
                    });
                  } else {
                    slider.update({
                      from: monthpay
                    });
                  }
                  if (downpayment != '') {
                    var downpay = parseFloat(downpayment);
                  } else {
                    var downpay = 0;
                  }
                  var rate = parseFloat(rateofinterest);
                  var noyr = parseInt(noofyears);
                  var ratenomonth = parseFloat(rate) / (12 * 100); //r
                  //alert(ratenomonth);
                  var rateadd = parseFloat(ratenomonth) + 1; //r+1
                  var nomonth = noyr * 12; //n
                  var i;
                  var numpow = 1;
                  for (i = 1; i <= nomonth; i++) {
                    numpow = parseFloat(numpow) * parseFloat(rateadd);
                  }
                  var emi = monthpay;
                  var homeaffor = (emi * (numpow - 1)) / (ratenomonth * numpow);
                  homeaffor += downpay;
                  var newfdf = number_format(homeaffor, 0);
                  //
                  //alert("homeaffor="+homeaffor);
                  //	homeaffor=Math.round(homeaffor,2);
                  $('#amthomeafford')
                    .html("₪" + " " + newfdf);
                });
              $("#emailuser")
                .blur(function () {
                  var email = $('#emailuser')
                    .val()
                    .trim();
                  //					 	if(email!="" && isemail
                  //alert(email);
                  $.ajax({
                    type: "POST",
                    cache: false,
                    url: "#",
                    data: {
                      'email': email
                    },
                    success: function (data) {
                      //alert(data);
                      if (data == "1") {
                        $('#emailerror')
                          .html('This Email already Exists ');
                        $('#emailerror')
                          .addClass('show');
                        setTimeout(function () {
                          $('#emailerror')
                            .removeClass('show');
                        }, 1700);
                        return false;
                      }
                    }
                  });
                })
              $('#slides')
                .superslides({
                  animation: 'fade',
                  pagination: false,
                  play: 5000
                });
            })
        </script>
        <!-- Main Slider ends -->
        <!-- Content Change in Index -->
        <script type="text/javascript">
          $(document)
            .ready(function (e) {
              $('.btn_sell, .lblue_bg')
                .click(function (e) {
                  $('.indexlocbtn')
                    .removeClass("active");
                  $(this)
                    .addClass("active");
                });
              $('.btn_sell')
                .click(function (e) {
                  $('.changecontent')
                    .text("Rent");
                  $('#temptextchange')
                    .text("Find your next rental from the amazing list of homes");
                  $('#searchtype')
                    .val("2");
                  Set_Cookie('location_type', 2, 0, "index.html");
                });
              $('.btn_rent')
                .click(function (e) {
                  $('.changecontent')
                    .text("Buy");
                  $('#temptextchange')
                    .text("The most complete source of homes for buying");
                  $('#searchtype')
                    .val("1");
                  Set_Cookie('location_type', 1, 0, "index.html");
                });
            });
        </script>
        <script type="text/javascript">
          $(document)
            .ready(function () {
              $(".ca_tb_btnwrp .cal_tab_btn")
                .click(function (e) {
                  if (!$(this)
                      .hasClass("active")) {
                    var tabNum = $(this)
                      .index();
                    var nthChild = tabNum + 1;
                    $(".ca_tb_btnwrp .cal_tab_btn.active")
                      .removeClass("active");
                    $(this)
                      .addClass("active");
                    $(".cal_tabwrp .cal_tabbox.active")
                      .removeClass("active");
                    $(".cal_tabwrp .cal_tabbox:nth-child(" + nthChild + ")")
                      .addClass("active");
                  }
                });
            });
        </script>
        <!-- Ends -->
        <script src="js/rangeslider/ion.rangeSlider.min.js"></script>
        <script type="text/javascript">
          var affordminv = '1000';
          var homeaffoardvalu = parseInt(affordminv) * 2;
          var mortgageminv = '100000';
          var mortgageminvalu = parseInt(mortgageminv) * 2;
          $("#range")
            .ionRangeSlider({
              type: "single",
              min: '1000',
              max: '100000',
              from: homeaffoardvalu,
              to: 50000,
              prefix: "₪",
              grid: false,
              grid_num: 10,
              max_postfix: "<b>+<b>",
              prettify_enabled: false,
              onFinish: function (data) {
                // var value = $(this).prop("value");
                $('#monthlypayment')
                  .val(data.from);
                $('#rateofinterest')
                  .val('3.98');
                $("#homeaffordcalbut")
                  .click();
              }
            });
          $("#range2")
            .ionRangeSlider({
              type: "single",
              min: '100000',
              max: '5000000',
              from: mortgageminvalu,
              to: 5000000,
              prefix: "₪",
              max_postfix: "<b>+<b>",
              grid: false,
              grid_snap: true,
              onFinish: function (data) {
                $('#mortageamt')
                  .val(data.from);
                $('#mortagerateintrst')
                  .val('3.98');
                $("#mortgagecalbut")
                  .click();
              }
            });
        </script>
        <script type="text/javascript">
          $(document)
            .ready(function (e) {
              // footer fixed
              var windowwidth = $(window)
                .width();
            });
        </script>
        <script type="text/javascript">
          $(document)
            .ready(function (e) {
              var affordmin = '1000';
              var homeaffoardval = parseInt(affordmin) * 2;
              $('#monthlypayment')
                .val(homeaffoardval);
              firstone();
              var mortgagemini = '100000';
              var mortgageminival = parseInt(mortgagemini) * 2;
              $('#mortageamt')
                .val(mortgageminival);
              var downpayvald = parseInt(mortgageminival) * 20 / 100;
              $('#dwnpay')
                .val(downpayvald);
              secondonee();
              var indexulmenu = $('.indexul')
                .html();
              $('.re_ul')
                .html(indexulmenu);
              $('.mainmenuclick')
                .click(function (e) {
                  $('.slideingmenu')
                    .addClass("active");
                  $('.slidemenuoverlay')
                    .addClass("active");
                });
              $('.closesilde')
                .click(function (e) {
                  $('.slideingmenu')
                    .removeClass("active");
                  $('.slidemenuoverlay')
                    .removeClass("active");
                });
              $('.slidemenuoverlay')
                .click(function (e) {
                  $('.slideingmenu')
                    .removeClass("active");
                  $(this)
                    .removeClass("active");
                });
              $('.slideingmenu  .myacounthover')
                .click(function (e) {
                  $(this)
                    .children('.myacountdropdown')
                    .slideToggle(200);
                });
              // sliding sub menu codeeee
              $('.slidemneu_a')
                .click(function (e) {
                  $(this)
                    .siblings('.slidingsubmenu')
                    .slideToggle(200);
                });
            });
        </script>
        <script type="text/javascript">
          function secondonee() {
            var mortageamt = $('#mortageamt')
              .val()
              .trim();
            var rateofinterest = $('#mortagerateintrst')
              .val()
              .trim();
            var noofyears = $('#noofyearsmor')
              .val()
              .trim();
            var downpay = $('#dwnpay')
              .val()
              .trim();
            if (mortageamt == "") {
              $('#er1')
                .html("Mortgage amount cannot be null.");
              $('#er1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (mortageamt < 0) {
              $('#er1')
                .html("Please enter a positive value.");
              $('#er1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (downpay == "" || downpay == undefined) {
              downpay = 0;
            }
            if (downpay != "") {
              if (isNaN(downpay)) {
                $('#er2')
                  .html("Down payment must be a number.");
                $('#er2')
                  .css('visibility', 'visible');
                setTimeout(removedisps, 3000);
                return false;
              }
              if (downpay < 0) {
                $('#er2')
                  .html("Please enter a positive value.");
                $('#er2')
                  .css('visibility', 'visible');
                setTimeout(removedisps, 3000);
                return false;
              }
              if (parseInt(downpay) != 0) {
                if ((!parseInt(downpay) > 0)) {
                  $('#er2')
                    .html("Down payment must be greater than or equal to zero.");
                  $('#er2')
                    .css('visibility', 'visible');
                  setTimeout(removedisps, 3000);
                  return false;
                }
              }
            }
            if (isNaN(mortageamt)) {
              $('#er1')
                .html("Mortgage amount must be a number.");
              $('#er1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (!parseInt(mortageamt) > 0) {
              $('#er1')
                .html("Mortgage amount must be greater than zero.");
              $('#er1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (rateofinterest == "") {
              $('#er3')
                .html("Rate of interest cannot be null.");
              $('#er3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (rateofinterest < 0) {
              $('#er3')
                .html("Please enter a positive value.");
              $('#er3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (!parseInt(rateofinterest) > 0) {
              $('#er3')
                .html("Rate of interest must be greater than zero.");
              $('#er3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (parseInt(rateofinterest) > 20) {
              $('#er3')
                .html("Rate of interest must be less than 20.");
              $('#er3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            var slidern = $("#range2")
              .data("ionRangeSlider");
            if (mortageamt > 5000000) {
              slidern.update({
                from: 5000000
              });
            } else {
              slidern.update({
                from: mortageamt
              });
            }
            // M = P [ i(1 + i)n ] / [ (1 + i)n - 1]
            var mortageamtpay = parseInt(mortageamt);
            var sflag = 0;
            if (downpay >= mortageamtpay) {
              sflag = 1;
            } else {
              mortageamtpay = mortageamtpay - downpay;
            }
            var rate = parseFloat(rateofinterest);
            var noyr = parseInt(noofyears);
            var ratenomonth = rate / (12 * 100); //i
            //alert(ratenomonth);
            var rateadd = parseFloat(ratenomonth) + 1; //i+1
            var nomonth = noyr * 12; //n
            var i;
            var numpow = 1;
            //alert(nomonth);
            //alert(nomonth);
            //alert(rateadd);
            for (i = 1; i <= nomonth; i++) {
              numpow = parseFloat(numpow) * parseFloat(rateadd);
            }
            //alert(numpow);
            var motgagemonth = (mortageamtpay * (numpow * ratenomonth)) / (numpow - 1);
            //
            //motgagemonth=Math.round(motgagemonth,2);
            //	alert("motgagemonth="+motgagemonth);
            if (sflag == 1) {
              motgagemonth = 0;
            }
            var newfdf = number_format(motgagemonth, 0);
            $('#amtmotgagemonth')
              .html("₪" + " " + newfdf);
          }
          
          function firstone() {
            var monthlypayment = $('#monthlypayment')
              .val()
              .trim();
            var downpayment = $('#downpayment')
              .val()
              .trim();
            var rateofinterest = $('#rateofinterest')
              .val()
              .trim();
            var noofyears = $('#noofyears')
              .val()
              .trim();
            if (monthlypayment == "") {
              $('#err1')
                .html("Monthly payment cannot be null.");
              $('#err1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (monthlypayment < 0) {
              $('#err1')
                .html("Please enter a positive value.");
              $('#err1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (isNaN(monthlypayment)) {
              $('#err1')
                .html("Monthly payment must be a number.");
              $('#err1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (!parseInt(monthlypayment) > 0) {
              $('#err1')
                .html("Monthly payment must be greater than zero");
              $('#err1')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (downpayment != "") {
              if (isNaN(downpayment)) {
                $('#err2')
                  .html("Down payment must be a number.");
                $('#err2')
                  .css('visibility', 'visible');
                setTimeout(removedisps, 3000);
                return false;
              }
              if (downpayment < 0) {
                $('#err2')
                  .html("Please enter a positive value.");
                $('#err2')
                  .css('visibility', 'visible');
                setTimeout(removedisps, 3000);
                return false;
              }
              if (parseInt(downpayment) != 0) {
                if ((!parseInt(downpayment) > 0)) {
                  $('#err2')
                    .html("Down payment must be greater than or equal to zero.");
                  $('#err2')
                    .css('visibility', 'visible');
                  setTimeout(removedisps, 3000);
                  return false;
                }
              }
            }
            if (rateofinterest == "") {
              $('#err3')
                .html("Rate of interest cannot be null.");
              $('#err3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (rateofinterest < 0) {
              $('#err3')
                .html("Please enter a positive value.");
              $('#err3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (!parseInt(rateofinterest) > 0) {
              $('#err3')
                .html("Rate of interest must be greater than zero.");
              $('#err3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            if (parseInt(rateofinterest) > 20) {
              $('#err3')
                .html("Rate of interest must be less than 20.");
              $('#err3')
                .css('visibility', 'visible');
              setTimeout(removedisps, 3000);
              return false;
            }
            // 2000((1+0.00331667)^360-1)/(0.00331667(1+0.00331667)^360
            var monthpay = parseFloat(monthlypayment);
            var slider = $("#range")
              .data("ionRangeSlider");
            if (monthpay > 50000) {
              slider.update({
                from: 50000
              });
            } else {
              slider.update({
                from: monthpay
              });
            }
            if (downpayment != '') {
              var downpay = parseFloat(downpayment);
            } else {
              var downpay = 0;
            }
            var rate = parseFloat(rateofinterest);
            var noyr = parseInt(noofyears);
            var ratenomonth = parseFloat(rate) / (12 * 100); //r
            //alert(ratenomonth);
            var rateadd = parseFloat(ratenomonth) + 1; //r+1
            var nomonth = noyr * 12; //n
            var i;
            var numpow = 1;
            for (i = 1; i <= nomonth; i++) {
              numpow = parseFloat(numpow) * parseFloat(rateadd);
            }
            var emi = monthpay;
            var homeaffor = (emi * (numpow - 1)) / (ratenomonth * numpow);
            homeaffor += downpay;
            var newfdf = number_format(homeaffor, 0);
            //
            //alert("homeaffor="+homeaffor);
            //	homeaffor=Math.round(homeaffor,2);
            $('#amthomeafford')
              .html("₪" + " " + newfdf);
          }
          $(document)
            .ready(function () {
              $('#errordisp')
                .css('visibility', 'hidden');
              if ($('#buyx')
                  .hasClass("active")) {
                $('#searchtype')
                  .val("1");
              }
              if ($('#rentx')
                  .hasClass("active")) {
                $('#searchtype')
                  .val("2");
              }
              /*
               $('#citysearch').click(function(){
               
               $('#errordisp').css('visibility', 'hidden');
               
               $('#citysearch').val("");
               
               $('#location').val("");
               //  $('#address').val("");
               $('#lat').val("");
               $('#long').val("");
               
               
               }); */
              $('#searchnx')
                .click(function () {
                  if ($('#searchtype')
                      .val() == 1) {
                    $('#buyx')
                      .addClass("active");
                  } else {
                    $('#rentx')
                      .addClass("active");
                  }
                  if ($('#citysearch')
                      .val()
                      .trim() == "") {
                    $('#errordisp')
                      .html("<b><i class=\"fa fa-arrow-circle-up\"></i> Please Set a Location</b>");
                    $('#errordisp')
                      .css('visibility', 'visible');
                    setTimeout(removedisp, 3000);
                    return false;
                  }
                  var plcesxx = Get_Cookie('location_temp');
                  plcesxx = plcesxx.replace(/\+/g, ' ');
                  if ($('#citysearch')
                      .val()
                      .trim()
                      .indexOf(plcesxx) == -1) {
                    $('#errordisp')
                      .html("<b><i class=\"fa fa-arrow-circle-up\"></i> Please Choose a Location from the List</b>");
                    $('#errordisp')
                      .css('visibility', 'visible');
                    setTimeout(removedisp, 3000);
                    return true;
                  }
                  if ($('#location')
                      .val() == "" || $('#lat')
                      .val() == "" || $('#long')
                      .val() == "") {
                    $('#errordisp')
                      .html("<b><i class=\"fa fa-arrow-circle-up\"></i> Please Choose a Location from the List</b>");
                    $('#errordisp')
                      .css('visibility', 'visible');
                    setTimeout(removedisp, 3000);
                    return false;
                  }
                  var cvii = "";
                  if ($('#searchtype')
                      .val() == 1) {
                    cvii = "For-Sale";
                  } else {
                    cvii = "For-Rent";
                  }
                  var txct = [];
                  var plces = Get_Cookie('location_temp');
                  plces = plces.replace(/\+/g, ' ');
                  txct = plces.split(",");
                  var necnt = txct.length;
                  var ncxds = "";
                  if (necnt > 1) {
                    ncxds = txct[0].trim()
                        .replace(/ /g, "-")
                        .replace(/\./g, "") + "-" + txct[1].trim()
                        .replace(/ /g, "-")
                        .replace(/\./g, "");
                  } else if (necnt == 1) {
                    ncxds = txct[0].trim()
                      .replace(/ /g, "-")
                      .replace(/\./g, "");
                  }
                  var url = 'search/homes/index.html';
                  $("form#searchsubmit")
                    .attr("action", url);
                  $('form#searchsubmit')
                    .submit();
                });
              
              function removedisp() {
                $('#errordisp')
                  .css('visibility', 'hidden');
              }
            });
        </script>
        <!-- Footer section -->
        <div class="clearfix"></div>
        <div class="fulfooter fulwidthm left">
          <footer class="mainfooter  fulwidthm left">
            <div class="mainindexcontainer">
              <div class="mainontainer_in pdgS10">
                <div class="footerbox pdgTB50 fulwidthm left">
                  <div class="footerboxeach col-lg-3 col-md-3 col-sm-4 col-xs-4">
                    <h5 class="footerhead fontsize18 robotomedium "><?= $lang[57][$current] ?></h5>
                    <div class="clearfix"></div>
                    <ul class="footerul robotomedium">
                      <li class="footerli"><a class="footera graytext" href="#">New York, NY</a></li>
                      <li class="footerli"><a class="footera graytext" href="#">Las Vegas, NV</a></li>
                      <li class="footerli"><a class="footera graytext" href="#">Los Angeles, CA</a></li>
                      <li class="footerli"><a class="footera graytext" href="#">San Francisco, CA</a></li>
                      <li class="footerli"><a class="footera graytext" href="#">Chicago, IL</a></li>
                    </ul>
                  </div>
                  <!-- Footerboxeachends-->
                  <div class="footerboxeach col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h5 class="footerhead fontsize18 robotomedium "><?= $lang[58][$current] ?></h5>
                    <div class="clearfix"></div>
                    <ul class="footerul robotomedium">
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[66][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[67][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[66][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[66][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#">All Homes Orlando, FL</a></li>
                    
                    </ul>
                  </div>
                  <!-- Footerboxeachends-->
                  <div class="footerboxeach col-lg-2 col-md-2 col-sm-4 col-xs-4">
                    <h5 class="footerhead fontsize18 robotomedium "><?= $lang[59][$current] ?></h5>
                    <div class="clearfix"></div>
                    <ul class="footerul robotomedium">
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[62][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[61][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[63][$current] ?></a></li>
                      <li class="footerli"><a class="footera graytext" href="#"><?= $lang[68][$current] ?></a></li>
                      <!--<li class="footerli"><a class="footera graytext" href="">Recent Searches</a></li>-->
                    </ul>
                  </div>
                  <!-- Footerboxeachends-->
                  <script type="text/javascript" src="js/common.js"></script>
                  <div class="footerboxeach col-lg-3 col-md-3 col-sm-12 col-xs-12 mgnT30">
                    <div class="foterselectdiv mgnB10 fulwidthm left">
                      <select class="footerselect" style="width:100%;" name="lang" id="lang" onChange="changelanguage();">
                        <option value="16_ar-jo">Arabic</option>
                        <option value="14_Fe">Chinese</option>
                        <option value="1_en" selected>English</option>
                        <option value="18_fa">Farsça</option>
                        <option value="3_fr">French</option>
                        <option value="8_de">german</option>
                        <option value="9_gr">greek</option>
                        <option value="19_he">Hebrew</option>
                        <option value="5_it">Italiano</option>
                        <option value="12_no">Norwegian</option>
                        <option value="10_pt">Português</option>
                        <option value="15_ro">Romana</option>
                        <option value="6_ru">Russian</option>
                        <option value="13_ff">sdg</option>
                        <option value="2_es">Spanish</option>
                        <option value="20_sv">Svenska</option>
                        <option value="11_tr">turkce</option>
                        <option value="17_vn">Vietnamese</option>
                        <option value="7_zh-Ha">中文</option>
                      </select>
                    </div>
                    <div class="socialwrp fulwidthm left">
                      <ul class="socialul">
                        <li class="social_li">
                          <a href="http://www.facebook.com/" class="flaticon-facebook55 sociala"></a>
                        </li>
                        <li class="social_li">
                          <a href="http://twitter.com/" class="flaticon-twitter1 sociala"></a>
                        </li>
                        <li class="social_li">
                          <a href="http://www.google-plus.com/" class="flaticon-google116 sociala"></a>
                        </li>
                      </ul>
                    </div>
                    <div class="copyrightwrp text-center left fulwidthm fontsize12 lgraytxt"><?= $lang[45][$current] ?></div>
                    <div style="display:none;"> ls</div>
                  </div>
                  <!-- Footerboxeachends-->
                </div>
              </div>
            </div>
          </footer>
        </div>
        <!-- Footer section Ends -->
        <!-- Animation ends -->
        <!-- Date Range Picker -->
        <script type="text/javascript" src="js/moment.min.js"></script>
        <script type="text/javascript" src="js/simpledatpiker/datepiker.js"></script>
        <!-- Date Range Picker Ends -->
        <!--  Menuu -->
        <script type="text/javascript">
          $(document)
            .ready(function (e) {
              $('.indexheaderwrper .myacounthover, .innerheader .myacounthover')
                .hover(function () {
                  $(this)
                    .children('.myacountdropdown')
                    .stop()
                    .fadeIn(200);
                }, function () {
                  $(this)
                    .children('.myacountdropdown ')
                    .stop()
                    .fadeOut(200);
                });
              // RESPONSIVE MENU Starts
            });
        </script>
        <script type="text/javascript" src="js/signinpopup.js"></script>
        <!-- Menu ends -->
        <!-- animation and select -->
        <script type="text/javascript" src="js/animate/animate.js"></script>
        <script type="text/javascript" src="js/animate/wow.js"></script>
        <script type="text/javascript" src="js/select2.js"></script>
        <script type="text/javascript">
          $(document)
            .ready(function (e) {
              $(".selectsearch, .footerselect, .formselect")
                .select2();
              wow = new WOW({
                animateClass: 'animated',
                mobile: false,
                offset: 100
              });
              wow.init();
              // slect style
            });
        </script>
        <!-- error divvvv -->
        <div class="notoficationgc alert alert-success succesgc"> Details Updated Successfully</div>
        <div class="notoficationgc alert alert-danger errorsgc"> Error</div>
      </section>
      <!--    error div -->
    </div>
  </div>
</div>
</body>
</html>