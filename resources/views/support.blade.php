@extends('layouts.master_layout') 

@section('content') 
<div class="mainindexcontainer">
 <div class="mainontainer_in fulwidthm left">
  <div class="registerboxin whitebg fulwidthm left mgnB30">
   <div class="registerclose lgraytext"></div>
   <div class="loginrow fulwidthm left mgnB15 text-center josfinsanbold graytext fontsize20" id="msg1"> <?= $lang[68][$current] ?>           <p class="robotoregular fontsize13 lgraytext"><?= $lang[324][$current] ?></p>
   </div>
   <form action="{{ url('/mailsend') }}" method="POST">
    <div class="loginrow fulwidthm left josfinsanbold graytext ">
     <div class="col-lg-6 col-md-6 col-sm-6 mgnB15"><?= $lang[109][$current] ?><span class=" required">*</span></label>
      <input type="text" id="fnamex" name="name" class="cmnfrminput fulwidthm ">
      <div class="erorshow" id="fnameerrorx"><?= $lang[324][$current] ?></div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
      <label class="formlabel fontsize13 robotoregular graytext"><?= $lang[327][$current] ?> <span class=" required">*</span></label>
      <input type="email" id="emailx" name="email" class="cmnfrminput fulwidthm ">
      <div class="erorshow" id="lnameerror"></div>
     </div>
    </div>
    <div class="loginrow fulwidthm left josfinsanbold graytext ">

     <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
      <label class="formlabel fontsize13 robotoregular graytext"><?= $lang[104][$current] ?></label>
      <select id="agentstatusx" name="prio" class="formselect" style="width:100%;min-height: 39px;margin-top: 2px;">
       <option value="2" selected="selected"><?= $lang[105][$current] ?> </option>
       <option value="1"><?= $lang[106][$current] ?> </option>
       <option value="0"><?= $lang[107][$current] ?> </option>
      </select>
      <div class="erorshow"></div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6 mgnB15">
      <label class="formlabel fontsize13 robotoregular graytext"><?= $lang[108][$current] ?> <span class=" required">*</span></label>
      <input type="text" name="sub" id="sub" class="cmnfrminput fulwidthm ">
      <div class="erorshow" id="emailerror"></div>
     </div>

    </div>  
    <div class="loginrow fulwidthm left josfinsanbold graytext ">

     <div class="col-lg-12 col-md-12 col-sm-12 mgnB15">
      <label class="formlabel fontsize13 robotoregular graytext"><?= $lang[111][$current] ?><span class=" required">*</span></label>
      <textarea id="emailuserx" name="content" class="fulwidthm" rows="4" class="fullwidth"></textarea>
      <div class="erorshow" id="emailerrorx"></div>
     </div>

    </div>


    <div class="loginrow fulwidthm left josfinsanbold graytext mgnB15">
     <div class="col-xs-12 mgnB15">
      <button class="btn lblue_bg whitetext fulwidthm font-size14 robotomedium" type="submit" onClick="return rety();">Submit</button>
     </div>
    </div> 
   </form>
  </div>
 </div>
</div>
@endsection