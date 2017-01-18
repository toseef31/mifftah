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
          <strong></strong><?=$error?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
        </div>
      </div>
      <div class="block-content">
      <?php endforeach?>
      <?php endif?>
      <!-- ======================== mian form start ======================== -->
        <!-- simple form -->
        <form class="form-horizontal" role="form" method="post" action="{{ url('/user/leadsedit/'.$data->id) }}">
          {{  csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Title<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="title" id="title" value="<?= (isset($data->title)) ? $data->title : ''; ?>" placeholder="title"/>
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Type <span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="type">
                    <option value="rent" <?= ($data->type == 'rent') ? 'selected' : ''; ?>>Rent</option>
                    <option value="sell" <?= ($data->type == 'sell') ? 'selected' : ''; ?>>Sell</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Phone<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="phone" id="phone" value="<?= (isset($data->phone)) ? $data->phone : ''; ?>" placeholder="Phone"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Region<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="region" id="region" value="<?= (isset($data->region)) ? $data->region : ''; ?>" placeholder="region"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Street<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="street" id="street" value="<?= (isset($data->street)) ? $data->street : ''; ?>" placeholder="region"/>
                </div>
              </div>
            </div>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">homesize<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="homesize" id="homesize" value="<?= (isset($data->homesize)) ? $data->homesize : ''; ?>" placeholder="homesize"/>
                </div>
              </div>
            </div>
            <br/>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">price<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="price" id="price" value="<?= (isset($data->price)) ? $data->price : ''; ?>" placeholder="price"/>
                </div>
              </div>
            </div>
            <br/>
            
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">availability<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="availability" id="availability" value="<?= (isset($data->availability)) ? $data->availability : ''; ?>" placeholder="availability"/>
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
                    <option value="Single Family" <?= ($data->hometype == 'Single Family') ? 'selected' : ''; ?>>Single Family</option>
                    <option value="Multi Family" <?= ($data->hometype == 'Multi Family') ? 'selected' : ''; ?>>Multi Family</option>
                    <option value="Apartment" <?= ($data->hometype == 'Apartment') ? 'selected' : ''; ?>>Apartment</option>
                    <option value="Vacant Land" <?= ($data->hometype == 'Vacant Land') ? 'selected' : ''; ?>>Vacant Land</option>
                    <option value="apartamente" <?= ($data->hometype == 'apartamente') ? 'selected' : ''; ?>>apartamente</option>
                    <option value="Pocket Listings" <?= ($data->hometype == 'Pocket Listings') ? 'selected' : ''; ?>>Pocket Listings</option>
                    <option value="Farm" <?= ($data->hometype == 'Farm') ? 'selected' : ''; ?>>Farm</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">infor<span>*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="info" id="info" cols="30" rows="10"><?= (isset($data->info)) ? $data->info : ''; ?></textarea>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Architectural Model<span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="architecturalmodel">
                    <option value="Colonial" <?= ($data->Colonial == 'Colonial') ?: 'selected'; ?>>Colonial</option>
                    <option value="Contemporary" <?= ($data->Contemporary == 'Contemporary') ?: 'selected'; ?>>Contemporary</option>
                    <option value="Modern" <?= ($data->Modern == 'Modern') ?: 'selected'; ?>>Modern</option>
                    <option value="Medieval" <?= ($data->Medieval == 'Medieval') ?: 'selected'; ?>>Medieval</option>
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
                        <input class="form-control" type="date" name="yearbuilt" id="yearbuilt" value="<?php echo date('Y-m-d', strtotime($data->yearbuilt)) ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group  ">
                        <input class="form-control" type="date" name="yearmodified" id="yearmodified" value="<?php echo date('Y-m-d', strtotime($data->yearmodified)) ?>"/>
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
                    <option value="acer" <?= ($data->lottype == 'acer') ? 'selected' : ''; ?>>Acer</option>
                    <option value="squ" <?= ($data->lottype == 'squ') ? 'selected' : ''; ?>>Square</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Stories<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="stories" id="stories" value="<?= (isset($data->stories)) ? $data->stories : ''; ?>" placeholder="stories"/>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Forclosure<span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="forclosure">
                    <option value="1" <?= ($data->forclosure == 1) ? 'selected' : ''; ?>>Yes</option>
                    <option value="0" <?= ($data->forclosure == 0) ? 'selected' : ''; ?>>No</option>
                  </select>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Other Rent detail<span>*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="otherrentdetail" id="otherrentdetail" style="width: 100%" rows="10"><?= (isset($data->otherrentdetail)) ? $data->otherrentdetail : ''; ?></textarea>
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Video Link<span>*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="videolink" id="videolink" value="<?= (isset($data->videolink)) ? $data->videolink : ''; ?>" placeholder="videolink"/>
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
                      <input class="form-control" type="text" name="beds" id="beds" value="<?= (isset($data->beds)) ? $data->beds : ''; ?>" placeholder="beds"/>
                    </div>
                    <div class="col-sm-6">
                      <input class="form-control" type="text" name="bathrooms" id="bathrooms" value="<?= (isset($data->bathrooms)) ? $data->bathrooms : ''; ?>" placeholder="bathrooms"/>
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
                  <input class="form-control" type="date" name="opendate" id="opendate" value="<?php echo date('Y-m-d', strtotime($data->opendate)) ?>" placeholder="opendate"/>
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
            
            <div class="row classcustom">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Availabilities<span>*</span></label>
                <div class="col-sm-9">
                  
                  <div class="row">
                    <div class="col-sm-6">
                      
                      <label>Office</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="office" value="1" <?= ($data->office == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="office" value="0" <?= ($data->office == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                    <div class="col-sm-6">
                      <label>dinning</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="dinning" value="1" <?= ($data->dinning == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="dinning" value="0" <?= ($data->dinning == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>family</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="family" value="1" <?= ($data->family == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="family" value="0" <?= ($data->family == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>living</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="living" value="1" <?= ($data->living == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="living" value="0" <?= ($data->living == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>guest</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="guest" value="1" <?= ($data->guest == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="guest" value="0" <?= ($data->guest == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>kitchen</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="kitchen" value="1" <?= ($data->kitchen == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="kitchen" value="0" <?= ($data->kitchen == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>kitchen</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="kitchen" value="1" <?= ($data->kitchen == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="kitchen" value="0" <?= ($data->kitchen == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>cabelTv</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="cabelTv" value="1" <?= ($data->cabelTv == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="cabelTv" value="0" <?= ($data->cabelTv == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>fans</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="fans" value="1" <?= ($data->fans == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="fans" value="0" <?= ($data->fans == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>internet</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="internet" value="1" <?= ($data->internet == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="internet" value="0" <?= ($data->internet == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>securitysys</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="securitysys" value="1" <?= ($data->securitysys == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="securitysys" value="0" <?= ($data->securitysys == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                    <div class="col-sm-6">
                      <label>wifi</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="wifi" value="1" <?= ($data->wifi == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="wifi" value="0" <?= ($data->wifi == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>balcony</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="balcony" value="1" <?= ($data->balcony == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="balcony" value="0" <?= ($data->balcony == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                    <div class="col-sm-6">
                      <label>pool</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="pool" value="1" <?= ($data->pool == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="pool" value="0" <?= ($data->pool == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>lawn</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="lawn" value="1" <?= ($data->lawn == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="lawn" value="0" <?= ($data->lawn == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>garden</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="garden" value="1" <?= ($data->garden == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="garden" value="0" <?= ($data->garden == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>fence</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="fence" value="1" <?= ($data->fence == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="fence" value="0" <?= ($data->fence == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>gym</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="gym" value="1" <?= ($data->gym == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="gym" value="0" <?= ($data->gym == 0) ? 'checked' : ''; ?>> No</label>
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
                        <label><input type="radio" name="aircondition" value="1" <?= ($data->aircondition == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="aircondition" value="0" <?= ($data->aircondition == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>heater</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="heater" value="1" <?= ($data->heater == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="heater" value="0" <?= ($data->heater == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>naturalAir</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="naturalAir" value="1" <?= ($data->naturalAir == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="naturalAir" value="0" <?= ($data->naturalAir == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>garagetype</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="garagetype" value="1" <?= ($data->garagetype == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="garagetype" value="0" <?= ($data->garagetype == 0) ? 'checked' : ''; ?>> No</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>buildingview</label>
                      <div class="app-radio round">
                        <label><input type="radio" name="buildingview" value="1" <?= ($data->buildingview == 1) ? 'checked' : ''; ?>> Yes</label>
                        <label><input type="radio" name="buildingview" value="0" <?= ($data->buildingview == 0) ? 'checked' : ''; ?>> No</label>
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