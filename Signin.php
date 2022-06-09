<?php

session_start();

include("includes/config.php");


if (isset($_POST['Submit'])) {

  $Username = $_POST['Username'];
  $Password = md5($_POST['Password']);
  $Type = $_POST['Type'];



  if ($Type == 'Patient') {



    $query = mysqli_query($Conn, "SELECT * FROM patients WHERE Email_Address='$Username' AND Password='$Password'");


    if (mysqli_num_rows($query) > 0) {

      $row = mysqli_fetch_array($query);
      $P_ID = $row['ID'];
      $_SESSION['P_Log'] = $P_ID;



      echo '<script language="JavaScript">
            document.location="Patients/";
        </script>';
    } else {


      echo '<script language="JavaScript">
	  alert ("Error ... Please Check Patient Username Or Password !")
      </script>';
    }
  } elseif ($Type == 'Clinic') {


    $query = mysqli_query($Conn, "SELECT * FROM clinics WHERE Username='$Username' AND Password='$Password' AND Status='Active'");


    if (mysqli_num_rows($query) > 0) {

      $row = mysqli_fetch_array($query);
      $C_ID = $row['ID'];
      $_SESSION['C_Log'] = $C_ID;



      echo '<script language="JavaScript">
            document.location="Clinics/";
        </script>';
    } else {


      echo '<script language="JavaScript">
	  alert ("Error ... Please Check Clinic Username Or Password !")
      </script>';
    }
  } elseif ($Type == 'Doctor') {




    $query = mysqli_query($Conn, "SELECT * FROM doctors WHERE Email_Address='$Username' AND Password='$Password'");


    if (mysqli_num_rows($query) > 0) {

      $row = mysqli_fetch_array($query);
      $D_ID = $row['ID'];
      $_SESSION['D_Log'] = $D_ID;



      echo '<script language="JavaScript">
            document.location="Doctors/";
        </script>';
    } else {


      echo '<script language="JavaScript">
	  alert ("Error ... Please Check Doctor Username Or Password !")
      </script>';
    }
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
  <title>:: Login Center ::</title>
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

      <div class="lock-container" >
        <div class="panel panel-default text-center paper-shadow" data-z="0.5" style="border-radius: 30px;">
          <h1 class="text-display-1 text-center margin-bottom-none">User Signin</h1>
          <a href="index.php"><img src="images/logo1.png" class="img-circle width-80"></a>
          <div class="panel-body">
            <div class="form-group">
              <label for="username">Username *</label>

              <div class="form-control-material">

                <form action="Signin.php" method="post" />
                <input class="form-control" id="username" name="Username" type="text" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password *</label>

              <div class="form-control-material">
                <input class="form-control" id="password" name="Password" type="password" placeholder="Enter Password" required>
              </div>
            </div>



            <br>

            <div class="form-group">
              <label for="password">Type *</label>

              <div class="form-control-material">



                <select name="Type" class="selectpicker" data-style="btn-white" required>';

                  <option value=""></option>
                  <option value="Patient">Patient</option>
                  <option value="Clinic">Clinic</option>
                  <option value="Doctor">Doctor</option>
                </select>


              </div>
            </div>





            <br>
            <br>














            <div class="text-center">
              <input type="submit" name="Submit" value="Login" class="btn btn-success" />
              <input type="reset" value="Clear" class="btn btn-danger" />

            </div>




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
    var config = {
      theme: "html",
      skins: {
        "default": {
          "primary-color": "#42a5f5"
        }
      }
    };
  </script>
  <script src="js/vendor/all.js"></script>
  <script src="js/app/app.js"></script>
</body>

</html>