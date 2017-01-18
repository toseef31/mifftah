@extends('layouts.master_layout') 
<link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.css" /> 
<link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.skinFlat.css" />
@section('content') 
<style>
 html, body {
   width: 100%;
   height: 100%;
 }
 .mainslider {
   width: 100%;
   height: 100%;
   background-color: #EBEFEF;
   margin-bottom: 30px;
 }
 .slides-container {
   z-index: 1;
 }
</style>
<script type="text/javascript"> 
    

  $(document).ready(function (e) {
    $('#lpassword').keypress(function (e) {
      var key = e.which;
      if (key == 13)  // the enter key code
      {
        login();
      }
    });



    var indexulmenu = $('.indexul').html();

    $('.re_ul').html(indexulmenu);

    $('.mainmenuclick').click(function (e) {
      $('.slideingmenu').addClass("active");
      $('.slidemenuoverlay').addClass("active");
    });
    $('.closesilde').click(function (e) {
      $('.slideingmenu').removeClass("active");
      $('.slidemenuoverlay').removeClass("active");
    });

    $('.slidemenuoverlay').click(function (e) {
      $('.slideingmenu').removeClass("active");
      $(this).removeClass("active");
    });

    $('.slideingmenu  .myacounthover').click(function (e) {
      $(this).children('.myacountdropdown').slideToggle(200);
    });

    // sliding sub menu codeeee


    $('.slidemneu_a').click(function (e) {
      $(this).siblings('.slidingsubmenu').slideToggle(200);
    });




  });

</script>
<script type="text/javascript">

  google.maps.event.addDomListener(window, 'load', function () {
    var options = {
      types: ['(cities)'],
      componentRestrictions: {country: "us"}
    };
    var places = new google.maps.places.Autocomplete(document.getElementById('citysearch'), options);
    google.maps.event.addListener(places, 'place_changed', function () {
      var place = places.getPlace();
      var address = place.formatted_address;
      var latitude = place.geometry.location.lat();
      var longitude = place.geometry.location.lng();
      var fulllocation = document.getElementById('citysearch').value;

      //alert(address);alert(fulllocation);
      //$('form#searchsubmit').submit();

      //   $('#location').val(fulllocation);
      //  $('#address').val(address);
      //     $('#lat').val(latitude);
      //     $('#long').val(longitude);

      var tempx = [];



      tempx = fulllocation.split(",");

      if (tempx.length >= 3)
      {

        fulllocation = fulllocation.substr(0, fulllocation.lastIndexOf(","));

      }

      Set_Cookie('location_temp', fulllocation, 0, "../index.html");
      Set_Cookie('location_lat', latitude, 0, "../index.html");
      Set_Cookie('location_long', longitude, 0, "../index.html");


    });
  });







 








  function Set_Cookie(name, value, expires, path, domain, secure)
  {


    document.cookie = name + "=" + escape(value) +
            ((path) ? ";path=" + path : "") +
            ((domain) ? ";domain=" + domain : "") +
            ((secure) ? ";secure" : "");

  }

  function Get_Cookie(name)
  {
    var start = document.cookie.indexOf(name + "=");
    var len = start + name.length + 1;
    if ((!start) && (name != document.cookie.substring(0, name.length)))
    {
      return null;
    }

    if (start == -1)
      return null;

    var end = document.cookie.indexOf(";", len);

    if (end == -1)
      end = document.cookie.length;

    return unescape(document.cookie.substring(len, end));

  }

