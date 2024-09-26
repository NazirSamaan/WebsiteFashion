<?php
include 'connectionDB.php';
				

			$Cname = $_POST['conName'];
			$Cemail = $_POST['conEmail'];
			$Csub = $_POST['conSub'];
			$Cmessage = $_POST['conMes'];
					
					
			$query = "INSERT INTO `contactch`(`conID`, `conName`, `conEmail`, `conSub`, `subMess`)
				VALUES (NULL , '$Cname' , '$Cemail' , '$Csub' , '$Cmessage')";
					
				if (mysqli_query($connection, $query)){
					
				echo "<script>
				alert ('Your message have been sent');
				window.location='contact.php'
					</script>";
						
					}else{
						
				echo "<script>
				alert ('Your message is fail to send');
				window.location='contact.php'
					</script>";
					
			}
		
?>