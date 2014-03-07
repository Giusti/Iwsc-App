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
			<a href="index.html" data-role="button" data-rel="back" data-icon="arrow-l">Back</a>
			<h1>News</h1>
		</div>
		<div data-role="content">

			
	

				


				
				

					<div class="tabmain" id="<?php echo $row['id']; ?>">
					<img class='newsiconmain'src="img/sail.png">
					<h3 class='newsheadmain' style="font-size:150%; float:none; color: #B6B1B1; margin-left:80px; margin-top:40px" >Olympic Classes, 420, Laser 4.7 - Day 1</h3>
					<img src="img/news1.jpg" style="float:right; width:80%; height:200px; margin-right:20px; border: 5px solid rgba(255,255,255,0.4);">
					<p class="newstextmain" style="width:90%; color: #fff; margin-left:20px; font-size:130%">Today begins the 75th JJ Giltinan-Trophy Regatta on Sydney Harbour, a competition considered the World Championship of the 18-foot skiff class. The first start was given at 5.35 h UTC in a light wind, i.e. condition not at all preferred by the clear favorite 'Gotta love it 7' as seen in the races during this season. However, the wind was too shifty and unconstant and the Race Committee was prompted to abandan this race.
						
					</p>
					

					
					</div>

					<div class="tabmain" id="<?php echo $row['id']; ?>">
					<img class='newsiconmain'src="img/sail.png">
					<h3 class='newsheadmain' style="font-size:150%; float:none; color: #B6B1B1; margin-left:80px; margin-top:40px" >Dragon - Grand Prix - Cannes FRA - Day 3</h3>
					<img src="img/news2.jpg" style="float:right; width:80%; height:200px; margin-right:20px; border: 5px solid rgba(255,255,255,0.4);">
					<p class="newstextmain" style="width:90%; color: #fff; margin-left:20px; font-size:130%">Apparently, there was no racing yesterday in Cannes for the 56 Dragon teams at the 2014 Grand Prix. Leader after four races is Anatoli Loginov RUS ahead of Philipp Malte MON and Lawrie Smith GBR.
						
					</p>
					

					
					</div>

					<div class="tabmain" id="<?php echo $row['id']; ?>">
					<img class='newsiconmain'src="img/sail.png">
					<h3 class='newsheadmain' style="font-size:150%; float:none; color: #B6B1B1; margin-left:80px; margin-top:40px" >Melges 32 - Winter Regatta II - Miami FL, USA - Day 1</h3>
					<img src="img/news3.jpg" style="float:right; width:80%; height:200px; margin-right:20px; border: 5px solid rgba(255,255,255,0.4);">
					<p class="newstextmain" style="width:90%; color: #fff; margin-left:20px; font-size:130%">Overcast and damp, cool morning conditions gave way to a spectacular day of racing at the 2014 Miami Winter Regatta hosted at Miami Beach Marina supported by Coconut Grove Sailing Club and Melges USA. Three races were completed leaving Roberto Tomasini Grinover on Robertissima in first overall, setting a great precedent for his team and their start to the season.
						
					</p>
					

					
					</div>



		</div>
		<div data-role="footer" data-position="fixed">
			<a href="../index.php?shownormal=1" data-ajax="false">Standard Website</a>
		</div>

	</div>
		
</body>
</html> 






