<?php
include 'header.php';
if(isset($_SESSION['wool_user'])){
	header("Location: index.php");
	exit;
}
$refer="";
if(isset($_POST['login_woo'])){
	$username=strip_tags(htmlspecialchars(trim($_POST['username'])));
	$password=strip_tags(htmlspecialchars(trim($_POST['password'])));
	$password=md5($password);
	$query=mysqli_query($con,"SELECT * FROM users WHERE username = '".$username."' AND password='".$password."'");
	$count=mysqli_num_rows($query);
	if($count==1){
		$_SESSION['wool_user']=$username;
		header("Location: index.php");
		?>
		<?php
	}
	else{
		echo "<script>alert('sorry')</script>";
	//	echo "<br><br><br><br><br><br><br><br><br><br><br><br>".mysqli_error($con);
	}
	/*if($query){echo "true";}
	else{echo "false";echo mysqli_error($con);}*/
}

?>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<br><br><br><br>
<center>
<div id="loginDiv" style="display: none;margin-top: 5%;">
<table>
	<!--<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">-->
		<form role="form" action="login.php" method="post">
			
		<span style="text-align: center;font-weight: bold;font-size:28px;">Login here</span><br/><br/>
		<tr><td>Username</td><td>:</td><td><input type="text" name="username" id="username"></td></tr>
		<tr><td>Password</td><td>:</td><td><input type="password" name="password" id="password"></td></tr>
		<tr><td></td><td></td><td><input type="submit" name="login_woo" id="login_woo" value="Login"></td></tr>
	</form>
</table>
New user? <a href="register.php">Register here</a>
</div>
</center>
<script type="text/javascript">
	$(document).ready(function(){
		$('#loginDiv').slideToggle();
	})
</script>

<br><br><br><br>
<?php
include 'footer.php';
?>
