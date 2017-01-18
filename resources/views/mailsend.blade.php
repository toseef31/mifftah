@extends('dashboardUser.dash_master_layout')
@section('content')
<?php
  if (strpos($_SERVER['REQUEST_URI'], 'home/preview') == true) {
    echo "
  <style>
  #sider.dashfulright.col-lg-3.col-md-3.col-sm-12.col-xs-12.pull-right.mgnB15.nopaddingR {display: none !important;}
  .innerwraperful.pdgT15.fulwidthm.left {margin-top: 60px !important;}
</style>
";
  } else {
    echo "<style>
  div#sider{display: none !important;}
</style>";
  }
  ?>
<div class="innerwraperful whitebg fulwidthm left" style="margin-top: 0px;">
	<div class="indexwrpaer">
  <div class="indexwrpaerin pdgS10">
   <div class="paymentsuccesswrp pdg30 footerbg graytext text-center ">
   <span class="sucschk greentext"><i class="fa fa-check-circle-o"></i>

   </span>
   <h3 class="paymnth3 robotoregular fontsize30 mgnTB15">Ticket Sent Successfully</h3>
   <p class="fontsize16 robotoregular">Your ticket was sent successfully to our support desk</p>
<a class="btn greennbg mgnT10" href="javascript:history.back(-1)">Go Back</a>
   </div>
  </div>
    
    
     
    
    </div>
</div>

@endsection