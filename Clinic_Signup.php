<?php
session_start();

include("includes/config.php"); 

if(isset($_POST['Submit']))
{
$Category_ID = $_POST['Category_ID'];
$Name = $_POST['Name'];
$Phone_Number = $_POST['Phone_Number'];
$Address = $_POST['Address'];
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);


$sql = mysqli_query($Conn,"select * from clinics where Username='$Username'");
if (mysqli_num_rows($sql)>0){
	
	
	
		echo "<script language='JavaScript'>
			  alert ('This Clinic Username Already Exist !');
      </script>";
	
	
	
}else{
	
	
	
	$sql1 = mysqli_query($Conn,"insert into clinics (Category_ID,Name,Phone_Number,Address,Status,Username,Password) values ('$Category_ID','$Name','$Phone_Number','$Address','Not Active','$Username','$Password')");

echo "<script language='JavaScript'>
			  alert ('Your Account Has Been Signup Successfully ! You Can Login Now !');
      </script>";

	echo "<script language='JavaScript'>
document.location='Signin.php';
        </script>";
	
	
	
}



}


?>
<!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>:: Clinics Signup ::</title>
  <link href="css/vendor/all.css" rel="stylesheet">
  <link href="css/app/app.css" rel="stylesheet">
  <link href="css/app/layout.css" rel="stylesheet">
  <link href="css/app/main.css" rel="stylesheet">
  <link href="css/app/colors-text.css" rel="stylesheet">
  <link href="css/app/color-background.css" rel="stylesheet">
  <link href="css/app/navbar.css" rel="stylesheet">
  <link href="css/app/media.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/logo1.png" />
  <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/88f3ff7b70.js" crossorigin="anonymous"></script>
</head>
<style>
  html , body {
    height: 100vh;
    padding-left: 20px;
    padding-right: 20px;
    margin: 20px;
    font-family: "Fira Sans", Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
	  -moz-osx-font-smoothing: grayscale;
    justify-content: center;
  }
  #navbar  {
    background-color: #fff;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
    border-radius: 35px;
    margin-top: 20px;
    padding: 6px;
    font-size: 2rem;
  }
  
 
</style>

<body class="login" >

  <div id="content" >
    <div class="container-fluid" >

      <div class="lock-container" style="margin-top:15px">
        <div class="panel panel-default text-center paper-shadow" data-z="0.5" style="border-radius: 30px; " data-z="0.5" >
		<a href="index.php"><img src="images/logo1.png" width="100px" height="100px"/></a>
          <h1 class="text-display-1 text-center">Clinic Signup</h1>
          <div class="panel-body">

            <!-- Signup -->
            <form role="form" method="post" action="Clinic_Signup.php">

	
	
	
	<div class="form-group">
                  <label for="password">Category Name *</label>
    
	<div class="form-control-material">

						
						<?php	
$query1 = mysqli_query($Conn,"select * from categories");

echo '<select name="Category_ID" class="selectpicker" data-style="btn-white" required>';

   echo '<option value=""></option>';

   
while ($row1 = mysqli_fetch_array($query1)) {
	
	

	
	
	
   echo '<option value="'.$row1['ID'].'">'.$row1['Category_Name'].'</option>';
}
echo '</select>';
?>	



                    </div>
                  </div>
	
	
	
	
	<br>
	
	
	
	
	
	
	
	
	
	
	
	
	

			 <div class="form-group">
                  <label for="Company Name">Name *</label>
          
		  <div class="form-control-material">
                  <input id="firstName" type="text" class="form-control" name="Name" placeholder="Name" required>
                </div>
              </div>
			  
			  
			  
			  
			  
			  <div class="form-group">
                  <label for="email">Phone Number *</label>

			  <div class="form-control-material">
                  <input id="text" type="text" name="Phone_Number" pattern="[+ 0-9]{10}" title="Must Contain Exactly 10 Numbers" class="form-control" placeholder="Phone Number" required>
                </div>
              </div>
              
			  
			   
			  <div class="form-group">
                  <label for="email">Address *</label>

			  <div class="form-control-material">
                  <input id="text" type="text" name="Address" class="form-control" placeholder="Address" required>
                </div>
              </div>
			  
			  
			   <div class="form-group">
                  <label for="email">Username *</label>

			  <div class="form-control-material">
                  <input id="text" type="text" name="Username" class="form-control" placeholder="Username" required>
                </div>
              </div>
              
			  
              
			  
              <div class="form-group">
                  <label for="password">Password *</label>

			  <div class="form-control-material">
                  <input id="password" type="password" class="form-control" name="Password" placeholder="Password" required>
                </div>
              </div>
			  
			  
			  
			    
			    
				
				<br>
				
			  
			  
			  
			 
			
			  
			  
			  
			  
			  
			  
			 
			  <br><br>
			  
			  
             
              <div class="text-center">
                <input type="submit" name="Submit" value="Signup" class="btn btn-primary"/>
				                <input type="reset" value="Reset" class="btn btn-danger"/>

              </div>
			  
			  	  <br><br>
			  
            </form>
            <!-- //Signup -->

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <strong><font color="#000">Clinics Center © 2022. All Rights Reserved.</font></strong>
  </footer>
  <!-- // Footer -->
  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    
  </script>
  <script src="js/vendor/all.js"></script>
  <script src="js/app/app.js"></script>
</body>

</html>