<?php
if(isset($_POST['sign'])){


include("required/db_connection.php");
include("required/functions.php");
 

$emp_id=$_POST['emp_id'];
$emp_name=$_POST['name'];
$email1=$_POST['email'];
$phone1=$_POST['contact'];
$gender1=$_POST['gender'];
$Role1=$_POST['Role'];
$Designation1=$_POST['designation'];
$Department1=$_POST['department'];
$username1=$_POST['username'];
$password1=$_POST['password'];
$date1=$_POST['date'];
$status1=$_POST['status'];


$sql = "INSERT INTO employee_master(emp_id,name,design_id,email,contact,gender,role,dept_id,username,password,Reg_date,status)
   VALUES('$emp_id','$emp_name','$Designation1','$email1','$phone1','$gender1','$Role1','$Department1','$username1','$password1','$date1','$status1')";

$result = mysqli_query($con, $sql);  

if($result!=NULL) {
        
    echo "New record created successfully";
    header('Location: AdminDashboard.php');
 //echo $result['personname']."".$result['department']."".$result['fromdate']."".$result['todate']."".$result['leavedays']."".$result['details'];
}
   else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  mysqli_close($con);

}
?>