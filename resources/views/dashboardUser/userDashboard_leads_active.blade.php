@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <h4 class="robotolight fontsize24 graytext mgnB20"> Manage Active Leads
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer">
            You can manage your active clients/leads from here. You can delete any active leads and contact your clients from here.
          </div>
        </div>
      </h4>
      <div id="no-more-tables">
        <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table">
          <thead class="robotoregular font-size14 tablehead dblue_bg whitetext">
          <tr class="robotomedium">
            <th class="numeric robotomedium">Image</th>
            <th class="numeric robotomedium">Listing Address</th>
            <th class="numeric robotomedium">Type</th>
            <th class="numeric robotomedium">Featured</th>
            <th class="numeric robotomedium">Status</th>
            <th class="numeric robotomedium">Action</th>
          </tr>
          </thead>
          <tbody id="list_results">
          <?php foreach ($data as $row) {  ?>
          <tr class="cpntr robotoregular graytext">
            <td data-title="Image" valign="middle">
              <div class="listingiamgetable">
                <img src="{{ asset('userdata/List/Thumb/0/34/Chrysanthemum.jpg') }}" alt="userimage">
              </div>
            </td>
            <td data-title="Listing Address" valign="top"><span class="fontsize13">{{ $row->region }}</span></td>
            <td data-title="Type" valign="top"><span class="fontsize13">For {{ $row->type }}</span></td>
            <td data-title="Featured" valign="middle" align="center"><i class="fa fa-times-circle rederror fontsize16"></i></td>
            <td data-title="Status" valign="middle" align="center">
              <?php ($row->availability == 1)?$var='success':$var='danger'; ?>
              <span class="label label-<?= $var ?> robotoregular"><?= ($row->availability == 1)?'Available':'Not Available'; ?></span>
            </td>
            <td data-title="Action" valign="middle" align="center">
              <div class="btn-group">
                <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
                <button id="delete_20" onclick="deleterequest(20, 34);" type="button" class="btn btn-danger" title="Delete Lead"><i class="fa fa-times"></i></button>
                <button type="button" id="contactusr_0" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i></button>
              </div>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
        <?= $data->links() ?>
      </div>
    </section>
    <div class="pagination_gc">
      <div class="col-xs-12">
        <div class="paginationnumber">
          <ul id="pagingdivv" class="paginationul fulwidthm left mgnB30"></ul>
        </div>
      </div>
    </div>
  </div>
@endsection