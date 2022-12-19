<?php
include('required/db_connection.php');
include('required/functions.php');
if(isset($_POST['signin']))
{
	$user = $_POST['username'];
 	$pass = $_POST['password'];

	$query ="SELECT * FROM employee_master WHERE username='".$user."'AND password='".$pass."' AND status = 1";
	$result = db_one($query);
	if($result > 0)
	{
		while ($row = mysqli_fetch_assoc($query)) {
		    if ($row['role'] == 'Admin') {
		    	session_start();
 		        $_SESSION['login_id'] = $result['id'];
			 	echo "<script type='text/javascript'> document.location = 'Admin/AdminDashboard.php'; </script>";
		    }
		    elseif ($row['role'] == 'Principal') {
		    	session_start();
 		        $_SESSION['login_id'] = $result['id'];
			 	echo "<script type='text/javascript'> document.location = 'Hod/HodDashboard.php'; </script>";
		    }
		    else {
		    	session_start();
 		        $_SESSION['login_id'] = $result['id'];
			 	echo "<script type='text/javascript'> document.location = 'Emp/EmpDashboard.php'; </script>";
		    }
		}

	} 
	else{
	  
	  echo "<script>alert('Invalid Details');</script>";

	}

}


?>