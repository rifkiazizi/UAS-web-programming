<?php 
require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url()."';</script>";
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url() ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url() ?>/_assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url() ?>/_assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>/_assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url() ?>/_assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/_assets/css/style-responsive.css" rel="stylesheet" />


</head>

<body class="login-img3-body">
  <div class="container">
  <?php 
  // SCRIPT login
      if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
        $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
        $sql_login =   mysqli_query($con, "SELECT * FROM tb_user where username= '$user' AND Password = '$pass' ") or die (mysqli_errno($con));
        if(mysqli_num_rows($sql_login) > 0){
          $_SESSION['user'] = $user;
          echo "<script>window.location='".base_url()."';</script>";
        } else { ?>
           <div class="row">
         
              <div class="col-lg-6 col-lg-offset-3">
                <div class="alert alert-danger alert-dismissable" role-"alert">
                     <a href="" class="clos" data-dismiss="alert" aria-label="close">&times;</a>
                     <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                     <strong>Login Gagal</strong> Username / Password Salah
                </div>
              </div>
           </div>
        <?php
        }
     }
     ?>
    <form class="login-form" action="" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="user" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="pass" class="form-control" placeholder="Password">
      </div>
        <label class="checkbox">  
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" name="login" type="submit" action >Login</button>
        <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
      </div>
    </form> <br><br><br><br><br><br><br><br><br>
    <div class="text-right">
      <div class="credits">
          Designed by <a href="#">TEKNO MEDIS</a>
        </div>
    </div>
  </div>
</body>

</html>
<?php
}
?>