<!-- login for admin -->
<?php
if (strpos($_SERVER['REQUEST_URI'], 'login') ) {
?>
<link rel="stylesheet" type="text/css" href="http://inout-realestate.demo.inoutscripts.net/admin/css/custom.css">
<link rel="stylesheet" type="text/css" href="http://inout-realestate.demo.inoutscripts.net/admin/css/bootstrap.min.css">

<style>
  
  html, body {
    width: 100%;
    height: 100%;
  }
  
  ::-webkit-input-placeholder {
    color: #fff;
  }
  
  :-moz-placeholder { /* Firefox 18- */
    color: #fff;
  }
  
  ::-moz-placeholder { /* Firefox 19+ */
    color: #fff;
  }
  
  :-ms-input-placeholder {
    color: #fff;
  }
  
  .outer {
    display: table;
    position: absolute;
    height: 100%;
    width: 100%;
  }
  
  .middle {
    display: table-cell;
    vertical-align: middle;
  }
  
  .loginboxouter {
    margin: 0px auto;
    max-width: 400px;
    padding: 0 10px;
  }
  
  .loginbox {
    background-color: rgba(255, 255, 255, 0.31);
    border: 1px solid rgba(255, 255, 255, 0.17);
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    
    overflow: hidden;
    padding: 10px 30px 30px;
    position: relative;
    
  }
  
  .form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
  }
  
  .loginboxouter .logo {
    text-align: center;
    display: block;
    margin: 10px 0 30px;
    width: 100%;
    color: #FFFFFF;
    font-size: 24px;
  }
  
  .loginboxouter .logo img {
    max-width: 100%;
  }
  
  .loginboxouter .logoc {
    color: #fff;
  }
  
  .loginbox .form-title {
    text-align: center;
    color: #fff;
    font-size: 18px;
    font-weight: 400 !important;
    text-align: center;
    
  }
  
  .loginbox a {
    color: #FFFFFF;
  }
  
  .loginbox .logininput {
    background-color: rgba(255, 255, 255, 0.45);
    border: 2px solid rgba(255, 255, 255, 0.55);
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.37);
    font-size: 14px;
    height: 50px;
    outline: none;
    width: 100%;
    transition: all .2s ease-in .0s;
    -webkit-transition: all .2s ease-in .0s;
    -moz-transition: all .2s ease-in .0s;
    padding: 0 10px;
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
    border-radius: 30px;
  }
  
  .loginbox .logininput:focus {
    border: 2px solid rgba(0, 0, 0, 0.40);
    
  }
  
  .visible-ies {
    display: none;
  }
  
  .logininbtn {
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
    border-radius: 30px;
    height: 40px;
    line-height: 40px;
    background: #f50057;
    border: none;
    outline: none;
    color: #FFFFFF;
    transition: all .2s ease-in .0s;
    -webkit-transition: all .2s ease-in .0s;
    -moz-transition: all .2s ease-in .0s;
  }
  
  .logininbtn:hover {
    background: #ff4386;
  }
</style>

<!--[if lt IE 9]>
<style>
  .outer {
    display: inline;
    top: 0;
  }
  
  .loginbody {
    background: #324772;
  }
  
  .middle {
    display: inline;
    top: 50%;
    position: relative;
  }
  
  .loginboxouter {
    top: -50%;
    position: relative;
    width: 400px;
  }
  
  .visible-ies {
    display: block;
  }
  
  .eoorlogin {
    opacity: 1;
    visibility: hidden;
  
  }
  
  .eoorlogin.show {
    visibility: visible;
  }

</style>
<![endif]-->
<!--[if lt IE 10]>
<style>
  .visible-ies {
    display: block;
    text-align: left !important;
  }

</style>
<![endif]-->

