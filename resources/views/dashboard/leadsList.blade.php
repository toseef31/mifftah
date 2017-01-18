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
          <h5>List All Leads</h5>
          <p>From Here You can Manage All Leads.</p>
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
            <th>Type</th>
            <th>Email / Username</th>
            <th>Region</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          <?php $i = 0;?>
          @foreach($data as $user)
            <?php $i++ ?>
            <?php $username = \mifftah\User::whereId($user->postedBy)->get()->first(); ?>
            <tr>
              <td><?= $i?></td>
              <td> <?= $user->title ?> </td>
              <td> <?= $user->type ?></td>
              <td>
                <?= $username->email . ' / ' . $username->name ?>
              </td>
              <td>
                <?= $user->region ?>
              </td>
              <td>
                <a href="<?= url('/admin/editlead') . '/' . $user->id ?>" class="btn btn-primary btn-small pull-left">Edit </a>
                <button class="btn btn-danger btn-small pull-right" data-toggle="modal" data-target="#modal-danger<?=$i?>">Delete</button>
              </td>
            </tr>
            
            
            <!-- modal popup -->
            <div class="modal fade" id="modal-danger<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="modal-danger-header">
              <div class="modal-dialog modal-danger" role="document">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="modal-danger-header">Are You Sure you Want to Delete <?= $user->title?> Listing</h4>
                  </div>
                  <div class="modal-body">
                    <p>Please Confirm that you want to delete " <?= $user->title?> " Listing this action can not be revert</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <a href="<?= url('/admin/deletelead/') .'/'. $user->id ?>" class="btn btn-danger">Delete </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </tbody>
        </table>
        
        {{  $data->links() }}
      </div>
    
    </div>
  
  </div>
  <!-- END PAGE CONTAINER -->
@endsection