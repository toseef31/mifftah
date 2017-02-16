@extends('dashboard.master')
<!-- START PAGE HEADING -->
@section('content')
  <div class="right_col" role="main">
    <script type="text/javascript">
      $(document).ready(function (e) {
//        statusselected();
        $("#page_1").addClass("paginate_active");
      });
    </script>
    <style>
      #user_results .tableimage img {
        max-height: 100%;
        max-width: inherit !important;
      }
      
      .adminpic {
        max-width: 50px;
      }
    </style>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Manage Users</h2><!-- Help Starts -->
            <div class="helpqust"><i class="fa fa-question-circle"></i>
              <div class="helpanswer" style="word-break:keep-all;">
                You can manage your Users from here. You can filter the list based on status
                like active, pending &amp; blocked. You can view the complete details of a user in profile section by clicking on the user's profile image.
                <br><b>Note - Users With Agent Account are also listed here. </b>
              </div>
            </div>
            <!-- Help Ends -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="dataTables_filter mgnB10">
              
              
              <div id="fnameuser" class="col-md-5 col-sm-5 col-xs-12 pull-right" style="display:none;">
                &nbsp;
              
              </div>
              
              <div id="user_status" class="col-md-5 col-sm-5 col-xs-12 pull-right" style="display:block;">
              </div>
              <div id="emailuser" class="col-md-5 col-sm-5 col-xs-12 pull-right" style="display:none;">
              </div>
            
            
            </div>
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
    
    </div>
    
    
    <script type="text/javascript">
      $(document).ready(function (e) {
        $('input.tableflat').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
      });
    
    
    </script>
    
    <footer class="footer" style="margin-top: 0px;">
      <div class="">
        <p class="pull-left footercopyright"><a href="#">About</a></p>
        <p class="pull-left footercopyright">&nbsp;&nbsp;<a href="#">InoutScripts Home</a></p>
        <p class="pull-left footercopyright">&nbsp;&nbsp;<a href="#">Terms of Use</a></p>
        
        
        <p class="pull-right footercopyright">Copyright © 2006 - 2015 <a href="#" target="_blank"></a>. All Rights Reserved.
        
        </p>
      
      
      </div>
      <div class="clearfix"></div>
    </footer> <!-- Footer ends -->
  
  
  </div>
@endsection