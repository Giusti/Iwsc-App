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
			<h1>Courses</h1>
		</div>
		<div data-role="content">





					<div id="coursetab">
					<img class='courseicon'src="img/course1.gif"><h3 class='coursehead'>Basic</h3>
					<p class="coursetext">Basic information, theory and sailing, with your personal coach.</p>	
					<p class="coursetext">Time: 20h</p>
					<p class="coursetext">Price: 270 Euro</p>
					<p class="coursetext">Booking: study@iwsc.com</p>

					</div>

					<div id="coursetab">
					<img class='courseicon'src="img/course2.jpg"><h3 class='coursehead'>Advanced</h3>
					<p class="coursetext">Information, to become an advanced sailor.</p>	
					<p class="coursetext">Time: 40h</p>
					<p class="coursetext">Price: 400 Euro</p>
					<p class="coursetext">Booking: study@iwsc.com</p>

					</div>

					<div id="coursetab">
					<img class='courseicon'src="img/course3.gif"><h3 class='coursehead'>Professional</h3>
					<p class="coursetext">Professional sailing, for competition.</p>	
					<p class="coursetext">Time: 90h</p>
					<p class="coursetext">Price: 700 Euro</p>
					<p class="coursetext">Booking: study@iwsc.com</p>

					</div>

					<div id="coursetab">
					<img class='courseicon'src="img/course4.png"><h3 class='coursehead'>Coast Patent</h3>
					<p class="coursetext">Croatia coast patent.</p>	
					<p class="coursetext">Time: 160h</p>
					<p class="coursetext">Price: 1200 Euro</p>
					<p class="coursetext">Booking: study@iwsc.com</p>

					</div>




			</div>
		<div data-role="footer" data-position="fixed">
			<a href="../index.php?shownormal=1" data-ajax="false">Standard Website</a>
		</div>

	</div>
		
</body>
</html> 













		</div>






</body>
</html>