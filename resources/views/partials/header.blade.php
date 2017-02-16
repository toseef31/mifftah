<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inout RealEstate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Comprar, vender, alugar, trocar ou dar.">
  <meta name="description" content="Desapegue a sua Sogra !!!! rsrsrs">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="{{ str_replace('/ar', '' ,asset('css/jquery.ui.autocomplete.css')) }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate/animate.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/superslides.css') }}">
  <link rel="stylesheet" href="{{ asset('css/simpledatepicker/datepicker.css') }}" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/rangeslider/ion.rangeSlider.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/rangeslider/ion.rangeSlider.skinFlat.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery_ui.js') }}"></script>
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="css/sangaslider/ie8.css" type="text/css">
  <script src="js/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    html, body {
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
    
    a.signinclickmain.robotomedium:hover {
      color: #fff;
      text-decoration: none;
    }
    
    input.inersearchinput {
      border: none;
      height: 29px;
    }
  </style>
  <script type="text/javascript">
    
    $(document).ready(function (e) {
      $('#lpassword').keypress(function (e) {
        var key = e.which;
        if (key == 13)  // the enter key code
        {
          login();
        }
      });
      
      
      var indexulmenu = $('.indexul').html();
      
      $('.re_ul').html(indexulmenu);
      
      $('.mainmenuclick').click(function (e) {
        $('.slideingmenu').addClass("active");
        $('.slidemenuoverlay').addClass("active");
      });
      $('.closesilde').click(function (e) {
        $('.slideingmenu').removeClass("active");
        $('.slidemenuoverlay').removeClass("active");
      });
      
      $('.slidemenuoverlay').click(function (e) {
        $('.slideingmenu').removeClass("active");
        $(this).removeClass("active");
      });
      
      $('.slideingmenu  .myacounthover').click(function (e) {
        $(this).children('.myacountdropdown').slideToggle(200);
      });
      
      // sliding sub menu codeeee
      
      
      $('.slidemneu_a').click(function (e) {
        $(this).siblings('.slidingsubmenu').slideToggle(200);
      });
      
      
    });
  
  </script>
</head>

<body>
<!--  Login Starts -->

<div class="loginwrperoverlay"></div>
<?php if(!Auth::check()){ ?>
@include('auth.login')
@include('auth.register')
<?php } ?>

<!-- Login ends -->
<!-- Main MEnu Ends -->
@include('partials.sidebar')
<div class="slidemenuoverlay"></div>


<!-- Main Right menu ends -->

