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

<?php
    $sql = "SELECT id, eventdate, eventcountry, countryimg, eventinfo, Eventname, time, price, booking
            FROM courses LIMIT 4";
            
    $res = mysqli_query($dblink, $sql);

    $id = $row['id'];



    while( $row = mysqli_fetch_assoc($res) ){


        $date2 = date('d-m-Y',$row['eventdate']);
    ?>




					<div id="coursetab">
					<img class='courseicon'src="img/<?php echo $row['countryimg']; ?>"><h3 class='coursehead'><?php echo $row['Eventname']; ?></h3>
					<p class="coursetext"><?php echo $row['eventinfo']; ?></p>	
					<p class="coursetext">Time: <?php echo $row['time']; ?></p>
					<p class="coursetext">Price: <?php echo $row['price']; ?></p>
					<p class="coursetext">Booking: <?php echo $row['booking']; ?></p>

					</div>
<?php
    }
    ?>	



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