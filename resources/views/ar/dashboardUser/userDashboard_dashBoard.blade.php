@extends('ar.dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="dashdetialshead fulwidthm left dblue_bg">
      <div class="dashdetialsimg"><img src="{{ asset('userdata/Profile/1/girl-1252995_1920.png') }}" alt="Steve James" title="Steve James"></div>
      <div class="dashdetailsright dblue_bg">
        <div class="dashdetailsright_in">
          <div class="dashdetialsful pdg15 left fulwidthm ">
            <div class="dashdetailsleft">
              <h3 class="dashname fontsize24"></h3>
              <?php //dd($data); ?>
              <p class="dahpo fontsize16 lbluetext">
                <?php if (Auth::user()->role == 0) {
                  echo "Buyer";
                } else {
                  echo "Agent / Home Seller";
                } ?>
              </p>
              <h4 class="dashdate fontsize13">عضو منذ : <?php  $date = explode(' ', Auth::user()->created_at); echo "$date[0]";?></h4></div>
            <?php if(Auth::user()->role == 1 ){ ?>
            <div class="dashsdetailright">
              <div class="premagntdash right">
                <span class="left mgnS05">
                  <img src="{{ asset('images/premiumagnticon.png') }}" alt="">
                  </span>
                <span class="  premimumagntname left whitetext lblue_bg fontsize12 pdg05">وكيل قسط</span>
              </div>
              <div class="clearfix"></div>
              <div class="dashrating fontsize16 right mgnT05"><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star yellowtext"></i><i class="fa fa-star lgraytext"></i><span class=" fontsize12"> (1) </span></div>
            </div>
            <?php } ?>
          </div>
          
          <?php if(Auth::user()->role == 0){ ?>
          <div class="usercountf yellowbg fulwidthm left">
            <div class="usercountbox col-sm-12 col-xs-12 text-center dbluetext"><span class="fontsize24 ">92</span> <span class="font-size14 usercntbrk">في قائمة الامنيات</span></div>
          </div>
          <?php }else{ ?>
          <div class="usercountf yellowbg fulwidthm left">
            <div class="usercountbox col-sm-4 col-xs-4 text-center dbluetext"><span class="fontsize24 ">92</span> <span class="font-size14 usercntbrk">مجموع القوائم</span></div>
            <div class="usercountbox middleyellow col-sm-4 col-xs-4 text-center dbluetext"><span class="fontsize24 ">7</span> <span class="font-size14 usercntbrk">مجموع القوائم النشطة</span></div>
            <div class="usercountbox col-sm-4 col-xs-4 text-center dbluetext"><span class="fontsize24 ">3</span> <span class="font-size14 usercntbrk">مجموع القوائم تباع</span></div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <section class="fulwidthm left whitebg pdg15 mgnB15">
      <div class="adressdash"><i class="fa fa-envelope graytext" title="Email"></i> <span class="ad_details font-size14 lgraytext"><?= Auth::user()->email ?></span></div>
      <div class="adressdash"><i class="fa fa-map-marker graytext" title="Business Name"></i>
        <span class="ad_details font-size14 lgraytext"><?= (isset($info['baddress'])) ? $info['baddress'] : ''; ?></span></div>
      <div class="adressdash">
        <i class="fa fa-phone graytext" title="Business Contact Number"></i>
        <span class="ad_details font-size14 lgraytext"><?= (isset($info['phone'])) ? $info['phone'] : ''; ?></span></div>
    </section>
    <section class="fulwidthm left whitebg agentinfowrp  mgnB15">
      <div class="col-sm-3 col-xs-12 agntinftitle text-center">
        <h4 class="robotoregular dbluetext fontsize20 mgnT25">معلومات الوكيل
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer">
              تفاصيل من المستخدمين الآخرين اند قوائمها / الخصائص التي يتم التعامل معها من قبل كنت وكيلا يتم عرض هنا. وتستند التفاصيل السابقة من القائمة التي تظهر في القوائم التي تم إنشاؤها / تملكها أنت كبائع وليس وكيلا.
            </div>
          </div>
        </h4>
      </div>
      <?php if (Auth::user()->role == 0) { ?>
      <div class="col-sm-9 col-xs-9 agntinfobx text-center lblue_bg whitetext pdgTB10">
        <span class="fontsize24 ">4</span>
        <span class="font-size14 usercntbrk"> مجموع القوائم الرصاص</span>
      </div>
       
      <?php }else { ?>
      <div class="col-sm-3 col-xs-12 agntinfobx text-center lblue_bg whitetext pdgTB10">
        <span class="fontsize24 ">4</span>
        <span class="font-size14 usercntbrk"> مجموع القوائم الرصاص</span>
      </div>
      <div class="col-sm-3 col-xs-12 agntinfobx text-center agntmiddle whitetext pdgTB10">
        <span class="fontsize24 ">2</span>
        <span class="font-size14 usercntbrk"> مجموع القوائم الرصاص مباعة</span>
      </div>
      <div class="col-sm-3 col-xs-12 agntinfobx lblue_bg text-center whitetext pdgTB10">
        <span class="fontsize24 ">2</span>
        <span class="font-size14 usercntbrk"> مجموع النشطين العروض / العملاء</span>
      </div>
      <?php } ?>
    </section>
  </div>
  @include('ar.dashboardUser.partials.wishlist_dashboard')
@endsection