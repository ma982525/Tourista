<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>About Us | Tourista</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" >
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
        <li><a href="#"><strong class="white-text">About</strong></a></li>
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
        <li><a href="#"><strong class="black-text">About</strong></a></li>
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

  <!--HEADING-->

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text"><b>About Us</b></h1>
        <div class="row center">
          <h5 class="header col s12">Some Special thoughts from us</h5>
        </div>
        <div class="row center">
          <i class="fa fa-heart" style="font-size: 51px;"></i>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <br>
  <br>

  <!-- Mission -->

<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3 class="pink-text text-accent-3"><b>About us</b></h3>
          <p class="left-align ">Tourista - Indian travel agency/tour operators for fulfill your complete travel requirement. Find travel in India, Tourista offers you various choices at little amount backed by a good service. We offer you customise tour packages according to your comfort.

          We are members of Tourista Tour and Travel Association and approved by Government of Tourista and licensed by Tourism Department of Tourista. Our made expertise of 28 years and an expert team arrange your vacation during an admirable way. If you're visiting Tourista, our trained team can make sure that you get to explore the Incredible World, From destinations to holiday to sightseeing, everything are going to be perfectly planned Travel with Joy and obtain your expectations! Tourista offer best travel packages to destinations everywhere to world. We have got packages to suit the discerning traveler's budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan.
          </p>
        </div>
      </div>
    </div>
  </div>
  

   

<!-- PLAN YOUR TRIP SECTION -->

  <div class="parallax-container valign-wrapper hide-on-small-only">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header right-align white-text "><b>Message From Our chairman</b></h2>
        <div class="row center">
          <h5 class="header col s12 white-text right-align">Some wonderful words from our chairman.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background-mid.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="parallax-container valign-wrapper hide-on-med-and-up">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header center-align white-text " style="margin-top: -70px;"><b>Message From Our chairman</b></h2>
        <div class="row center">
          <h5 class="header col s12 white-text">Some wonderful words from our chairman.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background-mid.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <br>
  <br>

  <div class="container white z-depth-1">
  <br>
    <div class="row">
      <div class="col l6 m12 s12">
        <h4 class="left-align pink-text text-accent-3">Message</h4>
        <br>
        <p>
          Tourista has come a long way in establishing its mark in the travel industry of India. We have been resilient and have made good progress in the last decade in building a reputed Travel agency and its infrastructure. We rely on our in-depth knowledge of the local tourist destinations, and the ability to forecast and respond to customer expectations, which will lead us to high levels of customer satisfaction. We would like to extend our warm greeting to all the visitors to exotic tourist destination. We are pleased to have this opportunity to join our fellow statemen and countrymen in welcoming you in Tourista. We hope and believe that the information given in this will make your visit more rewarding and enjoyable. We will strive to do our best with the resources available and be your worthy companions to make your journey more beautifule safe and Comfortable
          </p> 
      </div>
      <div class="col l6 s12">
        <img src="chairman.jpg" style="width: 100%;">
        <h4 class="center-align pink-text text-accent-3"style="font-family: 'Dancing Script', cursive;">Manish Parmar</h4>
      </div>

    </div>
  </div>




 
<br>
<br>
<br>
<br>
<!-- bottom -->

<div class="container">
    <div class="container">

      <!--   Icon Section   -->
      <div class="row center">
        <div class="col l3 s6 m3">
          <div class="icon-block">
            <h2 class="center-align"><i class="fa fa-plane"></i></h2>
          </div>
        </div>

        <div class="col l3 s6 m3">
          <div class="icon-block">
            <h2 class="center-align"><i class="fa fa-bus"></i></h2>
          </div>
        </div>

        <div class="col l3 s6 m3">
          <div class="icon-block">
            <h2 class="center-align"><i class="fa fa-binoculars"></i></h2>
          </div>
        </div>

        <div class="col l3 s6 m3">
          <div class="icon-block">
            <h2 class="center-align"><i class="fa fa-bed"></i></h2>
          </div>
        </div>
      </div>
      <br>
      <h5 class=" center-align pink-text text-accent-3" style="font-size:30px;font-family: 'Dancing Script', cursive;">Your Travel Partner</h5></li>

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
