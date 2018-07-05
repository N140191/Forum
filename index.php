<?php
include 'header.php';
if(!isset($_SESSION['wool_user'])){
	header("Location: login.php");
}
if(isset($_POST['new_quesion_post'])){
	//$question=addslashes(htmlspecialchars(trim($_POST['question'])));
	$question = $_POST['question'];
	$question=str_replace("'","\'",$question);
	$sql=mysqli_query($con,"INSERT INTO forum values(NULL,'$u_namee','$question','$datee')");
	if($sql){
		echo "<script>window.alert('sent success')</script>";
	}
	else{
		echo "<script>window.alert('failed')</script>";
	}
}
?>

<head>
	<style type="text/css">
		#ytable{
		width: 60%;
	}
	@media only screen and (max-width: 768px) {
		#myable{
			width:100%;
		}
	}
	</style>
</head>
<div style="margin-top: -1%;"></div>
    <div id="headerwrap">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	<table id="mytable" class="table table-bordered">
	<tr style="border: 2px solid black;">
		<th style="width: 5%;">Sno</th><th style="width: 15%;">Person</th><th style="width: 45%;">Question</th><th style="width: 10%;">Responses</th><th style="width: 25%;">Date and Time</th>
	</tr>
	<?php
	$sql=mysqli_query($con,"SELECT * FROM forum order by f_id desc");
    $i=1;
	while($row=mysqli_fetch_array($sql)){
		//echo "<tr><td>".$row['n_id']."</td><td onclick='''openModal('".$row['n_id']."')'''>".$row['note']."</td><td>".$row['sentby']."</td><td>".$row['sentto']."</td><td style='font-size:12px;'>".$row['senton']."</td><td>".$row['views']."</td></tr>";
		//$sql2=mysqli_query($con,"SELECT count(*) from forum_ans where f_idd='".$row['f_id']."'");
		$sql2=mysqli_query($con,"SELECT * from forum_ans WHERE f_q_id='".$row['f_id']."'");
		$ress=mysqli_num_rows($sql2);
		?>
		<tr><td><?php echo $i;?></td><td><?php echo $row['f_person'];?></td><td><a href="forum_view.php?f_idd=<?php echo $row['f_id']?>"><?php echo $row['f_que'];?></a></td><td><?php echo $ress;?></td><td><?php echo $row['f_time'];?></td></tr>
		<?php
        $i++;
	}
	?>
	</table>
	<div class="col-md-2"></div>
	<div class="col-md-6">
	<a href="#">New Question? Post below</a><br><br>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="text" name="question" id="question" class="form-control"><br>
		<button type="submit" name="new_quesion_post" class="btn btn-primary">Ask</button>
	</form>
	</div>
</div>
<div class="col-md-2">
	
</div>
</div>
<br><br><br><br>
<?php
include 'footer.php';
?>
