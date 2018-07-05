<?php
include 'header.php';
if(!isset($_SESSION['wool_user'])){
	header("Location: login.php");
}
$id=$_GET['f_idd'];
if(isset($_POST['send_resp'])){
	$f_i=$_POST['f_iddd'];
	$person=$_SESSION['wool_user'];
	$resp="<pre>".$_POST['response_content']."<pre>";
	$resp = str_replace("'","''",$resp);
	$sql=mysqli_query($con,"INSERT INTO forum_ans values(NULL,'$f_i','$u_namee','$resp','$datee')");
	if($sql){
		echo "<script>window.alert('successfully added')</script>";
	}
	else{
		echo "<br><br><br><br><br><br>".mysqli_error($con);
		echo "<br>".$id;
	}
}
?>
<head>
<style type="text/css">
	#divi{
		max-height: 400px;
		width: 60%;
		overflow: auto;
		border:1px solid black;
	}
	#mytable{
		width: 100%;
	}
	textarea{
		
		outline: none;
	}
  textarea:focus{
    -webkit-transition: 2s;
    transition: 2s;
    outline: 2px solid black;
  }
	pre {border: 0; background-color: transparent;display: inline-block;white-space: pre-wrap;word-break: normal;}
	@media only screen and (max-width: 768px) {
		#divi{
			width:100%;
		}
	}
</style>
</head>
<div style="margin-top: -1%;"></div>
    <div id="headerwrap">
    <div class="col-md-2">
      <button class="btn btn-default" onclick="window.location.href='index.php'">Back to forum</button>
    </div>
    <div class="col-md-8" style="max-height: 400px;overflow: auto;">
	<table class="table table-bordered" id="mytable">
	<tr style="border: 2px solid black;">
		<th style="width: 5%;">SNo</th><th style="width: 15%;">Person</th><th style="width: 45%;">Answer</th><th style="width: 20%;">Date and Time</th>
	</tr>
	<?php
	$sql=mysqli_query($con,"SELECT * FROM forum_ans where f_q_id='$id' order by f_id desc");
    $i=1;
	while($row=mysqli_fetch_array($sql)){
		?>
		<tr><td><?php echo $i;?></td><td><?php echo $row['f_person'];?></td><td><?php echo $row['f_reply'];?></td><td><?php echo $row['f_time'];?></td></tr>
		<?php
        $i++;
	}
	?>
	</table>
	</div>
  <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="" method="post">
      Your Response: <br><input type="text" hidden="true" name="f_iddd" value="<?php echo $id;?>">
      <textarea cols="60" rows="5" name="response_content"></textarea><br>
      <input type="submit" name="send_resp" value="Add Response">
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
</div>
<br><br><br><br>
<?php
include 'footer.php';
?>
