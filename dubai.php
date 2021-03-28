<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Dubai | Tourista</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    input[type=email]:not(.browser-default):focus:not([readonly]),input[type=text]:not(.browser-default):focus:not([readonly]){
      border-bottom: 2px solid #ffffff;
      box-shadow:0 1px 0 0 #f50057;
    }
    input[type=email]:not(.browser-default), input[type=text]:not(.browser-default){
      border-bottom: 1px solid #ffffff;
    }
    .form2 input[type=email]:not(.browser-default):focus:not([readonly]),.form2 input[type=text]:not(.browser-default):focus:not([readonly]){
      border-bottom: 2px solid #f50057;
      box-shadow:0 1px 0 0 white;
    }
    .form2 input[type=email]:not(.browser-default),.form2 input[type=text]:not(.browser-default){
      border-bottom: 1px solid #f50057;
    }
    
    
  </style>
</head>
<body>

  <!-- NAVIGATION -->

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

  <!-- HEADING -->

  <div class="container">
        <h1 class="header center-align black-text" style="margin-top: 0;"><b><span class="pink-text text-accent-3">EXPLORE</span> DUBAI</b></h1>
  </div>

  <!-- SLIDER -->
  
  <div class="container">
    <div class="slider">

      <ul class="slides" style="height: 100%;"> 
        <li style="border:2px grey solid">  
          <img src="dubai/dubai-1.jpg" style="height: 100%;">    
        </li>  
        <li style="border:2px grey solid">  
          <img src="dubai/dubai-5.jpg" style="height: 100%;">   
        </li>  
        <li style="border:2px grey solid">  
          <img src="dubai/dubai-3.jpg" style="height: 100%;">  
        </li>  
        <li style="border:2px grey solid">  
          <img src="dubai/dubai-4.jpg" style="height: 100%;">  
        </li>  
      </ul> 

    </div>  
  </div>
  <br>

<!-- form -->
<div class="container pink accent-3">
  <div class="row">
    <h5 class="white-text col l7 m12 s12 hide-on-small-only"><b>Get Best Tour planned by our Expert</b></h5>
    <h5 class="white-text col l5 m12 hide-on-small-only right-align"><i class="material-icons" style="transform: translateY(4px);">call</i><b> 9235233124</b></h5>
    <h4 class="white-text col l7 m12 s12 center hide-on-med-and-up"><b>Get Best Tour planned by our Expert</b></h4>
    <h5 class="white-text col s12 hide-on-med-and-up center-align"><i class="material-icons" style="transform: translateY(4px);">call</i><b> 9235233124</b></h5>
  </div>
  <form class="row" method="post" action="form1.php">
        <div class="input-field col l3 m6 s12">
          <input id="Name" name="Name" type="text" class="validate  white-text" required>
          <label for="Name" class=" white-text">Name</label>
        </div>
        <div class="input-field col l3 m6 s12">
          <input id="Number" name="Number" type="text" class="validate  white-text" pattern="[0-9]{10}" required>
          <label for="Number" class=" white-text">Mobile No.</label>
        </div>
        <div class="input-field col l3 m12 s12">
          <input id="email" name="email" type="email" class="validate  white-text" required>
          <label for="email" class=" white-text">Email ID</label>
        </div>
        <div class="col l3 m6 s12 center">
          <button class="btn waves-effect waves-dark  white black-text hoverable" type="submit" name="action" style="margin-top: 25px;margin-bottom: 10px"><b>Get Details</b>
            <i class="material-icons right pink-text text-accent-3">send</i>
          </button>
        </div>
  </form>
