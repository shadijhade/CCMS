<?php

include("includes/config.php");




?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>:: Doctors ::</title>
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

  <!-- Fixed navbar -->
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

      <!-- Collect the nav links, forms, and other content for toggling -->
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


          <li class="dropdown active">
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



          <li class="dropdown">
            <a href="All_Posts.php" class="">Posts</a>

          </li>

          <li class="dropdown">
            <a href="Contact_Us.php" class="">Contact Us</a>

          </li>

        </ul>






      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

  <div class="parallax overflow-hidden page-section bg-cyan-300">
    <div class="container parallax-layer" data-opacity="true">
      <div class="media media-grid v-middle">
        <div class="media-left">
          <span class="icon-block half bg-cyan-500 text-white"><i class="fa fa-file-text-o"></i></span>
        </div>
        <div class="media-body">
          <h3 class="text-display-2 text-white margin-none">All Doctors</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-section">

      <div class="row">
        <div class="col-md-8 col-lg-12">

          <div class="page-section padding-top-none">

            <div class="panel panel-default">
              <!-- Data table -->
              <table data-toggle="data-table" style="overflow:auto" class="table" cellspacing="0">
                <thead>
                  <tr>
                    <th>Clinic Name</th>
                    <th>Clinic Category</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Major</th>
                    <th>Years of Experience</th>
                  </tr>
                </thead>








                <tbody>


                  <?php
                  $sql = mysqli_query($Conn, "select * from doctors order by ID DESC");
                  while ($row = mysqli_fetch_array($sql)) {

                    $Clinic_ID = $row['Clinic_ID'];

                    $Doctor_ID = $row['ID'];
                    $Full_Name = $row['Full_Name'];
                    $Email_Address = $row['Email_Address'];
                    $Phone_Number = $row['Phone_Number'];
                    $Major = $row['Major'];
                    $Years_of_Experience = $row['Years_of_Experience'];

                    $sql12 = mysqli_query($Conn, "select * from clinics where ID='$Clinic_ID'");
                    $row12 = mysqli_fetch_array($sql12);
                    $Category_ID = $row12['Category_ID'];
                    $Name = $row12['Name'];


                    $sql13 = mysqli_query($Conn, "select * from categories where ID='$Category_ID'");
                    $row13 = mysqli_fetch_array($sql13);
                    $Category_Name = $row13['Category_Name'];
                  ?>


                    <tr>
                      <td><?php echo $Name; ?></td>
                      <td><?php echo $Category_Name; ?></td>
                      <td><?php echo $Full_Name; ?></td>
                      <td><?php echo $Email_Address; ?></td>
                      <td><?php echo $Phone_Number; ?></td>
                      <td><?php echo $Major; ?></td>
                      <td><?php echo $Years_of_Experience; ?></td>



                    </tr>


                  <?php
                  }
                  ?>



                </tbody>
              </table>
              <!-- // Data table -->
            </div>





          </div>














          <br />

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