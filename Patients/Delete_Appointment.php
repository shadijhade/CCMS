<?php
session_start();

$A_ID=$_GET['A_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from appointments where ID='$A_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Appointment Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='My_Appointments.php';
        </script>";

?>