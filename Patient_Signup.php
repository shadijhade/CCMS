<?php
session_start();

include("includes/config.php");

if (isset($_POST['Submit'])) {
  $Full_Name = $_POST['Full_Name'];
  $Email_Address = $_POST['Email_Address'];
  $Phone_Number = $_POST['Phone_Number'];
  $Gender = $_POST['Gender'];
  $Password = md5($_POST['Password']);
  $Type = $_POST['Type'];


  $sql = mysqli_query($Conn, "select * from patients where Email_Address='$Email_Address'");
  if (mysqli_num_rows($sql) > 0) {



    echo "<script language='JavaScript'>
			  alert ('This Patient Email Address Already Exist !');
      </script>";
  } else {



    $sql1 = mysqli_query($Conn, "insert into patients (Full_Name,Email_Address,Phone_Number,Gender,Password,Type) values ('$Full_Name','$Email_Address','$Phone_Number','$Gender','$Password','$Type')");

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
  <title>:: Join Us Signup ::</title>
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

<body class="login">

  <div id="content">
    <div class="container-fluid">

      <div class="lock-container" style="margin-top:15px" >
        <div class="panel panel-default text-center paper-shadow" data-z="0.5" style="border-radius: 30px;" data-z="0.5">
          <a href="index.php"><img src="images/logo1.png" width="100px" height="100px" /></a>
          <h1 class="text-display-1 text-center ">Patient Signup</h1>
          <div class="panel-body">

            <!-- Signup -->
            <form role="form" method="post" action="Patient_Signup.php">



              <div class="form-group">
                <label for="Company Name">Full name *</label>

                <div class="form-control-material">
                  <input id="firstName" type="text" class="form-control" name="Full_Name" placeholder="Full Name" required>
                </div>
              </div>



              <div class="form-group">
                <label for="email">Email Address *</label>

                <div class="form-control-material">
                  <input id="email" type="email" name="Email_Address" class="form-control" placeholder="Email Address" required>
                </div>
              </div>


              <div class="form-group">
                <label for="email">Phone Number *</label>

                <div class="form-control-material">
                  <input id="text" type="text" name="Phone_Number" pattern="[+ 0-9]{10}" title="Must Contain Exactly 10 Numbers" class="form-control" placeholder="Phone Number" required>
                </div>
              </div>






              <div class="form-group">
                <label for="password">Password *</label>

                <div class="form-control-material">
                  <input id="password" type="password" class="form-control" name="Password" placeholder="Password" required>
                </div>
              </div>



              <div class="form-group">
                <label for="password">Gender *</label>

                <div class="form-control-material">



                  <select name="Gender" class="selectpicker" data-style="btn-white" required>';

                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>


                </div>
              </div>


              <br>




              <div class="form-group">
                <label for="password">Type *</label>

                <div class="form-control-material">



                  <select name="Type" class="selectpicker" data-style="btn-white" required>';

                    <option value=""></option>
                    <option value="Normal">Normal</option>
                    <option value="VIP">VIP</option>
                  </select>


                </div>
              </div>









              <br><br>



              <div class="text-center">
                <input type="submit" name="Submit" value="Signup" class="btn btn-primary" />
                <input type="reset" value="Reset" class="btn btn-danger" />

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
    <strong>
      <font color="#000">Clinics Center © 2022. All Rights Reserved.</font>
    </strong>
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