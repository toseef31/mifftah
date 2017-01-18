@extends('dashboardUser.dash_master_layout')
@section('content') 
<div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
  <h4 class="robotolight fontsize24 graytext mgnB20"> Transactions</h4>
  <div class="slectionfilterwrp mgnB15 fulwidthm left">
   <div class="col-sm-4 pull-right">
    <select id="seltypepayment" class="filterselect" style="width: 100%; display: none;" tabindex="-1">
     <option value="" selected="selected">All Transactions</option>
     <option value="1">Featured Payment</option>
     <option value="0">Premium Payment</option>
     <option value="2">Extension Payment</option>
    </select>
    <select id="agentstatusx" name="prio" class="formselect" style="width:100%;min-height: 39px;margin-top: 2px;">
       <option value="0" selected="selected">All Transactions </option>
       <option value="1">Featured Payment </option>
       <option value="2">Premium Payment</option>
       <option value="3">Extension Payment</option>
      </select>
<!--    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-seltypepayment-container"><span class="select2-selection__rendered" id="select2-seltypepayment-container" title="All Transactions">All Transactions</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->

   </div>
   <div class="col-sm-4 pull-right">
    <select id="agentstatusx" name="prio" class="formselect" style="width:100%;min-height: 39px;margin-top: 2px;">
       <option value="0" selected="selected">Bank Transfer </option>
       <option value="1"> </option>
       
      </select>
<!--    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-seltype-container"><span class="select2-selection__rendered" id="select2-seltype-container" title="Bank Transfer">Bank Transfer</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>-->


   </div>

  </div>
  <div class="clearfix"></div>
  <div id="no-more-tables">

   <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table" id="list_results">
    <tbody id="firstres"><tr><td>No Results Found</td></tr></tbody>
   </table>
  </div>
 </section>


 <div class="pagination_gc">
  <div class="col-xs-12">

   <div class="paginationnumber">
   	<ul id="reviedpagediv" class="paginationul fulwidthm left mgnB30">        
    </ul>
   </div>
  </div>
 </div> 


</div>
@endsection