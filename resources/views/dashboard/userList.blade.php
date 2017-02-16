@extends('dashboard.master')
<!-- START PAGE HEADING -->
@section('content')
  <div class="right_col" role="main">
    <script type="text/javascript">
      $(document).ready(function (e) {
//        statusselected();
//        $("#page_1").addClass("paginate_active");
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
            <table class="table table-striped responsive-utilities jambo_table" style="margin-top:53px;">
              <thead id="heading_usersec">
              <tr class="headings">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registered On</th>
                <th>Account Type</th>
                <th>Actions</th>
              </tr>
              </thead>
              
              <tbody>
              <?php $i = 0;?>
              @foreach($users as $user)
                <?php $i++ ?>
                <tr>
                  <td><?= $i?> <?= (!empty($user->img)) ? "'<img class='adminpic' src='" . url('uploads/' . $user->img) . "'/>" : ''; ?></td>
                  <td><?=$user->name?></td>
                  <td><?=$user->email?></td>
                  <td><?=$user->created_at?></td>
                  <td>
                    <?php if ($user->type == 0) {
                      echo "Admin";
                    } elseif ($user->type == 1) {
                      echo "Vendor";
                    } else {
                      echo "User";
                    }
                    ?>
                  </td>
                  <td>
                    <a href="<?= url('/getsingle') . '/' . $user->id ?>" class="btn btn-primary btn-small pull-left">Edit </a>
                    <button class="btn btn-danger btn-small pull-right" data-toggle="modal" data-target="#modal-danger<?=$i?>">Delete</button>
                  </td>
                </tr>
                
                
                <!-- modal popup -->
                <div class="modal fade" id="modal-danger<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="modal-danger-header">
                  <div class="modal-dialog modal-danger" role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="modal-danger-header">Are You Sure you Want to Delete <?=$user->name?> User</h4>
                      </div>
                      <div class="modal-body">
                        <p>Please Confirm that you want to delete this User this action can not be revert</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <a href="<?= url('/delu') . '/' . $user->id ?>" class="btn btn-danger">Delete </a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              </tbody>
            </table>
            {{  $users->links() }}
          
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