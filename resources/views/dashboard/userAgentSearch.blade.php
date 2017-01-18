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
          <h5>Search Agents</h5>
          <p>Search in all agents list.</p>
        </div>
      </div>
      <!-- END HEADING -->
      
      <div class="block-content">
        <!-- ======================== mian form start ======================== -->
        
        <!-- simple form -->
        <form class="form-horizontal" role="form" method="post" action="{{ url('/admin/searchgetAgents/') }}">
          {{  csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-sm-8">
                <label for="name" class="col-sm-3 control-label">Email / name <span>*</span></label>
                <div class="col-sm-9">
                  {!! Form::text('name',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Name or Email (Required)','required'=>true,'autofocus'=>true])  !!}
                </div>
              </div>
            </div>
            <br/>
          </div>
          <br/>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <div class="row">
              <div class="col-sm-6">
      <span class="pull-right">&nbsp;
       <button type="submit" class="btn btn-info ">Search</button>
      </span>
              </div>
            </div>
          </div>
        </form>
      </div>
    
    </div>
  
  </div>
  <!-- END PAGE CONTAINER -->
@endsection