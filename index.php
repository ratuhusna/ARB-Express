<!DOCTYPE HTML>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>ARB Express</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Verdana_400-Verdana_700.font.js" type="text/javascript"></script>
	<!--[if IE 6]>
		<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Shell -->
		<div class="shell">
			<div class="cl">&nbsp;</div>
			<!-- Begin Header -->
			<div id="header">
				<h1><a href="index.php" title="ARB Express">ARB Express</a></h1>
				<!-- Begin Search -->
				<div id="search">
					<form action="#" method="get" accept-charset="utf-8">
						<input type="text" value="Search..." title="Search..." class="blink field" />
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<!-- End Search -->
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Header -->
			<!-- Begin Navigation -->
			<div id="navigation">
				<ul >
					<li><a href="index.php?page=" title="Home"><span>Home</span></a></li>
					<li><a href="index.php?page=Blangko" title="Blangko"><span>Blangko Pengiriman</span></a></li>
					<li><a href="index.php?page=Data" title="Data Pengiriman"><span>Data Pengiriman</span></a></li>
					<li><a href="index.php?page=About" title="About"><span>About</span></a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Navigation -->
			<div class="cl">&nbsp;</div>
			<!-- Begin Main -->
			<div id="main">
				<!-- Begin Content -->
				<div id="content">
					<div class="top"></div>
					<!-- Begin Inner -->
					<div class="inner">
						<div id="products">
							<h2>&nbsp;</h2>
							<!-- Begin Row -->
							<div class="row">
								<p><span class="art-PostContent">
<?php
switch($_REQUEST['page']){
default:require_once("index.php");break;
case"index":require_once("tengah.php");break;
case"Blangko":require_once("form_penerima.php");break;
case"Data":require_once("tampil_penerima.php");break;
case"About":require_once("about.php");break;
default:require_once("tengah.php");break;
}
?>
								</span></p>
							    <!-- End Row -->
</div>
						</div>
						<!-- End Inner -->
					</div>
					<!-- End Content -->
				</div>
				<!-- End Main -->
			<!-- Begin Footer -->
			<div id="footer">
				<p>2015 &copy; ARB Express | All Rights Reserved</p>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Footer -->
		</div>
		<!-- End Shell -->
	</div>
	<!-- End Wrapper -->
</body>
</html>
