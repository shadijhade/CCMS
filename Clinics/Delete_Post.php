<?php
session_start();

$P_ID=$_GET['P_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from posts where ID='$P_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Post Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Doctors_Posts_Management.php';
        </script>";

?>