<div class="innerheader dblue_bg">
  <div class="mainindexcontainer">
    <div class="indexlogo pull-left">
      <a href="{{ url('/') }}" class="fulwidthm left inerlogo"><img src="{{ asset('userdata/logo/logo.png') }}" alt="For Sale Network Logo" title="For Sale Network">
        <span class="backhome"><i class="flaticon-home153"></i></span>
      </a>
    </div>
    <div class="inersearchwrp whitebg left ">
      <div class="searchinerbar_in">
        <form class="" role="form" method="post" action="{{ url('/search') }}">
          {{  csrf_field() }}
          <input class="inersearchinput" type="text" Placeholder="Search by City or Region" value="" name="citysearch">
          <button class="searchbuttininer dblue_bg" id="inser"><i class="flaticon-magnifying-glass34"></i></button>
        </form>
      </div>
    </div>
    <div class="indexright rightmenu pull-right">
      <ul class="indexul left">
        <?php if(!Auth::check()){?>
        <li class="indexli left"><a class="signinclickmain robotomedium">Sign In</a></li>
        <li class="indexli left"><a class="signupclickmain robotomedium">Sign Up</a></li>
        <?php }else{?>
        <li class="indexli left myacount robotomedium font-size14 whitetext myacounthover">
          <div class="acountpic">
            <img src="<?= (Auth::check()) ? asset('uploads/' . Auth::user()->img) : ''; ?>" alt="userimage" style="min-height: 31px;">
          </div>
          <div class="acoutspan left">
            <div class="acountname">
              <a class="signinclickmain robotomedium" href="{{ url('/user/dashboard') }}"><?= (Auth::check()) ? Auth::user()->name : ''; ?></a>
            </div>
            <i class="flaticon-arrow486"></i>
          </div>
          
          <div class="myacountdropdown " style="display: none; opacity: 1;"><span class="droptip"><i class="fa flaticon-drop27"></i></span>
            <ul class="myacountdropdownul whitebg pdg15 text-left">
              <li class="myacountdropdownli mgnB10 fulwidthm"><a href="{{ url('/user/dashboard') }}" class="myacountdropdown_a graytext fontsize13">Dashboard</a></li>
              <li class="myacountdropdownli mgnB10 fulwidthm"><a href="{{ url('/user/newlist') }}" class="myacountdropdown_a graytext fontsize13">Create New Listing</a></li>
              <li class="myacountdropdownli mgnB10 fulwidthm"><a href="{{ url('/user/managelist') }}" class="myacountdropdown_a graytext fontsize13">Manage My Listings</a></li>
              <li class="myacountdropdownli mgnB10 fulwidthm"><a href="{{ url('/user/transactions') }}" class="myacountdropdown_a graytext fontsize13">My Transactions</a></li>
              <li class="myacountdropdownli mgnB10 fulwidthm"><a href="{{ url('/help/support') }}" class="myacountdropdown_a graytext fontsize13">Need Help ?</a></li>
              <li class="myacountdropdownli mgnB10 fulwidthm">
                <a onclick="logout()" class="myacountdropdown_a  btn greennbg whitetext font-size14" href="{{ url('/logout') }}">Logout</a>
              </li>
              <?php }?>
            </ul>
          </div>
        </li>
      
      </ul>
      <div class="menuouter left">
        <div class="mainmenuclick">
          <div class="burgermenu left">
            <span class="burgerspan"></span>
            <span class="burgerspan burgrmidle"></span>
            <span class="burgerspan"></span>
          </div>
          <span class="menunaem left whitetext robotoregular font-size14">Menu</span>
        </div>
      </div>
    </div>
  <!--    <div class="indexright rightmenu pull-right">
      <ul class="indexul left">
        
        <li class="indexli left myacount robotomedium font-size14 whitetext myacounthover">
        <?php if(!Auth::check()){?>
    <li class="indexli left"><a class="signinclickmain robotomedium">Sign In</a></li>
    <li class="indexli left"><a class="signupclickmain robotomedium">Sign Up</a></li>
    <?php }else{?>
    <li class="indexli left">
     <div class="acountpic"><img src="userdata/Profile/1/girl-1252995_1920.png" alt="userimage"></div>
     <a class="signinclickmain robotomedium" href="{{ url('/user/dashboard') }}"><?= (Auth::check()) ? Auth::user()->name : ''; ?> / Dashboard</a>
        <li class="indexli left"><a class="signinclickmain robotomedium" href="{{ url('logout') }}">Logout</a>
          <div class="myacountdropdown " style="display: none; opacity: 1;"><span class="droptip"><i class="fa flaticon-drop27"></i></span>
            <ul class="myacountdropdownul whitebg pdg15 text-left">
              <li class="myacountdropdownli mgnB10 fulwidthm">
                <a href="{{ url('/user/dashboard') }}" class="myacountdropdown_a graytext fontsize13">Dashboard</a>
              </li>
              <li class="myacountdropdownli mgnB10 fulwidthm">
                <a href="{{ url('/user/newlist') }}" class="myacountdropdown_a graytext fontsize13">Create New Listing</a>
              </li>
              <li class="myacountdropdownli mgnB10 fulwidthm">
                <a href="{{ url('/user/managelist') }}" class="myacountdropdown_a graytext fontsize13">Manage My Listings</a>
              </li>
              <li class="myacountdropdownli mgnB10 fulwidthm">
                <a href="{{ url('/user/transactions') }}" class="myacountdropdown_a graytext fontsize13">My Transactions</a>
              </li>
              <li class="myacountdropdownli mgnB10 fulwidthm">
                <a href="{{ url('/help/support') }}" class="myacountdropdown_a graytext fontsize13">Need Help ?</a>
              </li>
              
              <li class="myacountdropdownli mgnB10 fulwidthm"><a onclick="logout()" class="myacountdropdown_a  btn greennbg whitetext font-size14">Logout</a></li>
            </ul>
          </div>
        </li>
        <?php  }?>
    </ul>
    <div class="menuouter left">
      <div class="mainmenuclick">
        <div class="burgermenu left">
          <span class="burgerspan"></span>
          <span class="burgerspan burgrmidle"></span>
          <span class="burgerspan"></span>
        </div>
        <span class="menunaem left whitetext robotoregular font-size14">Menu</span>
      </div>
    </div>
  </div>-->
  </div>
</div>
     