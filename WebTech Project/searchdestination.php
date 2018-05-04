<?php
session_start();
?>

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

.container-1 input#location::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#location:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#location::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#location:-ms-input-placeholder {  
   color: #65737e;  
}

.container-1 input#location:hover, .container-1 input#location:focus, .container-1 input#location:active{
    outline:none;
    background: white;
  }

.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: red;
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

  .maps {
	 margin: 10px auto;
  width: 300px;
  height: 50px;
  margin-left:-135px

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
	    margin-top: 700px;
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
	text-color:red;
}
</style>

<body>

<ul>
  <li ><a class="active" href="online_guide_final.php">Home</a></li>
   <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
   <li><a href="feedback.php">Feedback</a></li>
   <li style="float:right"><a href="registerbe.php">Register</a></li>
  <li style="float:right"><a href="logout.php" tite="Logout">Logout.</a></li>s
</ul>
<form>

<div class="box">
  <div class="container-1">
     <div class="images">
      <img src="http://www.theparadiserealty.com/page/wp-content/uploads/2013/07/17481027XSmall-street-map-search-location.png"  style="margin-left:20px auto">
      <br></div>
        <span class="icon"><i class="fa fa-search"></i></span>
       
      <input type="search" id="location" name="location" placeholder="Search..." /> 
      <input type="button"class="button" onclick="mapmaker();" value="Search"><br></input> 
      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
      <div id='gmap_canvas' class='maps'style='height:440px;align:center;width:700px;'></div>
      <!--- <div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div>
      <div><small><a href="https://termsofusegenerator.net">terms of use example</a></small></div> -->
      <style>#gmap_canvas img{max-width:none!important;background:none!important;padding-top:20px;margin-left:70px;}</style>
      </div><script type='text/javascript'>
      function init_map(latitude,longitude,address)
      {   
	   var myOptions = {zoom:25,center:new google.maps.LatLng(latitude,longitude),mapTypeId: google.maps.MapTypeId.ROADMAP};
       map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
       marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(latitude,longitude)});
       infowindow = new google.maps.InfoWindow({content:address});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
       infowindow.open(map,marker);
       }
       function init_map1(latitude,longitude,address)
      { 
        
	   var myOptions = {zoom:14,center:new google.maps.LatLng(latitude,longitude),mapTypeId: google.maps.MapTypeId.ROADMAP};
       map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
       marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(latitude,longitude)});
       infowindow = new google.maps.InfoWindow({content:address});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
       infowindow.open(map,marker);
       }

      google.maps.event.addDomListener(window, 'load', init_map);</script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIYOlg9cn9B6LoHeGy9RqWr7wgUvSrv4I&libraries=places&callback=initMap"
        async defer></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
      var mapmaker=function()
       {
       var geocoder = new google.maps.Geocoder(); address = document.getElementById('location').value;
       console.log(address);
        geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
        var latitude = results[0].geometry.location.lat();
        var longitude = results[0].geometry.location.lng();
      console.log(latitude);
      init_map(latitude,longitude,address);
      }
   });
  }; 
  </script>
</div>
</div>



<!--Location: <input type="text"  name="location" id="location"placeholder="Search.." value="Mumbai"><br>
<input type="button" onclick="mapma
ker();" value="Search" ></input>  -->

</form>

