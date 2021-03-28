<?php
   include("config.php");
   session_start();
   $message="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $cpassword = mysqli_real_escape_string($db,$_POST['password']);
      
      
      $query = "Select* from users where Email='".$_SESSION['Email']."'";
	  $res = mysqli_query($db,$query) or die(mysqli_error($db));
	  $row = mysqli_fetch_array($res);
	  
	  if ($_POST["password"] == $row["Password"]) {
        mysqli_query($db, "DELETE from users WHERE Email='" . $_SESSION["Email"] . "'");
        $message = "Account Deleted";
        header('location:logout.php');
        
      } else
        $message = "Credentials are not correct, please check.";
       
      
   }
?>
<html>
   
   <head>
      <title>Delete | Tourista</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
      <!-- CSS  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      
   </head>
   
   <body>
        <nav class="pink accent-3 light" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo"><img src="site-logo.png" style="width:60px;margin-top:10px;margin-left: 20px;"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php"><strong class="white-text">Home</strong></a></li>
            <li><a href="about.php"><strong class="white-text">About</strong></a></li>
            <li><a href="package.php"><strong class="white-text">Packages</strong></a></li>
            <li><a href="contact.php"><strong class="white-text">Contact</strong></a></li>
            <li><a href="#" class="dropdown-trigger" data-target="accnt"><strong class="white-text">Account</strong></a></li>
            <ul id="accnt" class="dropdown-content">
                <?php
                    if(isset($_SESSION['Email'])){
                ?>
                <li class="white"><a href="setting.php" class="pink-text text-accent-3"><b>Setting</b></a></li>
                <li class="white"><a href="logout.php" class="pink-text text-accent-3"><b>Logout</b></a></li>
                <?php
                    }
                    else{
                ?>
                <li class="white"><a href="login.php" class="pink-text text-accent-3"><b>Login</b></a></li>
                <li class="white"><a href="signup.php" class="pink-text text-accent-3"><b>Signup</b></a></li>
                <?php
                    }
                ?>   
            </ul>
          </ul>
    
          <ul id="nav-mobile" class="sidenav">
            <li class="pink accent-3 center white-text"><h1 style="margin-top: -30px;margin-bottom: 0;">...</h1>
              <h5 style="margin:;padding-bottom:5px;font-size:20px;font-family: 'Dancing Script', cursive;">Your Travel Partner</h5></li>
            <li><a href="index.php"><strong class="black-text">Home</strong></a></li>
            <li><a href="about.php"><strong class="black-text">About</strong></a></li>
            <li><a href="package.php"><strong class="black-text">Packages</strong></a></li>
            <li><a href="contact.php"><strong class="black-text">Contact</strong></a></li>
             <?php
                if(isset($_SESSION['Email'])){
            ?>
            <li class="white"><a href="setting.php" class="pink-text text-accent-3">Setting</a></li>
            <li class="white"><a href="logout.php" class="pink-text text-accent-3">Logout</a></li>
            <?php
                }
                else{
            ?>
            <li class="white"><a href="login.php" class="pink-text text-accent-3">Login</a></li>
            <li class="white"><a href="signup.php" class="pink-text text-accent-3">Signup</a></li>
            <?php
                }
            ?>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text" style="font-size:35px;">menu</i></a>
        </div>
      </nav>
      
      <br>
      <br>
       
       
       <div class="container z-depth-3" style="padding:15px 15px 15px 25px;">
          <h4 class="pink-text text-accent-3">Delete Account</h4>
          <br>
          <form action="" method="POST">
            <div class="row">
                <div class="col l6 m6 s12">
            <div class="row">
                <div class="input-field col l6 m6 s12">
                  <input id="pass" name="password" type="password" class="validate  pink-text" required>
                  <label for="pass" class=" pink-text">Password</label>
                </div>
            </div> 
            <br>
            <br>
            <div class="row">
                <div class="col l6 m6 s12">
                  <button class="btn-large black-text white hoverable" type="submit"><b>submit</b><i class="material-icons right pink-text text-accent-3">send</i></button>
                </div>
            </div>
            <?php
            if ($message=="Account Deleted"){ 
                echo '<div class="row">
                <div class="col l12 m12 s12">
                  <button class="btn green lighten-3 black-text"><b>'.$message.'</b></button>
                </div>
            </div>'; 
            
            }
            else if($message=="Credentials are not correct, please check."){ echo '<div class="row">
                <div class="col l12 m12 s12">
                  <button class="btn red accent-2 white-text"><b>'.$message.'</b></button>
                </div>
            </div>'; }
            
            ?>
            </div>
            <div class="col l6 m6 s12">
                <img src="delete.svg" style="width:100%">
            </div>
            </div>
            
       </div>
       
       <br>
       <br>
       <br>
       <br>
	
	<!-- FOOTER -->

      <footer class="page-footer pink accent-3">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h3 class="white-text"><b>Tourista</b></h3>
              <p class="grey-text text-lighten-4">We are tour and travel specialist. We always keeps our customer comfort first. We provide budget friendly tour to all locations. We always focus on luxury that's why we give our customer luxurios stays, travel, food, etc. Customer is everything for us.</p>
    
    
            </div>
            <div class="col l2 s12">
            </div>
            <div class="col l3 s12 hide-on-small-only">
              <ul class="right">
                <li><a class="white-text" href="https://www.facebook.com/ProgrammingGeeks.YouTube/"><i class="fa fa-facebook" style="font-size: 35px;padding-top:20px;"></i></a></li>
                <li><a class="white-text" href="https://www.instagram.com/_programming_geeks_/"><i class="fa fa-instagram" style="font-size: 35px;padding-top:20px;"></i></a></li>
                <li><a class="white-text" href="https://twitter.com/ProgramingGeeks"><i class="fa fa-twitter" style="font-size: 35px;padding-top:20px;"></i></a></li>
                <li><a class="white-text" href="https://www.youtube.com/c/PROGRAMMINGGEEKSMANISHPARMAR"><i class="fa fa-youtube-play" style="font-size: 35px;padding-top:20px;"></i></a></li>
              </ul>
            </div>
            <div class="col l3 s12 hide-on-med-and-up">
              <ul>
                <li class="left"><a class="white-text" href="https://www.facebook.com/ProgrammingGeeks.YouTube/"><i class="fa fa-facebook" style="font-size: 35px;padding-right:20px;"></i></a></li>
                <li class="left"><a class="white-text" href="https://www.instagram.com/_programming_geeks_/"><i class="fa fa-instagram" style="font-size: 35px;padding-right:20px;"></i></a></li>
                <li class="left"><a class="white-text" href="https://twitter.com/ProgramingGeeks"><i class="fa fa-twitter" style="font-size: 35px;padding-right:20px;"></i></a></li>
                <li class="left"><a class="white-text" href="https://www.youtube.com/c/PROGRAMMINGGEEKSMANISHPARMAR"><i class="fa fa-youtube-play" style="font-size: 35px;padding-right:20px;"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container center-align">
          Copyrights &copy | All rights Reserved<br>
          Made by <b class="white-text">Manish Parmar</b>
          </div>
        </div>
      </footer>
    
    
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <script> 
        $(document).ready(function() {  
        $(".slider").slider({ full_width: true });  
        });  
      </script>
      <script>
      $('.dropdown-trigger').dropdown();
      </script>
      
   </body>
</html>