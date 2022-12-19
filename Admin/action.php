<?php
  include('required/db_connection.php');
  include('required/functions.php');

  if(isset($_POST['query'])){
    $search =$_PosT['query'];
    $stmt=$con->prepare("SELECT * FROM employee_master WHERE emp_id LIKE CONCAT('%',?,'%') OR name LIKE CONCAT('%',?,'%')");
    $stmt->bind_param("ss",$search,$search);  
}
else{
    $stmt = $con->prepare("SELECT * FROM employee_master");
}

$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows>0){
    $output = " <thead>
    <tr>

        <th style='text-align:center;font-family:times-new-roman;'>Emp_id
        </th>


        <th style='text-align:center;font-family:times-new-roman;'>
            Emp_name
        </th>


        <th style='text-align:center;font-family:times-new-roman;'>
            Designation
        </th>

        <th style='text-align:center;font-family:times-new-roman;'>
            Department
        </th>

        <th style='text-align:center;font-family:times-new-roman;'>
            Registeration Date
        </th>

        <th style='text-align:center;font-family:times-new-roman;'>
            Status
        </th>


        <th style='text-align:left;font-family:times-new-roman;'>ACTION
        </th>

    </tr>
</thead>
<tbody>";
while($row=$result->fetch_assoc()){
    $output .="
    <td style='text-align:center;font-family:times-new-roman;'>".$leave_row['emp_id']."</td>

    <td style='text-align:center;font-family:times-new-roman;'>".$leave_row['name']."</td>

    <td style='text-align:center;font-family:times-new-roman;'>".$leave_row['design_name']."</td>

    <td style='text-align:center;font-family:times-new-roman;'>".$leave_row['dept_name']."</td>

    <td style='text-align:center;font-family:times-new-roman;'>".$leave_row['Reg_date']."</td>
    
    <td style='text-align:center;font-family:times-new-roman;'>".$leave_row['status']."</td>";
}
$output .="</tbody>";
echo $output;
}
else{
    echo"<h3>No Records Found!</h3>";
}

?>