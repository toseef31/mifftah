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
    <h5>List All Users</h5>
    <p>From Here You can Manage All Users.</p>
   </div>
  </div>
  <!-- END HEADING -->

  <div class="block-content">
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
    </div> <br/>
    <div class="row">
     <div class="col-sm-8">  
      <label for="name" class="col-sm-3 control-label">Email <span>*</span></label>
      <div class="col-sm-9">
       {!! Form::text('email',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Email (Requred)','required'=>true])  !!} 
      </div>
     </div> 
    </div> 
    <br/>
    <div class="row">
     <div class="col-sm-8">  
      <label for="name" class="col-sm-3 control-label">Payment Method<span>*</span></label>
      <div class="col-sm-9">
        <select class="form-control" name="payment"> 
         <option value="bit" <?= ($user->payment == 'bit')? 'selected':''; ?>>BitCoin</option>
         <option value="pay" <?= ($user->payment == 'pay')? 'selected':''; ?>>Payeer</option>
         <option value="pmo" <?= ($user->payment == 'pmo')? 'selected':''; ?>>Perfect Money</option>
        </select>
      </div>
     </div> 
    </div> <br/>
    <div class="row">
     <div class="col-sm-8">  
      <label for="name" class="col-sm-3 control-label">Package<span>*</span></label>
      <div class="col-sm-9">
       <select class="form-control" name="package"> 
        <option value="3" <?= ($user->package == '3')? 'selected':''; ?>>Basic : (2.50% Daily)</option>
        <option value="2" <?= ($user->package == '2')? 'selected':''; ?>>Golden : (3.00% Daily)</option>
        <option value="1" <?= ($user->package == '1')? 'selected':''; ?>>Platinium : (3.50% Daily) </option>
       </select>
      </div>
     </div> 
    </div>
    <br/>
    <div class="row">
     <div class="col-sm-8">  
      <label for="name" class="col-sm-3 control-label">Status<span>*</span></label>
      <div class="col-sm-9">
       <select class="form-control" name="status"> 
        <option value="1" <?= ($user->status == '1')? 'selected':''; ?>>Active</option>
        <option value="0" <?= ($user->status == '0')? 'selected':''; ?>>Deactivate</option>
         
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