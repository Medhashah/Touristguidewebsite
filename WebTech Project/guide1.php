<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	<style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: blue;
    background-image: url('https://www.karlson-tourism.ru/upload/medialibrary/e97/Search.png');
    kground-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
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
	 	text-align: center;
	 	font-family:Brush Script MT;
	 }


.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    font-family:Calibri;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 1px 2px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

input[type=text]:focus {
    width: 50%;
}

body{
  background-image:url("http://warisanlighting.com/wp-content/uploads/parser/light-brown-wall-color-4.jpg");
}
 
.box{
  margin: 50px auto;
  width: 300px;
  height: 50px;
}

.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}

.container-1 input#location{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}



.button {
    background-color: brown;
    border: none;
    color: white;
    padding: 14px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 1px 2px;
    cursor: pointer;
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
    color: grey;
          }


}

.images{
  margin-left: 50px;
  
}

.row
{
	position: relative;
}
.Events{
	    color:black;
	    margin-top: 50px;
	    margin-left:50px;
	 	font-size: 28px;
	 	font-family:Brush Script MT;
}
.img-responsive{
	 width:300px;
	 height:200px;

}
h1{
	font-size: 50px;
	color:red;
}

h2{
  color: blue;
}


</style>

<body>

<ul>
  <li ><a class="active" href="online_guide_final.php">Home</a></li>
  <li><a href="searchdestination.php  ?>">Search Destinations</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li style="float:right"><a href="#about">Login</a></li>
</ul>
<form>
<div class="Events">
<div class="container">
     <h1 style="color:pink">GUIDES FOR YOUR TOUR</h1>
      <br>
      <div class="events-top">
        <div class="col-sm-4 top-event">
          <a href="single.html"><img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="img-responsive"  alt=""></a><br>
         <!-- <button onclick="init_map1(28.595,77.170,'Taj Palace Hotel,New Delhi')" class="button" style="margin-left:90px;font-size=20px">Show in map</button> -->
          <h1><a href="single.html">Vishal Desai</a></h1>
          <span><i class="glyphicon glyphicon-user"></i>97876544</span>
          <br>
          <i class="glyphicon glyphicon-envelope"></i>vishal@gmail.com
          <span><h2>Guide locations:</h2>Hyderabad,Gujarat</span>
          <br>
          <span><h2>Languages known:</h2></span>
          <span>English,Hindi,Gujarati,Urdu</span>
          <p></p>
        </div>
          <div class="col-sm-4 top-event">
          <a href="single.html"><img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="img-responsive" alt=""></a><br>
         <!-- <button onclick="init_map1(18.9296,72.8245,'HR College,Mumbai')" class="button" style="margin-left:90px;font-size=20px">Show in map</button> -->
          <h1><a href="single.html">Dheeraj Shah</a></h1>
          <span><i class="glyphicon glyphicon-user"></i>26117211</span>
          <br>
          <span><i class="glyphicon glyphicon-envelope"></i>dheeraj@gmail.com</span>
          <br>
          <span><h2>Guide locations:</h2>Mumbai,Pune</span>
          <br>
          <span><h2>Languages known:</h2></span>
          <span>English,Hindi,Marathi</span>

          <p> </p>
        </div>
          <div class="col-sm-4 top-event">
          <a href="single.html"><img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="img-responsive" alt=""></a><br>
         <!-- <button onclick="init_map1(22.559,88.351,'Hotel Lindsay,Kolkata')" class="button" style="margin-left:90px;font-size=20px">Show in map</button> -->
          <h1><a href="single.html">Shankar Mehta</a></h1>
          <span><i class="glyphicon glyphicon-user"></i>65443144</span>
          <br>
          <span><i class="glyphicon glyphicon-envelope"></i>shankar@gmail.com</span>
          <span><h2>Guide locations:</h2>Delhi,Punjab</span>
          <br>
          <span><h2>Languages known:</h2></span>
          <span>English,Hindi,Punjabi</span>
          <p></p>
        </div>
        <div class="clearfix"> </div>
      </div>
      <br>
      <div class="events-top">
        <div class="col-sm-4 top-event">
          <a href="single.html"><img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="img-responsive" alt=""></a>
          <h1><a href="single.html">Karan Sharama</a></h1>
          <span><i class="glyphicon glyphicon-user"></i>78665623</span>
          <br>
          <span><i class="glyphicon glyphicon-envelope"></i>karan@gmail.com</span>
          <span><h2>Guide locations:</h2>Mumbai,Pune</span>
          <br>
          <span><h2>Languages known:</h2></span>
          <span>English,Hindi,Marathi,French</span>
          <p>  </p>
        </div> 
         <div class="col-sm-4 top-event">
          <a href="single.html"><img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="img-responsive" alt=""></a>
          <h1><a href="single.html">Rahul Bose</a></h1>
          <span><i class="glyphicon glyphicon-user"></i>883332377</span>
          <br>
          <span><i class="glyphicon glyphicon-envelope"></i>r_bose@gmail.com</span>
          <span><h2>Guide locations:</h2>Bangalore,Managalore</span>
          <br>
          <span><h2>Languages known:</h2></span>
          <span>English,Hindi,Kannada</span>
          <p></p>
        </div>
          <div class="col-sm-4 top-event">
          <a href="single.html"><img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="img-responsive" alt=""></a>
          <h1><a href="single.html">Shahlini Kapoor</a></h1>
          <span><i class="glyphicon glyphicon-user"></i>67552322</span>
          <br>
          <span><i class="glyphicon glyphicon-envelope"></i>shah1@gmail.com</span>
          <span><h2>Guide locations:</h2>Mumbai,Pune,Goa</span>
          <br>
          <span><h2>Languages known:</h2></span>
          <span>English,Hindi,Marathi,Konkani</span>
          <p></p>
        </div> 
        <div class="clearfix"> </div>
      </div>
    </div>
 </div>
<marquee style="font-size:40px">Other interested guides can mail their resume at xyz@gmail.com</marquee>
</body>
</html>


