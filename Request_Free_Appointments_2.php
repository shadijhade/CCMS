<?php
session_start();

include("includes/config.php");


$Clinic_ID = $_GET['Clinic_ID'];
$Doctor_ID = $_GET['Doctor_ID'];

if (isset($_POST['Submit'])) {
  $Clinic_ID = $_POST['Clinic_ID'];
  $Doctor_ID = $_POST['Doctor_ID'];
  $Full_Name = $_POST['Full_Name'];
  $Phone_Number = $_POST['Phone_Number'];
  $Date = $_POST['Date'];
  $Time = $_POST['Time'];



  $sql = mysqli_query($Conn, "select * from free_appointments where Clinic_ID='$Clinic_ID' AND Doctor_ID='$Doctor_ID' AND Date='$Date' AND Time='$Time'");
  if (mysqli_num_rows($sql) > 0) {

    echo "<script language='JavaScript'>
			  alert ('Sorry ! Appointment Already Exist In This Date / Time ! Choose Another Date / Time');
      </script>";

    echo "<script language='JavaScript'>
document.location='Request_Free_Appointments_2.php';
        </script>";
  } else {




    $insert = mysqli_query($Conn, "insert into free_appointments (Clinic_ID,Doctor_ID,Full_Name,Phone_Number,Date,Time) values ('$Clinic_ID','$Doctor_ID','$Full_Name','$Phone_Number','$Date','$Time')");

    echo "<script language='JavaScript'>
			  alert ('Your Appointment Has Been Sent Successfully ! Clinic Will Contact You !');
      </script>";

    echo "<script language='JavaScript'>
document.location='index.php';
        </script>";
  }
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
  <title>:: Appointments ::</title>
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
          <h3 class="text-display-2 text-white margin-none">Request Free Appointments</h3>
        </div>
      </div>
    </div>
  </div>




  <div class="container">


    <div class="page-section">

      <div class="row">
        <div class="col-md-12 col-lg-12">

          <div class="page-section padding-top-none">


            <ul class="list-group">
              <li class="list-group-item media v-middle">
                <div class="media-body">

                  <div id="account" class="tab-pane active">
                    <form class="form-horizontal" action="Request_Free_Appointments_2.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="Clinic_ID" value="<?php echo $Clinic_ID; ?>" />
                      <input type="hidden" name="Doctor_ID" value="<?php echo $Doctor_ID; ?>" />


                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Full Name *</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="text" class="form-control" name="Full_Name" placeholder="Full Name" required>
                          </div>
                        </div>
                      </div>












                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Phone Number *</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="tel" pattern="(?=.*\d)(?=.*[0-9]).{10}" title="Must Contain Exactly 10 Numbers" class="form-control" name="Phone_Number" placeholder="Phone Number" required>
                          </div>
                        </div>
                      </div>



                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Date *</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="date" class="form-control" name="Date" required>
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Time *</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="time" class="form-control" name="Time" required>
                          </div>
                        </div>
                      </div>












                      <div class="form-group margin-none">
                        <div class="col-md-offset-2 col-md-10">
                          <button type="submit" name="Submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Send</button>
                          <button type="reset" name="Submit" class="btn btn-danger paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Clear</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
              </li>

            </ul>



          </div>






        </div>

      </div>

    </div>














  </div>
  <br />
























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