</script>
<div class="mainindexcontainer"> 
 <div class="mainontainer_in fulwidthm left">
  <div class="indexcaluclatorwrp whitebg fulwidthm left mgnB30 pdg20"> 
   <div class="cal_tabwrp fulwidthm left"> 
    <div class="cal_tabbox active">
     <div class="cal_tabbox_in ">
      <h3 class="robotolight fontsize24 mgnB20">Mortgage Calculator</h3>     
      <p class="tabsp lgraytext font-size14">Use this calculator to estimate your monthly mortgage payment, excluding taxes and insurance. Simply enter the price of the home, your down payment, and details about the loan tenure to calculate your monthly payment.</p>  
      <div class="clearfix"></div>
      <div class="row mgnT60">
       <div class="calculatorleft col-sm-4 col-xs-12">

        <div class="calrow fulwidthm left mgnB20">
         <label class="callabel robotoregular fontsize16 mgnB10 graytext"> Mortgage Amount (₪)</label>
         <input id="mortageamt" class="gcinput fulwidthm left" type="text" value="520000">
         <div class=" rederror fulwidthm left" id="er1" style="visiblity:hidden;"></div>
        </div>
        <div class="calrow fulwidthm left mgnB20">
         <label class="callabel robotoregular fontsize16 mgnB10 graytext"> Down Payment (₪)</label>
         <input id="dwnpay" class="gcinput fulwidthm left" type="text" value="20000">
         <div class=" rederror fulwidthm left" id="er2" style="visiblity:hidden;"></div>
        </div>
        <div class="calrow fulwidthm left mgnB20">
         <label class="callabel robotoregular fontsize16 mgnB10 graytext"> Rate of Interest (%)</label>
         <input id="mortagerateintrst" class="gcinput fulwidthm left" type="text" value="3.98">
         <div class=" rederror fulwidthm left" id="er3" style="visiblity:hidden;"></div>
        </div>

        <div class="calrow fulwidthm left mgnB20">
         <label class="callabel robotoregular fontsize16 mgnB10 graytext">No of Years</label>
         <select id="noofyearsmor" class="formselect" style="width:100%">
          <option value="5">5 </option>
          <option value="10">10 </option>
          <option value="15">15 </option>
          <option value="20">20 </option>
          <option value="25">25 </option>
          <option selected="selected" value="30">30 </option>

         </select>
         <div class=" rederror fulwidthm left"></div>
        </div>
        <div class="calrow fulwidthm left mgnB20">
         <button id="mortgagecalbut" class="whitetext lblue_bg fontsize16 border-radius3 pdg10 clacluatebtn fulwidthm left">Calculate</button>
        </div>
       </div>
       <div class="calcuright col-sm-7 col-xs-12 pull-right">
        <div class="clacicon dblue_bg whitetext"><i class="flaticon-home153"></i></div>
        <div class="calcuright_in graybg pdg20">
         <div class="clacamountwrp text-center">
          <p class="fontsize18 graytext robotoregular"> Your Monthly Payment</p> 
          <h2 class="amountcal fontsize30 robotoregular" id="amtmotgagemonth">₪ 2,381</h2>
          <p class="robotoregular fontsize13 mgnTB20">Based on your mortgage amount, you should pay this amount monthly for the loan period</p>
          <div class=" clearfix"></div>
          <div class="indexcalpricerange">
           <div class="indexcalpricerangeimgs fulwidthm left mgnB10">
            <div class="pricerangeleft pricon left"><i class="flaticon-tag77"></i></div>
            <div class="pricerangeright pricon right"><i class="flaticon-home153"></i></div>
           </div>
           <div class="clearfix"></div>
           <input type="text" id="range2" value="" name="range" />

          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>

   </div>
  </div>
 </div>

 <!-- mainontainer_in ends -->
</div> <!-- mainindexcontainer ends -->
<script src="js/rangeslider/ion.rangeSlider.min.js"></script>
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
  var mortgageminv = '100000';

  var mortgageminvalu = parseInt(mortgageminv) * 2;
  $("#range2").ionRangeSlider({
    type: "single",
    min: '100000',
    max: '5000000',
    from: mortgageminvalu,
    to: 5000000,

    prefix: "₪",
    max_postfix: "<b>+<b>",
    grid: false,
    grid_snap: true,
    onFinish: function (data) {

      $('#mortageamt').val(data.from);
      $('#mortagerateintrst').val('3.98');

      $("#mortgagecalbut").click();

    }
  });
