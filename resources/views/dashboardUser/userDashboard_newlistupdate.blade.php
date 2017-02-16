@extends('dashboardUser.dash_master_layout')
<?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$latitude = $geo['geoplugin_latitude'];
$longitude = $geo['geoplugin_longitude'];
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
?>
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
  <!-- if there are any session messages -->
    @if(Session::has('sucess'))
      <div class="alert alert-success">
        {{ Session::get('sucess') }}
      </div>
    @endif
    @if(Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    @endif
    <form action="{{ url('user/updatelist/'. $data->id) }}" method="POST" role="form" class="formstylign f1" enctype="multipart/form-data" id="newvalentery" style="padding: 0px !important;">
      <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
        {{ csrf_field() }}
        <div class="f1-steps">
          <div class="f1-progress">
            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
          </div>
          <div class="f1-step active">
            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
            <p>Add Location</p>
          </div>
          <div class="f1-step">
            <div class="f1-step-icon">
              <i class="fa fa-key"></i>
            </div>
            <p>Details</p>
          </div>
          <div class="f1-step">
            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
            <p>Publish</p>
          </div>
        </div>
        
        <fieldset>
          
          <div class="listingdetailswrp fulwidthm left mgnTB30">
            <div class="indexwrpaer">
              <div class=" fulwidthm left pdg20 graybg">
                <div class="col-sm-12 col-xs-12 nopadding">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10">Title
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Please Choose a label of the listing you are about to add from here.</div>
                      </div>
                    </label>
                    <input id="" type="text" class="fulwidthm commoninput commoninputborder pdgS05" name="title" value="<?= $data->title ?>" required/>
                  </div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10">Label
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Please Choose a label of the listing you are about to add from here.</div>
                      </div>
                    </label>
                    <select id="" class="listingselect text-left" style="width: 100%" name="type" required>
                      <option value="rent" <?= ($data->type == 'rent') ? 'selected' : ''; ?>>Property For Rent</option>
                      <option valu e="sale" <?= ($data->type == 'sale') ? 'selected' : ''; ?>>Property For Sale</option>
                    </select>
                  </div>
                  
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i>&nbsp;City/Region</label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> Please choose the city in which your property is located. Make sure you choose from the list, rather than typing in your place. Also make sure that
                        you give the correct city for the best results.
                      </div>
                    </div>
                    <input id="listcity" type="text" class="fulwidthm commoninput commoninputborder pdgS05" value="<?= $data->region ?>" name="region"/></div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i>&nbsp;House/Street Address</label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> You can give the house name or house number, street number etc to pin point your property location.</div>
                    </div>
                    <input id="address" type="text" class="fulwidthm commoninput commoninputborder pdgS05" name="street" value="<?= $data->street ?>"/>
                    <input id="latitude" name="latitude" type="hidden" value="" required/>
                    <input id="longitude" name="longitude" type="hidden" value="" required/>
                  </div>
                  <div id="mapCanvas"></div>
                  <div id="infoPanel">
                    <b>Marker status:</b>
                    <div id="markerStatus"><i>Click and drag the marker.</i></div>
                  </div>
                  {{--<div class="listingrow fulwidthm mgnB30 left">--}}
                  {{--<label class="robotomedium font-size14 graytext mgnB10">Pincode</label>--}}
                  {{--<div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>--}}
                  {{--<div class="helpanswer"> Please choose the pincode in which your space is located.</div>--}}
                  {{--</div>--}}
                  {{--<input id="pincode" type="text" class="fulwidthm commoninput commoninputborder pdgS05" name="pincode"/>--}}
                  {{--</div>--}}
                </div>
                <div class="col-xs-3 hidden-xs nopaddingR"></div>
              </div>
            </div>
          </div>
          <div class="f1-buttons">
            <button type="button" class="btn btn-next">Next</button>
          </div>
        </fieldset>
        
        <fieldset>
          
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div id="divnotshownn" class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> List Details
                  <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                    <div class="helpanswer"> Specify the details of the property you have.</div>
                  </div>
                </div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="listingcol col-sm-4 nopaddingLR">
                      <label class="robotomedium font-size14 graytext" style=" margin-top: 5px; margin-bottom: -4px;">Price ($)
                        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                          <div class="helpanswer"> Please note that the listing price you have entered will be rounded when displayed.</div>
                        </div>
                      </label>
                      <input type="number" id="listprice" name="price" class="commoninput fulwidthm commoninputborder pdg05" value="<?= $data->price ?>" required>
                    </div>
                    <div class="listingcol col-sm-4 ">
                      <label class="robotomedium font-size14 graytext mgnB10">Availability Status</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Mention the Visibility Status of your property among Agents. If you specify as Available to All then our premium agents can search and reach you
                          with requests in helping selling or renting out your property. How ever if you specify as only for assigned agents then only agents you allocate
                          will be able to contact you.
                        </div>
                      </div>
                      <select id="availabilty" name="availabilty" class="listingselect text-left">
                        <option value="1" <?= ($data->availabilty == 1) ? 'selected' : ''; ?>>Available to All</option>
                        <option value="2" <?= ($data->availabilty == 2) ? 'selected' : ''; ?>>Available Only To Assigned Agents</option>
                      </select>
                    </div>
                    <div class="listingcol col-sm-4 nopaddingLR">
                      <label class="robotomedium font-size14 graytext mgnB10">Home Type</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Choose the Home Type</div>
                      </div>
                      <select id="hometype" name="hometype" class="listingselect text-left" required>
                        <option value="Single Family" <?= ($data->hometype == 'Single Family') ? 'selected' : ''; ?>>Single Family</option>
                        <option value="Multi Family" <?= ($data->hometype == 'Multi Family') ? 'selected' : ''; ?>>Multi Family</option>
                        <option value="Apartment" <?= ($data->hometype == 'Apartment') ? 'selected' : ''; ?>>Apartment</option>
                        <option value="Vacant Land" <?= ($data->hometype == 'Vacant Land') ? 'selected' : ''; ?>>Vacant Land</option>
                        <option value="Pocket Listings" <?= ($data->hometype == 'Pocket Listings') ? 'selected' : ''; ?>>Pocket Listings</option>
                        <option value="Farm" <?= ($data->hometype == 'Farm') ? 'selected' : ''; ?>>Farm</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10">About This Property</label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> Give a Short Description for your Property.</div>
                      <span align="right" id="xcountd">250</span> Characters Remaining
                    </div>
                    <textarea id="aboutlist" name="info" class="commoninput  whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="Tell others what you love about this property. Keep it simple, but let it highlight your listing."><?= $data->info ?></textarea>
                  </div>
                </div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="listingcol col-sm-4 nopaddingLR">
                      <label class="robotomedium font-size14 graytext mgnB10">Architectural Model </label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Choose the Architecture Model</div>
                      </div>
                      <select id="architecturemdls" name="architecturalmodel" class="listingselect text-left">
                        <option value="Colonial" <?= ($data->architecturalmodel == 'Colonial') ? 'selected' : ''; ?>>Colonial</option>
                        <option value="Contemporary" <?= ($data->architecturalmodel == 'Contemporary') ? 'selected' : ''; ?>>Contemporary</option>
                        <option value="Modern" <?= ($data->architecturalmodel == 'Modern') ? 'selected' : ''; ?>>Modern</option>
                        <option value="Medieval" <?= ($data->architecturalmodel == 'Medieval') ? 'selected' : ''; ?>>Medieval</option>
                      </select>
                    </div>
                    <div class="listingcol col-sm-4 ">
                      <label class="robotomedium font-size14 graytext mgnB10">Year Built</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Enter the year on which the property has built</div>
                      </div>
                      <select id="yearbuilt" name="yearbuilt" class="listingselect">
                        <?php
                        $year1 = 20;
                        $year2 = intval(date('y'));
                        $year1 .= $year2;
                        for($i = 1850; $i <= $year1; $i++){
                        ?>
                        <option value="<?=$i . '-01-01'?>" <?= ($data->yearbuilt == $i . '-01-01') ?: 'selected'; ?>><?=$i . '-01-01'?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class=" listingcol col-sm-4">
                      <label class="robotomedium font-size14 graytext mgnB10">Modification On</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> Enter the year on which the property has last modified</div>
                      </div>
                      <select id="modifiedon" name="yearmodified" class="listingselect">
                        <?php
                        $year1 = 20;
                        $year2 = intval(date('y'));
                        $year1 .= $year2;
                        for($i = 1850; $i <= $year1; $i++){
                        ?>
                        <option value="<?=$i . '-01-01'?>" <?= ($data->yearmodified == $i . '-01-01') ?: 'selected'; ?>><?=$i . '-01-01'?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class=" pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">Lot Type</label>
                          <div class="helpqust mgnT05 graytext">
                            <i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> Select the Lot size type of your property.</div>
                          </div>
                          <select id="lottype" name="lottype" class="listingselect text-left">
                            <option value="0" <?= ($data->lottype == 0) ?: 'selected'; ?>>Acre</option>
                            <option value="1" <?= ($data->lottype == 1) ?: 'selected'; ?>>Sq.ft</option>
                          </select>
                        </div>
                        <div class="listingcol col-sm-4 ">
                          <label class="robotomedium font-size14 graytext mgnB10">Lot Size</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> Enter the Lot size of your property.</div>
                          </div>
                          <input type="number" id="lotsize" name="lotsize" class="commoninput fulwidthm commoninputborder pdg05" value="<?= (empty($data->lotsize) || $data->lotsize == null) ? '0' : $data->lotsize; ?>" required>
                        </div>
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">Home Size (Sq.ft)</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> Select the Home size of your property (in Sq Feet).</div>
                          </div>
                          <input type="number" id="homesize" name="homesize" class="commoninput fulwidthm commoninputborder pdg05" value="<?= $data->homesize ?>" placeholder="Home Size">
                        </div>
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">Stories</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> Number of stories in house.</div>
                          </div>
                          <select id="stories" name="stories" class="listingselect text-left">
                            <option value="1" <?= ($data->stories == 1) ?: 'selected'; ?>>1</option>
                            <option value="2" <?= ($data->stories == 2) ?: 'selected'; ?>>2</option>
                            <option value="3" <?= ($data->stories == 3) ?: 'selected'; ?>>3</option>
                            <option value="4" <?= ($data->stories == 4) ?: 'selected'; ?>>4</option>
                            <option value="5" <?= ($data->stories == 5) ?: 'selected'; ?>>5</option>
                            <option value="6" <?= ($data->stories == 6) ?: 'selected'; ?>>6</option>
                            <option value="7" <?= ($data->stories == 7) ?: 'selected'; ?>>7</option>
                            <option value="8" <?= ($data->stories == 8) ?: 'selected'; ?>>8</option>
                            <option value="9" <?= ($data->stories == 9) ?: 'selected'; ?>>9</option>
                            <option value="10" <?= ($data->stories == 10) ?: 'selected'; ?>>10+</option>
                          </select>
                        </div>
                        <div class="listingcol col-sm-4 ">
                          <label class="robotomedium font-size14 graytext mgnB10">Foreclosure</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> Choose whether your property is a foreclosure or not.</div>
                          </div>
                          <select id="forclosure" name="forclosure" class="listingselect text-left">
                            <option value="2" <?= ($data->forclosure == 2) ?: 'selected'; ?> >No</option>
                            <option value="1" <?= ($data->forclosure == 1) ?: 'selected'; ?>>Yes</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <label class="robotomedium font-size14 graytext mgnB10">Additional Details</label>
                        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                          <div class="helpanswer"> Mention any other additional details about your property.</div>
                          <span align="right" id="xcount">250</span> Characters Remaining
                        </div>
                        <textarea
                          id="otherrentdetail" name="otherrentdetail" class="commoninput  whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="Mention Any Additional Details About the Property" required
                          maxlength="250"><?= $data->otherrentdetail ?></textarea>
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <label class="robotomedium font-size14 graytext mgnB10">Video Url</label>
                        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                          <div class="helpanswer"> Here you can give the link to the video that showcases your property</div>
                        </div>
                        <input id="videolink" type="url" name="videolink" class="commoninput  whitebg fulwidthm commoninputborder pdg05" value="<?= $data->videolink ?>" placeholder="Video Url">
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">Beds</label>
                          <select id="beds" name="beds" class="listingselect ">
                            <option value="1" <?= ($data->beds == 1) ?: 'selected'; ?> >1 Bed</option>
                            <option value="2" <?= ($data->beds == 2) ?: 'selected'; ?> >2 Beds</option>
                            <option value="3" <?= ($data->beds == 3) ?: 'selected'; ?> >3 Beds</option>
                            <option value="4" <?= ($data->beds == 4) ?: 'selected'; ?> >4 Beds</option>
                            <option value="5" <?= ($data->beds == 5) ?: 'selected'; ?> >5 Beds</option>
                            <option value="6" <?= ($data->beds == 6) ?: 'selected'; ?> >6 Beds</option>
                            <option value="7" <?= ($data->beds == 7) ?: 'selected'; ?> >7 Beds</option>
                            <option value="8" <?= ($data->beds == 8) ?: 'selected'; ?> >8 Beds</option>
                            <option value="9" <?= ($data->beds == 9) ?: 'selected'; ?> >9 Beds</option>
                            <option value="10" <?= ($data->beds == 10) ?: 'selected'; ?> >10+ Beds</option>
                          </select>
                        </div>
                        <div class="listingcol col-sm-4 " style="">
                          <label class="robotomedium font-size14 graytext mgnB10">Bathrooms</label>
                          <select id="bathrooms" name="bathrooms" class="listingselect ">
                            <option value="0" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >0 Bathroms</option>
                            <option value="1" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >1 Bath</option>
                            <option value="2" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >2 Bath</option>
                            <option value="3" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >3 Bath</option>
                            <option value="4" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >4 Bath</option>
                            <option value="5" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >5 Bath</option>
                            <option value="6" <?= ($data->bathrooms == 1) ?: 'selected'; ?> >6 Bath</option>
                            <option value="7" <?= ($data->beds == 1) ?: 'selected'; ?> >7 Bath</option>
                            <option value="8" <?= ($data->beds == 1) ?: 'selected'; ?> >8 Bath</option>
                            <option value="9" <?= ($data->beds == 1) ?: 'selected'; ?> >9 Bath</option>
                            <option value="10" <?= ($data->beds == 1) ?: 'selected'; ?> >10+ Bath</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pdg20" style="padding: 20px 0px !important;">
                    <div class="listingrow fulwidthm mgnB30 left">
                      <div class="listingcol col-sm-4 nopaddingLR">
                        <label class="robotomedium font-size14 graytext mgnB10">Open Date 1</label>
                        <input type="date" id="opendate" name="opendate" class="datepicker commoninput fulwidthm commoninputborder pdg05" value="<?= $data->opendate ?>" placeholder="Date">
                      </div>
                      <div class="listingcol col-sm-4 ">
                        <label class="robotomedium font-size14 graytext mgnB10">Start Time</label>
                        <input class="listingselect" type="time" name="starttime" id="" value="<?= $data->starttime ?>" placeholder=""/>
                      </div>
                      <div class="listingcol col-sm-4 nopaddingLR">
                        <label class="robotomedium font-size14 graytext mgnB10">End Time</label>
                        <input class="" type="time" name="endtime" id="" value="<?= $data->endtime?>" placeholder=""/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="f1-buttons">
                <button type="button" class="btn btn-previous">Previous</button>
                <button type="button" class="btn btn-next">Next</button>
              </div>
        
        </fieldset>
        
        <fieldset>
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Rooms Available</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green" style="position: relative;">
                          <input type="checkbox" name="office" <?= ($data->office == 'office') ? 'checked' : ''; ?>id="office" value="1" class="flat listcheckin">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Office</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="dinning" id="" value="1" <?= ($data->dinning == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Dining</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="family" id="" value="1" <?= ($data->family == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Family</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="living" id="" value="1"<?= ($data->living == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Living</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="guest" id="" value="1"<?= ($data->guest == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Guest</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="kitchen" id="" value="1"<?= ($data->kitchen == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">kitchen</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Indoor Amenities</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="cabelTv" id="" value="1"<?= ($data->cabelTv == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Cabel / TV</span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="fans" id="" value="1"<?= ($data->fans == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Fans </span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="internet" id="" value="1"<?= ($data->internet == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Internet </span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="securitysys" id="" value="1"<?= ($data->securitysys == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Security System </span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="wifi" id="" value="1"<?= ($data->wifi == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">WiFi</span>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Outdoor Amenities</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="balcony" id="" value="1" <?= ($data->balcony == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Balcony</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="pool" id="" value="1" <?= ($data->pool == '1') ? ' pool ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Pool</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="lawn" id="" value="1" <?= ($data->lawn == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">lawn</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="garden" id="" value="1" <?= ($data->garden == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Garden</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="fence" id="" value="1" <?= ($data->fence == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Fence</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="gym" id="" value="1" <?= ($data->gym == '1') ? ' checked="checked" ' : ''; ?> >
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">gym</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Floor Type</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      
                      <div class="eachaminiti" style="width: 100%;">
                        <div class="icheckbox_flat-green" style="width: 60%;">
                          <select class="form-control" name="floortye">
                            <option value="tile" <?= ($data->floortye == 'tile') ?: 'selected'; ?>>tile</option>
                            <option value="carpet" <?= ($data->floortye == 'carpet') ?: 'selected'; ?>>carpet</option>
                            <option value="hardwood" <?= ($data->floortye == 'hardwood') ?: 'selected'; ?>>hardwood</option>
                            <option value="concrete" <?= ($data->floortye == 'concrete') ?: 'selected'; ?>>concrete</option>
                            <option value="granite" <?= ($data->floortye == 'granite') ?: 'selected'; ?>>granite</option>
                            <option value="marbel" <?= ($data->floortye == 'marbel') ?: 'selected'; ?>>marbel</option>
                          </select>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Utilities Available</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="aircondition" id="" value="1" <?= ($data->aircondition == '1') ? ' checked="checked" ' : ''; ?> >
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Air Conditioner</span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="heater" id="" value="1" <?= ($data->heater == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Heater</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="naturalAir" id="" value="1" <?= ($data->naturalAir == '1') ? ' checked="checked" ' : ''; ?>>
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Natural Air</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Parking Availablity</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti" style="width: 100%;">
                        <div class="icheckbox_flat-green" style="width: 60%;">
                          <select class="form-control" name="garagetype">
                            <option value="">Garage Attached</option>
                            <option value="">Garage Detached</option>
                            <option value="">On Street Parking</option>
                            <option value="">Off Street Parking</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="listerow fulwidthm left  whitebg mgnB20">
                  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Building View</div>
                  <div class="pdg20">
                    <div class="listingrow fulwidthm mgnB30 left">
                      <div class="aminiticol col-sm-12 nopaddingLR">
                        
                        <div class="eachaminiti" style="width: 100%;">
                          <div class="icheckbox_flat-green" style="width: 60%;">
                            <select class="form-control" name="buildingview">
                              <option value="City View" <?= ($data->buildingview == 'City View') ?: 'selected'; ?>>City View</option>
                              <option value="Mountain View" <?= ($data->buildingview == 'Mountain View') ?: 'selected'; ?>>Mountain View</option>
                              <option value="Water View" <?= ($data->buildingview == 'Water View') ?: 'selected'; ?>>Water View</option>
                              <option value="Park View" <?= ($data->buildingview == 'Park View') ?: 'selected'; ?>>Park View</option>
                              <option value="Building View" <?= ($data->buildingview == 'Building View') ?: 'selected'; ?>>Building View</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="pdg20">
                  <input class="form-control" type="file" name="images[]" placeholder="Upload Files" accept="image/*" multiple/>
                </div>
              </div>
            </div>
          </div>
          <div class="listerow fulwidthm left  whitebg mgnB20">
            <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Published Status</div>
            <div class="pdg20">
              <div class="listingrow fulwidthm mgnB30 left">
                <div class="aminiticol col-sm-12 nopaddingLR">
                  
                  <div class="eachaminiti" style="width: 100%;">
                    <div class="icheckbox_flat-green" style="width: 60%;">
                      <select class="form-control" name="status">
                        <option value="1" <?= ($data->status == '1') ?: 'selected'; ?>>Publish List</option>
                        <option value="0" <?= ($data->status == '0') ?: 'selected'; ?>>Save to Draft</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="pdg20">
                
                </div>
              </div>
            </div>
          </div>
          <div class="f1-buttons">
            <button type="button" class="btn btn-previous">Previous</button>
            <input class="btn btn-sucess btn-lg" type="submit" name="submit" id="" value="Submit" style="max-width: 204px;background-color: rgba(139, 195, 74, 0.85);    border: 2px solid rgba(55, 93, 51, 0.3);"/>
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
      var latLng = new google.maps.LatLng(
        <?= (!empty($data->latitude) && $data->latitude != null) ? $data->latitude : 25.204849; ?>,
        <?= (!empty($data->longitude) && $data->longitude != null) ? $data->longitude : 55.270783;  ?>
      );
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
 
    
        
      
  