<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
  echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';



if (isset($_POST['Submit'])) {
  $Title = $_POST['Title'];
  $Description = $_POST['Description'];



  $file;

  if ($_FILES["file"]["error"] > 0) {
  } else {
  }

  move_uploaded_file($_FILES["file"]["tmp_name"], "Offers_Pictures/" . $_FILES["file"]["name"]);

  $file = $_FILES["file"]["name"];

  $Picture_Path = 'Administrator/Offers_Pictures/' . $file;







  $update = mysqli_query($Conn, "insert into offers (Title,Description,Image) values ('$Title','$Description','$Picture_Path')");

  echo "<script language='JavaScript'>
			  alert ('New Offer Has Been Added !');
      </script>";

  echo "<script language='JavaScript'>
document.location='Offers_Management.php';
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
  <title>Clinics Center - Administration Area</title>
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
            <a href="My_Account.php" class="">My Account</a>

          </li>


          <li class="dropdown active">
            <a href="Offers_Management.php" class="">Offers Management</a>

          </li>



        </ul>
        <div class="navbar-right">
          <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
            <!-- user -->
            <li class="dropdown user active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../images/logo1.png" alt="" class="img-circle" /> Admin<span class="caret"></span>
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
          <h1 class="text-white text-display-1 margin-v-0">Offers</h1>
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
                <li class="list-group-item"><a class="link-text-color" href="Categories_Management.php">Categories Management</a></li>
                <li class="list-group-item"><a class="link-text-color" href="Clinics_Management.php">Clinics Management</a></li>
                <li class="list-group-item"><a class="link-text-color" href="Doctors_Management.php"><span>Doctors Management</span></a></li>
                <li class="list-group-item"><a class="link-text-color" href="Patients_Management.php"><span>Patients Management</span></a></li>

                <li class="list-group-item"><a class="link-text-color" href="Patients_Testimonials_Management.php"><span>Patients Testimonials Management</span></a></li>
                <li class="list-group-item"><a class="link-text-color" href="Posts_Management.php">Posts Management</a></li>
              </ul>
            </div>
          </div>



        </div>
        <div class="col-md-9">



          <div class="row" data-toggle="isotope">
            <div class="item col-xs-12 col-lg-12">
              <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                  <h4 class="text-headline margin-none">Add New Offer</h4>
                </div>
                <ul class="list-group">
                  <li class="list-group-item media v-middle">
                    <div class="media-body">

                      <div id="account" class="tab-pane active">
                        <form class="form-horizontal" action="Add_New_Offer.php" method="post" enctype="multipart/form-data">



                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Offer Title *</label>
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" name="Title" placeholder="Adv Title" required>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Offer Description *</label>
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <textarea id="textarea" name="Description" placeholder="Offer Description" class="form-control" rows="5" required></textarea>


                              </div>
                            </div>
                          </div>








                          <div class="form-group">
                            <label for="inputPassword3" class="col-md-2 control-label">Offer Picture *</label>
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="file" class="form-control" name="file" required>
                              </div>
                            </div>
                          </div>











                          <div class="form-group margin-none">
                            <div class="col-md-offset-2 col-md-10">
                              <button type="submit" name="Submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Add New Offer</button>
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