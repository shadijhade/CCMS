<?php
session_start();

$D_ID=$_GET['D_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from doctors where ID='$D_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Doctor Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Doctors_Management.php';
        </script>";

?>