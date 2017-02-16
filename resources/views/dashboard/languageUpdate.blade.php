@extends('dashboard.master')
<!-- START PAGE HEADING -->
@section('content')
  <style>
    .nav_menu {
      display: none !important;
    }
  </style>
  <div class="right_col" role="main">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Messages</h2>
            <!-- Help Starts -->
            <div class="helpqust"><i class="fa fa-question-circle"></i>
              <div class="helpanswer"> You can edit your messages
                <br> from here. You can select a
                <br>language from the language
                <br>drop down box. On left side
                <br>boxes you can view the
                <br> default messages in English.
                <br>You can change or edit the
                <br> corresponding messages
                <br> for any languages from the
                <br>right side boxes.
                <br>
                <b>
                  Note - If you have left any message section as empty,
                  that messages will not be displayed for the corresponding language.
                </b>
              </div>
            </div>
            <!-- Help Ends -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            {{--<div class="dataTables_filter mgnB10">--}}
            {{--<div class="col-md-6 col-sm-6 col-xs-12 pull-right">--}}
            {{--<div style="width:100%">Choose language to edit</div>--}}
            {{--<select name="lang" id="lang" style="width: 100%; " class="select2_single" tabindex="-1">--}}
            {{--<option value="ar-jo">Arabic</option>--}}
            {{--</select>--}}
            {{--</div>--}}
            {{--</div>--}}
            <style>
              .deadliener .col-sm-6.col-xs-6 {
                width: 50%;
              }
            </style>
            <div class="clearfix"></div>
            <form class="form-horizontal form-label-left" method='post' action="{{ url('/admin/storeLanguage') }}">
              {{  csrf_field() }}
              <div class="fixedbtnlnguge" style="width:100%;">
                <input class="btn  btn-primary pull-right" type="submit" align="center" value="Save Messages"></div>
              <div style="float: left; width: 100%; display: inline-block">
                <?php
                $counter = 1;
                foreach ($data as $message) {
                ?>
                <div class="row deadliener">
                  <div class="col-sm-6 col-xs-6">
                    <textarea style="width: 100%;" readonly="" disabled><?= $message->msg_en ?></textarea>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <input type="hidden" name="postid_<?= $counter ?>" value="<?= $message->id ?>">
                    <textarea style="width: 100%;" name="message_<?= $counter; ?>"><?= $message->msg_ar ?></textarea>
                  </div>
                </div>
                <br>
                <?php
                $counter++;
                }
                ?>
              </div>
              <div>
                <br>
                <input class="btn btn-primary" type="submit" align="center" value="Save Messages">
              </div>
            </form>
          </div>
          <div class="row">
            <div class="col-lg-12">
              {{ $data->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer" style="margin-top: 0px;">
      <div class="">
        <p class="pull-left footercopyright"><a href="http://inout-realestate.demo.inoutscripts.net/admin/account/about">About</a>
        </p>
        <p class="pull-left footercopyright">&nbsp;&nbsp;<a href="http://www.inoutscripts.com">InoutScripts Home</a>
        </p>
        <p class="pull-left footercopyright">&nbsp;&nbsp;<a href="http://www.inoutscripts.com/terms.php">Terms of Use</a>
        </p>
        <p class="pull-right footercopyright">Copyright © 2006 - 2015 <a href="http://www.inoutscripts.com" target="_blank">InoutScripts.com</a>. All Rights Reserved. </p>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- Footer ends -->
  </div>
@endsection