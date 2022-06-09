<?php
session_start();

include "../includes/config.php";

$_SESSION['D_Log']=0;


session_destroy();

echo "<script language='JavaScript'>
			  alert ('You Logout Successfuly From The System !');
      </script>";	
	  
echo '  <script language="JavaScript">
            document.location="../index.php";
        </script>';




?>

