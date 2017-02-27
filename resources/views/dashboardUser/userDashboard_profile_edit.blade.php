@extends('dashboardUser.dash_master_layout')
@section('content')
  <!--  --><?php // echo'<pre>';print_r( $data );echo'</pre>'; ?>
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <form class="form-horizontal form-label-left formstylign formlong" id="data" enctype="multipart/form-data" method="post" action="{{ url('/user/update/profile') }}">
      {{ csrf_field() }}
      <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
        <h4 class="robotolight fontsize24 dbluetext mgnB30"><?= $lang[725][$current] ?></h4>
        
        <div class="  formprofile fulwidthm left">
          <div class="row">
            <div class="col-sm-6 profilefrmwrp mgnB20">
              <label class="robotomedium font-size14 graytext mgnB10"> <?= $lang[325][$current] ?></label>
              <input id="name" name="name" class="commoninput  commoninputborder pdg05 fulwidthm" type="text" value="<?= $data->name ?>" placeholder="First Name">
            </div>
            <div class="col-sm-6 profilefrmwrp mgnB20">
              <label class="robotomedium font-size14 graytext mgnB10"> <?= $lang[326][$current] ?></label>
              <input id="lname" name="lname" class="commoninput  commoninputborder pdg05 fulwidthm" type="text" value="<?= $data->lname ?>" placeholder="Last Name"></div>
          </div>
          <div class="row">
            <div class="col-sm-6 profilefrmwrp  mgnB20">
              <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[728][$current] ?> </label>
              <input id="email" name="email" class="commoninput  commoninputborder pdg05 fulwidthm" type="email" value="<?= $data->email ?>" placeholder="Email Address"></div>
            <!-- croper section strats -->
            <div class="col-sm-6 profilefrmwrp  mgnB20">
              <!-- image cropping -->
              <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[637][$current] ?> </label>
              
              <div class="clearfix"></div>
              <div class="upbtnwithprv">
                <div class="previwuserpic">
                  <?php if(!empty($data->img) || $data->img != null ){ ?>
                  <img src="{{ asset('uploads/'. $data->img) }}" alt="Image" title="Image">
                  <?php }else{ ?>
                  <img src="{{ asset('userdata/Profile/1/girl-1252995_1920.png') }}" alt="Steve James" title="Steve James">
                  <?php }  ?>
                </div>
                <div class="btnupgp" style="padding-top: 25px;">
                  {{--<div class="uploadimbtn mgnT15 btn btn-primary "><span class="fa fa-upload"></span> <?= $lang[730][$current] ?></div>--}}
                  <input class="" type="file" name="img" id="img" accept="images/*"/>
                  <div class="clearfix"></div>
                  <span class="fontsize12 graytext"><?= $lang[735][$current] ?> </span></div>
              </div>
            </div>
            <!-- croper ends -->
          </div>
          <div class="row">
            <div class="col-sm-6 profilefrmwrp ">
              <input class="btn greennbg pull-left" type="submit" value="Save Details" id="useronly" name="useronly"></div>
          </div>
        </div>
        <!-- listed section ends -->
      </section>
    </form>
    <!-- simple form -->
    <form class="" role="form" method="post" action="{{ url('user/update/info') }}">
      <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
        <h4 class="robotolight fontsize24 dbluetext mgnB30">
          <?= $lang[724][$current] ?></h4>
        <?php $listing = $listings->toArray(); ?>
        <div class="fulwidthm left">
          <div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[736][$current] ?> </label>
                <input id="bname" name="bname" class="commoninput  commoninputborder pdg05 fulwidthm" type="text" value="<?= (isset($listing[0]['bname'])) ? $listing[0]['bname'] : '';  ?>" placeholder="Business Name"></div>
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[737][$current] ?></label>
                <input id="baddress" name="baddress" type="text" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['baddress'])) ? $listing[0]['baddress'] : '';  ?>" placeholder="Business Address"></div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[738][$current] ?></label>
                <input id="phone" name="phone" type="text" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['phone'])) ? $listing[0]['phone'] : '';  ?>" placeholder="Phone Number"></div>
              <div class="col-sm-6 profilefrmwrp mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[739][$current] ?></label>
                <input id="pincode" name="pincode" type="text" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['pincode'])) ? $listing[0]['pincode'] : '';  ?>" placeholder="Pin Code"></div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[743][$current] ?> <span class="lgraytext fontsize12">(Optional)</span></label>
                <input id="website" name="website" type="url" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['website'])) ? $listing[0]['website'] : '';  ?>" placeholder="Your Website"></div>
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[60][$current] ?><span class="lgraytext fontsize12">(Optional)</span>
                </label>
                <input id="blog" name="blog" type="url" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['blog'])) ? $listing[0]['blog'] : '';  ?>" placeholder="Blog"></div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[241][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
                </label> <span><img id="xlcc" src="{{ asset('userdata/Agencylogo/2/361447.jpg') }}" width="30px" height="30px"></span>
                <input type="file" name="logoimage" id="logoimage"></div>
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[247][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
                </label>
                <input id="language" name="language" type="text" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['language'])) ? $listing[0]['language'] : '';  ?>" placeholder="Languages Known"></div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[744][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
                </label>
                <input id="link_youtube" name="link_youtube" type="url" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['link_youtube'])) ? $listing[0]['link_youtube'] : '';  ?>" placeholder="Youtube URL"></div>
              <div class="col-sm-6 profilefrmwrp mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[746][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
                </label>
                <input id="link_facebook" name="link_facebook" type="url" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['link_facebook'])) ? $listing[0]['link_facebook'] : '';  ?>" placeholder="Facebook Link "></div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[747][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
                </label>
                <input id="link_twitter" name="link_twitter" type="url" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['link_gplus'])) ? $listing[0]['link_gplus'] : '';  ?>" placeholder="Twitter Link"></div>
              <div class="col-sm-6 profilefrmwrp mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[748][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
                </label>
                <input id="link_gplus" name="link_gplus" type="url" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['link_gplus'])) ? $listing[0]['link_gplus'] : '';  ?>" placeholder="Google+ Link"></div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[750][$current] ?></label>
                <textarea id="aboutme" name="aboutme" class="commoninput whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="About Me"><?= (isset($listing[0]['aboutme'])) ? $listing[0]['aboutme'] : '';  ?></textarea>
              </div>
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[752][$current] ?> </label>
                <div class="adcityinp fulwidthm left">
                  <input id="bulocation" name="bulocation" type="text" class="commoninput  commoninputborder pdg05 fulwidthm" placeholder="Select a City/Region of your Business" autocomplete="off">
                  <input id="addcity" name="addcity" type="button" value="<?= (isset($listing[0]['bulocation'])) ? $listing[0]['bulocation'] : '';  ?>" class="dblue_bg adcitynbtn"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="fulwidthm left">
          <div class="row">
            <div class="col-sm-6 profilefrmwrp  mgnB20">
              <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[740][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
              </label>
              <input id="license" name="license" type="text" class="commoninput  commoninputborder pdg05 fulwidthm" value="<?= (isset($listing[0]['license'])) ? $listing[0]['license'] : '';  ?>" placeholder="Agent License">
              <label class="robotomedium font-size14 graytext mgnT15 mgnB10"><?= $lang[741][$current] ?> <span class="lgraytext fontsize12">(Optional)</span>
              </label>
              <textarea id="license_description" name="license_description" class="commoninput whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="License Description"><?= (isset($listing[0]['license_description'])) ? $listing[0]['license_description'] : '';  ?></textarea>
            </div>
          </div>
          <div class=" fulwidthm left">
            <input type="submit" id="profilesave" class="btn greennbg pull-left" value="Save Details"></div>
        </div>
      </section>
      {{ csrf_field() }}
    </form>
  </div>
@endsection