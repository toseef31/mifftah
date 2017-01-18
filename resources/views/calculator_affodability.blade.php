@extends('layouts.master_layout') 
<link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.css" /> 
<link rel="stylesheet" type="text/css" href="css/rangeslider/ion.rangeSlider.skinFlat.css" />
@section('content') 
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








  $('#inser').click(function () {


    if ($('#citysearch').val().trim() == "")
    {

      alert("Please Select a Location");

      return false;

    }



    var plcesxx = Get_Cookie('location_temp');

    plcesxx = plcesxx.replace(/\+/g, ' ');

    if ($('#citysearch').val().trim().indexOf(plcesxx) == -1)
    {

      alert("Please Select a Location from the List");
      return false;

    }







    if ($('#location').val() == "" || $('#lat').val() == "" || $('#long').val() == "")
    {
      alert("Please Select a Location");

    }
    var cvii = "";


    cvii = "All-Homes";


    var txct = [];
    var plces = Get_Cookie('location_temp');
    plces = plces.replace(/\+/g, ' ');
    txct = plces.split(",");

    var necnt = txct.length;
    var ncxds = "";
    if (necnt > 1)
    {
      ncxds = txct[0].trim().replace(/ /g, "-").replace(/\./g, "") + "-" + txct[1].trim().replace(/ /g, "-").replace(/\./g, "");
    } else if (necnt == 1)
    {
      ncxds = txct[0].trim().replace(/ /g, "-").replace(/\./g, "");
    }

    var url = 'http://inout-realestate.demo.inoutscripts.net/search/homes/8/' + cvii + "/" + ncxds;

    window.location = url;


    var newssd = window.location.href;
    var getseatd = newssd.split("../index.html");

    var codeb = "homes";
    if ($.inArray(codeb, getseatd) > -1) {

    } else {



    }



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
<script type="text/javascript">

  function logout()
  {

    $.ajax({

      type: "POST", cache: false,

      url: "http://inout-realestate.demo.inoutscripts.net/index/logout",

      success: function (data) {
        //alert(data);		
        if (data == "1")
        {
          location.reload(true);
        }



      }
    });
  }


  function login()
  {

    var username = $('#username').val().trim();

    var password = $('#lpassword').val();

    //

    var pass_len = password.length;


    if (username == "")
    {
      $('#unameerror').html('Please Enter Your Username');

      $('#unameerror').addClass('show');

      setTimeout(function () {
        $('#unameerror').removeClass('show');
      }, 1700);


    }
    if (password == "")
    {
      $('#passerror').html('Please Enter Your Password');
      $('#passerror').addClass('show');

      setTimeout(function () {
        $('#passerror').removeClass('show');
      }, 1700);

      return false;
    }

    /**/
    $.ajax({

      type: "POST", cache: false,

      url: "http://inout-realestate.demo.inoutscripts.net/index/loginprocess",

      data: {'username': username, 'pword': password},

      success: function (datas) {
        var dataaa = datas.split("###");
        var data = dataaa[0];

        if (data == "1")
        {


          $('#unameerror').html('Please Enter Your Username');

          $('#unameerror').addClass('show');

          setTimeout(function () {
            $('#unameerror').removeClass('show');
          }, 1700);






          return false;

        }
        if (data == "2")
        {

          $('#passerror').html('Please Enter Your Password');

          $('#passerror').addClass('show');

          setTimeout(function () {
            $('#passerror').removeClass('show');
          }, 1700);




          return false;

        }
        if (data == "3")
        {
          if (dataaa[1] == 0)
          {
            var url = '../index.html';


          } else
          {

            var url = '../index.html';
          }
          window.location = url;
        }
        if (data == "4")
        {

          $('#passerror').html('Invalid Email or Password ');

          $('#passerror').addClass('show');

          setTimeout(function () {
            $('#passerror').removeClass('show');
          }, 1700);



          return false;

        }


      }
    });
  }



  function register()
  {

    var fname = $('#fname').val().trim();

    var lname = $('#lname').val().trim();
    //var email=$('#emailuser').val().trim();
    var email = document.getElementById("emailuser").value;

    var cpassword = $('#cpassword').val();
    var password = $('#password').val();
    var agentstatus = $('#agentstatus').val();
    if (fname == "")
    {

      $('#fnameerror').html('Please Enter Your First Name');

      $('#fnameerror').addClass('show');
      setTimeout(function () {
        $('#fnameerror').removeClass('show');
      }, 1700);


      return false;
    }
    if (lname == "")
    {

      $('#lnameerror').html('Please Enter Your Last Name');

      $('#lnameerror').addClass('show');
      setTimeout(function () {
        $('#lnameerror').removeClass('show');
      }, 1700);


      return false;
    }
    if (/^[A-Za-z\s]+$/.test(fname) == false)
    {
      $('#fnameerror').html('First Name Must Contain only Letters');

      $('#fnameerror').addClass('show');
      setTimeout(function () {
        $('#fnameerror').removeClass('show');
      }, 1700);


      return false;
    }
    if (/^[A-Za-z\s]+$/.test(lname) == false)
    {
      $('#lnameerror').html('Last Name Must Contain only Letters');


      $('#lnameerror').addClass('show');
      setTimeout(function () {
        $('#lnameerror').removeClass('show');
      }, 1700);


      return false;
    }
    if (email == "")
    {

      $('#emailerror').html('Please Enter Your Email');

      $('#emailerror').addClass('show');
      setTimeout(function () {
        $('#emailerror').removeClass('show');
      }, 1700);


      return false;
    }
    var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;

    if (!regex.test(email)) {
      $('#emailerror').html('Invalid Email');

      $('#emailerror').addClass('show');
      setTimeout(function () {
        $('#emailerror').removeClass('show');
      }, 1700);

      return false;
    }

    if (password == "")
    {

      $('#passwrderror').html('Please Enter a Password');

      $('#passwrderror').addClass('show');
      setTimeout(function () {
        $('#passwrderror').removeClass('show');
      }, 1700);


      return false;
    }
    if (cpassword == "")
    {

      $('#cpassworderror').html('Please Confirm Your Password');

      $('#cpassworderror').addClass('show');
      setTimeout(function () {
        $('#cpassworderror').removeClass('show');
      }, 1700);


      return false;
    }
    var min_password = '4';
    var pass_len = password.length;
    var cpass_len = cpassword.length;
    if (pass_len < min_password)
    {
      $('#passwrderror').html('Minimum Password Length Must be ' + min_password);

      $('#passwrderror').addClass('show');
      setTimeout(function () {
        $('#passwrderror').removeClass('show');
      }, 1700);


      return false;
    }

    if (cpass_len < min_password)
    {
      $('#cpassworderror').html('Minimum Password Length Must be ' + min_password);

      $('#cpassworderror').addClass('show');
      setTimeout(function () {
        $('#cpassworderror').removeClass('show');
      }, 1700);



      return false;
    }
    if (password != cpassword)
    {
      $('#cpassworderror').html('Password and Confirm password Must be Same');

      $('#cpassworderror').addClass('show');
      setTimeout(function () {
        $('#cpassworderror').removeClass('show');
      }, 1700);


      return false;
    }
    //var emailid=JSON.stringify(email);

    $.ajax({

      type: "POST", cache: false,

      url: "http://inout-realestate.demo.inoutscripts.net/index/registerprocess",

      data: {'pword': password, 'cpword': cpassword, 'fname': fname, 'lname': lname, 'email': email, 'agentstatus': agentstatus},

      success: function (data) {
        //alert(data);

        if (data == "1")
        {



          $('#fnameerror').html('Please Enter Your First Name');

          $('#fnameerror').addClass('show');
          setTimeout(function () {
            $('#fnameerror').removeClass('show');
          }, 1700);


          return false;




        } else if (data == "2")
        {
          $('#lnameerror').html('Please Enter Your Last Name');

          $('#lnameerror').addClass('show');
          setTimeout(function () {
            $('#lnameerror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "3")
        {
          $('#emailerror').html('Please Enter Your Email');

          $('#emailerror').addClass('show');
          setTimeout(function () {
            $('#emailerror').removeClass('show');
          }, 1700);


          return false;
        } else if (data == "5")
        {

          $('#passwrderror').html('Please Enter a Password');

          $('#passwrderror').addClass('show');
          setTimeout(function () {
            $('#passwrderror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "6")
        {

          $('#passwrderror').html('Minimum Password Length Must be ' + min_password);

          $('#passwrderror').addClass('show');
          setTimeout(function () {
            $('#passwrderror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "7")
        {

          $('#cpassworderror').html('Please Confirm Your Password');

          $('#cpassworderror').addClass('show');
          setTimeout(function () {
            $('#cpassworderror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "8")
        {

          $('#cpassworderror').html('Password and Confirm password Must be Same');

          $('#cpassworderror').addClass('show');
          setTimeout(function () {
            $('#cpassworderror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "9")
        {

          $('#emailerror').html('Invalid Email');


          $('#emailerror').addClass('show');
          setTimeout(function () {
            $('#emailerror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "10")
        {

          $('#fnameerror').html('First Name Must Contain only Letters');


          $('#fnameerror').addClass('show');
          setTimeout(function () {
            $('#fnameerror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == "11")
        {

          $('#lnameerror').html('Last Name Must Contain only Letters');


          $('#lnameerror').addClass('show');
          setTimeout(function () {
            $('#lnameerror').removeClass('show');
          }, 1700);


          return false;

        } else if (data == 12)
        {
          $('#cpassworderror').html('Minimum Password Length Must be ' + min_password);

          $('#cpassworderror').addClass('show');
          setTimeout(function () {
            $('#cpassworderror').removeClass('show');
          }, 1700);


          return false;
        } else if (data == 13)
        {
          $('#emailerror').html('This Email already Exists ');

          $('#emailerror').addClass('show');
          setTimeout(function () {
            $('#emailerror').removeClass('show');
          }, 1700);


          return false;
        } else
        {
          var cx = data.split("-");
          var id = cx[0];
          var defaultsatys = cx[1];

          if (defaultsatys == 0)
          {

            $('#regs').hide();
            $('#msg1').html('Successfully Registered <p class="robotoregular fontsize13 lgraytext">Your account is currently in Pending Status. Admin will verify and approve it soon.</p> ');
            //$('#msg2').html('Your account is currently in Pending Status. Admin will verify and approve it soon.');
          } else {


            $('#regs').hide();
            $('#msg1').html('Successfully Registered <p class="robotoregular fontsize13 lgraytext">Thank You for Registering with us. Your account is now active.</p> ');
            //$('#msg2').html('Thank You for Registering with us. Your account is now active.');


          }





          $.ajax({

            type: "POST", cache: false,

            url: "http://inout-realestate.demo.inoutscripts.net/index/mailsen",

            data: {'id': id}


          });

          if (defaultsatys == 1)
          {
            window.location = "../index.html";

            //location.reload(true);
          }
        }

      }
    });


  }
  function forgotpassword()
  {
    window.location.href = "../forgotpassword/forgotpassword.html";
  }

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
<div class="mainindexcontainer">
 <div class="mainontainer_in fulwidthm left">
  <div class="indexcaluclatorwrp whitebg fulwidthm left mgnB30 pdg20">


   <div class="cal_tabwrp fulwidthm left">
    <div class="cal_tabbox active">

     <h3 class="robotolight fontsize24 mgnB20">Home Affordability Calculator</h3>           
     <p class="tabsp lgraytext font-size14">Use this calculator to determine the price limit of a house you can afford. By entering details about your monthly affordable payment, down payment, and  loan tenure. you can estimate the maximum budget you can afford by these calculations.</p>

     <div class="clearfix"></div>
     <div class="row mgnT60">

      <div class="calculatorleft col-sm-4 col-xs-12">

       <div class="calrow fulwidthm left mgnB20">
        <label class="callabel robotoregular fontsize16 mgnB10 graytext">Monthly  Payment (₪)</label>
        <input id="monthlypayment" class="gcinput fulwidthm left" type="text" value="2000">
        <div class=" rederror fulwidthm left" id="err1" style="visiblity:hidden;"></div>
       </div>
       <div class="calrow fulwidthm left mgnB20">
        <label class="callabel robotoregular fontsize16 mgnB10 graytext"> Down Payment (₪)</label>
        <input id="downpayment" class="gcinput fulwidthm left" type="text" value="20000">
        <div class=" rederror fulwidthm left" id="err2" style="visiblity:hidden;"></div>
       </div>

       <div class="calrow fulwidthm left mgnB20">
        <label class="callabel robotoregular fontsize16 mgnB10 graytext"> Rate of Interest (%)</label>
        <input id="rateofinterest" class="gcinput fulwidthm left" type="text" value="3.98">
        <div class=" rederror fulwidthm left" id="err3" style="visiblity:hidden;"></div>
       </div>
       <div class="calrow fulwidthm left mgnB20">
        <label class="callabel robotoregular fontsize16 mgnB10 graytext">No of Years</label>
        <select id="noofyears" class="formselect" style="width:100%">
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
        <button id="homeaffordcalbut" class="whitetext lblue_bg fontsize16 border-radius3 pdg10 clacluatebtn fulwidthm left">Calculate</button>
       </div>
      </div>
      <div class="calcuright col-sm-7 col-xs-12 pull-right">
       <div class="clacicon dblue_bg whitetext"><i class="flaticon-home153"></i></div>
       <div class="calcuright_in graybg pdg20">
        <div class="clacamountwrp text-center">
         <p class="fontsize18 graytext robotoregular">You can afford a house up to </p> 
         <h2 class="amountcal fontsize30 robotoregular" id="amthomeafford">₪ 439,936</h2>
         <p class="robotoregular fontsize13 mgnTB20">Based on your income, a house at this price should fit comfortably within your budget.</p>
         <div class=" clearfix"></div>
         <div class="indexcalpricerange">
          <div class="indexcalpricerangeimgs fulwidthm left mgnB10">
           <div class="pricerangeleft pricon left"><i class="flaticon-tag77"></i></div>
           <div class="pricerangeright pricon right"><i class="flaticon-home153"></i></div>
          </div>
          <div class="clearfix"></div>
          <input type="text" id="range" value="222" name="range" />

         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- tab1 ends -->

   <!--  tab2 ends -->



   <!-- Tab3 -->
  </div>
 </div>
</div>
<script src="js/rangeslider/ion.rangeSlider.min.js"></script>

<script type="text/javascript">
  var affordminv = '1000';

  var homeaffoardvalu = parseInt(affordminv) * 2;
  $("#range").ionRangeSlider({
    type: "single",
    min: '1000',
    max: '100000',
    from: homeaffoardvalu,
    to: 50000,

    prefix: "₪",
    grid: false,
    grid_num: 10,
    max_postfix: "<b>+<b>",
    prettify_enabled: false,
    onFinish: function (data) {

      // var value = $(this).prop("value");


      $('#monthlypayment').val(data.from);
      $('#rateofinterest').val('3.98');

      $("#homeaffordcalbut").click();


    }
  });




</script>

<script type="text/javascript">

  $(document).ready(function () {

    var affordmin = '1000';

    var homeaffoardval = parseInt(affordmin) * 2;
    $('#monthlypayment').val(homeaffoardval);

    firstone();


    function removedisps() {

      $('.rederror').css('visibility', 'hidden');
      return true;

    }
    $("#homeaffordcalbut").click(function () {


      var monthlypayment = $('#monthlypayment').val().trim();
      var downpayment = $('#downpayment').val().trim();
      var rateofinterest = $('#rateofinterest').val().trim();
      var noofyears = $('#noofyears').val().trim();


      if (monthlypayment == "")
      {
        $('#err1').html("Monthly payment cannot be null.");
        $('#err1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (monthlypayment < 0)
      {
        $('#err1').html("Please enter a positive value.");
        $('#err1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }


      if (isNaN(monthlypayment))
      {
        $('#err1').html("Monthly payment must be a number.");
        $('#err1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (!parseInt(monthlypayment) > 0)
      {
        $('#err1').html("Monthly payment must be greater than zero");
        $('#err1').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }

      if (downpayment != "")
      {
        if (isNaN(downpayment))
        {
          $('#err2').html("Down payment must be a number.");
          $('#err2').css('visibility', 'visible');
          setTimeout(removedisps, 3000);
          return false;
        }
        if (downpayment < 0)
        {
          $('#err2').html("Please enter a positive value.");
          $('#err2').css('visibility', 'visible');
          setTimeout(removedisps, 3000);
          return false;
        }
        if (parseInt(downpayment) != 0)
        {
          if ((!parseInt(downpayment) > 0))
          {
            $('#err2').html("Down payment must be greater than or equal to zero.");
            $('#err2').css('visibility', 'visible');
            setTimeout(removedisps, 3000);

            return false;
          }
        }

      }



      if (rateofinterest == "")
      {
        $('#err3').html("Rate of interest cannot be null.");
        $('#err3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (rateofinterest < 0)
      {
        $('#err3').html("Please enter a positive value.");
        $('#err3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (!parseInt(rateofinterest) > 0)
      {
        $('#err3').html("Rate of interest must be greater than zero.");
        $('#err3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }
      if (parseInt(rateofinterest) > 20)
      {
        $('#err3').html("Rate of interest must be less than 20.");
        $('#err3').css('visibility', 'visible');
        setTimeout(removedisps, 3000);

        return false;
      }








      // 2000((1+0.00331667)^360-1)/(0.00331667(1+0.00331667)^360






      var monthpay = parseFloat(monthlypayment);


      var slider = $("#range").data("ionRangeSlider");

      if (monthpay > 50000)
      {
        slider.update({
          from: 50000
        });
      } else {

        slider.update({
          from: monthpay
        });


      }
      if (downpayment != '')
      {
        var downpay = parseFloat(downpayment);
      } else
      {
        var downpay = 0;
      }
      var rate = parseFloat(rateofinterest);
      var noyr = parseInt(noofyears);

      var ratenomonth = parseFloat(rate) / (12 * 100);//r
      //alert(ratenomonth);
      var rateadd = parseFloat(ratenomonth) + 1;//r+1
      var nomonth = noyr * 12;//n
      var i;
      var numpow = 1;
      for (i = 1; i <= nomonth; i++)
      {

        numpow = parseFloat(numpow) * parseFloat(rateadd);

      }



      var emi = monthpay;


      var homeaffor = (emi * (numpow - 1)) / (ratenomonth * numpow);

      homeaffor += downpay;


      var newfdf = number_format(homeaffor, 0);

      //
      //alert("homeaffor="+homeaffor);
      //	homeaffor=Math.round(homeaffor,2);
      $('#amthomeafford').html("₪" + " " + newfdf);


    });


  });

  function firstone()

  {
    var monthlypayment = $('#monthlypayment').val().trim();
    var downpayment = $('#downpayment').val().trim();
    var rateofinterest = $('#rateofinterest').val().trim();
    var noofyears = $('#noofyears').val().trim();


    if (monthlypayment == "")
    {
      $('#err1').html("Monthly payment cannot be null.");
      $('#err1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (monthlypayment < 0)
    {
      $('#err1').html("Please enter a positive value.");
      $('#err1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }


    if (isNaN(monthlypayment))
    {
      $('#err1').html("Monthly payment must be a number.");
      $('#err1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (!parseInt(monthlypayment) > 0)
    {
      $('#err1').html("Monthly payment must be greater than zero");
      $('#err1').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }

    if (downpayment != "")
    {
      if (isNaN(downpayment))
      {
        $('#err2').html("Down payment must be a number.");
        $('#err2').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (downpayment < 0)
      {
        $('#err2').html("Please enter a positive value.");
        $('#err2').css('visibility', 'visible');
        setTimeout(removedisps, 3000);
        return false;
      }
      if (parseInt(downpayment) != 0)
      {
        if ((!parseInt(downpayment) > 0))
        {
          $('#err2').html("Down payment must be greater than or equal to zero.");
          $('#err2').css('visibility', 'visible');
          setTimeout(removedisps, 3000);

          return false;
        }
      }

    }



    if (rateofinterest == "")
    {
      $('#err3').html("Rate of interest cannot be null.");
      $('#err3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (rateofinterest < 0)
    {
      $('#err3').html("Please enter a positive value.");
      $('#err3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (!parseInt(rateofinterest) > 0)
    {
      $('#err3').html("Rate of interest must be greater than zero.");
      $('#err3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }
    if (parseInt(rateofinterest) > 20)
    {
      $('#err3').html("Rate of interest must be less than 20.");
      $('#err3').css('visibility', 'visible');
      setTimeout(removedisps, 3000);

      return false;
    }








    // 2000((1+0.00331667)^360-1)/(0.00331667(1+0.00331667)^360






    var monthpay = parseFloat(monthlypayment);


    var slider = $("#range").data("ionRangeSlider");

    if (monthpay > 50000)
    {
      slider.update({
        from: 50000
      });
    } else {

      slider.update({
        from: monthpay
      });


    }
    if (downpayment != '')
    {
      var downpay = parseFloat(downpayment);
    } else
    {
      var downpay = 0;
    }
    var rate = parseFloat(rateofinterest);
    var noyr = parseInt(noofyears);

    var ratenomonth = parseFloat(rate) / (12 * 100);//r
    //alert(ratenomonth);
    var rateadd = parseFloat(ratenomonth) + 1;//r+1
    var nomonth = noyr * 12;//n
    var i;
    var numpow = 1;
    for (i = 1; i <= nomonth; i++)
    {

      numpow = parseFloat(numpow) * parseFloat(rateadd);

    }



    var emi = monthpay;


    var homeaffor = (emi * (numpow - 1)) / (ratenomonth * numpow);

    homeaffor += downpay;


    var newfdf = number_format(homeaffor, 0);

    //
    //alert("homeaffor="+homeaffor);
    //	homeaffor=Math.round(homeaffor,2);
    $('#amthomeafford').html("₪" + " " + newfdf);


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

  });


</script>
@endsection