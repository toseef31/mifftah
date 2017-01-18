<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamowebs - Login</title>
  
  <!-- META SECTION -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- END META SECTION -->
  <!-- CSS INCLUDE -->
  <link rel="stylesheet" href="{{ asset('_admin/css/styles.css') }} ">
  <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- APP WRAPPER -->
<div class="app">
  <!-- START APP CONTAINER -->
  <div class="app-container">
    <div class="app-login-box">
      <div class="app-login-box-user"><img src="{{ asset('_admin/img/user/no-image.png') }} " alt="John Doe"></div>
      <div class="app-login-box-title">
        <div class="title">Eyal</div>
        <div class="subtitle">Sign in to your account</div>
      </div>
      <div class="app-login-box-container">
        @include('auth.login')
        @yield('content')
      </div>
      <div class="app-login-box-or">
        <!--<div class="or">OR</div>-->
      </div>
      <div class="app-login-box-footer">
        &copy; <a href="http://dynamowebs.com" target="_blank">Dynowebs</a> 20<?= date('y') ?>. All rights reserved.
      </div>
    </div>
  
  </div>
  <!-- END APP CONTAINER -->

</div>
<!-- END APP WRAPPER -->

<!-- START SCRIPTS -->
<script type="text/javascript" src="{{ asset('_admin/js/vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('_admin/js/vendor/jquery/jquery-ui.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/js/vendor/bootstrap/bootstrap.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/js/vendor/moment/moment.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/customscrollbar/jquery.mCustomScrollbar.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/bootstrap-select/bootstrap-select.js') }} "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/maskedinput/jquery.maskedinput.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/form-validator/jquery.form-validator.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/noty/jquery.noty.packaged.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/datatables/jquery.dataTables.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/datatables/dataTables.bootstrap.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/sweetalert/sweetalert.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/knob/jquery.knob.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/jvectormap/jquery-jvectormap.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/jvectormap/jquery-jvectormap-us-aea-en.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/sparkline/jquery.sparkline.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/morris/raphael.min.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/morris/morris.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/rickshaw/d3.v3.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/vendor/rickshaw/rickshaw.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/vendor/isotope/isotope.pkgd.min.js') }}  "></script>

<script type="text/javascript" src="{{ asset('_admin/app.js') }} "></script>
<script type="text/javascript" src="{{ asset('_admin/app_plugins.js') }}  "></script>
<script type="text/javascript" src="{{ asset('_admin/app_demo.js') }}  "></script>
<!-- END SCRIPTS -->
</body>
</html>