<?php
include('required/db_connection.php');
include('required/functions.php');
/*if(isset($_POST['signin']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$sql ="SELECT * FROM employee_master where email ='$username' AND password ='$password'";
	$query= mysqli_query($con, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0)
	{
		while ($row = mysqli_fetch_assoc($query)) {
		    if ($row['role'] == 'Admin') {
		    	$_SESSION['alogin']=$row['emp_id'];
		    	$_SESSION['arole']=$row['Department'];
			 	echo "<script type='text/javascript'> document.location = 'admin/admin_dashboard.php'; </script>";
		    }
		    elseif ($row['role'] == 'Staff') {
		    	$_SESSION['alogin']=$row['emp_id'];
		    	$_SESSION['arole']=$row['Department'];
			 	echo "<script type='text/javascript'> document.location = 'staff/index.php'; </script>";
		    }
		    else {
		    	$_SESSION['alogin']=$row['emp_id'];
		    	$_SESSION['arole']=$row['Department'];
			 	echo "<script type='text/javascript'> document.location = 'heads/index.php'; </script>";
		    }
		}

	} 
	else{
	  
	  echo "<script>alert('Invalid Details');</script>";

	}

}*/
 
 if(isset($_POST['signin'])){
	
	$user = $_POST['username'];
 	$pass = $_POST['password'];

 	$query = "SELECT * FROM employee_master WHERE username='".$user."'AND password='".$pass."' AND status = 1";
  	$result = db_one($query);
    print_r($result);
 	if (!empty($result)){
 		session_start();

 		$_SESSION['login_id'] = $result['id'];
 		//$name = $_SESSION['name'];
		
 		header('Location: HodDashboard.php');
 	}else{
 		header('Location: login.php');
 	}
 	
 }

?>