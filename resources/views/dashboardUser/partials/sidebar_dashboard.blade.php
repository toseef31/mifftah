<div class="dashfulright  col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right mgnB15 nopaddingR" id="sider"> <!-- sidebar start here -->
  <!-- Right fixed menu (this will disappear when window width less than 991) -->
  <div class="dashboardmenu lgray_border whitebg fulwidthm left">
    <ul class="dashmenuul">
      <li class="dashmenuli"><a href="{{ url('user/dashboard') }}" class="dashmenua"><i class="fa fa-tachometer dashlefticon"></i>Dashboard</a></li>
      <li class="dashmenuli"><a href="{{ url('user/agentaccount') }}" class="dashmenua"><i class="fa fa-user dashlefticon"></i>Account Setting</a></li>
      <li class="dashmenuli"><a class="dashmenua subdashmenuclick"><i class="fa fa-bars dashlefticon"></i>My Listings <i class="fa fa-caret-down subdashicon"></i></a>
        <ul class="subdashmenuul" style="">
          <?php if(Auth::check() && Auth::user()->role == 1){ ?>
          <li class="subdashmenuli"><a href="{{ url('user/newlist') }}" class="subdashmenu_a">Add New Listing</a></li>
          <li class="subdashmenuli"><a href="{{ url('/user/managelist') }}" class="subdashmenu_a">Manage Listings</a></li>
          <?php }else{ ?>
          <li class="subdashmenuli"><a href="{{ url('/user/wishlist') }}" class="subdashmenu_a">My WishLists</a></li>
          <?php } ?>
        </ul>
      </li>
      <?php if(Auth::check() && Auth::user()->role == 1){ ?>
      <li class="dashmenuli"><a class="dashmenua subdashmenuclick"><i class="fa fa-link dashlefticon"></i> Manage Leads (Agent) <i class="fa fa-caret-down subdashicon"></i></a>
        <ul class="subdashmenuul" style="">
          <?php if(Auth::check() && Auth::user()->role == 1){ /** then we have vendor dashboard options **/ ?>
          <li class="subdashmenuli"><a href="{{ url('user/activeleads') }}" class="subdashmenu_a">Manage Active Leads</a></li>
          <li class="subdashmenuli"><a href="{{ url('/user/deadleads') }}" class="subdashmenu_a">Manage Deactive Leads</a></li>
          <li class="subdashmenuli"><a href="{{ url('/user/requestsleads') }}" class="subdashmenu_a">Manage Lead Requests Received</a></li>
          {{--<li class="subdashmenuli"><a href="{{ url('/user/requestsleads/send') }}" class="subdashmenu_a">Manage Lead Requests Sent</a></li>--}}
          <li class="subdashmenuli"><a href="{{ url('/user/requestsleads/search') }}" class="subdashmenu_a">Search Leads</a></li>
        </ul>
      {{--<li class="dashmenuli"><a href="{{ url('/user/requestsleads/admin') }}" class="dashmenua"><i class="fa fa-shield dashlefticon"></i> Manage Lead Requests (Owner)</a></li>--}}
      <?php } ?>
      </li>
      <?php } ?>
      <li class="dashmenuli"><a class="dashmenua subdashmenuclick"><i class="fa fa-cog dashlefticon"></i> Account Settings <i class="fa fa-caret-down subdashicon"></i></a>
        <ul class="subdashmenuul" style="">
          <li class="subdashmenuli"><a href="{{ url('/user/view/profile') }}" class="subdashmenu_a">View Profile</a></li>
          <li class="subdashmenuli"><a href="{{ url('/user/edit/profile') }}" class="subdashmenu_a">Edit Profile</a></li>
          <li class="subdashmenuli"><a href="{{ url('/user/changepass') }}" class="subdashmenu_a">Change Password</a></li>
        </ul>
      </li>
      <li class="dashmenuli"><a href="{{ url('/user/transactions') }}" class="dashmenua"><i class="fa fa-money dashlefticon"></i> Transactions</a></li>
      <li class="dashmenuli">
        <a class="dashmenua" href="{{ url('/support') }}"> <i class="fa fa-question dashlefticon"></i> Support Desk</a>
      </li>
      <?php if(Auth::check()){ ?>
      <li class="dashmenuli">
        <a class="dashmenua" href="{{ url('/logout') }}"> <i class="fa fa-power-off dashlefticon"></i>Logout</a>
      </li>
      <?php } ?>
    </ul>
    <!-- supportdesk-->
    <div class="overlaySupport"></div>
    <div class="msgsupportdesk">
      <div class="loouter " style="">
        <div class="lomiddle">
          <div class="loinner col-md-8 col-sm-8 col-lg-7  col-center nopadding">
            <div class="lobox whitebg fulwidthm left pdg30 ">
              <div class=" msgownrclose lgraytext"><i class="flaticon-cross97"></i></div>
              <div class=" fulwidthm left  pdg20">
                <div class="detailsbooking fulwidthm left mgnB10 ">
                  <div class="col-xs-12 col-md-12 nopadding">
                    <div class="col-md-4 col-sm-12 col-xs-12 mgnB10">
                      <input type="text" value="" placeholder="Subject" name="start" class="fulwidthm text-left whitebg rqstfrminput fulwidthm left"></div>
                    <div class="col-md-4 col-sm-12 col-xs-12 mgnB10">
                      <input type="text" value="" placeholder="Subject" name="start" class="fulwidthm text-left whitebg rqstfrminput fulwidthm left"></div>
                    <div class="col-md-4 col-sm-12 col-xs-12 mgnB10">
                      <input type="text" value="" placeholder="Subject" name="start" class="fulwidthm text-left whitebg rqstfrminput fulwidthm left"></div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xs-12 col-md-12 ">
                    <div class="detailformrow mgnB10 fulwidthm left">
                      <textarea class="lgray_border pdg05 fulwidthm"> </textarea>
                    </div>
                    <div class="detailformrow mgnB15 fulwidthm">
                      <button class="lblue_bg fulwidthm left pdgTB10 fontsize18">Send Message</button>
                    </div>
                  </div>
                </div>
                <!-- booking section ends -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- supportdesk -->
    <script type="text/javascript">
      $(document).ready(function () {
        // supportdesk
        $('.conactsuportclick').click(function (e) {
          $('.msgsupportdesk, .overlaySupport').fadeIn(200);
        });
        $('.msgownrclose ').click(function (e) {
          $('.msgsupportdesk, .overlaySupport').fadeOut(200);
        });
        $(function () {
          $('.subdashmenuul').slideUp();
          $('.dashmenuli').removeClass('active');
          $('.dashmenuli').click(function () {
            if ($(this).is('.active')) {
              $(this).removeClass('active');
              $('ul', this).slideUp();
              $(this).removeClass('nv');
              $(this).addClass('vn');
            } else {
              $('.dashmenuli ul').slideUp();
              $(this).removeClass('vn');
              $(this).addClass('nv');
              $('ul', this).slideDown();
              $('.dashmenuli').removeClass('active');
              $(this).addClass('active');
            }
          });
          var url = window.location;
          $('.subdashmenu_a[href="' + url + '"]').parent('li').addClass('current-page');
          $('.subdashmenu_a').filter(function () {
            return this.href == url;
          }).parent('li').addClass('current-page').parent('ul').slideDown().parent().addClass('active');
        });
      });
    </script>
  </div>
  <!-- Right Fixed menu -->
</div>