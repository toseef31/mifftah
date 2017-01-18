@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="detailsfulleft  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <div class="agentdetialshead mgnB15 fulwidthm left">
        <div class="agentdetialsimg" title="Steve James">
          <img src="{{ asset('userdata/Profile/1/girl-1252995_1920.png')}}" alt="Steve James">
        </div>
        <?php // dd($data['profile'][0]['bname']); ?>
        <div class="agentdetailsright">
          <div class="agentdetailsright_in">
            <div class="agentdetialsRtop fulwidthm left">
              <div class="agentnamenc left">
                <h4 class="agentname fontsize18 robotomedium"><?php ?></h4>
                <p class="midlep graytext fontsize12 fulwidthm textdot"><i class="fa fa-building"></i>
                  <?= (isset($data['info'][0]['bname']) ? $data['info'][0]['bname'] : ''); ?>
                </p>
              </div>
              <div class="agentlogn right">
                <!-- Logo <br> --><img src="{{ asset('userdata/Agencylogo/2/361447.jpg')}}" title="Logo" alt="Logo">
              </div>
            </div>
            <!-- agentdetialsRtop ends -->
            <div class="agentDRmidle mgnT15  fulwidthm left">
              <h6 class="agentphoneD lbluetext fontsize16"><i class="fa fa-phone"></i>
                <?= (isset($data['info'][0]['phone']) ? $data['info'][0]['phone'] : ''); ?>
              </h6>
              <p class="agentplace"><i class="fa fa-location-arrow"></i>
                <?= (isset($data['info'][0]['baddress']) ? $data['info'][0]['baddress'] : ''); ?>
              </p>
            </div>
            <!-- agentDRmidle ends -->
            <div class="agntDbottom mgnT15 fulwidthm left">
              <div class="agentDRBleft left">
                <div class="brkerRbottom fontsize12">
                  <span class="brkRsalec lgraytext"> 0 Recent Sales</span>&nbsp;|&nbsp;
                  <span class="brklistStatus lbluetext"> 0 Lead Listings </span>&nbsp;|&nbsp;
                  <span class="brklistStatus lbluetext"> 0 Active Listings </span>
                </div>
                <div class="clearfix"></div>
                <div class="brokerratingd fontsize16 mgnT05">
                  <i class="fa fa-star yellowtext"></i>
                  <i class="fa fa-star yellowtext"></i>
                  <i class="fa fa-star yellowtext"></i>
                  <i class="fa fa-star yellowtext"></i>
                  <i class="fa fa-star lgraytext"></i>
                  <span class=" fontsize12"> (1) </span>
                </div>
              </div>
              <div class="agentDRBright right">
                  <span class="left">
                  <img alt="" src="{{asset('images/premiumagnticon.png')}}">
                  </span>
                <span class=" mgnS05 premimumagntname left whitetext lblue_bg fontsize12 pdg05">Premium Agent</span>
              </div>
            </div>
            <!-- agntDbottom ends -->
          </div>
        </div>
        <!-- agentdetailsright ends -->
      </div>
      <div class="clearfix"></div>
      <div class="ca_tb_btnwrp">
        <div class="cal_tab_btn cal_tab_btn4 active">
          About
        </div>
        <div class="cal_tab_btn cal_tab_btn4">
          Reviews
        </div>
        <div class="cal_tab_btn cal_tab_btn4">
          Lead Listings
        </div>
        <div class="cal_tab_btn cal_tab_btn4">
          Listings
        </div>
      </div>
      <div class="cal_tabwrp fulwidthm left">
        <!-- Tab3 ends -->
        <div class="cal_tabbox active">
          <div class="cal_tabbox_in pdgTB30">
            <div class="agentabout mgnB20 fulwidthm left">
              <div class="fulwidthm left agntdabwrp pdgB15 mgnB15">
                <h4 class="agntabtsubhead robotomedium fontsize18 mgnB20"> <?= (isset($data['profile'][0]['name']) ? strtoupper($data['profile'][0]['name']) : ''); ?>'s Bio</h4>
                <p class="font-size14 lgraytext paragrphtext ">
                  <?= (isset($data['info'][0]['aboutme']) ? $data['info'][0]['aboutme'] : ''); ?>
                </p>
                <ul class="adlistingul font-size14 graytext">
                  <li class="adlistingli">Languages Known - French,English,Spanish</li>
                </ul>
              </div>
              <div class="fulwidthm left agntdabwrp pdgB15 mgnB15">
                <h4 class="agntabtsubhead robotomedium fontsize18 mgnB20">Service Areas</h4>
                <ul class="adlistingul font-size14 graytext">
                  <li class="adlistingli">Orlando, FL</li>
                  <li class="adlistingli">Atlanta, GA</li>
                  <li class="adlistingli">Indianapolis, IN</li>
                  <li class="adlistingli">New York, NY</li>
                  <li class="adlistingli">Brooklyn, MS</li>
                </ul>
              </div>
              <div class="fulwidthm left agntdabwrp pdgB15 mgnB15">
                <h4 class="agntabtsubhead robotomedium fontsize18 mgnB20">Other Informations</h4>
                <ul class="adlistingul font-size14 graytext">
                  <li class="adlistingli">Website -
                    <a href="<?= (isset($data['info'][0]['website']) ? $data['info'][0]['website'] : ''); ?>"><?= (isset($data['info'][0]['website']) ? $data['info'][0]['website'] : ''); ?></a>
                  </li>
                  <li class="adlistingli">
                    Youtube - <a href="<?= (isset($data['info'][0]['link_youtube']) ? $data['info'][0]['link_youtube'] : ''); ?>"><?= (isset($data['info'][0]['link_youtube']) ? $data['info'][0]['link_youtube'] : ''); ?></a>
                  </li>
                  <li class="adlistingli">
                    Blog - <a href="<?= (isset($data['info'][0]['blog']) ? $data['info'][0]['blog'] : ''); ?>"><?= (isset($data['info'][0]['blog']) ? $data['info'][0]['blog'] : ''); ?></a>
                  </li>
                  <li class="adlistingli">
                    Facebook - <a href="<?= (isset($data['info'][0]['link_facebook']) ? $data['info'][0]['link_facebook'] : ''); ?>"><?= (isset($data['info'][0]['link_facebook']) ? $data['info'][0]['link_facebook'] : ''); ?></a>
                  </li>
                  <li class="adlistingli">
                    Twitter - <a href="<?= (isset($data['info'][0]['link_twitter']) ? $data['info'][0]['link_twitter'] : ''); ?>"><?= (isset($data['info'][0]['link_twitter']) ? $data['info'][0]['link_twitter'] : ''); ?></a>
                  </li>
                  <li class="adlistingli">
                    Google+ - <a href="<?= (isset($data['info'][0]['link_gplus']) ? $data['info'][0]['link_gplus'] : ''); ?>"><?= (isset($data['info'][0]['link_gplus']) ? $data['info'][0]['link_gplus'] : ''); ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="cal_tabbox ">
          <div class="cal_tabbox_in pdgTB30">
            <div class="reviewwrp fulwidthm left">
              <h4 class="reviewhead fontsize24 dbluetext robotoregular">Reviews (1)</h4>
              <ul class="reviewul">
                <li class="reviewli mgnB15 pdgB10 fulwidthm left">
                  <div class="reviewuserimg">
                    <img src="{{ asset('userdata/Profile/2/person-801823_960_720.png')}}" alt="User">
                  </div>
                  <div class="reviewmsg">
                    <h4 class="reusername robotoregular graytext fontsize16">Zera Elezabeth</h4>
                    <p class=" fontsize13 paragrphtext robotoregular lgraytext"> Really Helpful</p>
                    <div class="clearfix"></div>
                    <div class="reviewbottom fulwidthm mgnT05">
                      <div class="reviewBleft left">
                        <div class=" font-size14 ">
                          <i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star lgraytext"></i>
                        </div>
                      </div>
                      <div class="reviewBright right">
                        <span class="right redate fontsize12">12/11/15 </span>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--  tab2 ends -->
        <div class="cal_tabbox ">
          <div class="cal_tabbox_in pdgTB30">
            <div class="prolistingwrp fulwidthm left">
              <h4 class="reviewhead fontsize24 dbluetext robotoregular">
                Listings Handled by Agent (4)
              </h4>
              <div class="fulwidthm left">
                <div class="col-xs-12 resultlisting mgnB20 nopadding">
                  <div class="whitebg fulwidthm resultlisting_in left lgray_border" title="Opp.Park,TigerTown, Las Vegas, NV 2444">
                    <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2">
                      <div class="resultn_image" style="background:{{ URL::asset('userdata/List/Thumb/0/5/home-794367_960_720.jpg') }} no-repeat">
                        <div class="featuredim"><img src="{{ asset('images/featured.png')}}" title="Featured Property"></div>
                        <div class="photocount">1 Photos</div>
                      </div>
                    </div>
                    <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg  ">
                      <div class="resulthead">
                        <a class="fontsize18 robotomedium graytext resultname" href="#" title="Opp.Park,TigerTown, Las Vegas, NV 2444">Opp.Park,TigerTown, Las Vegas, NV 2444</a>
                        <p class="postdate lgraytext robotomedium fontsize12">Open: 01/13/2016-12:00 pm to 1:00 pm</p>
                      </div>
                      <div class="resultmiddle mgnTB10 fulwidthm left">
                        <div class="priceresult left robotoregular fontsize24">
                          <i class="flaticon-down126 greentext "></i>
                          <span class="pricespan lbluetext" title="$ 3,500,000">$ 3,500,000</span>
                        </div>
                        <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="Home Size : 2,000 Sq.ft">
                          2,000 Sq.ft
                        </div>
                      </div>
                      <div class="resultbottom fulwidthm left  pdgT10">
                        <div class="n_botmrd left">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">8</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">2.5</span></div>
                        </div>
                        <div class="right">
                          <span id="wishlistic_5" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 resultlisting mgnB20 nopadding">
                  <div class="whitebg fulwidthm resultlisting_in left lgray_border" title="Indira Nagar,Nagpoor, Miami, FL 7568">
                    <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2">
                      <div class="resultn_image" style="background: {{ URL::asset('userdata/List/Thumb/0/7/house-164909_960_720.jpg')}} no-repeat">
                        <div class="featuredim"><img src="{{ asset('images/featured.png')}}" title="Featured Property"></div>
                        <div class="photocount">2 Photos</div>
                      </div>
                    </div>
                    <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg  ">
                      <div class="resulthead">
                        <a class="fontsize18 robotomedium graytext resultname" href="#" title="Indira Nagar,Nagpoor, Miami, FL 7568">Indira Nagar,Nagpoor, Miami, FL 7568</a>
                        <p class="postdate lgraytext robotomedium fontsize12">Open: 01/15/2016-8:00 am to 11:00 am,01/01/2016-11:00 am to 3:00 pm</p>
                      </div>
                      <div class="resultmiddle mgnTB10 fulwidthm left">
                        <div class="priceresult left robotoregular fontsize24">
                          <i class="flaticon-down126 greentext "></i>
                          <span class="pricespan lbluetext" title="$ 4,582,000">$ 4,582,000</span>
                        </div>
                        <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="Home Size : 2,000 Sq.ft">
                          2,000 Sq.ft
                        </div>
                      </div>
                      <div class="resultbottom fulwidthm left  pdgT10">
                        <div class="n_botmrd left">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">9</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
                        </div>
                        <div class="right">
                          <span id="wishlistic_7" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 resultlisting mgnB20 nopadding">
                  <div class="whitebg fulwidthm resultlisting_in left lgray_border" title="234/45, New York, NY 1202223">
                    <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2">
                      <div class="resultn_image" style="background:{{ URL::asset('userdata/List/Thumb/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg')}} no-repeat">
                        <div class="featuredim"><img src="{{ asset('images/featured.png')}}" title="Featured Property"></div>
                        <div class="photocount">1 Photos</div>
                      </div>
                    </div>
                    <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg  ">
                      <div class="resulthead">
                        <a class="fontsize18 robotomedium graytext resultname" href="#" title="234/45, New York, NY 1202223">234/45, New York, NY 1202223</a>
                        <p class="postdate lgraytext robotomedium fontsize12">Open: 04/29/2016-10:00 am to 1:00 pm</p>
                      </div>
                      <div class="resultmiddle mgnTB10 fulwidthm left">
                        <div class="priceresult left robotoregular fontsize24">
                          <span class="pricespan lbluetext" title="$ 70,000">$ 70,000</span>
                        </div>
                        <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="Home Size : 5,000 Sq.ft">
                          5,000 Sq.ft
                        </div>
                      </div>
                      <div class="resultbottom fulwidthm left  pdgT10">
                        <div class="n_botmrd left">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">5</span></div>
                        </div>
                        <div class="right">
                          <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 resultlisting mgnB20 nopadding">
                  <div class="whitebg fulwidthm resultlisting_in left lgray_border" title="Test, Atlanta, GA 1">
                    <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2">
                      <div class="resultn_image" style="background:{{ URL::asset('userdata/List/Thumb/0/34/Chrysanthemum.jpg')}} no-repeat">
                        <div class="photocount">1 Photos</div>
                      </div>
                    </div>
                    <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg  ">
                      <div class="resulthead">
                        <a class="fontsize18 robotomedium graytext resultname" href="#" title="Test, Atlanta, GA 1">Test, Atlanta, GA 1</a>
                        <p class="postdate lgraytext robotomedium fontsize12"></p>
                      </div>
                      <div class="resultmiddle mgnTB10 fulwidthm left">
                        <div class="priceresult left robotoregular fontsize24">
                          <i class="flaticon-down126 greentext "></i>
                          <span class="pricespan lbluetext" title="$ 12,000">$ 12,000</span>
                        </div>
                        <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="HomeSize/LotSize Not Available">
                          N.A
                        </div>
                      </div>
                      <div class="resultbottom fulwidthm left  pdgT10">
                        <div class="n_botmrd left">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">0</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">0</span></div>
                        </div>
                        <div class="right">
                          <span id="wishlistic_34" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cal_tabbox ">
          <div class="cal_tabbox_in pdgTB30">
            <div class="prolistingwrp fulwidthm left">
              <h4 class="reviewhead fontsize24 dbluetext robotoregular">
                Agent's Listings (6)
              </h4>
              <div class="fulwidthm left">
                <div class="col-xs-12 resultlisting mgnB20 nopadding">
                  <div class="whitebg fulwidthm resultlisting_in left lgray_border" title="Chinatown,New Street, San Francisco, CA 2144">
                    <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2">
                      <div class="resultn_image" style="background:{{ URL::asset('userdata/List/Thumb/1/4/home-794367_960_720.jpg') }} no-repeat">
                        <div class="featuredim"><img src="{{ asset('images/featured.png')}}" title="Featured Property"></div>
                        <div class="photocount">1 Photos</div>
                      </div>
                    </div>
                    <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg  ">
                      <div class="resulthead">
                        <a class="fontsize18 robotomedium graytext resultname" href="#" title="Chinatown,New Street, San Francisco, CA 2144">Chinatown,New Street, San Francisco, CA 2144</a>
                        <p class="postdate lgraytext robotomedium fontsize12">Open: 12/24/2015-10:00 am to 1:00 pm,12/28/2015-4:00 pm to 6:00 pm</p>
                      </div>
                      <div class="resultmiddle mgnTB10 fulwidthm left">
                        <div class="priceresult left robotoregular fontsize24">
                          <i class="flaticon-down126 greentext "></i>
                          <span class="pricespan lbluetext" title="$ 18,530">$ 18,530</span>
                        </div>
                        <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="Home Size : 3,000 Sq.ft">
                          3,000 Sq.ft
                        </div>
                      </div>
                      <div class="resultbottom fulwidthm left  pdgT10">
                        <div class="n_botmrd left">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">7</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">4</span></div>
                        </div>
                        <div class="right">
                          <span id="wishlistic_4" class="hearlike wishlistopen"> <i class="flaticon-heart297"></i> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 resultlisting mgnB20 nopadding">
                  <div class="whitebg fulwidthm resultlisting_in left lgray_border" title="Niagra Nagar, New York, NY 9997">
                    <div class="resultim col-md-5 col-sm-4 col-xs-12 nopaddingL transition2">
                      <div class="resultn_image" style="background: {{ URL::asset('userdata/List/Thumb/1/8/beautiful-21864_960_720.jpg') }} no-repeat">
                        <div class="featuredim"><img src="{{ asset('images/featured.png')}}" title="Featured Property"></div>
                        <div class="photocount">4 Photos</div>
                      </div>
                    </div>
                    <div class="result_descrptn pdgTB15 col-md-7 col-sm-8 col-xs-12 left whitebg  ">
                      <div class="resulthead">
                        <a class="fontsize18 robotomedium graytext resultname" href="#" title="Niagra Nagar, New York, NY 9997">Niagra Nagar, New York, NY 9997</a>
                        <p class="postdate lgraytext robotomedium fontsize12">Open: 12/22/2015-10:00 am to 1:00 pm,02/10/2016-9:00 am to 2:00 pm</p>
                      </div>
                      <div class="resultmiddle mgnTB10 fulwidthm left">
                        <div class="priceresult left robotoregular fontsize24">
                          <i class="flaticon-down126 greentext "></i>
                          <span class="pricespan lbluetext" title="$ 2,300,000">$ 2,300,000</span>
                        </div>
                        <div class="right lgraytext fontsize18 mgnT10 sqrftdiv" title="Home Size : 1,500 Sq.ft">
                          1,500 Sq.ft
                        </div>
                      </div>
                      <div class="resultbottom fulwidthm left  pdgT10">
                        <div class="n_botmrd left">
                          <div class="roomcount left"><i class="flaticon-sleeping fontsize24"></i><span class="n_botmrdcount">5</span></div>
                          <div class="broomcont left"><i class="flaticon-shower15 fontsize24"></i><span class="n_botmrdcount">1.5</span></div>
                        </div>
                        <div class="right">
                          <span class="hearlike hearliked"> <i class="flaticon-heart297"></i> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
  </div>
  
  <script type="text/javascript">
    
    $(document).ready(function () {
      $(".ca_tb_btnwrp .cal_tab_btn").click(function (e) {
        if (!$(this).hasClass("active")) {
          var tabNum = $(this).index();
          
          var nthChild = tabNum + 1;
          
          $(".ca_tb_btnwrp .cal_tab_btn.active").removeClass("active");
          $(this).addClass("active");
          $(".cal_tabwrp .cal_tabbox.active").removeClass("active");
          $(".cal_tabwrp .cal_tabbox:nth-child(" + nthChild + ")").addClass("active");
        }
      });
    });
  
  
  </script>

@endsection