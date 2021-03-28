<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Tourista</title>

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
        <li><a href="#"><strong class="white-text">Home</strong></a></li>
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
        <li><a href="#"><strong class="black-text">Home</strong></a></li>
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
            <li class="white"><a href="login.php" class="pink-text text-accent-3"><b>Login</a></li>
            <li class="white"><a href="signup.php" class="pink-text text-accent-3"><b>Signup</a></li>
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
        <h1 class="header center white-text"><b>Tourista</b></h1>
        <div class="row center">
          <h5 class="header col s12">A modern solution for spending quality times with family</h5>
        </div>
        <div class="row center">
          <a href="package.php" id="download-button" class="btn-large waves-effect waves-light pink accent-3 white-text hoverable"><b>See Packages</b></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background-up.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="fa fa-plane"></i></h2>
            <h5 class="center pink accent-3 white-text" style="font-size:21px;margin:10px -10px;padding:8px;"><b>ECONOMIC FLIGHTS</b></h5>

            <p class="light center" style="font-size:18px;">We provide best economic flights to our customer. We did most of the heavy lifting for you to provide a decent journey. We also provide cab to drop and pickup from airport.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="material-icons">hotel</i></h2>
            <h5 class="center pink accent-3 white-text" style="font-size:21px;padding:8px;"><b>5 STAR HOTELS</b> </h5>

            <p class="light center" style="font-size:18px;">We provide best 5 Star hotel to our customers to stay at any place. We always focus on customer experience. Additionally, you will get free breakfast,lunch and dinner.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center"><i class="material-icons">location_city</i></h2>
            <h5 class="center pink accent-3 white-text" style="font-size:21px;padding:8px;"><b>LOCATION</b></h5>

            <p class="light center" style="font-size:18px;">We provided best sightseeing experience to our customers. We also provide personal guide to our customers so they can easily get to know about history of that location.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- PLAN YOUR TRIP SECTION -->

  <div class="parallax-container valign-wrapper hide-on-small-only">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header right-align black-text "><b>Plan Your Next Trip</b></h2>
        <div class="row center">
          <h5 class="header col s12 black-text right-align">A modern solution for spending quality times with family.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background_mid.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="parallax-container valign-wrapper hide-on-med-and-up">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header center-align black-text " style="margin-top: -70px;"><b>Plan Your Next Trip</b></h2>
        <div class="row center">
          <h5 class="header col s12 black-text">A modern solution for spending quality times with family.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background_mid.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <br>
  <br>

 <!-- Location section --> 
  <div class="container">
    <div class="section">
      
      <!-- image cards -->

      <div class="row">
        <div class="col s12 m4"><a href="india.html" class="black-text">
          <div class="card hoverable">
            <div class="card-image">
              <img src="india/india-1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title black-text" style="margin-left:0;padding: 2px 5px 2px 0;font-weight: 900;letter-spacing: 1;">India</span>
              <p style="font-weight:400;">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action pink accent-3 center">
              <span class="white-text"><b>EXPLORE MORE</b></span>
            </div>
          </div></a>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable"><a href="dubai.html" class="black-text">
            <div class="card-image">
              <img src="dubai/dubai-1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title black-text" style="margin-left:0;padding: 2px 5px 2px 0;font-weight: 900;letter-spacing: 1;">Dubai</span>
              <p style="font-weight:400;">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action pink accent-3 center">
               <span class="white-text"><b>EXPLORE MORE</b></span>
            </div></a>
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable"><a href="paris.html" class="black-text">
            <div class="card-image">
              <img src="paris/paris-1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title black-text" style="margin-left:0;padding: 2px 5px 2px 0;font-weight: 900;letter-spacing: 1;">Paris</span>
              <p style="font-weight:400;">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action pink accent-3 center">
               <span class="white-text"><b>EXPLORE MORE</b></span>
            </div></a>
          </div>
        </div>
      </div>
            
    </div>
  </div>
  <br>
  <br>


  <!-- PLAN YOUR TRIP SECTION -->

  <div class="parallax-container valign-wrapper hide-on-small-only">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header right-align white-text "><b>Popular Places</b></h2>
        <div class="row center">
          <h5 class="header col s12 white-text right-align">Some must visit places, which makes your eyes shine.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="paris/paris-4.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="parallax-container valign-wrapper hide-on-med-and-up">
    <div class="section no-pad-bot">
      <div class="container">
        <h2 class="header center-align white-text " style="margin-top: -70px;"><b>Popular Places</b></h2>
        <div class="row center">
          <h5 class="header col s12 white-text">Some must visit places, which makes your eyes shine.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="paris/paris-4.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <br>
  <br>

<!-- images -->

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="india/india-1.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">India Gate</span>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="paris/paris-1.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Eiffel Tower</span>
            </div>
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="paris/paris-4.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Arc of Triumph</span>
            </div>
          </div>
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
            <div class="card-image">
              <img src="paris/paris-6.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">Disney Land</span>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card hoverable">
            <div class="card-image" >
              <img src="india/india-3.jpg" style="height:175px;">
            </div>
            <div class="card-content pink accent-3 white-text center" style="padding:5px;">
              <span class="card-title" style="font-weight: 600;letter-spacing: 1;">India Gate</span>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row center">
        <a href="package.php" id="download-button" class="btn-large waves-effect waves-light black-text white hoverable"><b style="font-size: 21px;font-weight:500px;">See Packages</b><i class="material-icons right pink-text text-accent-3">send</i></a>
      </div>
    </div>
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
      <h5 class=" center-align pink-text text-accent-3" style="font-size:30px;font-family: 'Dancing Script', cursive;">Your Travel Partner</h5>

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
    $('.dropdown-trigger').dropdown();
  </script>
  </body>
</html>