<script src="js/jquery.min.js"></script>
<div class="outer">
  <div class="middle">
    <div class="loginboxouter">
      <div class="loginbox">
        {{--<div class="logo"><img src="images/logo.png" alt="For Sale Network"></div>--}}
        <h3 class="form-title"><span class="logoc">Admin</span> Sign In</h3>
        <div class="form-horizontal">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            <div class="registerclose lgraytext"><i class="fa flaticon-cross97"></i></div>
            <div class="loginrow fulwidthm left mgnB15 text-center josfinsanbold graytext fontsize20" style="color: white !important;">Login With Your Account</div>
            @if (count($errors) > 0)
              <div class="alert alert-danger" style="max-height: 115px;overflow: hidden;">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
              <label class="formlabel fontsize13 robotoregular graytext" style="color: white !important;">Email </label> <span class=" required">*</span>
              <input name="email" id="email" type="email" id="username" class="cmnfrminput fulwidthm inputiconpdng" value="{{ old('email') }}" required autofocus
                     style="min-height: 43px;border-radius: 5px; padding: 5px;">
              <span class="loginicons"><i class="fa fa-user"></i></span>
              <div class="erorshow" id="unameerror"></div>
            </div>
            <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
              <label class="formlabel fontsize13 robotoregular graytext" style="color: white !important;">Password</label> <span class=" required">*</span>
              <input name="password" type="password" id="password" class="cmnfrminput  fulwidthm inputiconpdng" value="" required style="min-height: 43px;border-radius: 5px; padding: 5px;">
              <span class="loginicons"><i class="fa fa-lock"></i></span>
              <div class="erorshow" id="passerror"></div>
            </div>
            <div><input type="checkbox" name="remember" style="display: inline-block;max-width: 22px;margin-top: -1px;" checked> Remember Me</div>
            {{ csrf_field() }}
            <div class=" text-right loginrow fulwidthm left robotoregular fontsize14 graytext mgnB15" style="color: white !important;"> Forgot password? <a href="{{ url('/password/reset') }}" class=" lbluetext ">Click Here</a></div>
            <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
              <button class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" type="submit" style="margin-bottom: 37px;">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="parsley-errors-list eoorlogin" id="err" align="center"></div>
    </div>
  </div>
</div>
<?php }else{ ?>

<div class="loginbox">
  <div class="loouter ">
    <div class="lomiddle">
      <div class="loinner col-md-5 col-sm-6 col-lg-4 col-center nopadding">
        <div class="lobox whitebg fulwidthm left pdg30 ">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            
            <div class="registerclose lgraytext"><i class="fa flaticon-cross97"></i></div>
            <div class="loginrow fulwidthm left mgnB15 text-center josfinsanbold graytext fontsize20">Login With Your Account</div>
            @if (count($errors) > 0)
              <div class="alert alert-danger" style="max-height: 115px;overflow: hidden;">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
              <label class="formlabel fontsize13 robotoregular graytext">Email </label> <span class=" required">*</span>
              <input name="email" id="email" type="email" id="username" class="cmnfrminput fulwidthm inputiconpdng" value="{{ old('email') }}" required autofocus>
              <span class="loginicons"><i class="fa fa-user"></i></span>
              <div class="erorshow" id="unameerror"></div>
            </div>
            <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
              <label class="formlabel fontsize13 robotoregular graytext">Password</label> <span class=" required">*</span>
              <input name="password" type="password" id="password" class="cmnfrminput  fulwidthm inputiconpdng" value="" required>
              <span class="loginicons"><i class="fa fa-lock"></i></span>
              <div class="erorshow" id="passerror"></div>
            </div>
            <div><input type="checkbox" name="remember" style="display: inline-block;max-width: 22px;margin-top: -1px;" checked> Remember Me</div>
            {{ csrf_field() }}
            <div class=" text-right loginrow fulwidthm left robotoregular fontsize14 graytext mgnB15"> Forgot password? <a href="{{ url('/password/reset') }}" class=" lbluetext ">Click Here</a></div>
            <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
              <button class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" type="submit" style="margin-bottom: 37px;">Submit</button>
              <a href="#" class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" style="">Signup with facebook</a>
              <a href="#" class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" style="background-color: #e04a39">Signup with googlePlus</a>
              <p class="hr"></p>
              <span class="orcls">OR</span>
            </div>
            <div class="loginrow fulwidthm left font-size14 graytext mgnB15">Don't have an account? <a class="lbluetext signupclick">Sign Up</a></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>