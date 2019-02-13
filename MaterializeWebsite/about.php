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





 <!--ABOUT ME-->
         <div id="about"class="row hidemefocus section valign-wrapper">
           <div class="col l1 s0"></div>
           <div class="col l4 s12">
           <div class="card">
             <div class="card-image">
             <img src="https://bit.ly/2WPYqDA">
             </div>
           </div>
         </div>

         <div class="col l1 s0">
         </div>

         <div class="col l4 s13">
         <div class="card large brown white-text lighten-2" >
           <div class="card-content">
             <span class="card-title"><h1>About Me</h1></span>
             <p> Hi, I'm Jane! I grew up in a little town called Cantelope. I went to Fairytale Univeristy and graduated with my B.A. in Fine Arts. I got a gig as a wedding photographer after graduating and fell in love capturing people's special moments at weddings. Since then I have been working as a professional wedding photographer for 5 years. </p>
           </div>
         </div>
         </div>
         <div class="col l1 hide-on-med-and-down">
           <div class="card-image large"><img height="700px"src="img/element2.png"></div>
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
