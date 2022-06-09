<?php
session_start();

$C_ID=$_GET['C_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from categories where ID='$C_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Category Has Been Deleted !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='Categories_Management.php';
        </script>";

?>