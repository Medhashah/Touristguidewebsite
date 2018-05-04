<?php
	
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$emailid=$_POST['eid'];
	$comment=$_POST['comments'];

	$connect=mysqli_connect("localhost","sanya","qwer","sanya") or die("connection Error");

	$execute=mysqli_query($connect,"INSERT INTO sanya.feedback(UserfirstName,UserlastName,Useremailid,Usercomment) 
		VALUES('$firstname','$lastname','$emailid','$comment')");

	echo '<script type="text/javascript"> alert("feedback taken Successfully");</script>';
	echo '<script type="text/javascript">window.location="online_guide_final.php";</script>';
	
?>	
