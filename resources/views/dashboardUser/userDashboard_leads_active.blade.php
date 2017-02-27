@extends('dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <h4 class="robotolight fontsize24 graytext mgnB20">  <?= $lang[598][$current] ?>
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer">
             <?= $lang[931][$current] ?>
          </div>
        </div>
      </h4>
      <div id="no-more-tables">
        <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table">
          <thead class="robotoregular font-size14 tablehead dblue_bg whitetext">
          <tr class="robotomedium">
            <th class="numeric robotomedium"><?= $lang[864][$current] ?></th>
            <th class="numeric robotomedium"><?= $lang[866][$current] ?></th>
            <th class="numeric robotomedium"><?= $lang[870][$current] ?></th>
            {{--<th class="numeric robotomedium"><?= $lang[867][$current] ?></th>--}}
            <th class="numeric robotomedium"><?= $lang[868][$current] ?></th>
            <th class="numeric robotomedium"><?= $lang[869][$current] ?></th>
          </tr>
          </thead>
          <tbody id="list_results">
          <?php foreach ($data as $row) {  ?>
          <tr class="cpntr robotoregular graytext">
            <td data-title="Image" valign="middle">
              <div class="listingiamgetable">
                <?php
                if(!empty($row->imagedata)){
                foreach ($row->imagedata as $singleimg) {
                ?>
                <img src="{{ asset('uploads/' . $singleimg->name) }}" alt="userimage">
                <?php
                break;}
                }else{?>
                <img src="{{ asset('userdata/List/Thumb/0/34/Chrysanthemum.jpg') }}" alt="userimage">
                <?php
                }
                ?>
              </div>
            </td>
            <td data-title="Listing Address" valign="top"><span class="fontsize13">{{ $row->region }}</span></td>
            <td data-title="Type" valign="top"><span class="fontsize13">For {{ $row->type }}</span></td>
            {{--<td data-title="Featured" valign="middle" align="center"><i class="fa fa-times-circle rederror fontsize16"></i></td>--}}
            <td data-title="Status" valign="middle" align="center">
              <?php ($row->availability == 1) ? $var = 'success' : $var = 'danger'; ?>
              <span class="label label-<?= $var ?> robotoregular"><?= ($row->availability == 1) ? 'Available' : 'Not Available'; ?></span>
            </td>
            <td data-title="Action" valign="middle" align="center">
              <div class="btn-group">
                <a href="{{ url('search/preview/'.$row['id']) }}" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/deletelead/'.$row['id']) }}" class="btn btn-danger" title="Delete Lead"><i class="fa fa-times"></i></a>
                {{--<button type="button" id="contactusr_0" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i></button>--}}
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