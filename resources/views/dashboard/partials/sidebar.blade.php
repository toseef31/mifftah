<div class="col-md-3 left_col">
  <div class="left_col scroll-view" style="overflow: hidden; outline: none; cursor: -webkit-grab;" tabindex="5000">
    
    <div class="navbar nav_title" style="border: 0;">
      <a class="site_title" href="#">
        <div class="logoddd"><img src="{{ asset('Power-Realtor_files/logo.png') }}" alt="For Sale Network"></div>
      </a>
    </div>
    <div class="clearfix"></div>
    
    
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      
      <div class="menu_section">
        
        <ul class="nav side-menu">
          <li class="active"><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li class="current-page"><a href="<?= url('admin/dashboard') ?>">Dashboard</a></li>
              <li><a href="#">Notice Board</a></li>
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-users"></i> Manage Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="{{ url('/admin/getall') }}">Manage Users</a></li>
              <li><a href="{{ url('/admin/searchuser/') }}">Search User</a></li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-briefcase"></i>Manage Agents <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="{{ url('/admin/getallagents') }}">Manage Agents</a></li>
              <li><a href="{{ url('/admin/searchagents/') }}">Search Agents</a></li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          
          <li><a><i class="fa fa-user"></i>Manage Agent Account <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="{{ url('/admin/getallagents') }}">Manage My Agent Account</a></li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          
          <li><a><i class="fa fa-link"></i>Manage Leads<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="#">Manage Requests Received</a></li>
              <li><a href="#">Manage Requests Sent</a></li>
              <li><a href="{{ url('admin/manageLeads/') }}">Manage Active Leads</a></li>
              <li><a href="#">Search Leads</a></li>
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          
          
          <li><a><i class="fa fa-list"></i> User Listings<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              
              <li><a href="#">Manage User Listings</a></li>
              
              <li><a href="#">Search Listing</a></li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-bars"></i>Admin Listings<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="{{ url('/admin/addlead') }}">Add New Listing</a></li>
              <li><a href="{{ url('admin/manageAdminLeads') }}">Manage My Listings</a></li>
              <li><a href="{{ url('/admin/updateadmin/'  . Auth::user()->id ) }}">Edit My Profile</a></li>
              <li><a href="#">My Lead Requests</a></li>
              
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          
          
          <li><a><i class="fa fa-credit-card"></i>User Payments<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              
              
              <li><a href="#">Bank Payment Requests</a></li>
              <li><a href="#">View Payment Transactions</a></li>
              
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          
          
          <li><a><i class="fa fa-file-image-o"></i> Email Templates<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              
              <li><a href="#">Manage Email Templates</a></li>
              
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          
          <li><a><i class="fa fa-pencil-square-o"></i>Manage Ads<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              
              
              <li><a href="#">Manage AdCodes</a></li>
              
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-list-alt"></i>Site Contents<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="#">Logo &amp; Meta Contents
                </a>
              </li>
              <li><a href="#">Manage Tile Images</a>
              </li>
              <li><a href="#">Manage Slide Images</a>
              </li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            
            
            </ul>
          </li>
          <li><a><i class="fa fa-cog"></i> Settings<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              
              <li><a href="#">Basic Settings</a>
              </li>
              <li><a href="#">Advanced Settings</a>
              </li>
              <li><a href="#">Payment Settings</a>
              </li>
              <li><a href="#">Social Media Links</a>
              </li>
              <li><a href="#">SMTP Settings</a>
              </li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a></li>
            
            
            </ul>
          </li>
          <li><a><i class="fa fa-check"></i>Custom Options<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              
              <li><a href="#">Manage Options</a>
              </li>
              
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i></a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-language"></i>Manage Languages<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="#">Add New Language</a></li>
              <li><a href="#">Manage Languages</a></li>
              <li><a href="{{url('admin/updateLanguage') }}">Edit Messages</a></li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i> </a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-bar-chart"></i>System Statistics<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="#">Overall Statistics</a></li>
              <li><a href="#">Revenue Details</a></li>
              <li><a href="#">Need Some Help <i class="fa fa-question-circle" style="font-size: 13px;"></i>
                </a>
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    
    
    </div>
    <!-- /sidebar menu -->
    
    <!-- /menu footer buttons -->
    
    <!-- /menu footer buttons -->
  </div>
</div>