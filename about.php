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
			<h1>About Us</h1>
		</div>
		<div data-role="content">

	


	

				


				
				

					<div class="aboutmain" id="<?php echo $row['id']; ?>">
					<h3 class='aboutheadmain' style="font-size:150%; float:none; color: #B6B1B1; margin-left:80px; margin-top:40px" >About Us</h3>
					<img src="img/map.png" style="float:right; width:84%; height:180px; margin-right:20px; border: 5px solid rgba(255,255,255,0.4);">
					<p class="abouttextmain" style="width:500px; color: #fff; margin-left:20px; font-size:130%">
					IWSC</br>
					A-5360 St. Wolfgang am See</br>
					Ried 155</br>
					Tel. ++43 (0)6138/2333, 3053</br>
					Fax: ++43 (0)6138/3053-40</br>
					Mail: contact@iwsc.com</br>
					www.iwsc.at</br>
				</p>
				<p style="margin-top:20px; margin-bottom:20px; margin-left:20px; color: #fff; font-size:130%">Opening Hours</p>
				<p class="abouttextmain" style="width:500px; color: #fff; margin-left:20px; font-size:150% margin-top:20px">
					
					Monday: 8am - 17pm</br>
					Tuesday: 8am - 17pm</br>
					Wednesday: 8am - 17pm</br>
					Thursday: 8am - 17pm</br>
					Friday: 8am - 17pm</br>
					
				</p>
				<div id="moapp" style="float: right; margin-right: 120px; margin-top: 50px; color: white;">
					<h3>Our Mobile App</h3>
					<img src="img/socialicons/qrcode.png">

				</div>

					
					


	

					


		</div>
		<div data-role="footer" data-position="fixed">
			<a href="../index.php?shownormal=1" data-ajax="false">Standard Website</a>
		</div>

	</div>
		
</body>
</html> 