</script> 
<script type="text/javascript">
  $(document).ready(function () {
    var mortgagemini = '100000';

    var mortgageminival = parseInt(mortgagemini) * 2;
    $('#mortageamt').val(mortgageminival);
    var downpayvald = parseInt(mortgageminival) * 20 / 100;
    $('#dwnpay').val(downpayvald);


    secondonee();
    function removedisps() {

      $('.rederror').css('visibility', 'hidden');
      return true;

    }
    $("#mortgagecalbut").click(function () {

      var mortageamt = $('#mortageamt').val().trim();
      var rateofinterest = $('#mortagerateintrst').val().trim();
      var noofyears = $('#noofyearsmor').val().trim();
      var downpay = $('#dwnpay').val().trim();
      if (mortageamt == "")
      {
        $('#er1').html("Mortgage amount cannot be null.");
        $('#er1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (mortageamt < 0)
      {
        $('#er1').html("Please enter a positive value.");
        $('#er1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (downpay == "" || downpay == undefined)
      {
        downpay = 0;
      }

      if (downpay != "")
      {
        if (isNaN(downpay))
        {
          $('#er2').html("Down payment must be a number.");
          $('#er2').css('visibility', 'visible');
          setTimeout(removedisps, 3000);
          return false;
        }
        if (downpay < 0)
        {
          $('#er2').html("Please enter a positive value.");
          $('#er2').css('visibility', 'visible');
          setTimeout(removedisps, 3000);
          return false;
        }
        if (parseInt(downpay) != 0)
        {
          if ((!parseInt(downpay) > 0))
          {
            $('#er2').html("Down payment must be greater than or equal to zero.");
            $('#er2').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
        }

      }

      if (isNaN(mortageamt))
      {
        $('#er1').html("Mortgage amount must be a number.");
        $('#er1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }

      if (!parseInt(mortageamt) > 0)
      {
        $('#er1').html("Mortgage amount must be greater than zero.");
        $('#er1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (rateofinterest == "")
      {
        $('#er3').html("Rate of interest cannot be null.");
        $('#er3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (rateofinterest < 0)
      {
        $('#er3').html("Please enter a positive value.");
        $('#er3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (!parseInt(rateofinterest) > 0)
      {
        $('#er3').html("Rate of interest must be greater than zero.");
        $('#er3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (parseInt(rateofinterest) > 20)
      {
        $('#er3').html("Rate of interest must be less than 20.");
        $('#er3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }


      var slidern = $("#range2").data("ionRangeSlider");


      if (mortageamt > 5000000)
      {
        slidern.update({
          from: 5000000
        });
      } else {

        slidern.update({
          from: mortageamt
        });


      }




      // M = P [ i(1 + i)n ] / [ (1 + i)n - 1]

      var mortageamtpay = parseInt(mortageamt);
      var sflag = 0;
      if (downpay >= mortageamtpay)
      {

        sflag = 1;

      } else {

        mortageamtpay = mortageamtpay - downpay;

      }
      var rate = parseFloat(rateofinterest);
      var noyr = parseInt(noofyears);

      var ratenomonth = rate / (12 * 100);//i
      //alert(ratenomonth);
      var rateadd = parseFloat(ratenomonth) + 1;//i+1
      var nomonth = noyr * 12;//n
      var i;
      var numpow = 1;
      //alert(nomonth);
      //alert(nomonth);
      //alert(rateadd);
      for (i = 1; i <= nomonth; i++)
      {

        numpow = parseFloat(numpow) * parseFloat(rateadd);

      }
      //alert(numpow);


      var motgagemonth = (mortageamtpay * (numpow * ratenomonth)) / (numpow - 1);


      //
      //motgagemonth=Math.round(motgagemonth,2);
      //	alert("motgagemonth="+motgagemonth);

      if (sflag == 1)
      {

        motgagemonth = 0;
      }

      var newfdf = number_format(motgagemonth, 0);

      $('#amtmotgagemonth').html("₪" + " " + newfdf);


    });


  });




  function secondonee()
  {
    var mortageamt = $('#mortageamt').val().trim();
    var rateofinterest = $('#mortagerateintrst').val().trim();
    var noofyears = $('#noofyearsmor').val().trim();
    var downpay = $('#dwnpay').val().trim();
    if (mortageamt == "")
    {
      $('#er1').html("Mortgage amount cannot be null.");
      $('#er1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (mortageamt < 0)
    {
      $('#er1').html("Please enter a positive value.");
      $('#er1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (downpay == "" || downpay == undefined)
    {
      downpay = 0;
    }

    if (downpay != "")
    {
      if (isNaN(downpay))
      {
        $('#er2').html("Down payment must be a number.");
        $('#er2').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (downpay < 0)
      {
        $('#er2').html("Please enter a positive value.");
        $('#er2').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (parseInt(downpay) != 0)
      {
        if ((!parseInt(downpay) > 0))
        {
          $('#er2').html("Down payment must be greater than or equal to zero.");
          $('#er2').css('visibility', 'visible');
          setTimeout(removedisps, 3000);

          return false;
        }
      }

    }

    if (isNaN(mortageamt))
    {
      $('#er1').html("Mortgage amount must be a number.");
      $('#er1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);
      return false;
    }

    if (!parseInt(mortageamt) > 0)
    {
      $('#er1').html("Mortgage amount must be greater than zero.");
      $('#er1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);
      return false;
    }
    if (rateofinterest == "")
    {
      $('#er3').html("Rate of interest cannot be null.");
      $('#er3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);
      return false;
    }
    if (rateofinterest < 0)
    {
      $('#er3').html("Please enter a positive value.");
      $('#er3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);
      return false;
    }
    if (!parseInt(rateofinterest) > 0)
    {
      $('#er3').html("Rate of interest must be greater than zero.");
      $('#er3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);
      return false;
    }
    if (parseInt(rateofinterest) > 20)
    {
      $('#er3').html("Rate of interest must be less than 20.");
      $('#er3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);
      return false;
    }


    var slidern = $("#range2").data("ionRangeSlider");


    if (mortageamt > 5000000)
    {
      slidern.update({
        from: 5000000
      });
    } else {

      slidern.update({
        from: mortageamt
      });


    }




    // M = P [ i(1 + i)n ] / [ (1 + i)n - 1]

    var mortageamtpay = parseInt(mortageamt);
    var sflag = 0;
    if (downpay >= mortageamtpay)
    {

      sflag = 1;

    } else {

      mortageamtpay = mortageamtpay - downpay;

    }
    var rate = parseFloat(rateofinterest);
    var noyr = parseInt(noofyears);

    var ratenomonth = rate / (12 * 100);//i
    //alert(ratenomonth);
    var rateadd = parseFloat(ratenomonth) + 1;//i+1
    var nomonth = noyr * 12;//n
    var i;
    var numpow = 1;
    //alert(nomonth);
    //alert(nomonth);
    //alert(rateadd);
    for (i = 1; i <= nomonth; i++)
    {

      numpow = parseFloat(numpow) * parseFloat(rateadd);

    }
    //alert(numpow);


    var motgagemonth = (mortageamtpay * (numpow * ratenomonth)) / (numpow - 1);


    //
    //motgagemonth=Math.round(motgagemonth,2);
    //	alert("motgagemonth="+motgagemonth);

    if (sflag == 1)
    {

      motgagemonth = 0;
    }

    var newfdf = number_format(motgagemonth, 0);

    $('#amtmotgagemonth').html("₪" + " " + newfdf);



  }








  function number_format(number, decimals, decPoint, thousandsSep) {
    decimals = decimals || 0;
    number = parseFloat(number);
    if (!decPoint || !thousandsSep) {
      decPoint = '.';
      thousandsSep = ',';
    }
    var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
    var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
    var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
    var formattedNumber = "";
    while (numbersString.length > 3) {
      formattedNumber += thousandsSep + numbersString.slice(-3)
      numbersString = numbersString.slice(0, -3);
    }
    return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
  }



</script>

@endsection