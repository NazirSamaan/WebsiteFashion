<?php
include 'connectionDB.php';
				

			$cofname = $_POST['COfirst'];
			$colname = $_POST['COlast'];
			$coDistrict = $_POST['COdes'];
			$coAddress = $_POST['COadd'];
			$coUnit = $_POST['COoption'];
			$coPhone = $_POST['COphone'];
			$coemail = $_POST['COemail'];
			
			$payment = $_POST['optradio'];
			
					
					
			$query = "INSERT INTO `checkout`(`coID`, `coFirstN`, `coLastN`, `district`, `coAddress`, `coUnit`, `coPhone`, `coEmail`)
						VALUES (NULL,'$cofname' , '$colname' , '$coDistrict' , '$coAddress' , '$coUnit' , '$coPhone' ,'$coemail' )";
					
				if (mysqli_query($connection, $query)){
					
					if ($payment == "PP"){
							
							echo "<script>
								alert ('Your order is almost complete!');
								window.location='Paypal.php'
							</script>";
						}else{
							echo "<script>
								alert ('Your order is almost complete!');
								window.location='debitcardPage.php'
							</script>";
						}
						
					}else{
						
				echo "<script>
				alert ('Your order is fail');
				window.location='checkout.php'
					</script>";
					
			}
		
?>