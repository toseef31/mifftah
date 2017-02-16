@extends('dashboard.master')
@section('content')
  <div class="right_col" role="main">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats n_yellow">
          <div class="icon"><i class="fa fa-money"></i>
          </div>
          <div class="count">$ 170.00</div>
          
          <h3>Revenue</h3>
          <p>Total Revenue Generated.</p>
          <div class="hover_shine"></div>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats n_vilot">
          <div class="icon"><i class="fa fa-users"></i>
          </div>
          <div class="count">114</div>
          
          <h3>Users</h3>
          <p>Total number of Active Users.</p>
          <div class="hover_shine"></div>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats n_green">
          <div class="icon"><i class="fa fa-link"></i>
          </div>
          <div class="count">14</div>
          
          <h3>Agents/Brokers</h3>
          <p>Total Number of Active Agents/Brokers.</p>
          <div class="hover_shine"></div>
        </div>
      </div>
      
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats n_blue">
          <div class="icon"><i class="fa fa-list"></i>
          </div>
          <div class="count">41</div>
          
          <h3>Listings</h3>
          <p>Total Number of Active Listings.</p>
          <div class="hover_shine"></div>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats n_pink">
          <div class="icon"><i class="fa fa-certificate"></i>
          </div>
          <div class="count">17</div>
          
          <h3>Featured</h3>
          <p>Total Number of Featured Listings.</p>
          <div class="hover_shine"></div>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="tile-stats n_darkv">
          <div class="icon"><i class="fa fa-key"></i>
          </div>
          <div class="count">12</div>
          
          <h3>Sold</h3>
          <p>Total Number of Sold Listings.</p>
          <div class="hover_shine"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2 id="xtext">Revenue Generation Summary for Current Month
                <small> (Daily Progress till Today)</small>
              </h2>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div id="parent">
                  <canvas id="canvas" height="179" width="539" style="width: 600px; height: 200px;"></canvas>
                </div>
              
              
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                <div>
                  <select class="select2_single" style="width: 100%; display: none;" id="timechange" name="timechange" tabindex="-1">
                    <option value="1" selected="selected">Daily</option>
                    <option value="2"> Monthly</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" aria-owns="select2-timechange-results" aria-labelledby="select2-timechange-container"><span class="select2-selection__rendered" id="select2-timechange-container">Daily</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <div class="clearfix mgnB15"></div>
                <div>
                  <span class="boxclr se_cblue6"></span>Total Revenue Generation
                
                </div>
                <div class="clearfix mgnB15"></div>
                <div>
                  <span class="boxclr se_cblue3"></span> Featured Listings Revenue
                </div>
                <div class="clearfix mgnB15"></div>
                <div>
                  <span class="boxclr se_cblue5"></span> Premium Agents Revenue
                
                </div>
                <div class="clearfix mgnB15"></div>
                <div>
                  <span class="boxclr se_cblue99"></span> Listing Extension Revenue
                
                </div>
              </div>
            
            
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>System Messages</h2>
              <div class="helpqust"><i class="fa fa-question-circle"></i>
                <div class="helpanswer">
                  To ensure a smooth performance, system also displays certain messages based on values of various parameters. Some of these messages are just simple notifications while some are warnings (in red color). The warnings require immediate attention from your side.
                
                
                </div>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              
              <div class="row">
                <ul>
                  <li class="mgnB10">You are running version 1.0 of the script.</li>
                  <li class="mgnB10">Your system timezone is set to GMT. Current server time is Thu 19/01/2017 01:44:07 PM.</li>
                  
                  <li class="mgnB10" style="color:red;">Your cron job was last executed successfully at Wed 09/12/2015 07:22:11 PM.</li>
                  
                  <li class="mgnB10">Your database table collation is set to utf8_unicode_ci. If this is wrong, please contact our support desk.</li>
                  <li class="mgnB10">SMTP mailing is not configured by Admin. PHP mail() will be used instead.</li>
                </ul>
              </div>
            
            
            </div>
          </div>
        </div>
      </div>
    
    </div> <!-- right_col ends -->
  </div> <!-- Main container ends -->
  </div> <!-- container body ends -->
@endsection