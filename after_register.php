<?php
	$password=$_POST['password'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$emailid=$_POST['eid'];
	$contactno=$_POST['cno'];
	$address=$_POST['add'];
	$pincode=$_POST['pin'];
	


//host name , username , pass , db name
	$connect=mysqli_connect("localhost","sanya","qwer","sanya") or die("connection Error");
	$execute=mysqli_query($connect,"INSERT INTO sanya.registered(userPassword,userfirstName,userlastName,useremailId,userContactno
    	,userAddress,userPincode) VALUES('$password','$firstname','$lastname','$emailid','$contactno','$address','$pincode')");
	
	
	echo '<script type="text/javascript"> alert("regiter Successful");</script>';
	echo '<script type="text/javascript">window.location="login.php";</script>';
?>