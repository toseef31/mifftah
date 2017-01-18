@extends('dashboardUser.dash_master_layout')
@section('content') 
<div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
  <h4 class="robotolight fontsize24 graytext mgnB20"> Manage Lead Requests Received<div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
    <div class="helpanswer">
     You can manage the lead requests from owners for handling their listings from here. You can contact
     the owner from here, also you can accept the request if you are interested in their requests.                                
    </div>
   </div>
  </h4>
  <div id="no-more-tables">
   <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table">
    <thead class="robotoregular font-size14 tablehead dblue_bg whitetext">
     <tr class="robotomedium">
      <th class="numeric robotomedium">Image</th>
      <th class="numeric robotomedium">Lead Name</th>
      <th class="numeric robotomedium">Listing Address</th>
      <th class="numeric robotomedium">Type</th>
      <th class="numeric robotomedium">Featured </th>
      <th class="numeric robotomedium">Status</th>
      <th class="numeric robotomedium">Action</th>
     </tr>
    </thead>
    <tbody id="list_results">
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/44/101/luxury-house-interior-living-room-impressive-high-ceiling-antique-furniture-columns-balcony-39826124.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Newowner Newuser</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">New York, NY </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="{{ asset('images/featured.png') }}" alt="" title="Featured Property"> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-success robotoregular">Active</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button type="button" id="contactusr_44" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/7/house-164909_960_720.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Steve James</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">Miami, FL </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-success robotoregular">Active</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button type="button" id="contactusr_0" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
    </tbody>
   </table>
  </div>
 </section>
 <div class="pagination_gc">
  <div class="col-xs-12">
   <div class="paginationnumber">
    <ul id="pagingdivv" class="paginationul fulwidthm left mgnB30"> </ul>
   </div>
  </div>
 </div>
</div>
@endsection