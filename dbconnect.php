<?php

// Verbindung zur Datenbank

$db_user = "phpwdd";
$db_pass = "wdd1012";
$db_host = "localhost";
$db_name = "projektphp";

$dblink = mysqli_connect($db_host, $db_user, $db_pass); // Verbindung zum DB-Server

$selected = mysqli_select_db($dblink, $db_name); // Selektiert Datenbank

if( ! $selected ){
	die('Cannot use DB: ' . mysqli_error($dblink) );
}

?>