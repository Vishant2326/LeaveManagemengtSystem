<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'system_leavem';
$con=mysqli_connect($dbhost, $dbuser, $dbpass, $database);
	// Check connection
	 if(!$con )
	  {
	  echo "Failed to connect to MySQL: " . mysqli_error();
	  }
?>