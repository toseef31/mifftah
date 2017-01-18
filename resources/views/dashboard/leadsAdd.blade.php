@extends('dashboard.master')
<!-- START PAGE HEADING -->
@section('content')
  
  <div class="app-heading-container app-heading-bordered bottom">
    <ul class="breadcrumb">
      <li><a href="#">Application</a></li>
      <li class="active">Dashboard</li>
    </ul>
  </div>
  <!-- END PAGE HEADING -->
  <!-- START PAGE CONTAINER -->
  <div class="container">
    <div class="block block-condensed">
      <!-- START HEADING -->
      <div class="app-heading app-heading-small">
        <div class="title">
          <h5>Manage Leads </h5>
          <p>Manage Leads Settings</p>
        </div>
      </div>
      <!-- END HEADING -->
      <?php if(count($errors) > 0):?>
      <?php foreach($errors->all() as $error):?>
      <div class="col-md-6">
        <div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
          <div class="alert-icon">
            <span class="icon-cross-circle"></span>
          </div>
          <strong></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
        </div>
      </div>
      <div class="block-content">
      <?php endforeach?>
      <?php endif?>
      <!-- ======================== mian form start ======================== -->
        <!-- simple form -->
        <form class="form-horizontal" role="form" method="post" action="">
          {{  csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Title<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="title" id="title" value="" placeholder="title"/>
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Type <span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="type">
                    <option value="rent">Rent</option>
                    <option value="sell" >Sell</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Phone<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="phone" id="phone" value="" placeholder="Phone"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Region<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="region" id="region" value="" placeholder="region"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Street<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="street" id="street" value="" placeholder="region"/>
                </div>
              </div>
            </div>
            <br/>
             <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Map<span>*</span></label>
                <div class="col-sm-9">
                  <input id="address" type="text" class="form-control" placeholder="House Name/Apartment Number/Street" name="street" value=""/>
                  <input id="latitude" name="latitude" type="hidden" value="" required/>
                  <input id="longitude" name="longitude" type="hidden" value="" required/><br>
                  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
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
 $('#latitude').attr('value',latLng.lat()); 
     $('#longitude').attr('value',latLng.lng());
}

function updateMarkerAddress(str) {
   $('#address').attr('value',str);
}

function initialize() {
  var latLng = new google.maps.LatLng(23.4241, 53.8478);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
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
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });

  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });

  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
                        <style>
                        #mapCanvas {
                          width: 469px;
                          height: 253px;
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

                        <div id="mapCanvas"></div>
                        <div id="infoPanel">
                          <b>Marker status:</b>
                          <div id="markerStatus"><i>Click and drag the marker.</i></div>
                        </div>
                </div>
              </div>
            </div>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">homesize<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="homesize" id="homesize" value="" placeholder="homesize"/>
                </div>
              </div>
            </div>
            <br/>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">price<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="price" id="price" value="" placeholder="price"/>
                </div>
              </div>
            </div>
            <br/>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">availability<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="availability" id="availability" value="" placeholder="availability"/>
                </div>
              </div>
            </div>
            <br/>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">hometype<span>*</span></label>
                <div class="col-sm-9">
                  
                  <select class="form-control" name="hometype">
                    <option value="Single Family">Single Family</option>
                    <option value="Multi Family">Multi Family</option>
                    <option value="Apartment" >Apartment</option>
                    <option value="Vacant Land">Vacant Land</option>
                    <option value="apartamente">apartamente</option>
                    <option value="Pocket Listings">Pocket Listings</option>
                    <option value="Farm">Farm</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">infor<span>*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="info" id="info" cols="30" rows="10"></textarea>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Architectural Model<span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="architecturalmodel">
                    <option value="Colonial" >Colonial</option>
                    <option value="Contemporary" >Contemporary</option>
                    <option value="Modern" >Modern</option>
                    <option value="Medieval" >Medieval</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Year built / Modified<span>*</span></label>
                <div class="col-sm-9">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group ">
                        <input class="form-control" type="date" name="yearbuilt" id="yearbuilt" value=""/>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group  ">
                        <input class="form-control" type="date" name="yearmodified" id="yearmodified" value=""/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Lot Type<span>*</span></label>
                <div class="col-sm-9">
                  
                  <select class="form-control" name="lottype">
                    <option value="acer" >Acer</option>
                    <option value="squ" >Square</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Stories<span>*</span></label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="stories" id="stories" value="" placeholder="stories"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Forclosure<span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="forclosure">
                    <option value="1" >Yes</option>
                    <option value="0" >No</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Other Rent detail<span>*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="otherrentdetail" id="otherrentdetail" style="width: 100%" rows="10"></textarea>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Video Link<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="videolink" id="videolink" value="" placeholder="videolink"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Beds / Bathroms<span>*</span></label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-6">
                      <input class="form-control" type="text" name="beds" id="beds" value="" placeholder="beds"/>
                    </div>
                    <div class="col-sm-6">
                      <input class="form-control" type="text" name="bathrooms" id="bathrooms" value="" placeholder="bathrooms"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Open Date<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="date" name="opendate" id="opendate" value="" placeholder="opendate"/>
                </div>
              </div>
            </div>
            <br/>
            
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Start / End Time<span>*</span></label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-6">
                      {{--<input class="form-control" type="time" name="starttime" id="starttime" value=""/>--}}
                    </div>
                    <div class="col-sm-6">
                      {{--<input class="form-control" type="time" name="endtime" id="endtime" value=""/>--}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Availabilities<span>*</span></label>
                <div class="col-sm-9">
                  
                  <div class="row">
                    <div class="col-sm-6">
                      
                      <label>Office</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="office" value="1" > Yes</label>
                        <label><input type="radio" name="office" value="0" > No</label>
                      </div>
                    
                    </div>
                    <div class="col-sm-6">
                      <label>dinning</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="dinning" value="1"> Yes</label>
                        <label><input type="radio" name="dinning" value="0"> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>family</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="family" value="1"> Yes</label>
                        <label><input type="radio" name="family" value="0"> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>living</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="living" value="1"> Yes</label>
                        <label><input type="radio" name="living" value="0"> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>guest</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="guest" value="1"> Yes</label>
                        <label><input type="radio" name="guest" value="0"> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>kitchen</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="kitchen" value="1"> Yes</label>
                        <label><input type="radio" name="kitchen" value="0"> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>kitchen</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="kitchen" value="1"> Yes</label>
                        <label><input type="radio" name="kitchen" value="0"> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>cabelTv</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="cabelTv" value="1"> Yes</label>
                        <label><input type="radio" name="cabelTv" value="0"> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>fans</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="fans" value="1"> Yes</label>
                        <label><input type="radio" name="fans" value="0"> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>internet</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="internet" value="1"> Yes</label>
                        <label><input type="radio" name="internet" value="0"> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>securitysys</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="securitysys" value="1"> Yes</label>
                        <label><input type="radio" name="securitysys" value="0"> No</label>
                      </div>
                    
                    </div>
                    <div class="col-sm-6">
                      <label>wifi</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="wifi" value="1"> Yes</label>
                        <label><input type="radio" name="wifi" value="0"> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>balcony</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="balcony" value="1"> Yes</label>
                        <label><input type="radio" name="balcony" value="0"> No</label>
                      </div>
                    
                    </div>
                    <div class="col-sm-6">
                      <label>pool</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="pool" value="1"> Yes</label>
                        <label><input type="radio" name="pool" value="0"> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>lawn</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="lawn" value="1"> Yes</label>
                        <label><input type="radio" name="lawn" value="0"> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>garden</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="garden" value="1"> Yes</label>
                        <label><input type="radio" name="garden" value="0"> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>fence</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="fence" value="1"  > Yes</label>
                        <label><input type="radio" name="fence" value="0" > No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>gym</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="gym" value="1"  > Yes</label>
                        <label><input type="radio" name="gym" value="0"  > No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="app-checkbox">
                        <select class="form-control" name="floortye">
                          <option value="tile">tile</option>
                          <option value="carpet">carpet</option>
                          <option value="hardwood">hardwood</option>
                          <option value="concrete">concrete</option>
                          <option value="granite">granite</option>
                          <option value="marbel">marbel</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>aircondition</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="aircondition" value="1"  > Yes</label>
                        <label><input type="radio" name="aircondition" value="0"  > No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>heater</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="heater" value="1"  > Yes</label>
                        <label><input type="radio" name="heater" value="0" > No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>naturalAir</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="naturalAir" value="1" > Yes</label>
                        <label><input type="radio" name="naturalAir" value="0"  > No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>garagetype</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="garagetype" value="1"  > Yes</label>
                        <label><input type="radio" name="garagetype" value="0"  > No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>buildingview</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="buildingview" value="1"  > Yes</label>
                        <label><input type="radio" name="buildingview" value="0" > No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                
                </div>
              </div>
            </div>
            <br/>
            
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="row">
                <div class="col-sm-6">
                <span class="pull-right">&nbsp;
                 <button type="submit" class="btn btn-info ">Update</button>
                </span>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END PAGE CONTAINER -->
@endsection