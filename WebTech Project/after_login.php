<?php
	$email=$_POST['emailid'];
	$password=$_POST['password'];
	$connect=mysqli_connect("localhost","sanya","qwer","sanya") or die("Connection Error");

	$query= "SELECT * FROM sanya.registered WHERE useremailId='$email' AND userPassword='$password'";

	

	$execute= mysqli_query($connect,$query) or die(mysqli_errno($connect));
	
	$row=mysqli_fetch_array($execute);

	if(mysqli_num_rows($execute)!=1){
		echo '<script>alert("wrong credentials");</script>';
	}
	else
	{	
		echo '<script>alert("correct  credentials");</script>';
		echo '<script type="text/javascript">window.location="searchdestination.php";</script>';
	}

	//echo $row['name'];

?>

