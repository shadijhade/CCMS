<?php
session_start();

$ID=$_GET['ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from offers where ID='$ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Offer Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Offers_Management.php';
        </script>";

?>