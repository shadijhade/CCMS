<?php
	$DBHost = 'localhost';
	$DBUser = 'root';
	$DBPass = '';
	$DBName = 'ccms';

$Conn = mysqli_connect($DBHost,$DBUser,$DBPass,$DBName) or  die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($Conn,$DBName);

mysqli_set_charset($Conn,'utf8'); 

date_default_timezone_set('Asia/Amman');


?>