@extends('ar.dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
      <h4 class="robotolight fontsize24 graytext mgnB20">إدارة الحساب وكيل أعمالي
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer">
            يمكنك إدارة حسابك وكيلك من هنا. يمكنك تفعيل حسابك، ترقية حسابك إلى وضع قسط، وحتى إلغاء حالة كيلك من هنا. كما يرجى ملاحظة أنه من أجل إلغاء الحساب الخاص لديك لإزالة يؤدي بك نشطة إن وجدت. يمكنك أيضا عرض يؤدي بك نشطة من هنا.
          </div>
        </div>
      </h4>
      <div id="no-more-tables">
        <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table" id="list_results">
          <thead class="robotoregular font-size14 tablehead dblue_bg whitetext">
          <tr class="robotomedium">
            <th class="numeric robotomedium" width="5%">شعار</th>
            <th class="numeric robotomedium">اسم الشركة</th>
            <th class="numeric robotomedium" width="32%">عنوان راسخ</th>
            <th class="numeric robotomedium" width="15%">الحالة الممتازة</th>
            <th class="numeric robotomedium" width="10%"> الحالة</th>
            <th class="numeric robotomedium">الإجراءات</th>
          </tr>
          </thead>
          <tbody>
          <tr class="cpntr robotoregular graytext">
            <?php //echo'<pre>';var_dump( $data );echo'</pre>'; ?>
            <td data-title="Logo" valign="middle">
              <div class="listingiamgetable"><img src="{{ asset('userdata/logo/361447.jpg') }}" width="50px" height="50px"></div>
            </td>
            <td data-title="Firm Name" valign="middle"><?= $data->name ?></td>
            <td data-title="Firm Address" valign="middle"> <?= $userinfo->bname ?></td>
            <td data-title="Premium Status" valign="middle">
              {{--<img src="{{ asset('images/premiumagnticon.png') }}"> --}}
              <span class=" mgnS05 premimumagntname whitetext lblue_bg fontsize12 pdg05">Basic</span>
            </td>
            <td data-title="Status" valign="middle"><?= (isset($data->status) && $data->status == 1) ? 'Active' : 'Deactivated'; ?></td>
            <td data-title="Action" valign="middle" align="center">
              <div class="btn-group">
                <?php
                if($data->status == 1){
                ?>
                <a href="{{ url('/user/agentaccount/disable') }}" id="deactivateacc" class="btn btn-danger" title="Deactivate Agent Account"><i class="fa fa-ban"></i></a>
                <?php
                }elseif($data->status == 0){
                ?><a href="{{ url('/user/agentaccount/disable') }}" id="deactivateacc" class="btn btn-danger" style="background-color: green !important;"><i class="fa fa-ban"></i></a> <?php
                }
                ?>
                <a href="{{ url('/user/activeleads') }}" class="btn btn-warning" title="View Active Leads"><i class="fa fa-hand-o-right"></i></a></div>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
@endsection