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

<?php
    $sql = "SELECT id, eventdate, eventcountry, countryimg, eventinfo, Eventname, class, type, participate
            FROM events LIMIT 3";
            
    $res = mysqli_query($dblink, $sql);

    $id = $row['id'];



    while( $row = mysqli_fetch_assoc($res) ){


        $date2 = date('d-m-Y',$row['eventdate']);
    ?>




					<div id="eventtab">
					<img class='eventicon'src="img/<?php echo $row['countryimg']; ?>" style="height:300px; width:300px"><h3 class='eventhead'><?php echo $row['Eventname']; ?></h3>
					<p class="eventtext"><?php echo $row['eventinfo']; ?> </p>	
					<p class="eventtext">Date: <?php echo $date2; ?> </p>
					<p class="eventtext">Location: <?php echo $row['eventcountry']; ?> </p>
					<p class="eventtext">Class: <?php echo $row['class']; ?> </p>
					<p class="eventtext">Type: <?php echo $row['type']; ?> </p>
					<p class="eventtext">Participate: <?php echo $row['participate']; ?> </p>

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













		