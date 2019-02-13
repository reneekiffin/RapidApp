<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<style>
	p{
		text-align: center;
		}
	</style>

</head>
<body>



	<!--NAVIGATION-->

	      <div class="navbar-fixed">
	      <nav>
	         <div class="brown lighten-5 nav-wrapper">
	           <a href="index.html" id="logo" class="black-text brand-logo"><img src="../img/logo.png" alt="Jane Doe Photogrphy Logo" height="60px"></a>
	           <a href="#" data-target="mobile-demo" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
	           <ul class="black-text right hide-on-med-and-down">
	             <li><a href="../about.html">ABOUT</a></li>
	             <li><a href="../gallery.html">GALLERY</a></li>
	             <li><a href="../contact.html">CONTACT</a></li>

	           </ul>
	        </div>
	      </nav>
	      </div>

	 <ul class="black-text sidenav" id="mobile-demo">
	   <li><a href="../about.html">ABOUT</a></li>
	   <li><a href="../gallery.html">GALLERY</a></li>
	   <li><a href="../contact.html">CONTACT</a></li>
	 </ul>



	 <div id="mailphp" class="row section valign-wrapper">
	   <div class="col l12 s12 center">
			 <h1>Your message has been sent</h1>


	<p>
    <?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "reneek@knights.ucf.edu";
$subject = "Jane Doe Client";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you " . $_POST['name'] . " for your message! I will get back to you shortly.";
?>

</p>
</div>
</div>



<!--footer-->

		<footer class="page-footer brown lighten-4 white-text">
						 <div class="container">
							 <div class="row">
								 <div id="socialmedia" class="col l4 s12">
									 <h5 class="white-text">Follow Me</h5>
									 <ul>
										 <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Behance</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">LinkedIn</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Society6</a></li>
									 </ul>
								 </div>
								 <div class="col l4 s12">
									 <h5 class="white-text"></h5>
									 <ul>
										 <li><a class="grey-text text-lighten-3" href="#!">FAQs</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Bookings</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Contracts and Agreements</a></li>
										 <li><a class="grey-text text-lighten-3" href="#!">Refund Policy</a></li>

									 </ul>
								 </div>

								 <div class="col l4 s12">
									 <h5 class="white-text">Opening Hours</h5>
									 9:00 AM - 5:00PM
									 AperatureCircle, UK
								 <iframe id="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.7152805081346!2d-2.167364348203006!3d53.402032878141014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb3656a9b11ef%3A0xf499e9271823f0d8!2sJane+Doe+Photo!5e0!3m2!1sen!2sus!4v1549826824430" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
							 </div>

							 </div>


						 <div class="footer-copyright">

							 © 2019 Copyright Jane Doe
							 <a class="grey-text text-lighten-4 right" href="#!">More Links</a>

						 </div>
					 </footer>






</body>
</html>
