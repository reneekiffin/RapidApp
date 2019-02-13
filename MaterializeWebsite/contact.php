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



 <div class="row section">
   <div class="col l12 s12 center">
 <h1>Ready to Book?</h1>
   </div>
   </div>


 <!-- CONTACT -->

      <div class="row section">
        <div class="col l1 s0">


          <div class="card-image large"><img width="300px"src="img/element1.png"></div>


        </div>
           <div class="col l4 s12">
             <h1>Contact</h1>
               <span class="card-content black-text"><p>Hello! Send me a quick message if you have any questions or inquiries about my available packages!

                 <br>*Please be as detailed as possible if asking for a quote e.g. the number of guests, location and any other relevant details so that I will be able to get back to you sooner and with more accurate information! </p>
         </span>
         </div>

         <div class="col l1 s0"></div>

         <div class="col l5 s12 white">
           <form name="contact" action="php/mail.php" method="post">
         Name: <input type="text" name="name"><br>
         E-mail: <input type="email" name="email"><br>
           Message: <input type="text" name="message"><br>
         <input class="btn-large"type="submit" value="SUBMIT">
         </form>
          </div>

          <div class="col l1 s0"></div>
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


               <div class="row section">
                 <div class="col l1 s0">

                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                   <script>
                   $(document).ready(function(){
                     $("#hide").click(function(){
                       $("p").hide();
                     });
                     $("#show").click(function(){
                       $("p").show();
                     });
                   });
                   </script>
                   </head>
                   <body>

                   <p>If you click on the "Hide" button, I will disappear.</p>

                   <button id="hide">Hide</button>
                   <button id="show">Show</button>


            </div>
          </div>




             </body>
          </html>
