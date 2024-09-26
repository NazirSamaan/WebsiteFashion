<?php

session_start();

include 'connectionDB.php';
		

	if(isset($_GET['code'])){
		$code=$_GET['code'];


			$result = mysqli_query($connection, "SELECT * FROM `Baju` WHERE `code` = '$code'");
			$row = mysqli_fetch_assoc($result);

			$code = $row['code'];
			$img = $row['BajuImg'];
			$name = $row['BajuName'];
			$price = $row['BajuPrice'];
			$des = $row['BajuDes'];
			
			$cartArray = array(
				$code=>array(
				'name'=>$name,
				'price'=>$price,
				'des'=>$des,
				'quantity'=>1,
				'code'=>$code,
				
				'image'=>$img)
			);
			
if(empty($_SESSION["cart"])){
			$_SESSION["cart"] = $cartArray;
			echo "<script>alert('Product is added to cart!');
					window.location='Baju.php'</script>";
		}else{
			$array_keys = array_keys($_SESSION["cart"]);

			if(in_array($code,$array_keys)) {
				
					echo "<script>alert('Already add!');
					window.location='Baju.php'</script>";
			}else{
				
					$_SESSION["cart"] = array_merge($_SESSION["cart"],$cartArray);
					echo "<script>alert('Product is added to cart!');
					window.location='Baju.php'</script>";
			}	
		}

	}

?>