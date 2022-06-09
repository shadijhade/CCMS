<?php
session_start();

$T_ID=$_GET['T_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from patients_testimonials where Patient_ID='$T_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Testimonial Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Patients_Testimonials_Management.php';
        </script>";

?>