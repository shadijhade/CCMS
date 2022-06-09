<?php
session_start();

$P_ID=$_GET['P_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from patients where ID='$P_ID'");
mysqli_query($Conn,"delete from patients_testimonials where Patient_ID='$P_ID'");
mysqli_query($Conn,"delete from appointments where Patient_ID='$P_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Patient Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Doctors_Management.php';
        </script>";

?>