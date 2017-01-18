<!-- START SIDEBAR -->
<div class="app-sidebar app-navigation app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
  <a href="#" class="app-navigation-logo">
    Welcome to bitcoin4u
    <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span>
    
    </button>
  </a>
  <nav>
    <ul>
      
      <li><a href="{{ url('/admin/dashboard') }}"><span class="icon-laptop-phone"></span> Dashboard</a></li>
      
      <li>
        <a href="#"><span class="icon-bubble-user"></span>Manage Users</a>
        <ul>
          <li><a href="{{ url('/admin/getall') }}"><span class="icon-users-plus"></span>All Users</a></li>
          <li><a href="{{ url('/admin/searchuser/') }}"><span class="icon-file-search"></span>Search Users</a></li>
        </ul>
      </li>
      <li>
        <a href="#"><span class="icon-users-minus"></span>Manage Agents</a>
        <ul>
          <li><a href="{{ url('/admin/getallagents') }}"><span class="icon-users-plus"></span>Manage Agents</a></li>
          <li><a href="{{ url('/admin/searchagents/') }}"><span class="icon-file-search"></span>Search Agents</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#"><span class="icon-accessibility"></span>Manage Agent Accounts</a>
        <ul>
          <li><a href="#"><span class="icon-use"></span>Manage My Agent Accounts</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#"><span class="icon-home"></span>Manage Leads</a>
        <ul>
          <li><a href="#"><span class="icon-use"></span>Manage Requests Received</a></li>
          <li><a href="#"><span class="icon-use"></span>Manage Requests Sent</a></li>
          <li><a href="{{ url('admin/manageLeads/') }}"><span class="icon-use"></span>Manage Active Leads</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#"><span class="icon-percent-square"></span>Admin Listing </a>
        <ul>
          <li><a href="{{ url('/admin/addlead') }}"><span class="icon-use"></span>Add new Listing</a></li>
          <li><a href="{{ url('admin/manageAdminLeads') }}"><span class="icon-use"></span>Manage My Listing</a></li>
          <li><a href="{{ url('/admin/updateadmin/'  . Auth::user()->id ) }}"><span class="icon-use"></span>Edit my Profile</a></li>
          <li><a href="#"><span class="icon-use"></span>My lead Requests</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#"><span class="icon-cash-dollar"></span>User Payments</a>
        <ul>
          <li><a href="#"><span class="icon-use"></span>Bank Payment Requests</a></li>
          <li><a href="#"><span class="icon-use"></span>View Payment transactions</a></li>
          <li><a href="#"><span class="icon-use"></span>My lead Requests</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#"><span class="icon-cash-dollar"></span>Other Settings</a>
        <ul>
          <li><a href="#"><span class="icon-use"></span>Setting one</a></li>
          <li><a href="#"><span class="icon-use"></span>Setting Two</a></li>
          <li><a href="#"><span class="icon-use"></span>Setting Three</a></li>
        </ul>
      </li>
    
    
    </ul>
  </nav>
</div>
<!-- END SIDEBAR -->

<!-- START APP CONTENT -->
<div class="app-content app-sidebar-left">