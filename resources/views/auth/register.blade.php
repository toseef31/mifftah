<div class="registerbox">
  <div class="loouter ">
    <div class="lomiddle">
      <div class="loinner ">
        <div class="registerboxin whitebg fulwidthm left  ">
          <div class="registerclose lgraytext"><i class="fa flaticon-cross97"></i></div>
          <div class="loginrow fulwidthm left mgnB15 text-center josfinsanbold graytext fontsize20" id="msg1"> Register Now
            <p class="robotoregular fontsize13 lgraytext">Please Fill Out the Required Fields.</p>
          </div>
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div id="regs">
              <div class="loginrow fulwidthm left josfinsanbold graytext ">
                @if (count($errors) > 0)
                  <div class="alert alert-danger" style="max-height: 115px;overflow: hidden;">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
                  <label class="formlabel fontsize13 robotoregular graytext">First Name <span class=" required">*</span> </label>
                  <input id="name" type="text" class="cmnfrminput fulwidthm " name="name" value="{{ old('name') }}" required autofocus>
                  <div class="erorshow" id="fnameerror"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
                  <label class="formlabel fontsize13 robotoregular graytext">Last Name <span class=" required">*</span> </label>
                  <input id="lname" type="text" class="cmnfrminput fulwidthm " name="lname" value="{{ old('name') }}" required>
                  <div class="erorshow" id="lnameerror"></div>
                </div>
              </div>
              <div class="loginrow fulwidthm left josfinsanbold graytext ">
                <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
                  <label class="formlabel fontsize13 robotoregular graytext">Email <span class=" required">*</span> </label>
                  <input id="email" type="email" class="cmnfrminput fulwidthm " name="email" value="{{ old('email') }}" required>
                  <div class="erorshow" id="emailerror"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
                  <label class="formlabel fontsize13 robotoregular graytext">Password <span class=" required">*</span> </label>
                  <input id="password" type="password" class="cmnfrminput fulwidthm " name="password" required>
                  <div class="erorshow" id="passwrderror"></div>
                </div>
              </div>
              <div class="loginrow fulwidthm left josfinsanbold graytext ">
                <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
                  <label class="formlabel fontsize13 robotoregular graytext">Confirm Password <span class=" required">*</span> </label>
                  <input id="password-confirm" type="password" class="cmnfrminput fulwidthm" name="password_confirmation" required>
                  <div class="erorshow" id="cpassworderror"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
                  <label class="formlabel fontsize13 robotoregular graytext">Are you an Agent/Broker?</label>
                  <select id="agentstatus" class="formselect" style="width:100%">
                    <option value="001">Booker</option>
                    <option value="002">Agent</option>
                  </select>
                  <div class="erorshow"></div>
                </div>
              </div>
              <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
                <div class="col-lg-12 col-md-12 col-sm-12 mgnB15">
                  <button class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" type="submit" style="margin-bottom: 37px;">Register</button>
                  <a href="#" class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" style="">Signup with facebook</a>
                  <a href="#" class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" style="background-color: #e04a39">Signup with googlePlus</a>
                  <p class="hr"></p>
                  <span class="orcls">OR</span>
                </div>
              </div>
              <div class="loginrow fulwidthm left josfinsanregular fontsize16 graytext mgnB15">
                <div class="col-lg-12 col-md-12 col-sm-12 mgnB15"> Already a For Sale Network member? <a class=" lbluetext signinclick">Log In</a></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>