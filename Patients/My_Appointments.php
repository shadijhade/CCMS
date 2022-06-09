<?php
session_start();

include("../includes/config.php");


$P_ID = $_SESSION['P_Log'];


if (!$_SESSION['P_Log'])
  echo '<script language="JavaScript">
 document.location="../Signin.php";
</script>';



?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Clinics Center - Patient Area</title>
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


          <li class="dropdown">
            <a href="View_All_Clinics.php" class="">View All Clinics Doctors</a>

          </li>





        </ul>
        <div class="navbar-right">
          <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
            <!-- user -->
            <li class="dropdown user active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../images/logo1.png" alt="" class="img-circle" /> Patient<span class="caret"></span>
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
          <h1 class="text-white text-display-1 margin-v-0">My Appointments</h1>
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
                <li class="list-group-item "><a class="link-text-color" href="My_Testimonials.php">My Testimonials</a></li>
                <li class="list-group-item active"><a class="link-text-color" href="My_Appointments.php">My Appointments</a></li>

              </ul>
            </div>
          </div>



        </div>
        <div class="col-md-9">



          <div class="row" data-toggle="isotope">
            <div class="item col-xs-12 col-lg-12">
              <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                  <h4 class="text-headline margin-none">My Appointments</h4>
                </div>
                <ul class="list-group">
                  <li class="list-group-item media v-middle">
                    <div class="media-body">



                      <div class="panel panel-default">
                        <!-- Data table -->
                        <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Clinic Name</th>
                              <th>Doctor Name</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Add Date / Time</th>

                              <th>Actions</th>
                            </tr>
                          </thead>








                          <tbody>


                            <?php
                            $sql1 = mysqli_query($Conn, "select * from appointments where Patient_ID='$P_ID' order by ID DESC");
                            while ($row1 = mysqli_fetch_array($sql1)) {

                              $A_ID = $row1['ID'];
                              $Clinic_ID = $row1['Clinic_ID'];
                              $Doctor_ID = $row1['Doctor_ID'];
                              $Date = $row1['Date'];
                              $Time = $row1['Time'];

                              $Add_Date_Time = $row1['Add_Date_Time'];

                              $sql2 = mysqli_query($Conn, "select * from doctors where ID='$Doctor_ID'");
                              $row2 = mysqli_fetch_array($sql2);
                              $D_Full_Name = $row2['Full_Name'];



                              $sql2 = mysqli_query($Conn, "select * from clinics where ID='$Clinic_ID'");
                              $row2 = mysqli_fetch_array($sql2);
                              $Name = $row2['Name'];




                            ?>


                              <tr>
                                <td><?php echo $Name; ?></td>
                                <td><?php echo $D_Full_Name; ?></td>
                                <td><?php echo $Date; ?></td>
                                <td><?php echo $Time; ?></td>
                                <td><?php echo $Add_Date_Time; ?></td>

                                <td>

                                  <a href="JavaScript:if(confirm('Are You Sure To Delete This Appointment ?')==true)
{window.location='Delete_Appointment.php?A_ID=<?php echo $A_ID; ?>';}" class="btn btn-danger btn-sm" role="button">Delete</a>






                                </td>

                              </tr>


                            <?php
                            }
                            ?>



                          </tbody>
                        </table>
                        <!-- // Data table -->
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