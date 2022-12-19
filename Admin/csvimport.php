<?php  
 if(!empty($_FILES["employee_file"]["name"]))  
 {  
     include('required/db_connection.php');  
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["employee_file"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
                $holiday_name = mysqli_real_escape_string($connect, $row[0]);  
                $day = mysqli_real_escape_string($connect, $row[1]);  
                $date = mysqli_real_escape_string($connect, $row[2]);  
                $leave_type = mysqli_real_escape_string($connect, $row[3]);  
                $query = "INSERT INTO hoilday_master(holiday_name, day, date, leave_type) VALUES ('$holiday_name', '$day', '$date', '$leave_type')";  
                mysqli_query($connect, $query);  
           }  
           $select = "SELECT * FROM hoilday_master ORDER BY id DESC";  
           $result = mysqli_query($con, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="5%">ID</th>  
                          <th width="25%">Holiday Name</th>  
                          <th width="35%">Day</th>  
                          <th width="10%">Date</th>  
                          <th width="20%">Leave_type</th>  
                            
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["holiday_name"].'</td>  
                          <td>'.$row["day"].'</td>  
                          <td>'.$row["date"].'</td>  
                          <td>'.$row["leave_type"].'</td>  
                            
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo 'Error1';  
      }  
 }  
 else  
 {  
      echo "Error2";  
 }  
 ?>  