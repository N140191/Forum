<?php
include 'header.php';
if(isset($_SESSION['wool_user'])){
	header("Location: index.php");
}
$errMsg="";
$datee=date("d/m/y h:m:s A");
if(isset($_POST['register'])){
	$username=strip_tags(htmlspecialchars(trim($_POST['username'])));
	$password=strip_tags(htmlspecialchars(trim($_POST['password'])));
	$password=md5($password);
	$name=strip_tags(htmlspecialchars(trim($_POST['name'])));
	$address=strip_tags(htmlspecialchars(trim($_POST['address'])));
	$qual=strip_tags(htmlspecialchars(trim($_POST['qual'])));
	$stream=strip_tags(htmlspecialchars(trim($_POST['stream'])));
	$sec_ques=strip_tags(htmlspecialchars(trim($_POST['sec_ques'])));
	$sec_ans=strip_tags(htmlspecialchars(trim($_POST['sec_ans'])));
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}
	$query=mysqli_query($con,"INSERT INTO profile VALUES(NULL,'$username','$password','$name','$address','$qual','$stream','$ip','$sec_ques','$sec_ans','employee','$datee')");
	if($query){
		echo "<script>window.alert('success')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}
	else{
		//echo $errMsg=mysqli_error($con);
		echo $errMsg="fail occur";
	}
}
?>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> 
<center>
<div id="loginDiv" style="margin-top: 10%;">
<table>
<div><?php echo $errMsg;?></div>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="registerForm">
	<table>
		<span style="text-align: center;font-weight: bold;font-size:28px;">Register here</span><br/><br/>
		<tr><td>Username</td><td>:</td><td><input type="text" name="username" id="username" placeholder="For login"></td><td></td></tr>
		<tr><td>Password</td><td>:</td><td><input type="password" name="password" id="password" placeholder="*****"></td><td></td></tr>
		<tr><td>Your Name</td><td>:</td><td><input type="text" name="name" id="name"></td><td></td></tr>
		<tr><td>Address</td><td>:</td><td><input type="text" name="address" id="address"></td><td></td></tr>

		<tr><td id="year">Qualification</td><td>:</td><td>
		<select name="year" id="qual" required>
		<option selected disabled="true">select</option>
		<option value="btech">B.Tech</option>
		<option value="mtech">M.tech</option>
		<option value="ba">BA</option>
		<option value="bcom">BCom</option>
		</select></td><td></td></tr>

		<tr><td id="stream">Stream of Job</td><td>:</td><td>
		<select name="stream" id="stream">
		<option disabled selected>select</option>
		<option value="Software Developer">Software Developer</option>
		<option value="Web Developer">Web Developer</option>
		<option value="Web Designer">Web Designer</option>
		<option value="Database Admin">Database Admin</option>
		</select></td><td></td></tr>


		<tr><td>Security Question</td><td>:</td><td>
		<select name="sec_ques" value="" required>
		<option selected disabled>select</option>
		<option value="nick_name">What is your nick name</option>
		<option value="loves">who loves you most?</option>
		<option value="hallticket">Your 10th hallticket number</option>
		</select></td><td></td></tr>

		<tr><td>Answer</td><td>:</td><td><input type="text" name="sec_ans" id="sec_ans"></td><td></td></tr>
		<tr><td></td><td></td><td><input type="submit" name="register" id="register" value="Register"></td><td></td></tr>
	</table>
	</form>
</table>
</div>

<?php
if($errMsg==1){
?>
<div style="width:50%;font-size:16px;text-align:center;">
	success fully registered. you may <a href="logon.php">login here</a>
</div>
<?php
}
?>
</center>
<?php
include 'footer.php';
?>
