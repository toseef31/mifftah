@extends('layouts.master_layout') 
<link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.css" /> 
<link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.skinFlat.css" />
@section('content') 
<div class="mainindexcontainer">
 <div class="mainontainer_in fulwidthm left">
  <div class="indexcaluclatorwrp whitebg fulwidthm left mgnB30 pdg20">


   <div class="cal_tabwrp fulwidthm left">

    <div class="cal_tabbox active">
     <div class="cal_tabbox_in ">
      <h3 class="robotolight fontsize24 mgnB20"><?= $lang[360][$current] ?></h3>     
      <p class="tabsp lgraytext font-size14"><?= $lang[365][$current] ?></p>      
      <div class="clearfix"></div>
      <div class="row mgnT60">


       <div class="calculatorleft col-sm-4 col-xs-12">

        <div class="calrow fulwidthm left mgnB20">
         <label class="callabel robotoregular fontsize16 mgnB10 graytext"> <?= $lang[352][$current] ?></label>
         <input id="desiredhomeprice" class="gcinput fulwidthm left" type="text" value="800000">
         <div class=" rederror fulwidthm left" id="e1" ></div>
        </div>
        <div class="calrow fulwidthm left mgnB20">
         <label class="callabel robotoregular fontsize16 mgnB10 graytext"> <?= $lang[353][$current] ?></label>
         <input id="desiredrent" class="gcinput fulwidthm left" type="text" value="8000">
         <div class=" rederror fulwidthm left" id="e2"></div>
        </div>


        <div class="calrow fulwidthm left mgnB20">
         <button id="rentbuycalbut" class="whitetext lblue_bg fontsize16 border-radius3 pdg10 clacluatebtn fulwidthm left"><?= $lang[356][$current] ?></button>
        </div>
       </div>
       <div class="calcuright col-sm-7 col-xs-12 pull-right">
        <div class="clacicon dblue_bg whitetext"><i class="flaticon-home153"></i></div>
        <div class="calcuright_in graybg pdg20">
         <div class="clacamountwrp text-center">
          <p class="fontsize18 graytext robotoregular" id="nomonthsbuy"> <?= $lang[354][$current] ?></p>  
          <div class=" clearfix"></div> 
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function () {

        function removedisps() {

          $('.rederror').css('visibility', 'hidden');
          return true;

        }
        $("#rentbuycalbut").click(function () {

          var desiredrent = $('#desiredrent').val().trim();
          var desiredhomeprice = $('#desiredhomeprice').val().trim();

          if (desiredhomeprice == "")
          {

            $('#e1').html("Desired home price cannot be null.");
            $('#e1').css('visibility', 'visible');
            setTimeout(removedisps, 3000);
            return false;
          }

          if (desiredrent == "")
          {

            $('#e2').html("Desired Rent amount cannot be null.");
            $('#e2').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
          if (isNaN(desiredhomeprice))
          {
            $('#e1').html("Desired home price must be a number.");
            $('#e1').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
          if (!parseInt(desiredhomeprice) > 0)
          {
            $('#e1').html("Desired home price must be greater than zero.");
            $('#e1').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
          if (isNaN(desiredrent))
          {
            $('#e2').html("Desired Rent amount  must be a number.");
            $('#e2').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
          if (!parseInt(desiredrent) > 0)
          {
            $('#e2').html("Desired Rent amount  must be greater than zero.");
            $('#e2').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
          if (desiredhomeprice < 0)
          {

            $('#e1').html("Please enter a positive value.");
            $('#e1').css('visibility', 'visible');
            setTimeout(removedisps, 3000);
            return false;
          }
          if (desiredrent < 0)
          {

            $('#e2').html("Please enter a positive value.");
            $('#e2').css('visibility', 'visible');
            setTimeout(removedisps, 3000);
            return false;
          }

          var homeprice = parseInt(desiredhomeprice);


          var rent = parseInt(desiredrent);

          var nomonthss = homeprice / rent;
          month = Math.round(nomonthss, 0);
          if (month >= 12)
          {
            years = parseInt(month / 12);
            months = month % 12;
            yearx = Math.round(years, 0);
            monthx = Math.round(months, 0);


            $('#nomonthsbuy').html('Buying will be better than rent after ' + yearx + ' Years and ' + monthx + ' Months');


          } else {



            $('#nomonthsbuy').html('Buying will be better than rent after ' + month + ' Months');

          }

        });

      });
    </script>
    <script type="text/javascript">
      $(document).ready(function (e) {


        $(".selectsearch, .footerselect, .formselect").select2();



        wow = new WOW(
                {
                  animateClass: 'animated',
                  mobile: false,

                  offset: 100
                }
        );
        wow.init();
// slect style


      });
    </script>
    <script type="text/javascript">
      $(document).ready(function (e) {


        $('.indexheaderwrper .myacounthover, .innerheader .myacounthover').hover(function () {

          $(this).children('.myacountdropdown').stop().fadeIn(200);

        },
                function () {
                  $(this).children('.myacountdropdown ').stop().fadeOut(200);
                });

        // RESPONSIVE MENU Starts























      });


    </script>
   </div>
  </div>
 </div>
</div> 
@endsection