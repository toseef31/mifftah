@extends('layouts.master_layout')

@section('content')

  <div class="mainindexcontainer">

   <div class="mainontainer_in fulwidthm left">
    <div class="col-sm-12 col-xs-12 agntheaderwrp">
     <section class="agentheader mgnB20  fulwidthm whitebg left   pdg15">
      <h4 class="agentheading fontsize20"><span id="texts">Real Estate Agents in  Orlando, FL </span> <span class="resultcount robotolight" id="rex"> 2 Results </span></h4>
      <div class="agentfiltering fulwidthm whitebg left mgnT10">
       <div class="row">
        <div class="col-sm-4 col-xs-12 agentfilterbox"><input id="cityname" class="rqstfrminput fulwidthm left" type="text" placeholder="Search by Agents Work Location" value="Orlando, FL"><br><span class="lgraytext agnbtmsmtxt">* Choose a City from the given List as Agent Work Location</span></div>
        <div class="col-sm-4 col-xs-12 agentfilterbox"><input id="brokername" class="rqstfrminput fulwidthm left" type="text" placeholder="Agent Name"><br><span class="lgraytext agnbtmsmtxt">* Type In your Agents Name Above</span></div>
        <div class="col-sm-4 col-xs-12 agentfilterbox">
         <select id="sortby" style="width:100%">
          <option value="">All Agents</option>
          <option value="1">Premium Agents</option>
          <option value="2">Most Sold Agents</option>
          <option value="3">Top Rated Agents</option>
         </select>
         <br><span class="lgraytext agnbtmsmtxt">* You can sort Your Agents List based on the Above Options</span>
        </div>
       </div> <!-- row ends -->
      </div> <!-- agentfiltering ends -->


     </section> <!-- agentheader ends -->
    </div> <!-- agntheaderwrp ends -->


    <div class="detailsfulleft  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">

     <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <ul id="list_results" class="agentlistul fulwidthm left">
       <li class="agentlistli fulwidthm left mgnB15">
        <div class="agentlistli_in" >
         <div class="agentleftimg left" title="View profile of Zera Elezabeth">
          <img src="userdata/Profile/2/person-801823_960_720.png" alt="Zera Elezabeth">
         </div>
         <!-- agentleftimg ends -->
         <div class="agentrightdetials">
          <div class="agentRdleft left">
           <div class="agentDtop fulwidthm left">
            <a href="#" class="dbluetext agentnamelink robotoregular fontsize18 fulwidthm textdot" title="View profile of Zera Elezabeth">Zera Elezabeth</a>
           </div>
           <!-- agentDtop ends -->
           <div class="agentDmiddle fulwidthm left">
            <p class="midlep graytext fontsize12 fulwidthm textdot"><i class="fa fa-building"></i>
             New Homes Agency</p>
            <h6 class="agentphone lbluetext font-size14"><i class="fa fa-phone"></i>
             452-5363 </h6>                </div>
           <!-- agentDmiddle ends -->
           <div class="agentDbottom fulwidthm left">


            <div class="mgnT10 fulwidthm left">

             <span class="left"> <img src="images/premiumagnticon.png" alt=""></span>
             <span class=" mgnS05 premimumagntname left whitetext lblue_bg fontsize12 pdg05">Premium Agent</span>
             <!--   <a class="contactagent dblue_bg whitetext font-size14 " href="http://inout-realestate.demo.inoutscripts.net/agents/profile/3/Zera-Elezabeth">View Profile</a> -->
            </div>



           </div>

           <!-- agentBottom ends -->
          </div>
          <!-- agentRdleft ends -->
          <div class="agentRdright right text-right">
           <div class="agentDtop fulwidthm right">
            <div class="brokerratingd">
             <i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star lgraytext"></i><i class="fa fa-star lgraytext"></i><span class=" fontsize12"> (1) </span>
            </div>
           </div>



           <div class="agentDmiddle fulwidthm right">
            <!--      <img src="userdata/Agencylogo/3/logo5.jpg" width="50px" height="50px" alt="">
            -->
            <a id="contact_2" class="contactagent right contacthostopen dblue_bg whitetext font-size14 " title="Contact Agent">Contact</a>
           </div>
           <div class="agentDbottom fulwidthm right">
            <div class="agentplace"><i class="fa fa-location-arrow"></i>
             Abc Street,Patal Nagar</div>
            <div class="brkerRbottom fontsize12">
             <span class="brkRsalec lgraytext"> 1 Recent Sales </span> &nbsp;|&nbsp; <span class="brklistStatus lbluetext"> 1 Lead Listings </span>&nbsp;|&nbsp; <span class="brklistStatus lbluetext"> 4 Active Listings </span>
            </div>
           </div>

          </div>
          <!-- agentRdRight ends -->


         </div>
         <!-- agentrightdetials ends -->

        </div> <!-- agentlistli_in ends -->
       </li>
       <li class="agentlistli fulwidthm left mgnB15">
        <div class="agentlistli_in" >
         <div class="agentleftimg left" title="View profile of Steve James">
          <img src="userdata/Profile/1/girl-1252995_1920.png" alt="Steve James">
         </div>
         <!-- agentleftimg ends -->
         <div class="agentrightdetials">
          <div class="agentRdleft left">
           <div class="agentDtop fulwidthm left">
            <a href="#" class="dbluetext agentnamelink robotoregular fontsize18 fulwidthm textdot" title="View profile of Steve James">Steve James</a>
           </div>
           <!-- agentDtop ends -->
           <div class="agentDmiddle fulwidthm left">
            <p class="midlep graytext fontsize12 fulwidthm textdot"><i class="fa fa-building"></i>
             NewHorizon Real Estate Agency</p>
            <h6 class="agentphone lbluetext font-size14"><i class="fa fa-phone"></i>
             0456-765-542 </h6>                </div>
           <!-- agentDmiddle ends -->
           <div class="agentDbottom fulwidthm left">


            <div class="mgnT10 fulwidthm left">

             <span class="left"> <img src="images/premiumagnticon.png" alt=""></span>
             <span class=" mgnS05 premimumagntname left whitetext lblue_bg fontsize12 pdg05">Premium Agent</span>

            </div>



           </div>

           <!-- agentBottom ends -->
          </div>
          <!-- agentRdleft ends -->
          <div class="agentRdright right text-right">
           <div class="agentDtop fulwidthm right">
            <div class="brokerratingd">
             <i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star lgraytext"></i><span class=" fontsize12"> (1) </span>
            </div>
           </div>



           <div class="agentDmiddle fulwidthm right">
            <!--      <img src="userdata/Agencylogo/2/361447.jpg" width="50px" height="50px" alt="">
            -->
            <a id="contact_1" class="contactagent right contacthostopen dblue_bg whitetext font-size14 " title="Contact Agent">Contact</a>
           </div>
           <div class="agentDbottom fulwidthm right">
            <div class="agentplace"><i class="fa fa-location-arrow"></i>
             Mangloor Street,New York</div>
            <div class="brkerRbottom fontsize12">
             <span class="brkRsalec lgraytext"> 2 Recent Sales </span> &nbsp;|&nbsp; <span class="brklistStatus lbluetext"> 4 Lead Listings </span>&nbsp;|&nbsp; <span class="brklistStatus lbluetext"> 7 Active Listings </span>
            </div>
           </div>

          </div>
          <!-- agentRdRight ends -->


         </div>
         <!-- agentrightdetials ends -->

        </div> <!-- agentlistli_in ends -->
       </li>
      </ul>
      <!-- agentlistul ends -->

     </section>
     <div class="paginationnumber">
      <ul id="pagingdivv" class="paginationul fulwidthm left mgnB30">
      </ul>
     </div>
     <!-- Details Section ends -->






    </div>
    <!-- detailsfullLeft ends -->

    <div class="detailsfullright  col-lg-4 col-md-4 col-sm-12 col-xs-12 ">


     <div class="advertisment300s text-center pdg15 whitebg fulwidthm left mgnB15">
      <span id="show_ads_65449edab1f71ef5039cf282bca8430c_1306"></span>
      <script language="javascript" type="text/javascript" src=""></script>
      <script language="javascript">
        if (window.ads_65449edab1f71ef5039cf282bca8430c) {
          ads_65449edab1f71ef5039cf282bca8430c += 1;
        } else {
          ads_65449edab1f71ef5039cf282bca8430c = 1;
        }
        ads_65449edab1f71ef5039cf282bca8430c_1306 = ads_65449edab1f71ef5039cf282bca8430c;
        timer_65449edab1f71ef5039cf282bca8430c1306 = window.setInterval(function () {
          if (window.gc4ca4238a0b923820dcc509a6f75849b) {
            setTimeout("showAdsforContent(1306,300,250,'http://www.inoutdemo.com/inout_adserver_enterprise/publisher-show-ads.php'," + ads_65449edab1f71ef5039cf282bca8430c_1306 + ",'ads_65449edab1f71ef5039cf282bca8430c')", 1000 * (ads_65449edab1f71ef5039cf282bca8430c_1306 - 1));
            window.clearInterval(timer_65449edab1f71ef5039cf282bca8430c1306);
          }
        }, 100);
        ads_65449edab1f71ef5039cf282bca8430c_1306_position = 0;
      </script>
     </div>
     <div class="advertisment300s text-center pdg15 whitebg fulwidthm left mgnB15">
      <span id="show_ads_65449edab1f71ef5039cf282bca8430c_1307"></span>

     </div>

    </div> <!-- detailsfullright ends -->

    <div class="clearfix"></div>
    <div class="col-xs-12 ">
     <div class="resultdlistingbottm whitebg pdg15 fulwidthm left mgnB30">

      <div class="newlsitingwrp">
       <div class="col-xs-12 col-sm-3">
        <h2 class="robotolight fontsize30 newliisthead">Popular <span class="robotomedium">Listings</span></h2>
        <p class="newlsitingp fontsize18 robotolight">Popular Listings in <br>Orlando, FL</p>
        <div class="newlistingcontrol">
         <div class="n_l_prev n_lcontrl"><i class="flaticon-direction129"></i></div>
         <div class="n_l_next n_lcontrl"><i class="flaticon-fastforward4"></i></div>
        </div>
       </div>
       <div class="col-xs-12 col-sm-9 newlistingwrp">
        <div id="newlisting" class="owl-carousel">
         <div class="item newlistingitem fulwidthm">
          <div class="newlistingitem_in pdgS10"> <a href="#" class="graybg" title=" Orlando, FL 47367">
            <div class="listingimageouter fulwidthm left">
             <div class="listingimage">
              <div class=" listinimgcover">

               <div class="listinimgcoverin media-cover">  <img  class="img-responsive-height"   src="userdata/List/Thumb/1/9/home-wallpaper-26.jpg"></div>
              </div>
              <div class="photocount1">2 Photos</div>
              <div class="listinname whitetext fontsize13 pdg05"> Orlando, FL 47367                            </div>

             </div>

            </div>
           </a>
           <div class="newlistingdetails fulwidthm left graybg">
            <div class="n_l_discptn">
             <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="₪ 15,000,000">₪ 15,000,000</div>
             <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
             <div class="nl_bottom fulwidthm left pdg10">

              <div class="left">
               <span id="wishlist_9" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
              </div>
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
          <div class="newlistingitem_in pdgS10"> <a href="#" class="graybg" title=" Orlando, FL 2432">
            <div class="listingimageouter fulwidthm left">
             <div class="listingimage">
              <div class=" listinimgcover">

               <div class="listinimgcoverin media-cover">  <img  class="img-responsive-height"   src="userdata/List/Thumb/1/2/home-54907_960_720.jpg"></div>
              </div>
              <div class="photocount1">1 Photos</div>
              <div class="listinname whitetext fontsize13 pdg05"> Orlando, FL 2432  </div>

             </div>

            </div>
           </a>
           <div class="newlistingdetails fulwidthm left graybg">
            <div class="n_l_discptn">
             <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="₪ 2,500,000">₪ 2,500,000</div>
             <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 2,000 Sq.ft">2,000 Sq.ft</div>
             <div class="nl_bottom fulwidthm left pdg10">

              <div class="left">
               <span id="wishlist_2" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
              </div>
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
          <div class="newlistingitem_in pdgS10"> <a href="#" class="graybg" title="Clermont, Orlando, FL 8758">
            <div class="listingimageouter fulwidthm left">
             <div class="listingimage">
              <div class=" listinimgcover">

               <div class="listinimgcoverin media-cover">  <img  class="img-responsive-height"   src="userdata/List/Thumb/2/23/jjjjjj1.jpg"></div>
              </div>
              <div class="photocount1">1 Photos</div>
              <div class="listinname whitetext fontsize13 pdg05">Clermont, Orlando, FL 8758                            </div>

             </div>

            </div>
           </a>
           <div class="newlistingdetails fulwidthm left graybg">
            <div class="n_l_discptn">
             <div class="n_lprice halfwidth left lblue_bg  whitetext robotoregular font-size14" title="₪ 8,000">₪ 8,000</div>
             <div class="n_lsqft halfwidth text-right left dblue_bg  whitetext robotoregular font-size14" title="Home Size : 1,000 Sq.ft">1,000 Sq.ft</div>
             <div class="nl_bottom fulwidthm left pdg10">

              <div class="left">
               <span id="wishlist_23" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
              </div>
              <div class="n_botmrd right fontsize16 ">
               <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
               <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
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
    </div>
    <!-- resultbootm listing ends -->



   </div>
   <!-- listing wraper ends -->


   <!-- mainontainer_in ends -->
  </div> <!-- mainindexcontainer ends -->




