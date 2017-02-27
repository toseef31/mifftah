<!-- Footer section -->
<div class="clearfix"></div>


<div class="fulfooter fulwidthm left">
  <footer class="mainfooter  fulwidthm left">
    <div class="mainindexcontainer">
      <div class="mainontainer_in pdgS10">
        <div class="footerbox pdgTB50 fulwidthm left">
          
          <div class="footerboxeach col-lg-3 col-md-3 col-sm-4 col-xs-4">
            <h5 class="footerhead fontsize18 robotomedium ">Popular Cities</h5>
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
            <h5 class="footerhead fontsize18 robotomedium ">Recent Searches</h5>
            <div class="clearfix"></div>
            <ul class="footerul robotomedium">
              
              <li class="footerli"><a class="footera graytext" href="#">All Homes Los Angeles, CA</a></li>
              <li class="footerli"><a class="footera graytext" href="#">All Homes Las Vegas, NV</a></li>
              <li class="footerli"><a class="footera graytext" href="#">All Homes Los Angeles, CA</a></li>
              <li class="footerli"><a class="footera graytext" href="#">Homes for Sale in Bakersfield, CA</a></li>
              <li class="footerli"><a class="footera graytext" href="#">Homes for Sale in Denver, CO</a></li>
            </ul>
          </div>
          <!-- Footerboxeachends-->
          <div class="footerboxeach col-lg-2 col-md-2 col-sm-4 col-xs-4">
            <h5 class="footerhead fontsize18 robotomedium ">Company</h5>
            <div class="clearfix"></div>
            <ul class="footerul robotomedium">
              
              <li class="footerli"><a class="footera graytext" href="#">About us</a></li>
              <li class="footerli"><a class="footera graytext" href="#">Terms & Policy</a></li>
              <li class="footerli"><a class="footera graytext" href="#">Contact Us</a></li>
              <li class="footerli"><a class="footera graytext" href="#">Support Desk</a></li>
              <!--<li class="footerli"><a class="footera graytext" href="">Recent Searches</a></li>-->
            </ul>
          </div>
          <!-- Footerboxeachends-->
          <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
          <div class="footerboxeach col-lg-3 col-md-3 col-sm-12 col-xs-12 mgnT30">
            <div class="foterselectdiv mgnB10 fulwidthm left">
              <select class="footerselect" style="width:100%;" name="lang" id="lang" onChange="changelanguage();">
                <option value="16_ar-jo">Arabic</option>
              </select>
            </div>
            <div class="socialwrp fulwidthm left">
              <ul class="socialul">
                <li class="social_li"><a href="http://www.facebook.com/" class="flaticon-facebook55 sociala"></a></li>
                <li class="social_li"><a href="http://twitter.com/" class="flaticon-twitter1 sociala"></a></li>
                <li class="social_li"><a href="http://www.google-plus.com/" class="flaticon-google116 sociala"></a></li>
              </ul>
            </div>
            <div class="copyrightwrp text-center left fulwidthm fontsize12 lgraytxt"> Copyright &copy; 2016 For Sale Network. All Rights Reserved.</div>
            <div style="display:none;"> ls</div>
          </div>
          <!-- Footerboxeachends-->
        </div>
      </div>
    </div>
  
  </footer>

</div>

<!-- Footer section Ends -->


<div class="overlayb"></div>
<!-- Contact Host starts -->
<div class="overlayContact"></div>
<div class="msgowner">
  <div class="loouter " style="">
    <div class="lomiddle">
      <div class="loinner col-md-8 col-sm-8 col-lg-8  col-center nopadding">
        <div class="lobox whitebg fulwidthm left pdg30 ">
          <div class=" msgownrclose lgraytext"><i class="flaticon-cross97"></i></div>
          <div class=" fulwidthm left  pdg20">
            <div class="detailsr_profile mgnB15 pdgB15 dobordergry fulwidthm left">
              <div class="userimageround left"><a href="#" id="userimagee"><img alt="user" src="{{ asset('images/user1.jpg') }}">
                </a></div>
              <div class="userdetailsr">
                <div class="fulwidthm mgnT15 left">
                  <a class="userdetailsh3 robotomedium  singledot graytext fontsize16" id="usernameee"></a>
                </div>
                <a class="userlocation robotoregular font-size14 lgraytext" id="usermail"></a>
                <input type="hidden" id="useridcontact" value=""/>
              </div>
            </div>
            <!-- user details ends -->
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact host ends-->
<div class="overlayrqstinfo"></div>
<!-- Footer section -->
<div class="clearfix"></div>


<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<!-- Date Range Picker -->
<script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simpledatpiker/datepiker.js') }}"></script>
<!-- Date Range Picker Ends -->
<script type="text/javascript" src="{{ asset('js/signinpopup.js') }}"></script>
<!-- animation and select -->
<script type="text/javascript" src="{{ asset('js/animate/animate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/animate/wow.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.js') }}"></script>
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
<script type="text/javascript">
  
  
  $(document).ready(function () {
    // more filter show
    
    $('.morefilterclick').click(function (e) {
      $('#advancefil').prop("disabled", true);
      $('.morefilterdiv').fadeToggle(200);
    });
    
    $('.morefiltercancel').click(function (e) {
      $('.morefilterdiv').fadeOut(200);
    });
    
    $('.morefilteraply').click(function (e) {
      $('.morefilterdiv').fadeOut(200);
    });
    
    
  });


</script>


<!-- map multiple markers -->
<style>
  #map_wrapper {
    height: 400px;
  }
  
  #map_canvas {
    width: 100%;
    height: 100%;
  }
</style>
<!--    error div -->
</body>
</html>
