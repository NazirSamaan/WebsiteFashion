<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
	$database = "Fashiondb";
    
    $connection  = mysqli_connect($host, $user, $password) 
      or die ("Couldn't connect to database");  
    
	
	mysqli_select_db($connection, $database)
		or die(mysqli_error($connection));
?>