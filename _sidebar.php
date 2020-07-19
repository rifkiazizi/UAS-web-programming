<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>UTS4C || Hamzah & Rifki </title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url() ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url() ?>/_assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url() ?>/_assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/_assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url() ?>/_assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/_assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url() ?>/_assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link href="<?php echo base_url() ?>/_assets/stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="<?php echo base_url() ?>/_assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link hrel="<?php echo base_url() ?>/_assets/stylesheet" href="css/fullcalendar.css">
  <link href="<?php echo base_url() ?>/_assets/css/widgets.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/_assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/_assets/css/style-Covid19.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/_assets/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/_assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?php echo base_url() ?>/_assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
    <!--sidebar start-->
    <!-- container section start -->
<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="index.php" class="logo">TEKNO<span class="lite">MEDIS</span></a>
  <!--logo end-->

  <div class="nav search-row" id="top_menu">
    <!--  search form start -->
    <ul class="nav top-menu">
      <li>
        <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
        </form>
      </li>
    </ul>
    <!--  search form end -->
  </div>

  <div class="top-nav notification-row">
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">

      <!-- user login dropdown start-->
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="profile-ava">
                            <img alt="" src="">
                        </span>
                        <span class="username">USER</span>
                        <b class="caret"></b>
                    </a>
        <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>
          <li>
            <a href="auth/logout.php"><i class="icon_key_alt"></i> Log Out</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</header>

<!--header end-->
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Beranda</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="medis.php">Rekam Medis</a>
          </li>
          <li class="sub-menu">
            <a href="https://www.cnnindonesia.com/">Tautan Berita</a>
          </li>
          <li class="sub-menu">
            <a href="kontak.php">Kontak</a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
  <!--sidebar end-->
  
  <div id="layout">
		<div id="menu">
    <br><br><br><br>
    <div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
		<h4>Selamat Datang di Website Tekno Medis</h4>
		</marquee> <br><br>
	</div>
	<div class="isiposting1">
		<!--menampilkan gambar-->
		<img src="_assets/img/peta.gif"alt="peta sebaran corora"
        	style="width: 1300px" height="650px">
				<h3> Statistik data corona-19</h3>Update Corona 7 April 2020: Jumlah Kasus COVID-19 di Dunia 1,3 Juta<br><a href="https://coronavirus.thebaselab.com/">
				<h4>Baca selengkapnya >>>>></h4>
			</a>
	</div>
  </div>
  
  </section> 

  

 
    </body>
<!-- javascripts -->
  <script src="<?php echo base_url() ?>/_assets/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>/_assets/js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?php echo base_url() ?>/_assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>/_assetsjs/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url() ?>/_assets/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url() ?>/_assets/js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url() ?>/_assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url() ?>/_assets/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?php echo base_url() ?>/_assetsjs/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/_assetsa/ssets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo base_url() ?>/_assetsjs/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url() ?>/_assetsjs/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url() ?>/_assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url() ?>/_assets/js/calendar-custom.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url() ?>/_assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url() ?>/_assets/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>/_assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url() ?>/_assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/xcharts.min.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/jquery.autosize.min.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/gdp-data.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/morris.min.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/sparklines.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/charts.js"></script>
    <script src="<?php echo base_url() ?>/_assets/js/jquery.slimscroll.min.js"></script>
</html>
