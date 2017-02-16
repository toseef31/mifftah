@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      
      <h4 class="robotolight fontsize24 dbluetext mgnB30"> Change Password </h4>
      @if (count($errors) > 0)
        <?php $count = 1; ?>
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
            <strong><?= $count; $count++;?></strong> <?= $error ?>
          </div>
        @endforeach
      @endif
    <!-- if there are any session messages -->
      @if(Session::has('sucessmessage'))
        <div class="alert alert-success">
          {{ Session::get('sucessmessage') }}
        </div>
      @endif
      <form method="post" action="{{ url('/user/updatechangepass') }}">
        <div class="fulwidthm left">
          <div>
            {{  csrf_field() }}
            <div class="row">
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10">New Password</label>
                <input id="newpass" type="password" class="commoninput  commoninputborder pdg05 fulwidthm" placeholder="New Password" name="password">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 profilefrmwrp  mgnB20">
                <label class="robotomedium font-size14 graytext mgnB10">Confirm Password</label>
                <input id="confirmnewpass" type="password" class="commoninput  commoninputborder pdg05 fulwidthm" placeholder="Confirm Password" name="password_confirmation">
              </div>
            </div>
          </div>
          <div class=" fulwidthm left">
            <button id="savepassword" class="btn greennbg pull-right" type="submit">Change Password</button>
          </div>
        </div>
      </form>
    
    </section>
    
    
    <!-- Notification ends -->
  
  
  </div>
@endsection