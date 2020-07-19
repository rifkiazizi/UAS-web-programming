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
  <link href="_assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="_assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="_assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="_assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="_assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="_assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="_assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link href="_assets/stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="_assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link hrel="_assets/stylesheet" href="css/fullcalendar.css">
  <link href="_assets/css/widgets.css" rel="stylesheet">
  <link href="_assets/css/style.css" rel="stylesheet">
  <link href="_assets/css/style-Covid19.css" rel="stylesheet">
  <link href="_assets/css/style-responsive.css" rel="stylesheet" />
  <link href="_assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="_assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>
<body>
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
          <a class="" href="index.php">
                        <i class="icon_house_alt"></i>
                        <span>Beranda</span>
                    </a>
        </li>
        <li class="sub-menu">
          <a href="medis.php">Rekam Medis</a>
        </li>
        <li class="sub-menu">
          <a href="https://www.cnnindonesia.com/">Berita</a>
        </li>
        <li class="sub-menu">
          <a href="">Kontak</a>
        </li>

      </ul>
      <!-- sidebar menu end-->
   </div>
</aside>
<!--sidebar end-->

<br><br><br>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-10">
        <ol class="breadcrumb">
          <li><i class="fa fa-phone"></i><a href="index.php">KONTAK</a></li>
        </ol>
      </div>
    </div>
    <!-- page start-->
    <div class="row">
      <div class="col-lg-4">
        <div class="recent">
          <h3>CALL CENTER</h3>
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="$post" role="form" class="contactForm">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg" >Submit</button>
        </form>
      </div>

      <div class="col-lg-6">
        <div class="recent"><br> <br>
          <h3>HUBUNGI</h3>
        </div>
        <div class="">
          <p>Pemerintah Provinsi Jawa  Tengah sangat mendesak siapa pun yang memiliki gejala - termasuk demam, batuk, bersin, sakit tenggorokan, atau kesulitan bernapas - untuk melakukan isolasi diri selama 14 hari.</p>
          <p>Segera ke klinik terdekat</p>

          <h4>Alamat:</h4>KABUPATEN BREBES JAWA TENGAH INDONESIA<br>
          <h4>Telepone:</h4>+62 089 1234 1234 </br> 
        </div>
      </div>
    </div>
    <!-- page end-->
  </section>
</section>
  <!--main content end-->
</body>
<!-- sciprt js -->
</html>

