<?php
session_start();

$ID=$_GET['ID'];

require_once('../includes/config.php');


mysql_query("delete from posts where ID='$ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Post Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='My_Posts.php';
        </script>";

?>