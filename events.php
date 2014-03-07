<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css">
	<link rel="stylesheet" href="css/style.css">

    <script src="js/libs/jquery-1.10.2.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/libs/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<?php

require_once("dbconnect.php"); // DB-Verbindung einbinden

?>
<body style="border:none">

	<div data-role="page">

		<div data-role="header">
			<a href="#" data-role="button" data-rel="back" data-icon="arrow-l">Back</a>
			<h1>Events</h1>
		</div>
		<div data-role="content">






					<div id="eventtab">
					<img class='eventicon'src="img/laser.jpeg" style="height:30%; width:30%;"><h3 class='eventhead'>Sailing Regatta</h3>
					<p class="eventtext">Sailing Regatta at Attersee in Austria.</p>	
					<p class="eventtext">Date: 26-06-2014</p>
					<p class="eventtext">Location: Wolfgangsee - Austria</p>
					<p class="eventtext">Class: Laser</p>
					<p class="eventtext">Type: Mixed </p>
					<p class="eventtext">Participate: sail@iwsc.com</p>

					</div>

					<div id="eventtab">
					<img class='eventicon'src="img/49er.jpg" style="height:30%; width:30%;"><h3 class='eventhead'>Sailing Regatta</h3>
					<p class="eventtext">Sailing Regatta at Wolfgangsee in Austria.</p>	
					<p class="eventtext">Date: 23-08-2014</p>
					<p class="eventtext">Location: Attersee - Austria</p>
					<p class="eventtext">Class: 49er</p>
					<p class="eventtext">Type: Men </p>
					<p class="eventtext">Participate: sail@iwsc.com</p>

					</div>

					<div id="eventtab">
					<img class='eventicon'src="img/470.jpg" style="height:30%; width:30%;"><h3 class='eventhead'>Sailing Regatta</h3>
					<p class="eventtext">Sailing Regatta at Mondsee in Austria.</p>	
					<p class="eventtext">Date: 29-08-2014</p>
					<p class="eventtext">Location: Mondsee - Austria</p>
					<p class="eventtext">Class: 470</p>
					<p class="eventtext">Type: Women</p>
					<p class="eventtext">Participate: sail@iwsc.com</p>

					</div>

</div>
		<div data-role="footer" data-position="fixed">
			<a href="../index.php?shownormal=1" data-ajax="false">Standard Website</a>
		</div>

	</div>
		
</body>
</html> 













		