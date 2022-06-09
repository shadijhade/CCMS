<?php
session_start();

$D_ID=$_GET['D_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from doctors where ID='$D_ID'");
mysqli_query($Conn,"delete from posts where Doctor_ID='$D_ID'");
mysqli_query($Conn,"delete from appointments where Doctor_ID='$D_ID'");
mysqli_query($Conn,"delete from free_appointments where Doctor_ID='$D_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Doctor Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Doctors_Management.php';
        </script>";

?>