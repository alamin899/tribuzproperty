<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminpannel/dist/')}}/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('adminpannel/plugins/')}}/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('adminpannel.include.header')

<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('adminpannel.include.sidebar')


<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('body')
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    {{--    footer start--}}
    @include('adminpannel.include.footer')
    {{--    endfooter--}}
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminpannel/plugins/')}}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminpannel/plugins/')}}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminpannel/plugins/')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('adminpannel/plugins/')}}/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('adminpannel/plugins/')}}/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('adminpannel/plugins/')}}/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('adminpannel/plugins/')}}/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminpannel/plugins/')}}/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('adminpannel/plugins/')}}/moment/moment.min.js"></script>
<script src="{{asset('adminpannel/plugins/')}}/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminpannel/plugins/')}}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('adminpannel/plugins/')}}/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminpannel/plugins/')}}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="{{asset('adminpannel/plugins/')}}/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminpannel/dist/')}}/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminpannel/dist/')}}/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminpannel/dist/')}}/js/demo.js"></script>
</body>
</html>
