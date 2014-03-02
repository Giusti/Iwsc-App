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
			<h1>News</h1>
		</div>
		<div data-role="content">

			<?php

	

	$sql = "SELECT news.id, news.title, news.content, news.preview, category.name, img
			FROM news
			LEFT JOIN category 
			ON news.cat_id = category.id
			LIMIT 3";
	$res = mysqli_query($dblink, $sql);

	
	while( $row = mysqli_fetch_assoc($res) ){
	?>
	
	


	

				


				
				

					<div class="tabmain" id="<?php echo $row['id']; ?>">
					<img class='newsiconmain'src="img/sail.png">
					<h3 class='newsheadmain' style="font-size:150%; float:none; color: #B6B1B1; margin-left:80px; margin-top:40px" ><?php echo $row['title']; ?></h3>
					<img src="img/<?php echo $row['img']; ?>" style="float:right; width:350px; height:200px; margin-right:20px; border: 5px solid rgba(255,255,255,0.4);">
					<p class="newstextmain" style="width:500px; color: #fff; margin-left:20px; font-size:130%"><?php echo $row['content']; ?>
						
					</p>
					

					
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






