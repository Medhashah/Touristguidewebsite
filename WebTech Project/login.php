<?php
session_start();
$message="";
if(count($_POST)>0) {

$connect=mysqli_connect("localhost","sanya","qwer","sanya") or die("Connection Error");

    $query= "SELECT * FROM sanya.registered WHERE  useremailId='" . $_POST["emailid"] . "' and userPassword = '". $_POST["password"]."'";

    

    $execute= mysqli_query($connect,$query) or die(mysqli_errno($connect));
    
    $row=mysqli_fetch_array($execute);

    
echo "$row[useremailId]";

if(is_array($row)) {
$_SESSION["useremailId"] = $row[useremailId];
//$_SESSION["name"] = $row[name];
} else {
$message = "Invalid Username or Password!";
//echo "Invalid Username or Password!";

}
}
if(isset($_SESSION["useremailId"])) {
header("Location:searchdestination.php");
}

?>





<html>
<!--[-z0-9.]+[a-z][@]+([a-z.]+)[a-z]-->
<style type="text/css">


h1 {
    font-size: 2.8em;
    text-align: center;
    color: #000;
    font-weight: 100;
}
.login-form h2 ,.login-form h3{
    font-size: 4em;
    color: #fff;
    text-align: center;
    margin-bottom: 0.8em;
    font-family: 'Julius Sans One';
    line-height: 0.7em;
}
/*-- main --*/
.main {
    padding: 2em 0 0;
}
.login-form {
    width: 40%;
    margin: 2.5em auto 3em;
    
    background-size: cover;
    -webkit-box-shadow: -6px 6px 3px 0px rgb(28, 43, 61); 
    -moz-box-shadow: -6px 6px 3px 0px rgb(28, 43, 61);  
    -o-box-shadow: -6px 6px 3px 0px rgb(28, 43, 61);
    -ms-box-shadow: -6px 6px 3px 0px rgb(28, 43, 61);
    box-shadow: -6px 6px 3px 0px rgb(10, 23, 41);
}
.agile-row {
    padding: 3em;
    background-color: rgba(0, 0, 0, 0.55);
}
.input-row {
    padding: 1em 1.5em;
    border: 1px solid #c7c7c7;
    -webkit-border-radius: 15px; 
    -moz-border-radius: 15px;  
    -o-border-radius: 15px;
    -ms-border-radius: 15px;
    border-radius: 15px;
}
.login-form input[type="text"], .login-form input[type="password"],.login-form input[type="cost"] {
    outline: none;
    font-size: 1em;
    color: #fff;
    padding: 0.6em 1em .8em 2em;
    margin: 0;
    width: 83.6%;
    border: none;
    -webkit-appearance: none;
    display: block;
    background: transparent;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    
    
    font-family: 'Athiti', sans-serif;
}
.login-form input[type="text"].user {
    

    display: block;
    border-bottom: 1px solid #c7c7c7;
}

.login-form input[type="password"].user {
    
    display: block;
    border-bottom: 1px solid #c7c7c7;
}

