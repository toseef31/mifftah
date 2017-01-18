
<div class="loginwrperoverlay"></div>
<div class="loginbox">
 <div class="loouter " >
  <div class="lomiddle">
   <div class="loinner col-md-5 col-sm-6 col-lg-4 col-center nopadding">
    <div class="lobox whitebg fulwidthm left pdg30 ">
     <div class="registerclose lgraytext"><i class="fa flaticon-cross97"></i></div>
     <div class="loginrow fulwidthm left mgnB15 text-center josfinsanbold graytext fontsize20">Login With Your Account </div>
     <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
      <label class="formlabel fontsize13 robotoregular graytext">Email </label> <span class=" required">*</span>
      <input type="email" id="username"  class="cmnfrminput fulwidthm inputiconpdng" value="testaccount1@xyz.com">
      <span class="loginicons"><i class="fa fa-user"></i></span>

      <div class="erorshow" id="unameerror"></div>
     </div>
     <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
      <label class="formlabel fontsize13 robotoregular graytext">Password</label> <span class=" required">*</span>
      <input type="password" id="lpassword" class="cmnfrminput  fulwidthm inputiconpdng" value="123456">
      <span class="loginicons"><i class="fa fa-lock"></i></span>
      <div class="erorshow" id="passerror"></div>
     </div>
     <div class=" text-right loginrow fulwidthm left robotoregular fontsize14 graytext mgnB15"> Forgot password?  <a href="forgotpassword/forgotpassword.html"  class=" lbluetext ">Click Here</a> </div>
     <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
      <button class=" btn lblue_bg whitetext fulwidthm font-size14 robotomedium" onclick="login();">Submit</button>
     </div>
     <div class="loginrow fulwidthm left font-size14 graytext mgnB15">Don't have an account?   <a class="lbluetext signupclick">Sign Up</a> </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="registerbox">
 <div class="loouter " >
  <div class="lomiddle">
   <div class="loinner ">
    <div class="registerboxin whitebg fulwidthm left  ">
     <div class="registerclose lgraytext"><i class="fa flaticon-cross97"></i></div>
     <div class="loginrow fulwidthm left mgnB15 text-center josfinsanbold graytext fontsize20" id="msg1"> Register Now             <p class="robotoregular fontsize13 lgraytext">Please Fill Out the Required Fields.</p>
     </div>
     <div id="regs">
      <div class="loginrow fulwidthm left josfinsanbold graytext ">
       <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
        <label class="formlabel fontsize13 robotoregular graytext">First Name  <span class=" required">*</span></label>
        <input type="text" id="fname" class="cmnfrminput fulwidthm ">
        <div class="erorshow" id="fnameerror"> </div>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
        <label class="formlabel fontsize13 robotoregular graytext">Last Name  <span class=" required">*</span></label>
        <input type="text" id="lname"  class="cmnfrminput fulwidthm ">
        <div class="erorshow" id="lnameerror"></div>
       </div>
      </div>
      <div class="loginrow fulwidthm left josfinsanbold graytext ">
       <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
        <label class="formlabel fontsize13 robotoregular graytext">Email  <span class=" required">*</span></label>
        <input type="email" id="emailuser" class="cmnfrminput fulwidthm ">
        <div class="erorshow" id="emailerror"></div>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
        <label class="formlabel fontsize13 robotoregular graytext">Password <span class=" required">*</span></label>
        <input type="password"  id="password" class="cmnfrminput fulwidthm ">
        <div class="erorshow" id="passwrderror"></div>
       </div>
      </div>
      <div class="loginrow fulwidthm left josfinsanbold graytext ">

       <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
        <label class="formlabel fontsize13 robotoregular graytext">Confirm Password  <span class=" required">*</span></label>
        <input type="password" id="cpassword" class="cmnfrminput fulwidthm ">
        <div class="erorshow" id="cpassworderror"></div>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
        <label class="formlabel fontsize13 robotoregular graytext">Are you an Agent/Broker?</label>
        <select id="agentstatus" class="formselect" style="width:100%">
         <option value="1">Yes </option>
         <option value="0">No </option>

        </select>
        <div class="erorshow"></div>
       </div>
      </div>
      <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
       <div class="col-lg-12 col-md-12 col-sm-12 mgnB15">
        <button class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" onclick="register()">Submit</button>
       </div>
      </div>
      <div class="loginrow fulwidthm left josfinsanregular fontsize16 graytext mgnB15">
       <div class="col-lg-12 col-md-12 col-sm-12 mgnB15">
        Already a  For Sale Network member? <a class=" lbluetext signinclick">Log In</a> </div> </div></div>
    </div>
   </div>
  </div>
 </div>
</div>

<!-- Login ends -->

<!-- Main MEnu Ends -->
<div class="slideingmenu dblue_bg">
 <div class="slideingmenu_in">
  <div class="closesilde">Close <i class="flaticon-cross97 right"></i></div>
  <ul class="slideingmenu_ul">
   <li class="slidingmenuli"> <a class="slidemneu_a" href="#">Search Homes</a> </li>
   <li class="slidingmenuli"> <a class="slidemneu_a" href="agents/agentslist.html">Agent Finder</a> </li>
   <li class="slidingmenuli"> <a class="slidemneu_a" href="help/mortgagecalculator.html">Mortgage Calculator</a> </li>
   <li class="slidingmenuli"> <a class="slidemneu_a" href="help/affordcalculator.html">Affordability Calculator</a> </li>
   <li class="slidingmenuli"> <a class="slidemneu_a" href="help/rentorbuycalculator.html">Rent Vs Buy</a> </li>
   <li class="slidingmenuli"> <a class="slidemneu_a" href="help/howitworks.html">How to Sell on For Sale Network</a> </li>
   <li class="slidingmenuli"> <a class="slidemneu_a" href="help/support.html">Support Desk</a> </li>
  </ul>

  <div class="responsivemenu fulwidthm left">
   <ul class="re_ul left fulwidthm left">

   </ul>
  </div>
 </div>

</div>
<div class="slidemenuoverlay"></div>


<!-- Main Right menu ends -->

<div class="indexheaderwrper">
 <div class="mainindexcontainer">
  <div class="indexlogo pull-left"> <a href="#" class="fulwidthm left"><img src="userdata/logo/logo.png" alt="For Sale Network Logo" title="For Sale Network"></a></div>
  <div class="indexright rightmenu pull-right">
   <ul class="indexul left">
    <li class="indexli left" ><a class="signinclickmain robotomedium">Log In</a></li>
    <li class="indexli left" ><a class="signupclickmain robotomedium">Sign Up</a></li>

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

 </div>
</div>

<!-- Header Ends --->
