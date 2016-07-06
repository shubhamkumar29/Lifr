<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/backgroundPosition.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
</head>
<body id="page1">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Hope Center</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.php"><img src="images/top_icon1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
						<li class="end"><a href="Contact.html"><img src="images/top_icon3.gif" alt=""></a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
						<?php
							if($selected == 1){
							 echo '<li id="menu_active"><a href="index.php">Home</a></li>';
							}else{
							 echo '<li><a href="index.php">Home</a></li>';
							}
							if($selected == 2){
							 echo '<li id="menu_active"><a href="Mission.php">Mission</a></li>';
							}else{
							 echo '<li><a href="Mission.php">Mission</a></li>';
							}
							if($selected == 3){
							 echo '<li id="menu_active"><a href="News.php">News &amp; Press</a></li>';
							}else{
							 echo '<li><a href="News.php">News &amp; Press</a></li>';
							}
							if($selected == 4){
							 echo '<li id="menu_active"><a href="Help.php">How to Help</a></li>';
							}else{
							 echo '<li><a href="Help.php">How to Help</a></li>';
							}
							if($selected == 5){
							 echo '<li id="menu_active"><a href="WhoCanDonate.php">Who can Donate?</a></li>';
							}else{
							 echo '<li><a href="WhoCanDonate.php">Who can Donate?</a></li>';
							}
							if($selected == 6){
							 echo '<li id="menu_active"><a href="Contact.php">Contact</a></li>';
							}else{
							 echo '<li><a href="Contact.php">Contact</a></li>';
							}
						 ?>
					</ul>
				</nav>
			</div>

		</header>
<!-- / header -->