<script type="text/javascript">

  google.maps.event.addDomListener(window, 'load', function () {
    var options = {
      types: ['(cities)'],
      componentRestrictions: {country: "us"}
    };
    var places = new google.maps.places.Autocomplete(document.getElementById('cityname'), options);
    google.maps.event.addListener(places, 'place_changed', function () {


      var plces = document.getElementById('cityname').value;

      plces = plces.substr(0, plces.lastIndexOf(","));
      $('#texts').html("Real Estate Agents in " + plces);

      page_load(1);

    });
  });

  $('#cityname').click(function () {

    $('#cityname').val("");
    $('#texts').html("Real Estate Agents in For Sale Network");

    page_load(1);

  });




</script> 
<script type="text/javascript">

  function page_load(page)
  {
    var page = page;
    var city = 'Orlando, FL';
    var actualtype = '0';
    var sortby = $('#sortby').val();

    var cityname = $('#cityname').val();
    var brokername = $('#brokername').val();

    //alert("dhdndn");

    $.ajax({
      type: "POST",
      url: "http://inout-realestate.demo.inoutscripts.net/agents/agentlistdetails",

      data: "city=" + city + "&page=" + page + "&brokername=" + brokername + "&cityname=" + cityname + "&sortby=" + sortby,

      success: function (msg) {
        //alert(msg);
        var details = msg.split("???");
        if (msg != '')
        {

          if (details[0] > 0)
          {
            $('#rex').html(details[0] + " Results");
          } else {

            $('#rex').html("");
          }

          $('#pagingdivv').empty();




          $('#list_results').empty();
          $('#list_results').html(details[1]);

          $('#pagingdivv').html(details[2]);

          $('#pagingdivv li').siblings().find('a').removeClass("active");
          $("#page_" + page).addClass("active");
        }



      }
    });

  }

  $(document).ready(function (e) {

    /*	$("#cityname").keyup(function() {
     
     page_load(1);
     
     });*/
    $("#brokername").keyup(function () {
      page_load(1);

    });
    $('#sortby').change(function () {
      page_load(1);

    });



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

    $(".recetSerchul").niceScroll({
      cursorcolor: "#09cae7",
      cursorborder: "1px solid #09cae7",
      background: "#e8e6e6",
      autohidemode: true,
      cursorminheight: 32,
      smoothscroll: true,
      horizrailenabled: false,
    });


  });


