<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="css/style.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    </head>

    <body>
    <?php include 'php/messenger.php'; ?>
    <?php include 'php/globalsitetag.php'; ?>



<!--NAVIGATION-->

      <div class="navbar-fixed">
      <nav>
         <div class="brown lighten-5 nav-wrapper">
           <a href="index.php" id="logo" class="black-text brand-logo"><img src="img/logo.png" alt="Jane Doe Photogrphy Logo" height="60px"></a>
           <a href="#" data-target="mobile-demo" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="black-text right hide-on-med-and-down">
             <li><a href="about.php">ABOUT</a></li>
             <li><a href="gallery.php">GALLERY</a></li>
             <li><a href="contact.php">CONTACT</a></li>

           </ul>
        </div>
      </nav>
      </div>

 <ul class="black-text sidenav" id="mobile-demo">
   <li><a href="about.php">ABOUT</a></li>
   <li><a href="gallery.php">GALLERY</a></li>
   <li><a href="contact.php">CONTACT</a></li>
 </ul>




<!--CAROUSEL-->

 <div class="fullscreen carousel carousel-slider"> <!--does 'fullscreen' make a difference?-->
    <a class="carousel-item" href="#two!"><img src="https://bit.ly/2SlhhHc"></a>
    <a class="carousel-item" href="#three!"><img src="https://bit.ly/2Ry1nVq"></a>
</div>

<!--BOOK NOW-->

<div class="center" id="booknow">
<a class="waves-effect waves-dark btn-large center">BOOK NOW</a>
</div>


<!-- MEMORIES THAT WILL LAST A LIFETIME-->

    <div id="memories" class="row section valign-wrapper">
      <div class="col l3 s0 hide-on-med-and-down">
          <div class="card-image large"><img width="300px"src="img/element3.png"></div>
      </div>

      <div class="col l6 s12">
        <div class="card-content white-text center-align">
        <h1 class="hideme brown-text card-title">Memories <br>That Will Last a Lifetime</h1>
      <p class="hideme card-content black-text">Everyone wants to remember their special moment forever. It's important to invest in your memories and book a reliable photogrpher to capture and create these magical and breath taking moments. <br> Here's a peak at a few newly weds' most treasured moments.</p></div>
      </div>

      <div class="col l3 hide-on-med-and-down "><div class="card-image large"><img height="300px"src="img/element4.png"></div></div>
   </div>


<!-- PICTURE -->

   <div class="row hideme">
    <div class="col s12 m6">
      <div id="picturecard"class="card brown lighten-5 small">
        <div class="card-content brown-text"></div>
      </div>
    </div>


    <div class="col s12 m6">
      <div class="card white lighten-5 small" >
        <div class="card-content brown-text">
          <span class="card-title"><h1>#ForeverFuentes</h1></span>
          <p>Take a glimpse into the Fuentes' special moments. </p>
        </div>
        <div class="white black-text card-action">
          <a href="#">Highlights</a>
          <a href="#">Gallery</a>
        </div>
      </div>
    </div>
  </div>




   <!--footer-->
<?php include 'footer.php'; ?>




              <!--Import jQuery before materialize.js-->
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
         <script src="js/init.js"></script>
         <script src="js/slider.js"></script>

         <!-- delay-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="js/scrollfade.js"></script>





       </body>
    </html>
