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
        <?php // echo'<pre>';var_dump( $users );echo'</pre>'; ?>
        
        <table class="table table-striped table-bordered datatable-extended">
          <thead>
          <tr>
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
              <td><?= $i?></td>
              <td><?=$user->name?></td>
              <td><?=$user->email?></td>
              <td><?=$user->created_at?></td>
              <td>
                <?php if ($user->type == 0) {
                  echo "Admin";
                }elseif($user->type == 1){
                  echo "Vendor";
                }else{
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
  <!-- END PAGE CONTAINER -->
@endsection