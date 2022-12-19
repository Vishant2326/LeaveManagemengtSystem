<?php
include('required/db_connection.php');
include('required/functions.php');
 
 if(isset($_POST['signin'])){

    $id = $_GET['id'];
	
 	$query = "UPDATE leave_applications SET approval_status= 1 WHERE id= $id ";
  	$result = db_one($query);
   
 	if (!empty($result)){

        session_start();

 		$_SESSION['login_id'] = $result['id'];
 				
 		header('Location: AdminDashboard.php');
 	}else{
 		echo "Not Approved";
 	}
 	
 }

?>