</div>
  
  <!-- ABOUT COUNTRY -->

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3 class="pink-text text-accent-3"><b>About Dubai</b></h3>
          <p class="left-align ">Dubai has a rich, Arabic cultural heritage. While it is now more known for its intriguing mix of deserts, beaches and luxurious manmade feats, the culture of the Emirati people still have a major role to play. Dubai is an absolute monarchy. The Al Maktoum family have reigned there since 1833—the current ruler being His Highness Sheikh Hamdan bin Mohammed bi Rashid Al Maktoum. In addition to being the Crown Prince of Dubai, His Highness Sheikh Hamdan is also the Chairman of Dubai’s Executive Council and, like his predecessors, has wisely and progressively led Dubai into prosperity. Although tradition and culture underpin life in Dubai, the UAE state is a warmly hospitable destination. Emirati people tend to preserve Islamic heritage, with the majority being Muslim. Despite this, the people of Dubai are extremely tolerant of their multicultural citizens and guests—all religious beliefs are welcome. Over 200 nationalities call Dubai home, including Emiratis, Indians, Pakistanis, Bangladeshis, Filipinos, Sri Lankans and Americans (just to name a few!). Each new group has brought with them their own style, strengths and flavours. There are currently over 6000 restaurants and cafés in the bustling city, offering every cuisine imaginable.
          </p>
        </div>
      </div>
    </div>
  </div>

      <!-- Popular Locations -->

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3 class="pink-text text-accent-3"><b>Popular Locations</b></h3>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="dubai/dubai-2.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">The Palm</span>
            </div>
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="dubai/dubai-6.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Burj Al Arab</span>
            </div>
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="dubai/dubai-4.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Burj Khalifa</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="dubai/dubai-7.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Aquarium</span>
            </div>
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="dubai/dubai-8.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Motiongate</span>
            </div>
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="dubai/dubai-9.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title " style="font-weight: 600;letter-spacing: 1;">Dubai City</span>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <bt>
  <br>

  <!-- CUSTOM TOUR -->

  <div class="parallax-container valign-wrapper hide-on-small-only">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header right-align white-text "><b>Customise Tour</b></h2>
        <div class="row center">
          <h5 class="header col s12 white-text right-align">We provide custom tour according to your need.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="dubai/dubai-3.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="parallax-container valign-wrapper hide-on-med-and-up">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header center-align white-text  " style="margin-top: -70px;"><b>Customise Tour</b></h2>
        <div class="row center">
          <h5 class="header col s12 white-text">We provide custom tour according to your need.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="dubai/dubai-3.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <br>
  <br>

  <!-- form -->
<div class="container white z-depth-1 form2-out">
  <div class="row hide-on-small-only">
    <h4 class="pink-text text-accent-3 col l6 m12"><b>Coustomise Your Tour</b></h4>
    <h4 class="pink-text text-accent-3 col l6 m12"><i class="material-icons" style="font-size: 35px;transform: translateY(5px);">telephone</i><b> 9235233124</b></h4>
  </div>
  <div class="row hide-on-med-and-up">
    <h4 class="pink-text text-accent-3 col s12 center-align" style="font-size: 30px;"><b>Coustomise Your Tour</b></h4>
    <h4 class="pink-text text-accent-3 col s12 center-align" style="border-top:1px grey solid;padding-top:5px;margin-top:0;"><i class="material-icons" style="font-size: 35px;transform: translateY(5px);">call</i><b> 9235233124</b></h4>
  </div>
  <br>
  <form method="post" action="form2.php">
    <div class="row">
      <div class="col l6 m12 s12">
        <div class="row">
            <div class="input-field col s12 form2">
              <input id="F_Name" name="FName" type="text" class="validate  pink-text text-accent-3" required>
              <label for="F_Name" class=" pink-text text-accent-3">First Name</label>
            </div>
            <div class="input-field col s12 form2">
              <input id="L_Name" name="LName" type="text" class="validate  pink-text text-accent-3" required>
              <label for="L_Name" class=" pink-text text-accent-3">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m12 s12 form2">
              <input id="Number2" name="Namber2" type="text" class="validate  pink-text text-accent-3" pattern="[0-9]{10}" required>
              <label for="Number2" class=" pink-text text-accent-3">Mobile No.</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m12 s12 form2">
              <input id="email2" name="email2" type="email" class="validate  pink-text text-accent-3" required>
              <label for="email2" class=" pink-text text-accent-3">Email ID</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
              <button class="btn btn-large waves-effect waves-dark hoverable white black-text" type="submit" name="action" style="margin-bottom: 20px;"><b>Get Details</b>
                <i class="material-icons right pink-text text-accent-3">send</i>
              </button>
            </div>
        </div>
      </div>
      <div class="col l6 hide-on-med-and-down">
        <div class="slider">
          <ul class="slides hoverable" style="width: 100%;"> 
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-5.jpg" style="width: 100%;">    
            </li>  
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-2.jpg" style="width: 100%;">   
            </li>  
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-1.jpg" style="width: 100%;">  
            </li>  
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-4.jpg" style="width: 100%;">  
            </li>
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-7.jpg" style="width: 100%;">   
            </li>  
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-3.jpg" style="width: 100%;">  
            </li>  
            <li style="border:2px grey solid">  
              <img src="dubai/dubai-8.jpg" style="width: 100%;">  
            </li>    
          </ul>
        </div> 
      </div>

    </div>
  </form>
</div>

<br>
<br>
<br>
<br>

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
