<?php
session_start();
$status="";


						
	if (isset($_POST['action']) && $_POST['action']=="product-remove"){						
	if(!empty($_SESSION["cart"])) {
		foreach($_SESSION["cart"] as $key => $value) {
			if($_POST["code"] == $key){
			unset($_SESSION["cart"][$key]);
			
			echo "<script>alert('Product has been remove from cart!');
					window.location='cart.php'</script>";
			}
			if(empty($_SESSION["cart"]))
			unset($_SESSION["cart"]);
					echo "<script>alert('Product has been remove from cart!');
					window.location='cart.php'</script>";
	
			}		
		}
	}


  	
				
?>