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

<!-- GALLERY-->

    <div id="gallery" class="row section valign-wrapper">
      <div class="col l3 s0 hide-on-med-and-down">
          <div class="card-image large"><img width="300px"src="img/element3.png"></div>
      </div>

      <div class="col l6 s12">
        <div class="card-content white-text center-align">
        <h1 class="hideme brown-text card-title">Gallery</h1>
      <p class="hideme card-content black-text">Everyone wants to remeber their special moment forever. It's important to invest in your memories and book a reliable photographer to capture and create these magical and breath taking moments.</p></div>
      </div>

      <div class="col l3 hide-on-med-and-down "><div class="card-image large"><img height="300px"src="img/element4.png"></div></div>
   </div>


   <!--ALBUMS & EVENTS-->

   <div class="center" id="albumsandevents">
   <a class="waves-effect waves-dark btn-large center section">ALBUMS & EVENTS</a>
   </div>




<!--GRID -->

<div id="grid">
<div class="row">
<div class="col l12">
<img src="https://bit.ly/2UTqAMe">

<img src="https://bit.ly/2THTwGK">

<img src="https://bit.ly/2GkCiMz">

<img src="https://bit.ly/2SEEvIl">
</div>
</div>
</div>



   <!--footer-->
<?php include 'footer.php'; ?>


                      <!-- load fade delay-->
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                      <script src="js/scrollfade.js"></script>

                       <!--GRID-->
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> //load in jQuery</script>
                       <script>
                         $(function(){	//When document has loaded
                           $("#grid img").on({	//sets selector to all inputs of type "text"
                               mouseenter: function(){	//whenever it is focused (clicked or tabbed to)
                                 $(this).css({

                                   opacity:"1",
                                   transform: "scale(2)"




                                 }); //alter the css of that particular element
                               }
                           })
                         })

                         $(function(){	//When document has loaded
                           $("#grid img").on({	//sets selector to all inputs of type "text"
                               mouseleave: function(){	//whenever it is focused (clicked or tabbed to)
                                 $(this).css({
                                   width: "24.5%",
                                   transform: "scale(1)"


                                 }); //alter the css of that particular element
                               }
                           })
                         })
                       </script>

                      <!--Import jQuery before materialize.js-->
                 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                 <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                 <script src="js/init.js"></script>
                 <script src="js/slider.js"></script>



               </body>
            </html>
