<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
  echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
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


          <li class="dropdown">
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
          <h1 class="text-white text-display-1 margin-v-0">Clinics</h1>
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
                <li class="list-group-item active"><a class="link-text-color" href="Clinics_Management.php">Clinics Management</a></li>
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
                  <h4 class="text-headline margin-none">Clinics Management</h4>
                </div>
                <ul class="list-group">
                  <li class="list-group-item media v-middle">
                    <div class="media-body">



                      <div class="panel panel-default">
                        <!-- Data table -->
                        <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Clinic ID</th>
                              <th>Category Name</th>
                              <th>Clinic Name</th>
                              <th>Clinic Phone Number</th>
                              <th>Clinic Address</th>
                              <th>Clinic Username</th>
                              <th>Clinic Status</th>
                              <th>Clinic Add Date / Time</th>

                              <th>Actions</th>
                            </tr>
                          </thead>








                          <tbody>


                            <?php
                            $sql1 = mysqli_query($Conn, "select * from clinics order by ID DESC");
                            while ($row1 = mysqli_fetch_array($sql1)) {

                              $C_ID = $row1['ID'];
                              $Category_ID = $row1['Category_ID'];
                              $Name = $row1['Name'];
                              $Phone_Number = $row1['Phone_Number'];
                              $Address = $row1['Address'];
                              $Status = $row1['Status'];
                              $Username = $row1['Username'];
                              $Add_Date_Time = $row1['Add_Date_Time'];



                              $sql12 = mysqli_query($Conn, "select * from categories where ID='$Category_ID'");
                              $row12 = mysqli_fetch_array($sql12);
                              $Category_Name = $row12['Category_Name'];





                            ?>


                              <tr>
                                <td><?php echo $C_ID; ?></td>
                                <td><?php echo $Category_Name; ?></td>
                                <td><?php echo $Name; ?></td>
                                <td><?php echo $Phone_Number; ?></td>
                                <td><?php echo $Address; ?></td>
                                <td><?php echo $Status; ?></td>
                                <td><?php echo $Username; ?></td>
                                <td><?php echo $Add_Date_Time; ?></td>
                                <td>

                                  <a href="JavaScript:if(confirm('Are You Sure To Delete This Clinic ?')==true)
{window.location='Delete_Clinic.php?C_ID=<?php echo $C_ID; ?>';}" class="btn btn-danger btn-sm" role="button">Delete</a>

                                  <br><br>
                                  <a href="JavaScript:if(confirm('Are You Sure To Active This Clinic ?')==true)
{window.location='Active_Clinic.php?C_ID=<?php echo $C_ID; ?>';}" class="btn btn-warning btn-sm" role="button">Active</a>

                                  <br><br>

                                  <a href="JavaScript:if(confirm('Are You Sure To Deactive This Clinic ?')==true)
{window.location='Deactive_Clinic.php?C_ID=<?php echo $C_ID; ?>';}" class="btn btn-warning btn-sm" role="button">Deactive</a>







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