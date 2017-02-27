@extends('dashboardUser.dash_master_layout')
@section('content') 
<div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
 <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
  <h4 class="robotolight fontsize24 graytext mgnB20"> <?= $lang[600][$current] ?><div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
    <div class="helpanswer">
     <?= $lang[902][$current] ?>                                   </div>
   </div></h4>
  <div id="no-more-tables">
   <table class="table-bordered fulwidthm  table-striped table-condensed cf cpnl_table">
    <thead class="robotoregular font-size14 tablehead dblue_bg whitetext">
     <tr class="robotomedium">
      <th class="numeric robotomedium"><?= $lang[864][$current] ?></th>
      <th class="numeric robotomedium"><?= $lang[865][$current] ?></th>
      <th class="numeric robotomedium"><?= $lang[866][$current] ?></th>
      <th class="numeric robotomedium"><?= $lang[870][$current] ?></th>
      <th class="numeric robotomedium"><?= $lang[867][$current] ?> </th>
      <th class="numeric robotomedium"><?= $lang[868][$current] ?></th>
      <th class="numeric robotomedium"><?= $lang[869][$current] ?></th>
     </tr>
    </thead>
    <tbody id="list_results">
     <tr class="cpntr robotoregular graytext">
      <td data-title="Image" valign="middle">
       <div class="listingiamgetable"><img src="{{ asset('userdata/List/Thumb/0/201/1600x1200-1.jpg') }}" alt="userimage">
       </div>
      </td>
      <td data-title="Lead Name" valign="middle"> <?= $lang[984][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1008][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"><?= $lang[1009][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1010][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"><?= $lang[1011][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1010][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="images/featured.png" alt="" title="Featured Property"> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"> <?= $lang[1012][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1013][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?></span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"> <?= $lang[984][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1014][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"> <?= $lang[1015][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1016][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?></span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="images/featured.png" alt="" title="Featured Property"> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[922][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"><?= $lang[984][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1010][$current] ?></span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"> <?= $lang[984][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1017][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-success robotoregular"><?= $lang[871][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"> <?= $lang[1018][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1010][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <i class="fa fa-times-circle rederror fontsize16"></i> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-warning robotoregular"><?= $lang[822][$current] ?></span> </td>
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
      <td data-title="Lead Name" valign="middle"> <?= $lang[984][$current] ?></td>
      <td data-title="Listing Address" valign="top"> <span class="fontsize13"><?= $lang[1019][$current] ?> </span> </td>
      <td data-title="Type" valign="top"> <span class="fontsize13"><?= $lang[499][$current] ?> </span> </td>
      <td data-title="Featured" valign="middle" align="center"> <img src="images/featured.png" alt="" title="Featured Property"> </td>
      <td data-title="Status" valign="middle" align="center"> <span class="label label-success robotoregular"><?= $lang[871][$current] ?></span> </td>
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