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
          <h5>Edit Admin</h5>
          <p>Manage Admin Settings</p>
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
        {!! Form::model($user,['action'=>['DashboardController@updateUser',$user->id],'method'=>'patch','class'=>'form-horizontal','files'=>true,'enctype'=>'multipart/form-data']) !!}
        <div class="box-body">
          <div class="row">
            <div class="col-sm-8">
              <label for="name" class="col-sm-3 control-label">Name <span>*</span></label>
              <div class="col-sm-9">
                {!! Form::text('name',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Name (Required)','required'=>true,'autofocus'=>true])  !!}
              </div>
            </div>
          </div>
          <br/>
          <div class="box-body">
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Last name <span>*</span></label>
                <div class="col-sm-9">
                  {!! Form::text('lname',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Name (Required)','required'=>true,'autofocus'=>true])  !!}
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Email <span>*</span></label>
                <div class="col-sm-9">
                  {!! Form::text('email',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Email (Required)','required'=>true])  !!}
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Password <span>*</span></label>
                <div class="col-sm-9">
                  <input name="password" type="password" class="form-control">
                </div>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Password Confirm <span>*</span></label>
                <div class="col-sm-9">
                  <input name="password_confirmation" type="password" class="form-control">
                </div>
              </div>
            </div>
            <br/>
            
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Status<span>*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="status">
                    <option value="1" <?=($user->status == '1') ? 'selected' : '';?>>Active</option>
                    <option value="0" <?=($user->status == '0') ? 'selected' : '';?>>Deactivate</option>
                  </select>
                </div>
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
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection