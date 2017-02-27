@extends('layouts.master_layout') 
 
@section('content') 
<div class="innerwraperful whitebg  fulwidthm left" style="margin-top: 0px !important; "> 
 <section class="detailsechbox  fulwidthm left ">
  <div class="helphead pdgTB30 fulwidthm left text-center">
   <div class="indexwrpaer">
    <div class="pdgS20">
     <h2 class="josfinsanbold whitetext mgnB15 fontsize35 text-uppercase"> <?= $lang[53][$current] ?></h2>
     <p class=" font-size14 paragrphtext robotoregular whitetext mgnB15">This is how you buy/sell/rent your properties on For Sale Network</p>
    </div>
   </div>
  </div> 
  <div class="helpcontentfull pdgS20 mgnTB60  fulwidthm left">
   <div class="indexwrpaer">
    <article class="helpcontent mgnB30">
     <h4 class=" robotoregular mgnB10 fontsize20 graytext"><?= $lang[85][$current] ?></h4>
     <p class=" font-size14 paragrphtext robotoregular lgraytext mgnB15"><?= $lang[86][$current] ?></p>

    </article>
    <article class="helpcontent mgnB30">
     <h4 class=" robotoregular mgnB10 fontsize20 graytext"><?= $lang[87][$current] ?></h4>
     <p class=" font-size14 paragrphtext robotoregular lgraytext mgnB15"> <?= $lang[88][$current] ?></p>

    </article>
    <article class="helpcontent mgnB30 fulwidthm left">
     <h4 class=" robotoregular mgnB10 fontsize20 graytext"><span class="articlenuber"> 1</span> <?= $lang[89][$current] ?></h4>
     <p class=" font-size14 paragrphtext robotoregular lgraytext mgnB15"><?= $lang[90][$current] ?></p>


    </article>

    <article class="helpcontent mgnB30 fulwidthm left">
     <h4 class=" robotoregular mgnB10 fontsize20 graytext"><span class="articlenuber"> 2</span><?= $lang[91][$current] ?></h4>
     <p class=" font-size14 paragrphtext robotoregular lgraytext mgnB15"><?= $lang[92][$current] ?> </p>


    </article>

    <article class="helpcontent mgnB30 fulwidthm left">
     <h4 class=" robotoregular mgnB10 fontsize20 graytext"> <span class="articlenuber"> 3</span><?= $lang[94][$current] ?></h4>
     <p class=" font-size14 paragrphtext robotoregular lgraytext mgnB15"> <?= $lang[93][$current] ?></p> 
    </article> 
    <article class="helpcontent mgnB30 fulwidthm left">
     <h4 class=" robotoregular mgnB10 fontsize20 graytext"> <span class="articlenuber">4</span> <?= $lang[95][$current] ?></h4>
     <p class=" font-size14 paragrphtext robotoregular lgraytext mgnB15"><?= $lang[96][$current] ?></p> 
    </article> 
   </div>  
  </div><!-- Index wrpaer ends -->
 </section> 
</div> <!--innerwraperful ends -->

@endsection