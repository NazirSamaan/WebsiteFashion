<?php

session_start();

include 'connectionDB.php';


if(isset($_GET['code'])){
		$code=$_GET['code'];

			$result = mysqli_query($connection, "SELECT * FROM `Seluar` WHERE `code` = '$code'");
			$row = mysqli_fetch_assoc($result);

			$img = $row['SeluarImg'];
			$name = $row['SeluarName'];
			$price = $row['SeluarPrice']; 
			$des = $row['SeluarDes'];
			$code = $row['code'];
			
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
					window.location='Seluar.php'</script>";
		}else{
			$array_keys = array_keys($_SESSION["cart"]);

			if(in_array($code,$array_keys)){
				
					echo "<script>alert('Already add!');
					window.location='Seluar.php'</script>";
			}else{
				
					$_SESSION["cart"] = array_merge($_SESSION["cart"],$cartArray);
					echo "<script>alert('Product is added to cart!');
					window.location='Seluar.php'</script>";
			}
				
		}
	
	}

?>