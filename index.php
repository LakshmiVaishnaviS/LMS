<!DOCTYPE HTML>
<html>
<head>
<title>Public Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

    </script>
</head>
<body>
<div class="btm_border">
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
		</div>
		<div class="social-icons">
			<ul>
			     <li><a class="facebook" href="https://www.facebook.com" target="_blank"> </a></li>
			     <li><a class="twitter" href="https://twitter.com/" target="_blank"></a></li>
			     <li><a class="googleplus" href="https://www.pinterest.com/" target="_blank"></a></li>
		    </ul>
		</div>	
		<div class="clear"></div>
	</div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
			   <li class='active'><a href='index.php'><span>Home</span></a></li>
			    <li><a href='register.php'><span>Register</span></a></li>
			    <li><a href='login.php'><span>Login</span></a></li>
			    <li><a href='search.php'><span>Search</span></a></li>
	<div class="clear"></div>
			 </ul>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
<!------ Slider_bg ------------>
<div class="slider_bg">
<div class="wrap">
	<!------ Slider------------>
		  <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/library1.jpg" height="100%" width="100%" alt="" />
	                <img src="images/library2.jpg" height="100%" width="100%" alt="" />
	                <img src="images/library3.jpg" height="100%" width="100%" alt="" />
					<img src="images/library4.jpg" height="100%" width="100%" alt="" />
	            </div>
	        </div>
	      </div>
		<!------End Slider ------------>
		<div class="grids_1_of_3">
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon1.jpg">
					  <h3>LMS is Simple</h3>
					  <p>The Library Management System ( LMS ) is a simple gateway for anyone who wishes to Lend a Book or simply search for the Available Books</p>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon2.jpg">
					  <h3>LMS Lender</h3>
					  <p>LMS facilates the people who wishes to Lend their books by providing a seperate account for Login with which they can lend books</p>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon3.jpg">
					  <h3>LMS Efficiency</h3>
					  <p>LMS provides an efficient way of retrieval of the available books with different Search options based on category,author,language,etc. </p>
				</div>
			<?php
			include "footer.php";
			?>