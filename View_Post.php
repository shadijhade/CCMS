<?php
session_start();
include("includes/config.php");
$Post_ID = $_GET['Post_ID'];
$sql = mysqli_query($Conn, "select * from posts where ID='$Post_ID'");
$row = mysqli_fetch_array($sql);
$Doctor_ID = $row['Doctor_ID'];
$Title = $row['Title'];
$Description = $row['Description'];
$Image = $row['Image'];
$Add_Date_Time = $row['Add_Date_Time'];
$q12 = mysqli_query($Conn, "select * from doctors where ID='$Doctor_ID'");
$result12 = mysqli_fetch_array($q12);
$Full_Name = $result12['Full_Name'];
if ($Image == '') {

  $Image = 'logo1.png';
}
?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>:: View Post Feed ::</title>
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

<body>

  <div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand navbar-brand-logo">
          <a href="index.php">
            <center><img src="images/logo1.png" width="70px" height="70px" /></center>

          </a>
        </div>
      </div>

      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-nav-margin-left">



          <li class="dropdown ">
            <a href="index.php" class="">Home</a>

          </li>



          <li class="dropdown">
            <a href="About_Us.php" class="">About Us</a>

          </li>





          <li class="dropdown">
            <a href="All_Clinics.php" class="">Clinics</a>

          </li>


          <li class="dropdown">
            <a href="All_Doctors.php" class="">Doctors</a>

          </li>


          <li class="dropdown">
            <a href="Signin.php" class="">Signin</a>

          </li>







          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Signup <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Patient_Signup.php">Patient Signup</a></li>
              <li><a href="Clinic_Signup.php">Clinic Signup</a></li>

            </ul>
          </li>



          <li class="dropdown active">
            <a href="All_Posts.php" class="">Posts</a>

          </li>

          <li class="dropdown">
            <a href="Contact_Us.php" class="">Contact Us</a>

          </li>

        </ul>






      </div>

    </div>
  </div>

  <div class="parallax overflow-hidden page-section bg-cyan-300">
    <div class="container parallax-layer" data-opacity="true">
      <div class="media media-grid v-middle">
        <div class="media-left">
          <span class="icon-block half bg-cyan-500 text-white"><i class="fa fa-file-text-o"></i></span>
        </div>
        <div class="media-body">
          <h3 class="text-display-2 text-white margin-none"><?php echo $Title; ?></h3>
          <p class="text-white text-subhead"><?php echo $Add_Date_Time; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-section">

      <div class="row">
        <div class="col-md-8 col-lg-12">

          <div class="media media-grid media-paper-shadow margin-top-none s-container">

            <div class="media-body">
              <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-body">

                  <h4 class="text-title media-heading">
                    <a href="#" class="link-text-color">
                      <center><?php echo $Title; ?></center>
                    </a>
                  </h4>
                  <p class="text-light text-caption">
                    <center>Add Date / Time <i class="fa fa-clock-o fa-fw"></i>
                      <?php echo $Add_Date_Time; ?></center>
                    <center>
                      <img src="Doctors/Posts_Images/<?php echo $Image; ?>" width="250px" height="250px" />
                    </center>
                    <br>
                  <p class="text-light"><?php echo $Description; ?></p>
                </div>
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