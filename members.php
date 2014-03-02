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
            <h1>Member</h1>
        </div>
        <div data-role="content">

           

<?php
    $sql = "SELECT uname, email, reg_date, img, area
            FROM staff";
            
    $res = mysqli_query($dblink, $sql);

    $id = $row['id'];



    while( $row = mysqli_fetch_assoc($res) ){


        $date2 = date('d-m-Y',$row['reg_date']);
    ?>

				
					
						<div id="membertabl1">
					
					<img class="memberimgl" src="img/staff/<?php echo $row['img']; ?>"></img>
					<p class="membertextl">
						<table class="memberl">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname"><?php echo $row['uname']; ?></label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname"><?php echo $row['email']; ?></label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname"><?php echo $date2; ?></label></td>

    <tr><td><label id="subpw" for="pw">Bereich:</label></td>
    	<td><label id="subuname"for="uname"><?php echo $row['area']; ?></label></td>

    

</p>
    
    </table>
				








				
				</div>





					

<?php
    }
    ?>

<!--
    <div id='space'></div>
                        <div id="membertabr1">
                    
                    <img class="memberimgr" src="img/staff/staff2.jpeg"></img>
                    <p class="membertextr">
                        <table class="login">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
        <td><label id="subuname"for="uname"></label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
        <td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
        <td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
        <td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
        <td><label id="subuname"for="uname">Name</label></td>

    
    </table>
                </p>




                
                </div>

				<div id='space'></div>
						<div id="membertabl1">
					
					<img class="memberimgl" src="img/staff/staff3.jpeg"></img>
					<p class="membertextl">
						<table class="memberl">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>



					<div id='space'></div>
						<div id="membertabr2">
					
					<img class="memberimgr" src="img/staff/staff4.jpeg"></img>
					<p class="membertextr">
						<table class="login">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>


<div id='space'></div>
						<div id="membertabl1">
					
					<img class="memberimgl" src="img/staff/staff5.jpeg"></img>
					<p class="membertextl">
						<table class="memberl">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>



					<div id='space'></div>
						<div id="membertabr2">
					
					<img class="memberimgr" src="img/staff/staff6.jpeg"></img>
					<p class="membertextr">
						<table class="login">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>
<div id='space'></div>
						<div id="membertabl1">
					
					<img class="memberimgl" src="img/staff/staff7.jpeg"></img>
					<p class="membertextl">
						<table class="memberl">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>



					<div id='space'></div>
						<div id="membertabr2">
					
					<img class="memberimgr" src="img/staff/staff8.jpeg"></img>
					<p class="membertextr">
						<table class="login">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>
<div id='space'></div>
						<div id="membertabl1">
					
					<img class="memberimgl" src="img/staff/staff1.jpeg"></img>
					<p class="membertextl">
						<table class="memberl">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>



					<div id='space'></div>
						<div id="membertabr2">
					
					<img class="memberimgr" src="img/staff/staff3.jpeg"></img>
					<p class="membertextr">
						<table class="login">

    <tr><td><label id="subuname"for="uname">Name:</label></td>
   		<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">E-mail:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subuname"for="uname">Geb. Datum:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    <tr><td><label id="subpw" for="pw">Passwort WH:</label></td>
    	<td><label id="subuname"for="uname">Name</label></td>

    
    </table>
				</p>


				
				</div>

	

-->
				
</div>
        <div data-role="footer" data-position="fixed">
            <a href="../index.php?shownormal=1" data-ajax="false">Standard Website</a>
        </div>

    </div>
        
</body>
</html> 


