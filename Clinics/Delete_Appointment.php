<?php
session_start();

$FA_ID=$_GET['FA_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from free_appointments where ID='$FA_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Appointment Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Free_Appointments_Management.php';
        </script>";

?>