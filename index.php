<?php

include("includes/config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>:: Clinics Center ::</title>
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
  #slider {
    margin-top: -10vh;
    margin-bottom: -10vh;
    width: 100%;
    border-radius: 0 0 35px 35px;
  }
 
</style>
<body>
  <!-- Fixed navbar -->
  <div id="navbar"  class="navbar navbar-default navbar-fixed-top navbar-size-large  paper-shadow" data-z="0" data-animated role="navigation">
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
            <img  src="images\logo1.png" width="70rem" height="70rem" />

          </a>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        
        <ul class="nav navbar-nav navbar-nav-margin-left">



          <li class="dropdown active">
            <a href="index.php" class="nav-link">Home</a>

          </li>



          <li class="dropdown">
            <a href="About_Us.php" class="nav-link">About Us</a>

          </li>


          <li class="dropdown">
            <a href="All_Clinics.php" class="nav-link">Clinics</a>

          </li>


          <li class="dropdown">
            <a href="All_Doctors.php" class="nav-link">Doctors</a>

          </li>







          <li class="dropdown">
            <a href="Signin.php" class="nav-link">Signin</a>

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
          <li class="dropdown">
            <a href="Admin_Login.php" class="" style="color: orange ;">Admin Gate</a>

          </li>

        </ul>
        
        
        






      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

 <div class="jumbotron jumbotron-fluid" style="padding-top: 150px ; background : transparent">
  <div class="container-fluid">
    <div class="slider-wrapper theme-default" >

      <div id="slider" class="nivoSlider" >
        <img src="images/slider1.png">
        <img src="images/slider2.png">
        <img src="images/slider3.png">
        <img src="images/slider4.png">
        <img src="images/slider5.png">
        <img src="images/slider6.png">


      </div>


    </div>
  </div>
 </div>



  <div class="container">
    <div class="row" data-toggle="gridalicious" >


      <div class="media" >

        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">
                <center><a href="All_Clinics.php" class="navbar-btn btn btn-primary btn-lg">All Clinics</a></center>
              </div>


            </div>
          </div>
        </div>
      </div>






      <div class="media">

        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">
                <center><a href="Request_Free_Appointments.php" class="navbar-btn btn btn-primary btn-lg">Request Free Appointments</a></center>
              </div>


            </div>
          </div>
        </div>
      </div>



      <div class="media">

        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">
                <center><a href="All_Doctors.php" class="navbar-btn btn btn-primary btn-lg">All Doctors</a></center>
              </div>


            </div>
          </div>
        </div>
      </div>













    </div>



  </div>







  </div>
  <br />










  <div class="page-section bg-white">
    <div class="container">

      <div class="text-center">
        <h3 class="text-display-1">
          <center>Our Patients Testimonials</center>
        </h3>
      </div>
      <br />

      <div class="slick-basic slick-slider" data-items="1" data-items-lg="3" data-items-md="2" data-items-sm="1" data-items-xs="1">


        <?php



        $q11 = mysqli_query($Conn, "select * from patients_testimonials order by Add_Date_Time DESC");
        while ($result11 = mysqli_fetch_array($q11)) {
          $Patient_ID = $result11['Patient_ID'];
          $Text = $result11['Text'];
          $Add_Date_Time = $result11['Add_Date_Time'];


          $q12 = mysqli_query($Conn, "select * from patients where ID='$Patient_ID'");

          $result12 = mysqli_fetch_array($q12);

          $Full_Name = $result12['Full_Name'];




        ?>





          <div class="item">
            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
              <div class="panel-body">
                <div class="media media-clearfix-xs">
                  <div class="media-body">

                    <center>
                      <h4 class="media-heading margin-v-5-3"><?php echo $Full_Name; ?></h4>
                      <h4 class="media-heading margin-v-5-3"><?php echo $Text; ?></h4>
                      <h4 class="media-heading margin-v-5-3"><?php echo $Add_Date_Time; ?></h4>

                    </center>



                  </div>
                </div>
              </div>
            </div>
          </div>


        <?php
        }
        ?>


      </div>


    </div>
  </div>















  <div class="container">
    <div class="page-section-heading">
      <h2 class="text-display-1">
        <center>Our Doctors Posts</center>
      </h2>
    </div>
    <div class="container">
   
  
   <div class="page-section">
  
        <div class="row">
          <div class="col-md-12 col-lg-12">
  
            
        
        
        
       <div class="col-md-12">
  
            <div class="row" data-toggle="isotope">
              
             <?php
             
      $q11=mysqli_query ($Conn,"select * from posts order by Add_Date_Time DESC limit 6");
    while($result11=mysqli_fetch_array($q11))
    {
    $Post_ID=$result11['ID'];
    $Doctor_ID=$result11['Doctor_ID'];
    $Title=$result11['Title'];
    $Description=$result11['Description'];
    $Image=$result11['Image'];
    $Add_Date_Time=$result11['Add_Date_Time'];
    
    
        $q12=mysqli_query ($Conn,"select * from doctors where ID='$Doctor_ID'");
      
      $result12=mysqli_fetch_array($q12);
      
      $Full_Name = $result12['Full_Name'];
      
    
    
    if ($Image==''){
      
      $Image='logo1.png';
      
      
    }
    
               ?>
         
         
         
         
         
              <div class="item col-xs-12 col-sm-6 col-lg-4">
                <div class="panel panel-default paper-shadow" data-z="0.5">
  
                        <div class="cover width-200 width-150pc-xs overlay cover-image-full hover">
                    <span class="img icon-block height-100"></span>
  
  
  
  
  
  
  
                    <a href="View_Post.php?Post_ID=<?php echo $Post_ID; ?>" class="padding-none overlay overlay-full">
                      <span class="v-center">
             <img src="Doctors/Posts_Images/<?php echo $Image; ?>" width="150px" height="150px"/>
  
              </span>
                    </a>
  
                    <a href="View_Post.php?Post_ID=<?php echo $Post_ID; ?>" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                  <span class="btn btn-circle btn-blue btn-lg"></span>
                      </span>
                    </a>
  
                  </div>
  
                  <div class="panel-body">
                    <h4 class="text-headline margin-v-0-10"><a href="View_Post.php?Post_ID=<?php echo $Post_ID; ?>">Dr. <?php echo $Full_Name; ?></a></h4>
                    <h4 class="text-headline margin-v-0-10"><a href="View_Post.php?Post_ID=<?php echo $Post_ID; ?>"><?php echo $Title; ?></a></h4>
  
                   
  
                  </div>
                  <hr class="margin-none" />
                  <div class="panel-body">
  
                    <p><?php echo $Title; ?></p>
                    <p><?php echo $Add_Date_Time; ?></p>
                
  
                    
  
                  </div>
  
                </div>
              </div>
             
         <?php
        }
        ?>
         
  
              
            </div>
  
          
          </div>  
        
        
        
  
  
          
          
            
  
          </div>
          
        </div>
  
      </div>
     
     
     
     
     
     
     
     
     
     
  
    
    
  
    </div>
    <br/>
  
    
    
    
    
    
    
    
    
    
    
    
  
    
    
    
    
    
    
    
    
    
  
  


  <!-- Footer -->
  <!-- Footer -->
  <footer class="footer">
    <strong>
      <font color="#000">Clinics Center © 2022. All Rights Reserved.</font>
    </strong>
  </footer>
  <!-- // Footer -->
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
  <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
  <script type="text/javascript" src="jquery.nivo.slider.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#slider').nivoSlider();
    });
  </script>
</body>

</html>