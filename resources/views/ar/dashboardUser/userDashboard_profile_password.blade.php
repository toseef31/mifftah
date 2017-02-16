@extends('dashboardUser.dash_master_layout')
@section('content') 
<div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">

 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">

  <h4 class="robotolight fontsize24 dbluetext mgnB30">
   Change Password        </h4>


  <div class="fulwidthm left">

   <div>
    <div class="row">
     <div class="col-sm-6 profilefrmwrp mgnB20">
      <label class="robotomedium font-size14 graytext mgnB10">Old Password </label>

      <input id="oldpass" type="password" class="commoninput  commoninputborder pdg05 fulwidthm" placeholder="Old Password">

     </div>
     <div class="col-sm-6 profilefrmwrp  mgnB20">
      <label class="robotomedium font-size14 graytext mgnB10">New Password</label>
      <input id="newpass" type="password" class="commoninput  commoninputborder pdg05 fulwidthm" placeholder="New Password">
     </div>
    </div>

    <div class="row">
     <div class="col-sm-6 profilefrmwrp  mgnB20">
      <label class="robotomedium font-size14 graytext mgnB10">Confirm Password</label>
      <input id="confirmnewpass" type="password" class="commoninput  commoninputborder pdg05 fulwidthm" placeholder="Confirm Password">
     </div>

    </div>


   </div>


   <div class=" fulwidthm left">
    <button id="savepassword" class="btn greennbg pull-right">Change Password</button>

   </div>



  </div>

 </section>



 <!-- Notification ends -->




</div>
@endsection