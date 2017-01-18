@extends('dashboardUser.dash_master_layout')
@section('content') 
<div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
  <h4 class="robotolight fontsize24 graytext mgnB20"> Manage Lead Requests Sent<div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
    <div class="helpanswer">
     You can manage the lead requests sent by you as an agent to the owners for handling their listings from here. You can contact
     the owner from here, also you can delete your request sent.                                    </div>
   </div></h4>
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
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/201/1600x1200-1.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Steve James</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">Austin, Teksas </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_29" onclick="deleterequest(29, 0);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_0" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/48/105/room.JPG') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> John Doe</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">New York, NY </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_28" onclick="deleterequest(28, 48);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_48" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/60/129/room.JPG') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Cxb Xcv</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">New York, NY </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="{{ asset('images/featured.png') }}" alt="" title="Featured Property"> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_26" onclick="deleterequest(26, 60);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_60" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/73/150/rnn1.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> User User</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">Universal City, CA </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_24" onclick="deleterequest(24, 73);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_73" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/31/big.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Steve James</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">10, Hauvers </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_22" onclick="deleterequest(22, 0);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_0" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/67/140/Cruise-ship-views-from-the-Amador-Causeway-Panama-1.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Godwin Banks</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">Doral, FL </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="{{ asset('images/featured.png') }}" alt="" title="Featured Property"> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_21" onclick="deleterequest(21, 67);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_67" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/128/room.JPG') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Steve James</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">New York, NY </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_20" onclick="deleterequest(20, 0);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_0" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/34/Chrysanthemum.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Steve James</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">Atlanta, GA </span> </td>
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
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/42/99/fer.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> James Smith</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">New York, NY </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular">Pending</span> </td>
      <td data-title="Action" valign="middle" align="center">
       <div class="btn-group"> <a href="#" class="btn btn-info" title="View Listing"><i class="fa fa-eye"></i></a>
        <button id="deletereq_13" onclick="deleterequest(13, 42);" type="button" class="btn btn-danger" title="Delete Lead Request"><i class="fa fa-times"></i>
        </button>
        <button type="button" id="contactusr_42" class="btn btn-warning msgleadclick" title="Contact Owner"><i class="fa fa-envelope"></i>
        </button>
       </div>
      </td>
     </tr>
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/5/home-794367_960_720.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> Steve James</td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13">Las Vegas, NV </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13">For Sale </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="{{ asset('images/featured.png') }}" alt="" title="Featured Property"> </td>
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