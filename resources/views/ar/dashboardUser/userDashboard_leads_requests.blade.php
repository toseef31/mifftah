@extends('ar.dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <h4 class="robotolight fontsize24 graytext mgnB20"> إدارة طلبات الرصاص إعجاب
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer">
            يمكنك إدارة طلبات الرصاص من أصحاب للتعامل مع القوائم الخاصة بهم من هنا. يمكنك الاتصال بالمالك من هنا، كما يمكنك قبول الطلب إذا كنت مهتما في طلباتها.
          </div>
        </div>
      </h4>
      <div id="no-more-tables">
        <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table">
          <thead class="robotoregular font-size14 tablehead dblue_bg whitetext">
          <tr class="robotomedium">
            <th class="numeric robotomedium">طلب</th>
            <th class="numeric robotomedium">قيادي اسم</th>
            <th class="numeric robotomedium">قائمة العناوين</th>
            <th class="numeric robotomedium">اكتب</th>
            <th class="numeric robotomedium">متميز</th>
            <th class="numeric robotomedium">الحالة</th>
            <th class="numeric robotomedium">عمل</th>
          </tr>
          </thead>
          <tbody id="list_results">
          <?php
          foreach($data as $singlerow){
          foreach ($propertiesID as $property) {
          if($property[0]['id'] == $singlerow->propertyID){
          ?>
          <tr class="cpntr robotoregular graytext">
            <td data-title="Image" valign="middle">
              <div class="listingiamgetable"><img src="{{ asset('images/envelop.svg') }}" alt="userimage">
              </div>
            </td>
            <td data-title="Lead Name" valign="middle"> <?= $property[0]['title']?></td>
            <td data-title="Listing Address" valign="top"><span class="fontsize13"><?php echo $property[0]['region']?></span></td>
            <td data-title="Type" valign="top"><span class="fontsize13"><?= ($property[0]['availability'] == 1) ? 'Open for Sale' : 'Closed';?> </span></td>
            <td data-title="Featured" valign="middle" align="center"><img src="{{ asset('images/featured.png') }}" alt="" title="Featured Property"></td>
            <td data-title="Status" valign="middle" align="center"><span class="label label-<?= ($singlerow['status'] == 1) ? 'success' : 'danger';?> robotoregular"><?= ($singlerow['status'] == 1) ? 'Open' : 'Closed';?></span></td>
            <td data-title="Action" valign="middle" align="center">
              <div class="btn-group"><a href="{{ url('/search/preview/').'/'.$property[0]['id'] }}" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
                <button type="button" id="contactusr_44" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
                </button>
              </div>
            </td>
          </tr>
          <?php
          break;
          }
          }
          }
          ?>
          
          </tbody>
        </table>
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