.login-form input[type="cost"].user {
    display: block;
    border-bottom: 1px solid #c7c7c7;
}
.login-form input[type="password"].password{
    
    display: block;
    margin-top:0.3em;
}
.login-form input[type="text"].email {
    
    display: block;
    border-bottom: 1px solid #c7c7c7; 
}
.login-form p {
    font-size: 1em;
    color: #fff;
    margin: 1em 0 .5em;
}
/*-- checkbox --*/
.agileits-row2 {
    margin: 1.5em 0;
}
.login-agileits-top input[type="checkbox"] {
    display: none;
}
.login-agileits-top input[type="checkbox"]+label {
    position: relative;
    padding-left: 1.8em;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    cursor: pointer;
    display: -webkit-inline-box; 
}
.login-agileits-top input[type="checkbox"]+label span:first-child {
    width: 14px;
    height: 14px;
    border: 2px solid #C8C8C8;
    position: absolute;
    left: 0;
    top: 3px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px; 
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
}
.login-agileits-top input[type="checkbox"]:checked+label span:first-child:before {
    content: "";
    
    position: absolute;
    left: 2px;
    top: 2px;
    font-size: 10px;
    width: 10px;
    height: 10px;
}
/*-- //checkbox --*/
.login-form input[type="submit"] {
    font-size: 2em;
    color: #fff;
    font-family: 'Rancho';
    background-color: #5e6274;
    border: 3px solid #002233;
    outline: none;
    cursor: pointer;
    padding: .6em 1em;
    -webkit-appearance: none;
    width: 100%;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
}
.login-form input[type="submit"]:hover {
    background: transparent;
    color: #002233;
    background-color: #cec2c2;
    border-color:#002233 ;
    transition: 0.5s all ;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.login-form .login-agileits-top.sign-up input[type="submit"] {
    margin-bottom: 2.1em;
}
.login-form input[type="text"]::-webkit-input-placeholder{ 
    font-size: 1em; 
    font-family: 'Athiti', sans-serif;
}

.login-form input[type="password"]::-webkit-input-placeholder{ 
    font-size: 1em; 
    font-family: 'Athiti', sans-serif;
}
::-webkit-input-placeholder {
   color: #fff; 
   font-family: 'Athiti', sans-serif; 
} 
:-moz-placeholder { /* Firefox 18- */
   color: #fff;
   font-family: 'Athiti', sans-serif;
} 
::-moz-placeholder {  /* Firefox 19+ */
    color: #fff; 
    font-family: 'Athiti', sans-serif;
} 
:-ms-input-placeholder {  
   color: #fff; 
   font-family: 'Athiti', sans-serif;
} 
.login-form.login-form-two {
    
    background-size: cover;
}

/* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #ff5b81; /* Black background color */
    color: #faf3dd; /* White text color */
    font-family: 'Satisfy';
    font-size: 25px;
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 50px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

      
      footer{
      	background-color:brown;
      	color: white;
      	 padding: 0.5em;
      	font-size: 25px;
      	text-align: center;
      	font-family:Brush Script MT;
 
      }


	 header {
	 	border-image-width: 100px;
	 	color:black;
	    padding-top: 10px;
	 	font-size: 75px;
	 	padding-bottom: 10px;
	 	text-align: center;
	 	font-family:Brush Script MT;
	 }
	 ul{
    margin-bottom: 0px;
	 	list-style-type: none;
	 	padding: 0;
	 	margin: 0;
	 	text-decoration: none;
	 	overflow: hidden;
	 	text-color:white;
	 	background-color: brown;
	 }

	 li{
	 	float: left;
    margin-bottom:0;
	 }
	 li a{
	 	font-family:Brush Script MT;
	 	font-size: 27px;
	 	color: white;
    margin-bottom: 0;
    padding-bottom:0;
	 	display:block;
	  padding: 10px 14px;
	 	text-align: center;
	 	font-weight: 10px;
	 	text-decoration: none;
	 }

	 li a:hover {
    background-color: #555;
    color: white;
          }
</style>
<head>

<script language="JAVASCRIPT">
function validate()
{
	var fname=document.f1.fname.value;
	var lname=document.f1.lname.value;
	var pin=document.f1.pin.value;
	var cno=document.f1.cno.value;
	alert(cno.length);
	var eid=document.f1.eid.value;
	var checktext=/^[a-zA-Z]+[a-zA-Z]*$/
	var eidtest=/([0-9a-z]+(([.]|[_])[0-9a-z]+)*)@[0-9a-z]+([.][a-z]+)+/
	var numtest=/^[0-9]{10}$/
	if(!checktext.test(fname))
		alert("First name is wrong");
	if(!checktext.test(lname))
		alert("Last name is wrong");
	if(!(numtest.test(cno)))
		alert("Contact number is wrong");		
	if(!(numtest.test(eid)))
		alert("email id is wrong");
}
</script>
<style>
td {
	text-align: left;
	padding: auto;
}


</style>
</head>
<body style background="https://images5.alphacoders.com/549/549219.jpg" width="100%" margin="0">
<ul>
  <li ><a class="active" href="online_guide_final.php">Home</a></li>
   <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
   <li><a href="feedback.php">Feedback</a></li>
   <li style="float:right"><a href="registerbe.php">Register</a></li>
  <li style="float:right"><a href="login.php">Login</a></li>
</ul>
<!--<div style="margin=10%;padding:10%"> -->
<!--<form name="f1" action="after_register.php" method="POST">
	<fieldset style="width:25%">
	<legend style="text-align:center">Personal Information</legend>
	<table>
		<tr><th>First Name : </th>
		<td><input type="text" name="fname"></td></tr>

		<tr><th>Last Name : </th>
		<td><input type="text" name="lname"></td></tr>

		<tr><th>Password : </th>
		<td><input type="password" name="password"></td></tr>

		<tr><th>Email-id : </th>
		<td><input type="email" name="eid"></td></tr>

		<tr><th>Contact No : </th>
		<td><input type="text" name ="cno"></td></tr>

		<tr><th>Address : </th>
		<td><textarea rows="5" cols="25" name="add"></textarea></td></tr>

		<tr><th>Pincode : </th>
		<td><input type="text" name="pin"></td></tr>
	</table>
	</fieldset>

	<input type="submit" value="Submit" >
	</div>
</form> -->

<div class="main"><div class="bat">
        <!-- login form -->
        <div class="login-form">  
            <div class="agile-row">
                <h2>LOGIN</h2>   
                <div class="login-agileits-top"> 
                    <form action="" method="POST" > 
                        <div class="input-row">
                            <input type="text" class="user" name="emailid" placeholder="emailid" required="" id="emailid" /><br><br>
                           
                            <input type="password" class="user" name="password" placeholder="Password" required="" id="password" /><br><br> 
                           
                        <br><br>                        
                            
                        <input type="submit" value="SUBMIT"/>
                    </form>  
                </div>
                </div>  
        </div><br><br></div>
<footer>
	<p style="font-family:Times New Roman;font-size:12px">AllRightsReserved.Guide</p>
</footer>
</body>
</html>