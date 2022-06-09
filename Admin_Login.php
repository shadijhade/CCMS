<?php

session_start();

include("includes/config.php");


if (isset($_POST['Submit'])) {

  $Username = $_POST['Username'];
  $Password = md5($_POST['Password']);


  $query = mysqli_query($Conn, "SELECT * FROM administrator WHERE Username='$Username' AND Password='$Password'");


  if (mysqli_num_rows($query) > 0) {

    $row = mysqli_fetch_array($query);
    $A_ID = $row['ID'];
    $_SESSION['A_Log'] = $A_ID;



    echo '<script language="JavaScript">
            document.location="Administrator/";
        </script>';
  } else {

    echo '<script language="JavaScript">
	  alert ("Error ... Please Check Administrator Username Or Password !")
      </script>';

    echo '<script language="JavaScript">
            document.location="Admin_Login.php";
        </script>';
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
  <title>:: Admin Login ::</title>
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

      <div class="lock-container">
        <div class="panel panel-default text-center paper-shadow" data-z="0.5" style="border-radius: 30px;" data-z="0.5">
          <h1 class="text-display-1 text-center margin-bottom-none">Administration Login</h1>
          <img src="images/logo1.png" class="img-circle width-80">
          <div class="panel-body">
            <div class="form-group">
              <label for="username">Username *</label>

              <div class="form-control-material">
                <form action="Admin_Login.php" method="post" / >
                <input class="form-control" id="username" name="Username" type="text" placeholder="Username" required>
               
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password *</label>

              <div class="form-control-material">
                <input class="form-control" id="password" name="Password" type="password" placeholder="Enter Password" required>
              </div>
            </div>

            <button type="submit" name="Submit" class="btn btn-primary">Login<i class="fa fa-fw fa-unlock-alt"></i></button>
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