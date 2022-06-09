<?php
session_start();

$C_ID=$_GET['C_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from clinics where ID='$C_ID'");
mysqli_query($Conn,"delete from doctors where Clinic_ID='$C_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Clinic Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Clinics_Management.php';
        </script>";

?>