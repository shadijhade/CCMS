<?php
session_start();

$C_ID=$_GET['C_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"update clinics set Status='Active' where ID='$C_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Clinic Has Been Active !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Clinics_Management.php';
        </script>";

?>