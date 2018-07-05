<?php
//error_reporting(0);
$con=mysqli_connect("localhost","root","wamp");
$db=mysqli_select_db($con, "woolwerin");
if($con && $db){
	//echo "success";
}
else{
	echo "failed".mysqli_connect_error($con);
	exit;
}

?>
