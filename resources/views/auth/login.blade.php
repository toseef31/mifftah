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
            <div><input type="checkbox" name="remember" style="display: inline-block;max-width: 22px;margin-top: -1px;"> Remember Me</div>
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

