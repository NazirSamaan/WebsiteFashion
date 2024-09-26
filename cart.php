<?php
session_start();
?>
<!DOCTYPE html>
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
			<h1 style="color: purple; font-size: 100px;">Cart</a></h1>
            <h2><span> Kami menjual pakaian yang berkualiti </span></h2>
          </div>
          <div class="mouse">
					</div>
        </div>
      </div>
    </div>
	

<?php	
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
	?>	
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
								<?php
								if(isset($_SESSION["cart"])){
								$total_price = 0;
								?>	

						    <tbody>
								
							<?php
							foreach ($_SESSION["cart"] as $product){
							
							?>

						    <tr class="text-center">
								<td class="product-remove">
									<form method='post' action='removeitem.php'>
									<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
									<input type='hidden' name='action' value="product-remove" />
									<button type='submit' class='remove'>Remove</button>
									</form>
								</td>
								
							
								
						        <td class="image-prod"><div class="img" style="background-image:url(<?php echo $product["image"]; ?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $product["name"]; ?></h3>
						        	<p><?php echo $product["des"]; ?></p>
						        </td>
						        
						        <td class="price"><?php echo $product["price"]; ?></td>
						        
						        <td class="quantity">
								
									<div class="col-md-12">
						        	
									
									<form method='POST' action=''>
									<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
									<input type='hidden' name='action' value="change" />
									
									  <select name="quantity"  class="quantity form-control select-number" onchange="this.form.submit()">
										<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
										<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
										<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
										<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
										<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
									  </select>
										</div>
										
									</form>
						
					
					          </td>
							  <td class="total"><?php 
										
											echo "BND". $product["price"] *  $product["quantity"]; ?></td>
									<?php 
									
									$total_price += ($product["price"]*$product["quantity"]);
									
									}?>
						       
						      </tr><!-- END TR-->

						    </tbody>
						  </table>
						  
						
						
					  </div>
    			</div>
    		</div>
				
		
			
			
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>BND <?php echo $total_price; ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>BND 15.00</span>
    					</p>
    				
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>BND <?php echo $total_price; ?></span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>

			</div>
		</section>
		
		
			 <?php
						}else{
							
							echo "
							<section class=ftco-section ftco-cart>
							<div class=container>
							<div class=row>
							<div class=col-md-9 ftco-animate text-center>
									<h3 class='mb-0 bread'>Your Cart is empty!</h3>
								</div>
								
								</div>
								
								</section>";
						
						
						}
				
			?>



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

            <p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Nazir Shopping Store

						</p>
          </div>
        </div>
      </div>
    </footer>
    

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