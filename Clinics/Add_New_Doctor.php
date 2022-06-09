<?php
session_start();

include("../includes/config.php");


$C_ID = $_SESSION['C_Log'];


if (!$_SESSION['C_Log'])
  echo '<script language="JavaScript">
 document.location="../Signin.php";
</script>';



$sql11 = mysqli_query($Conn, "select * from clinics where ID='$C_ID'");
$row11 = mysqli_fetch_array($sql11);
$C_Name = $row11['Name'];

if (isset($_POST['Submit'])) {
  $C_ID = $_POST['C_ID'];
  $Full_Name = $_POST['Full_Name'];
  $Email_Address = $_POST['Email_Address'];
  $Phone_Number = $_POST['Phone_Number'];
  $Major = $_POST['Major'];
  $Years_of_Experience = $_POST['Years_of_Experience'];
  $Password = md5($_POST['Password']);



  $sql1 = mysqli_query($Conn, "insert into doctors (Clinic_ID,Full_Name,Email_Address,Phone_Number,Major,Years_of_Experience,Password) values ('$C_ID','$Full_Name','$Email_Address','$Phone_Number','$Major','$Years_of_Experience','$Password')");

  echo "<script language='JavaScript'>
			  alert ('New Doctor Has Been Added !');
      </script>";

  echo "<script language='JavaScript'>
document.location='Doctors_Management.php';
        </script>";
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
  <title>Clinics Center - Clinic Area</title>
  <link href="../css/vendor/all.css" rel="stylesheet">
  <link href="../css/app/app.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/logo1.png" />

</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
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
            <center><img src="../images/logo1.png" width="70px" height="70px" /></center>

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
            <a href="My_Profile.php" class="">My Profile</a>

          </li>


        </ul>
        <div class="navbar-right">
          <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
            <!-- user -->
            <li class="dropdown user active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../images/logo1.png" alt="" class="img-circle" /> <?php echo $C_Name; ?><span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="My_Account.php"><i class="fa fa-user"></i> My Account</a></li>
                <li><a href="Logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
            <!-- // END user -->
          </ul>
        </div>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

  <div class="parallax overflow-hidden bg-blue-400 page-section third">
    <div class="container parallax-layer" data-opacity="true">
      <div class="media v-middle">
        <div class="media-left text-center">
          <a href="#">
            <img src="../images/user.png" alt="people" class="img-circle width-80" />
          </a>
        </div>
        <div class="media-body">
          <h1 class="text-white text-display-1 margin-v-0">Doctors</h1>
        </div>

      </div>
    </div>
  </div>

  <div class="container">

    <div class="page-section">
      <div class="row">
        <div class="col-md-3">

          <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
            <div class="panel-heading panel-collapse-trigger">
              <h4 class="panel-title">Main Menu</h4>
            </div>
            <div class="panel-body list-group">
              <ul class="list-group list-group-menu">
                <li class="list-group-item active"><a class="link-text-color" href="Doctors_Management.php">Doctors Management</a></li>
                <li class="list-group-item"><a class="link-text-color" href="Appointments_Management.php">Appointments Management</a></li>
                <li class="list-group-item "><a class="link-text-color" href="Free_Appointments_Management.php">Free Appointments Management</a></li>
                <li class="list-group-item "><a class="link-text-color" href="Doctors_Posts_Management.php"><span>Doctors Posts Management</span></a></li>
              </ul>
            </div>
          </div>



        </div>
        <div class="col-md-9">



          <div class="row" data-toggle="isotope">
            <div class="item col-xs-12 col-lg-12">
              <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                  <h4 class="text-headline margin-none">Add New Doctor</h4>
                </div>
                <ul class="list-group">
                  <li class="list-group-item media v-middle">
                    <div class="media-body">

                      <div id="account" class="tab-pane active">
                        <form class="form-horizontal" action="Add_New_Doctor.php" method="post">
                          <input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>" />



                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Full Name *</label>
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" name="Full_Name" placeholder="Full Name" required>

                              </div>
                            </div>
                          </div>





                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Email Address *</label>

                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="email" class="form-control" name="Email_Address" placeholder="Email Address" required>

                              </div>
                            </div>
                          </div>








                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Phone Number *</label>

                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" name="Phone_Number" pattern="[+ 0-9]{10}" title="Must Contain Exactly 10 Numbers" placeholder="Phone Number" required>

                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Major *</label>

                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" name="Major" placeholder="Major" required>

                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Years of Experience *</label>

                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="numbers" min="0" class="form-control" name="Years_of_Experience" placeholder="Years of Experience" required>

                              </div>
                            </div>
                          </div>














                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Password *</label>

                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="password" class="form-control" name="Password" placeholder="Password" required>

                              </div>
                            </div>
                          </div>













                          <div class="form-group margin-none">
                            <div class="col-md-offset-2 col-md-10">
                              <button type="submit" name="Submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Add New Doctor</button>
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

          <br />
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
  <script src="../js/vendor/all.js"></script>
  <script src="../js/app/app.js"></script>
</body>

</html>