<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Jakarta"); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inzomnia | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php
    require_once('auth.php');
  ?>
  <?php
    date_default_timezone_set("Asia/Jakarta");
    $ayam = date("dmY").'-'.date("His");
    $finalcode='JL-'.$ayam;
  ?>
  <?php 
    $position=$_SESSION['SESS_LAST_NAME'];


    if ($position=='admin') {
  ?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <p class="nav-link" style="margin-left: 403px; width: 175px"><i class="fas fa-user" style="margin-right: 5px"></i>Welcome : <?php echo $_SESSION['SESS_LAST_NAME'];?></p>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <p class="nav-link" style="margin-left: 5px; width: 270px">
          <i class="fas fa-calendar-week" style="margin-right: 5px"> 
            </i>
            <?php
                date_default_timezone_set("Asia/Jakarta");
                $Today = date('y:m:d',mktime());
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
              ?> 
          </p>
      </li>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link" style="margin-left: 5px; color: red"><i class="fas fa-sign-out-alt" style="margin-right: 5px">  </i>Logout</a>
      </li>
    </ul>
    </ul>
  </nav>

   

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <span class="brand-text font-weight-light ml-4" style="font-size: 30px">Inzomnia Cafe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 15px">
      <!-- Sidebar Menu -->
      <nav class="mt-2" style="font-size: 18px">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <a href="#" class="nav-link active" style="margin-top: 15px;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <a href="#" class="nav-link"style="margin-top: 15px;">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Penjualan
              </p>
            </a>
            <a href="#" class="nav-link" style="margin-top: 15px;">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Pembelian
              </p>
            </a>
            <a href="#" class="nav-link" style="margin-top: 15px;">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Menu
              </p>
            </a>
            <a href="#" class="nav-link" style="margin-top: 15px;">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Laporan Penjualan
              </p>
            </a>
            <a href="#" class="nav-link" style="margin-top: 15px;">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Laporan Pembelian
              </p>
            </a>
            <div class="info-box mt-5">
              <span class="info-box-icon bg-primary"><i class="far fa-clock"></i></span>
              <form name="clock">
                <div class="info-box-content">
                  <span class="info-box-text">Waktu</span>
                  <input type="button" class="btn btn-block btn-outline-secondary disabled" name="face" value=""></input>
                </div>
              </form>
              <!-- /.info-box-content -->
            </div>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-5">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#" class="small-box bg-info" style="padding: 15px">
              <div class="inner">
                <i class="fas fa-cart-arrow-down" style="font-size: 30px"></i>
                <h2 style="padding-top: 20px; font-size:1.5rem">Penjualan</h2>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#" class="small-box bg-secondary" style="padding: 15px">
              <div class="inner">
                <i class="fas fa-cart-plus" style="font-size: 30px"></i>
                <h2 style="padding-top: 20px; font-size:1.5rem">Pembelian</h2>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#" class="small-box bg-primary" style="padding: 15px">
              <div class="inner">
                <i class="fas fa-desktop" style="font-size: 30px"></i>
                <h2 style="padding-top: 20px; font-size:1.5rem">Menu</h2>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#" class="small-box bg-success" style="padding: 15px">
              <div class="inner">
                <i class="fas fa-chart-line" style="font-size: 30px"></i>
                <h2 style="padding-top: 20px; font-size:1.5rem">Laporan Penjualan</h2>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#" class="small-box bg-success" style="padding: 15px">
              <div class="inner">
                <i class="fas fa-chart-bar" style="font-size: 30px"></i>
                <h2 style="padding-top: 20px; font-size:1.5rem">Laporan Pembelian</h2>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="#" class="small-box bg-danger" style="padding: 15px">
              <div class="inner">
                <i class="fas fa-sign-out-alt" style="font-size: 30px"></i>
                <h2 style="padding-top: 20px; font-size:1.5rem">Logout</h2>
              </div>
            </a>
          </div>
          <!-- ./col -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
    <?php } ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<script language="javascript" type="text/javascript">
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}

function showtime () {

var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()


var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
</script>
</body>
</html>
