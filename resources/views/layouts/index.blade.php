<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<div class="top py-1">
  		<div class="container">
  			<div class="row">
	    		<div class="col d-flex align-items-center">
	    			<p class="mb-0"><a href="#">os9104236@gmail.com</a> | <a href="#">Help Desk</a> | </p>
	    		</div>
	    		<div class="col-4 d-flex justify-content-end">
	    			<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="https://www.facebook.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="https://www.twitter.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="https://www.instagram.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="https://www.dribbble.com/" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
	    		</div>
	    	</div>
  		</div>
  	</div>
		<div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
						<a class="navbar-brand" href="index.php">pharamcy</a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-8 mb-md-0 mb-3">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
									<div class="text"><span>Address</span><span>2st othman bin affan  saad bin waqas haram giza</span></div>
								</div>
							</div>
							<div class="col">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
									<div class="text"><span>Call us</span><span>(+01) 1577 813 04</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<div class="order-lg-last">
        </div>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item @yield('H_active')"><a href="" class="nav-link">Home</a></li>
	        	<li class="nav-item @yield('AD_active')"><a href="alogin" class="nav-link">Admin login</a></li>
	        	<li class="nav-item @yield('Te_active')"><a href="" class="nav-link">Team login</a></li>
	        	<li class="nav-item @yield('Gal_active')"><a href="gallery" class="nav-link">Gallery</a></li>
	          <li class="nav-item @yield('Con_active')"><a href="contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    

	  @yield('contant')

    <footer class="footer ftco-section ftco-no-pt">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget py-4 py-md-5">
              <h2 class="logo"><a href="#">Pharmacy</a></h2>
              <p>This web service to make the operation of medicine sale more easier for pharmacy worker.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a href="https://www.twitter.com/"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget ml-md-5 py-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Add Medicines</a></li>
                <li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Updete Medicines</a></li>
                <li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Delete Medicines</a></li>
                <li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Search for Medicines</a></li>
                <li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Sale Medicines</a></li>
				<li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Make Bills</a></li>
				<li><a  class="py-1 d-block"><span class="fa fa-check mr-3"></span>Make contact between Manager Worker</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget py-4 py-md-5">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">2 St Othman bin affan,  Saad bin waqas, Haram, Giza ,Egypt</span></li>
	                <li><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><span class="icon fa fa-paper-plane"></span><span class="text">os9104236@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget bg-primary p-4 py-5">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Thursday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Friday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
	
  
  

  </body>

  

</html>