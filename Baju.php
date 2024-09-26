<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nazir Clothing Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
	    <div class= "container">Nazir Clothing Store </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="HomePage.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clothing</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="Baju.php">Baju</a>
				<a class="dropdown-item" href="Seluar.php">Seluar</a>
              </div>
            </li>
	          <li class="nav-item"><a href="Tentangkami.php" class="nav-link">Tentang Kami</a></li>
	          <li class="nav-item"><a href="Hubungi.php" class="nav-link">Hubungi Kami</a></li>
			  
	         	<?php
				
				if(!empty($_SESSION["cart"])) {
				$cart_count = count(array_keys($_SESSION["cart"]));
				?>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo $cart_count; ?>]</a></li>
				<?php
				}
				?>  

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
		<div class="hero-wrap js-fullheight" style="background-image: url('images/Background.jpeg');">
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Pakaian Terlaris Di Brunei</h3>
        	<h3 class="vr">Sejak 2012</h3>
          <div class="col-md-11 ftco-animate text-center ;">
			<h1 style="color: Blue; font-size: 100px;">baju</a></h1>
            <h2><span> Kami menjual pakaian yang berkualiti </span></h2>
          </div>
          <div class="mouse">
					</div>
        </div>
      </div>
    </div>

		
		
		
		
			
		<?php
		//database connection 
		include 'connectionDB.php';

	echo"<section class=ftco-section bg-light>
    	<div class=container-fluid>
    		<div class=row>";

		$query = "SELECT * FROM Baju";
		$result = mysqli_query($connection, $query);
		
		while ($row = mysqli_fetch_assoc($result)){
			
			echo "
				<div class='col-sm col-md-6 col-lg-3 ftco-animate'>
    				<div class='product'>
					
						<a href=single_Baju.php?code=".$row['code']." class='img-prod'><img class='img-fluid' src=".$row['BajuImg']." alt='Colorlib Template'></a>
							<div class='text py-3 px-3'>
								<h3><a href=>".$row['BajuName']."</a></h3>
    						<div class='d-flex'>
    							<div class='pricing'>
		    						<p class='price'><span>BND ".$row['BajuPrice']."</span></p>
		    					</div>
							</div>
	    					<hr>
			
							<p class='bottom-area d-flex'>
    							<a href=BajuCartP.php?code=".$row['code']." class='add-to-cart' ><span>Add to cart <i class='ion-ios-add ml-1'></i></span></a>	
    						</p>
							</div>
					</div>
				</div>";

				
		}
	
mysqli_close($connection);	
		
		?>
		
				
		</div>
    		</div>
    	</div>
    </section>


  <!--FOOTER -->
    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="col-sm""ftco-heading-2,">Nazir Clothing Store</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-">
                <li class="ftco-animate"><a href="https://twitter.com/?lang=en"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://m.facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/accounts/login/?"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         
          <div class="col-mdcol-md-12 text-center">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="Hubungi.php"><span class="icon icon-envelope"></span><span class="text">Send Message</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Nazir Clothing Store
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  <!--FOOTER -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
	
	