</script> 
  
<script type="text/javascript">
  $(document).ready(function (e) {


    $('.indexheaderwrper .myacounthover, .innerheader .myacounthover').hover(function () {

      $(this).children('.myacountdropdown').stop().fadeIn(200);

    },
            function () {
              $(this).children('.myacountdropdown ').stop().fadeOut(200);
            });

    // RESPONSIVE MENU Starts























  });


</script> 
<script type="text/javascript">
  $(document).ready(function (e) {


    $(".selectsearch, .footerselect, .formselect").select2();



    wow = new WOW(
            {
              animateClass: 'animated',
              mobile: false,

              offset: 100
            }
    );
    wow.init();
    // slect style


  });
</script> 
<script type="text/javascript">

  function createwishlist()
  {

    var wishlistname = $('#wishlistname').val().trim();
    var wishlisttype = 1;
    $('#errordivwish').html('');
    //alert(wishlisttype);
    if (wishlistname == "")
    {
      $('#errordivwish').html('Wishlist Name Cannot be Null');
      return false;
    }
    if (wishlisttype == "")
    {
      $('#errordivwish').html('Wishlist Type Cannot be Null');
      return false;
    }
    if (wishlisttype != "" && wishlistname != "")
    {
      //alert(wishlistname);
      $.ajax({

        type: "POST", cache: false,

        url: "http://inout-realestate.demo.inoutscripts.net/index/createwishlist",

        data: {'wishlistname': wishlistname, 'wishlisttype': wishlisttype},

        success: function (data) {
          //alert(data);
          if (data == 1)
          {
            $('#errordivwish').html('Wishlist Name Cannot be Null');
            return false;
          }
          if (data == 2)
          {
            $('#errordivwish').html('Wishlist Type Cannot be Null');
          }
          if (data == 3)
          {
            $('#errordivwish').html('Invalid User');
            return false;

          }
          if (data == 5)
          {
            $('#errordivwish').html('Wishlist Name Already Exists');
            return false;
          }
          if (data == 4)
          {

            wishlistview();
            $('.cratewinput').fadeToggle(200);
          }

        }
      });
    }
  }
  function mapwishlist()
  {
    //wish_desc
    var wish_sesc = $('#wish_desc').val().trim();
    var wishlists = $('#wishlistselectopt').val();
    var listid = $('#actuallistid').val();
    var type = 1;
    $('#errordivwish').html('');

    if (wishlists == "" || wishlists == null)
    {

      $('#errordivwish').html('Select a WishList for Adding');
      return false;
    }

    var wishlists_arr = new Array();
    wishlists_arr = wishlists.toString().split(',');

    wisglistarr1 = JSON.stringify(wishlists_arr);



//alert(wish_sesc);exit;
    if (wishlists != "")
    {
      $.ajax({

        type: "POST", cache: false,

        url: "http://inout-realestate.demo.inoutscripts.net/index/mapwishlist",

        //data: {'wish_sesc':wish_sesc,'wishlists[]':wisglistarr1,'listid':listid},

        data: {data: wisglistarr1, 'wish_sesc': wish_sesc, 'listid': listid, 'type': type},

        success: function (data) {
          //alert(data);
          var details = data.split('??');

          if (details[0] == 3)
          {
            $('#errordivwish').html('Invalid User');
            return false;
          }

          if (details[0] == 4)
          {
            //var c=$("#wishiconmap_"+listid).val();
            //alert(c);
            //	$("#wishiconmap_"+listid).replaceWith( details[1] );
            //alert($("#wishiconmap_3").attr(""));
            $("#wishlist_" + listid).replaceWith(details[1]);
            $(document.body).find('.nope').addClass("hearliked");
            //alert($(document.body).find('.nope').attr("Class"));
            $('.wishlistouter, .overlayb').fadeOut(200);

          }

        }
      });
    }

  }


  function wishlistview()
  {
    $.ajax({

      type: "POST", cache: false,

      url: "http://inout-realestate.demo.inoutscripts.net/index/wishlist",

      success: function (data) {
        //alert(data);
        if (data != 0)
        {
          $('#wishlistselectopt').html(data);
        }


      }
    });
  }