<div class="Events">
<div class="container">
			<h1 style="text-color:brown">Featured Events</h1>
			<div class="events-top">
				<div class="col-sm-4 top-event">
					<a href="single.html"><img src="http://www.ilead.net.in/uploads/event/picture/60/innovation-in-media-cii-big-picture-summit-2013-1-638.jpg" class="img-responsive"  alt=""></a><br>
					<button onclick="init_map1(28.595,77.170,'Taj Palace Hotel,New Delhi')" class="button" style="margin-left:90px;font-size=20px">Show in map</button>
					<h1><a href="single.html">The CII Big Picture Summit,</a></h1>
					<span><i class="glyphicon glyphicon-calendar"></i>25/10/2016</span>
					<p>The CII Big Picture Summit, organized by the Confederation Of Indian Industry, New Delhi will take place from 25th October to the 26th October 2016 at the Taj Palace Hotel in New Delhi, India. The sessions will discuss about setting a goal of USD 100 billion , which is out of an undoubted confidence in the potential of the said industry .The worth of the industry, clubbed with an enabling regulatory environment and infrastructure with respect to its various sub sectors, is an ideal way forward for us to leverage the opportunities and reach the goal. </p>
				</div>
					<div class="col-sm-4 top-event">
					<a href="single.html"><img src="http://images.htcampus.com/cmsmedia/uploads/ckeditor/Raaga.jpg" class="img-responsive" alt=""></a><br>
					<button onclick="init_map1(18.9296,72.8245,'HR College,Mumbai')" class="button" style="margin-left:90px;font-size=20px">Show in map</button>
					<h1><a href="single.html">The Tedx Hr College</a></h1>
					<span><i class="glyphicon glyphicon-calendar"></i>29/10/2016</span>
					<p>The Tedx Hr College, organized by the Ted Conferences Llc will take place on 29th October 2016 at the H.R. College of Commerce and Economics in Mumbai, India. The conference will cover areas like TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. At a TEDx event, TEDTalks video and live speakers combine to spark deep discussion and connection in a small group. These local, self-organized events are branded TEDx. </p>
				</div>
					<div class="col-sm-4 top-event">
					<a href="single.html"><img src="http://www.showincity.com/media/4662/international-conference-on-electrical-electronics-communication-engineering-1_watermark.jpg?height=600" class="img-responsive" alt=""></a><br>
					<button onclick="init_map1(22.559,88.351,'Hotel Lindsay,Kolkata')" class="button" style="margin-left:90px;font-size=20px">Show in map</button>
					<h1><a href="single.html">The International Conference on Electrical, Electronics & Computer Science</a></h1>
					<span><i class="glyphicon glyphicon-calendar"></i>30/10/2016 11:00 Am</span>
					<p>The International Conference on Electrical, Electronics & Computer Science, organized by the International Institution for Science Technology Engineering and Management will take place on 30th October 2016 at the Hotel Lindsay in Kolkata, India. The conference will cover areas like provides opportunities for the different areas delegates to exchange new ideas and application experiences face to face.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!<div class="events-top">
				<!--<div class="col-sm-4 top-event">
					<a href="single.html"><img src="images/ev3.jpg" class="img-responsive" alt=""></a>
					<h4><a href="single.html">FeedAStray</a></h4>
					<span><i class="glyphicon glyphicon-calendar"></i>25/11/2016 11:00 Am</span>
					<p>A drive to feed stray dogs across Mumbai 2 meals for a day, also an attempt to encourage people to care about the welfare of strays in their area. Volunteers will be given food and training to feed and approach dogs.  </p>
				</div> -->
				<!--	<div class="col-sm-4 top-event">
					<a href="single.html"><img src="images/ev4.jpg" class="img-responsive" alt=""></a>
					<h4><a href="single.html">Donation Drive</a></h4>
					<span><i class="glyphicon glyphicon-calendar"></i>12/12/2016 11:00 Am</span>
					<p>A campaign intended to raise funds for the welfare of strays shelted at PETS headquarters. Volunteers will also receive a certificate of appreciation for their efforts.</p>
				</div>
					<div class="col-sm-4 top-event">
					<a href="single.html"><img src="images/ev5.jpg" class="img-responsive" alt=""></a>
					<h4><a href="single.html">Furry Christmas</a></h4>
					<span><i class="glyphicon glyphicon-calendar"></i>25/12/2016 11:00 Am</span>
					<p>PETS invites people to come and spend time with sheltered dogs, in an attempt to rehabilitate strays, create awareness about animal welfare, and give people time to spend with their new furry best friends.</p>
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
 </div>
   <a href="guide1.php"><button  class="button" style="margin-left:90px;font-size=20px">GUIDES</button></a>
          
</body>
</html>

