<?php
include("db.php");
date_default_timezone_set("Asia/Kolkata");
$date=date("d/m/Y");
$times=date(" h:i:s A");
$datee=$date." ".$times;
session_start();
ob_start();
if(isset($_SESSION['wool_user'])){
    $user=$_SESSION['wool_user'];
    $query=mysqli_query($con,"SELECT * FROM profile WHERE username='$user'");
    $res=mysqli_fetch_array($query);
    $use=$res['u_type'];
    $u_namee=$res['name'];
}
else{
  $use="user";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/icons/ico.png">

    <title>Woolwerin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="assets/js/loadin.js"></script>
    <style>
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(assets/loader.gif) center no-repeat #fff;
}
/*img{
  pointer-events: none;
}*/
</style>
  </head>
  <body onload="document.getElementById('se-pre-con').style.display='none'">
  	<div class="se-pre-con" id="se-pre-con"></div>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Woolwerin</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            
            <?php
              if(isset($_SESSION['wool_user'])){
            ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $u_namee;?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
            <?php
              }else{
            ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Ship<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
              </ul>
            </li>
            <?php
              }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