</script>
<script type="text/javascript">
  $(document).ready(function (e) {

    $('.wishlistopen').click(function (e) {
      $(".wishlistselect").select2("val", "");
      var userloginstat = '0';
      // alert(userloginstat);

      //	alert(markersArray[0]); return false;
      if (userloginstat == 0)
      {

        $(".signinclickmain").click();
        return false;

      }
      wishlistview();
      var lidstring = $(this).attr("id");
      var lid1 = lidstring.split("_");
      var lid = lid1[1];

      $.ajax({

        type: "POST", cache: false,

        url: "http://inout-realestate.demo.inoutscripts.net/index/getwishlistdetail",

        data: {'lid': lid},

        success: function (data) {
          var details = data.split("??");
          if (data != 0)
          {
            $('#listaddresswish').html(details[0]);
            $('#listheadingwish').html(details[1]);
            $('#listimagewishdiv').html(details[2]);
            $('#actuallistid').val(lid);

          }


        }
      });
      $('.wishlistouter, .overlayb').fadeIn(200);
    });

    $("select").select2();

    // contact host section

    $('#sendmessage').click(function (e) {


      $(".errorsgc").html("Sorry, You cannot perform this operation in demo.");
      $(".errorsgc").animate({right: "21px"});

      setTimeout(function () {
        $(".errorsgc").animate({right: "-410px"});

      }, 2000);
      return false;


      var reqname = $('#contactname').val();
      var reqemail = $('#contactemail').val();
      var reqphno = $('#contactphno').val();
      var reqmess = $('#contactmessage').val();
      var userid = $('#useridcontact').val();
      $("#namereqerr").html("");
      $("#phnreqerr").html("");
      $("#namereqerr").html("");
      $("#emailreqerr").html("");
      $("#msgreqerr").html("");

      $("#namereqerr").hide();
      $("#phnreqerr").hide();
      $("#namereqerr").hide();
      $("#emailreqerr").hide();
      $("#msgreqerr").hide();


      if (reqname == '')
      {

        $("#namereqerr").html("Please Enter Your Name");
        $("#namereqerr").show();


        setTimeout(function () {
          $("#namereqerr").hide();

        }, 2000);

        return false;
      }
      if (reqemail == '')
      {
        $("#emailreqerr").html("Please Enter Your Email");
        $("#emailreqerr").show();


        setTimeout(function () {
          $("#emailreqerr").hide();

        }, 2000);
        return false;
      }
      var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;

      if (!regex.test(reqemail)) {
        $("#emailreqerr").html("Invalid Email");
        $("#emailreqerr").show();


        setTimeout(function () {
          $("#emailreqerr").hide();

        }, 2000);
        return false;
      }
      if (reqmess == '')
      {
        $("#msgreqerr").html("Please Enter Your Message");
        $("#msgreqerr").show();


        setTimeout(function () {
          $("#msgreqerr").hide();

        }, 2000);
        return false;
      }


      $(".msgownrclose").trigger("click");

      $('.infomsgouter, .overlayrqstinfo').fadeIn(200);


      $.ajax({

        type: "POST", cache: false,

        url: "http://inout-realestate.demo.inoutscripts.net/agents/contactuserbroker",

        data: {'userid': userid, 'reqname': reqname, 'reqemail': reqemail, 'reqphno': reqphno, 'reqmess': reqmess},

        success: function (data) {
          $(".errorsgc").html("Sorry, You cannot perform this operation in demo.");
          $(".errorsgc").animate({right: "21px"});

          setTimeout(function () {
            $(".errorsgc").animate({right: "-410px"});

          }, 2000);
          return false;

          //	alert(data);
          if (data == 1)
          {
            $("#namereqerr").html("Please enter your name");
            $("#namereqerr").show();
            $("#namereqerr").animate({right: "21px"});

            setTimeout(function () {
              $("#namereqerr").animate({right: "-410px"});

            }, 2000);
            return false;
          }
          if (data == 2)
          {
            $("#emailreqerr").html("Please enter your email");
            $("#emailreqerr").show();
            $("#emailreqerr").animate({right: "21px"});

            setTimeout(function () {
              $("#emailreqerr").animate({right: "-410px"});

            }, 2000);
            return false;
          }
          if (data == 3)
          {
            $("#msgreqerr").html("Please enter your message");
            $("#msgreqerr").show();
            $("#msgreqerr").animate({right: "21px"});

            setTimeout(function () {
              $("#msgreqerr").animate({right: "-410px"});

            }, 2000);
            return false;
          }
          if (data == 4)
          {
            $("#phnreqerr").html("Phone Number must be a number");
            $("#phnreqerr").show();
            $("#phnreqerr").animate({right: "21px"});

            setTimeout(function () {
              $("#phnreqerr").animate({right: "-410px"});

            }, 2000);
            return false;
          }
          if (data == 6)
          {
            $("#emailreqerr").html("Invalid Email");
            $("#emailreqerr").show();
            $("#emailreqerr").animate({right: "21px"});

            setTimeout(function () {
              $("#emailreqerr").animate({right: "-410px"});

            }, 2000);
            return false;
          }




        }

      });

    });

    /*
     $('.contacthostopen').click(function(e) {
     
     var userstring = $(this).attr("id");
     var useridd=userstring.split("_");
     var userid=useridd[1];
     
     $.ajax({
     
     type: "POST",cache: false,
     
     url: "http://inout-realestate.demo.inoutscripts.net/agents/getuserdetail",
     
     data: {'userid':userid},
     
     success: function(data) {
     var details=data.split("????");
     
     if(data!=0)
     {
     $('#usernameee').html(details[0]);
     $('#usermail').html(details[1]);
     $('#userimagee').html(details[2]);
     $('#useridcontact').val(userid);
     
     }
     
     
     }
     });
     
     $('.msgowner, .overlayContact').fadeIn(200);
     });
     */


    $('.rqstinfoclose').click(function (e) {
      $('.infomsgouter, .overlayrqstinfo').fadeOut(200);

    });
    $('.createnew_wclick').click(function (e) {
      $('.cratewinput').fadeToggle(200);
    });

    $(document).on('click', '.contacthostopen', function (e) {

      var userstring = $(this).attr("id");
      var useridd = userstring.split("_");
      var userid = useridd[1];

      $.ajax({

        type: "POST", cache: false,

        url: "http://inout-realestate.demo.inoutscripts.net/agents/getuserdetail",

        data: {'userid': userid},

        success: function (data) {
          var details = data.split("????");

          if (data != 0)
          {
            $('#usernameee').html(details[0]);
            $('#usermail').html(details[1]);
            $('#userimagee').html(details[2]);
            $('#useridcontact').val(userid);

          }


        }
      });

      $('.msgowner, .overlayContact').fadeIn(200);
    });







    $('.msgownrclose ').click(function (e) {
      $('.msgowner, .overlayContact').fadeOut(200);
    });


    $('.wishlistclose').click(function (e) {
      $('.wishlistouter, .overlayb').fadeOut(200);
    });
    $(document).click(function (e) {
      $('.wishlistouter, .overlayb').fadeOut(200);
    });
    $('.lobox, .wishlistopen').click(function (event) {
      event.stopPropagation();
    });



  });


</script>

@endsection