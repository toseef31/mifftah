<?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$latitude = $geo['geoplugin_latitude'];
$longitude = $geo['geoplugin_longitude'];
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
?>
@extends('dashboardUser.dash_master_layout')
{{--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">--}}
{{--<link rel="stylesheet" href="{{ asset('/css/form-css/bootstrap.min.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('/css/form-css/font-awesome.min.css') }}">--}}
<link rel="stylesheet" href="{{ asset('/css/form-css/form-elements.css') }}">
<link rel="stylesheet" href="{{ asset('/css/form-css/style.css') }}">
@section('content')
  <style>
    #mapCanvas {
      width: 100%;
      height: 220px;
      float: left;
    }
    
    #infoPanel {
      float: left;
      margin-left: 10px;
    }
    
    #infoPanel div {
      margin-bottom: 5px;
    }
  </style>
  
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul class="list-group">
          @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ url('user/addlist') }}" method="POST" role="form" class="formstylign f1" enctype="multipart/form-data" id="newvalentery" style="padding: 0px !important;">
      <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
        {{ csrf_field() }}
        <div class="f1-steps">
          <div class="f1-progress">
            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
          </div>
          <div class="f1-step active">
            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
            <p><?= $lang[1021][$current] ?></p>
          </div>
          <div class="f1-step">
            <div class="f1-step-icon">
              <i class="fa fa-key"></i>
            </div>
            <p><?= $lang[830][$current] ?></p>
          </div>
          <div class="f1-step">
            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
            <p><?= $lang[1022][$current] ?></p>
          </div>
        </div>
        <fieldset>
          <div class="listingdetailswrp fulwidthm left mgnTB30">
            <div class="indexwrpaer">
              <div class=" fulwidthm left pdg20 graybg">
                <div class="col-sm-12 col-xs-12 nopadding">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[1023][$current] ?>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> <?= $lang[609][$current] ?></div>
                      </div>
                    </label>
                    <input id="" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="Title" autocomplete="off" name="title" required/>
                  </div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[608][$current] ?>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"><?= $lang[609][$current] ?></div>
                      </div>
                    </label>
                    <select id="" class="listingselect text-left" style="width: 100%" name="type" required>
                      <option value="rent"><?= $lang[611][$current] ?></option>
                      <option valu e="sale"><?= $lang[610][$current] ?></option>
                    </select>
                  </div>
                  
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i><?= $lang[612][$current] ?></label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> <?= $lang[613][$current] ?>
                      </div>
                    </div>
                    <input id="listcity" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="City/Region" autocomplete="off" name="region"/></div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i><?= $lang[614][$current] ?></label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> <?= $lang[615][$current] ?></div>
                    </div>
                    <input id="address" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="House Name/Apartment Number/Street" name="street" value=""/>
                    <input id="latitude" name="latitude" type="hidden" value="" required/>
                    <input id="longitude" name="longitude" type="hidden" value="" required/>
                  </div>
                  <div id="mapCanvas"></div>
                  <div id="infoPanel">
                    <b><?= $lang[1024][$current] ?></b>
                    <div id="markerStatus"><i><?= $lang[1025][$current] ?></i></div>
                  </div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><?= $lang[1026][$current] ?></label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"><?= $lang[1027][$current] ?></div>
                    </div>
                    <input id="pincode" type="text" class="fulwidthm commoninput commoninputborder pdgS05" name="pincode"/>
                  </div>
                </div>
                <div class="col-xs-3 hidden-xs nopaddingR"></div>
              </div>
            </div>
          </div>
          <div class="f1-buttons">
            <input class="btn btn-next" type="submit" name="submit" id="submit" value="Submit" style="max-width: 120px; margin-right: 17px;background-color: orangered; color: white;"/>
            {{--<button type="button" class="btn btn-next" form="newvalentery"><?= $lang[1028][$current] ?></button>--}}
          </div>
        </fieldset>
      </section>
    </form>
  </div>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    var geocoder = new google.maps.Geocoder();
    function geocodePosition(pos) {
      geocoder.geocode({
        latLng: pos
      }, function (responses) {
        if (responses && responses.length > 0) {
          updateMarkerAddress(responses[0].formatted_address);
        } else {
          updateMarkerAddress('Cannot determine address at this location.');
        }
      });
    }
    
    function updateMarkerStatus(str) {
      document.getElementById('markerStatus').innerHTML = str;
    }
    
    function updateMarkerPosition(latLng) {
      document.getElementById("latitude").setAttribute('value', latLng.lat());
      document.getElementById("longitude").setAttribute('value', latLng.lng());
//      $('#latitude').attr('value', latLng.lat());
//      $('#longitude').attr('value', latLng.lng());
    }
    
    function updateMarkerAddress(str) {
//      document.getElementById('address').innerHTML = str;
      $('#address').attr('value', str);
    }
    
    function initialize() {
      var latLng = new google.maps.LatLng(<?= (!empty($latitude)) ? $latitude : 25.204849; ?> , <?= (!empty($longitude)) ? $longitude : 55.270783; ?>);
      var map = new google.maps.Map(document.getElementById('mapCanvas'), {
        zoom: 15,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var marker = new google.maps.Marker({
        position: latLng,
        title: 'Point A',
        map: map,
        draggable: true
      });
      
      // Update current position info.
      updateMarkerPosition(latLng);
      geocodePosition(latLng);
      
      // Add dragging event listeners.
      google.maps.event.addListener(marker, 'dragstart', function () {
        updateMarkerAddress('Dragging...');
      });
      
      google.maps.event.addListener(marker, 'drag', function () {
        updateMarkerStatus('Dragging...');
        updateMarkerPosition(marker.getPosition());
      });
      
      google.maps.event.addListener(marker, 'dragend', function () {
        updateMarkerStatus('Drag ended');
        geocodePosition(marker.getPosition());
      });
    }
    
    // Onload handler to fire off the app.
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa-O7jKdRNT_YuLql_7dDfJ6lgoCG0G2U&libraries=places&sensor=false&callback=initAutocomplete"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="~/js/jquery.geocomplete.min.js"></script>
  <script type="text/javascript">
    $('#newvalentery').on('keyup keypress', function (e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
//        e.preventDefault();
        return false;
      }
    });
  </script>
  <script src="{{ asset('/js/forms-js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/jquery.backstretch.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/retina-1.1.0.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/scripts.js') }}"></script>
@endsection
 
    
        
      
  