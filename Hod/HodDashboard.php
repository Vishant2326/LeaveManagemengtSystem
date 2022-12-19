<?php
      session_start();
      $login_id = $_SESSION['login_id'];
      
     include('required/db_connection.php');
     include('required/functions.php');
    

     $login_query = "SELECT * FROM employee_master WHERE id = " .$login_id ;
     $login_result = db_one($login_query);
     

     $info_query = "SELECT * 
                    FROM employee_master AS em 
                    INNER JOIN designation_master AS dem ON dem.id = em.design_id 
                    INNER JOIN department_master AS dm ON dm.id = em.dept_id 
                    INNER JOIN gender_master AS gm ON gm.id = em.gender
                    WHERE em.status = 0";
                    $info_result =db_all($info_query );


                    $remove_query = "SELECT * 
                    FROM employee_master AS em 
                    INNER JOIN designation_master AS dem ON dem.id = em.design_id 
                    INNER JOIN department_master AS dm ON dm.id = em.dept_id 
                    INNER JOIN gender_master AS gm ON gm.id = em.gender
                    WHERE 1=1 AND em.design_id >1";
                    $remove_result =db_all($remove_query );              

     $date_query ="SELECT * FROM employee_master WHERE date(Reg_date) ='".$login_result['Reg_date']."'";   
     $date_result =db_one($date_query );          
     ?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> LTM || Hod_Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="EmpDashboard.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>L</b>MS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Company</b>LMS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here
                                                that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $login_result['name']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $login_result['name']; ?>
                                        <small>Member since <?php echo $date_result['Reg_date']; ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $login_result['name']; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="HodDashboard.php">
                            <i class="fa fa-dashboard"></i> <span>Hod Dashboard</span>
                        </a>
                    </li>
                    <li class="active treeview">
                        <a href="Hodentitle.php">
                            <i class="fa fa-cogs"></i> <span>Hod_Entitle</span>
                        </a>
                    </li>
                    <li class="active treeview">
                        <a href="Hod_my_leaves.php">
                            <i class="fa fa-folder-o"></i> <span>Hod_MyLeaves</span>
                        </a>
                    </li>

                    <li class="active treeview">
                        <a href="Hodholiday.php">
                            <i class="fa fa-calendar-check-o"></i> <span>Hod_Holiday & RH list</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="AdminDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Employee name display-->
            <div class="main-container">
                <div class="pd-ltr-20">
                    <div class="card-box pd-20 height-100-p mb-30">
                        <div class="row align-items-center">
                            <div class="col-md-4 user-icon">
                                <img src="vendors/images/banner-img.png" alt="">
                            </div>
                            <div class="col-md-8">


                                <h4 class="font-20 weight-500 mb-10 text-capitalize"><strong>
                                        <bold>
                                            <?php echo "<h3><bold>Welcome back<br></bold></h3><h1><strong>".$login_result['name']; ?>
                                        </bold>
                                    </strong>
                                </h4>
                                <h3 class="font-18 max-width-600">Welcome to Admin Dashboard</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main tile content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <!--  ADD & REMOVE small box -->
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>ADD & REMOVE</h3>
                                <p>EMPLOYEES</p>
                                <h5>Total Employess :- <bold><?php
                                    $query = "SELECT COUNT(emp_id) AS em_count 
                                              FROM employee_master
                                              WHERE status=1"; 
                                    $query_run=db_one($query);
                                    echo $query_run['em_count'] ;
                                ?></bold>
                                </h5>
                            </div>
                            <div class="icon">
                                <i class=" ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal">Add &
                                Remove <i class="fa fa-arrow-circle-right"></i></a>

                        </div>
                    </div>



                    <!-- leave status small box -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>Leave</h3>
                                <p>Status</p>
                                <br>
                            </div>
                            <div class="icon">
                                <i class=" fa  fa-plane"></i>
                            </div>
                            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#leaveModal">More
                                info<i class="fa fa-arrow-circle-right"></i></a>

                        </div>
                    </div>


                </diV>





                <!--Latest leave Application-->
                <section class="content">

                    <!--  myleaves table   -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h1 class="text-justify text-underline "><strong>
                                                <bold> LATEST LEAVE APPLICATIONS</bold>
                                            </strong></h1>


                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <form action="" method="GET">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>From Date</label>
                                                        <input type="date" name="from_date"
                                                            value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>To Date</label>
                                                        <input type="date" name="to_date"
                                                            value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Click to Filter</label> <br>
                                                        <button type="submit" class="btn btn-primary">Filter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="card mt-4">
                                            <div class="card-body">
                                                <table class="table table-borderd">
                                                    <thead>
                                                        <tr>

                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Emp_id
                                                            </th>


                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Leave
                                                                Type
                                                            </th>


                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Form Date
                                                            </th>

                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                TO Date
                                                            </th>

                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Days
                                                            </th>

                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Alternate
                                                            </th>


                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Emp
                                                                Status
                                                            </th>
                                                            <th style='text-align:center;font-family:times-new-roman;'>
                                                                Document
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                        if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                        {

                                            
                                            $from_date = $_GET['from_date'];
                                            $to_date = $_GET['to_date'];

                                            $limit =50;
                                            $query = "SELECT *
                                                      FROM leave_applications AS la 
                                                      INNER JOIN meta_leave_types AS mlt ON mlt.id = la.type_of_leave
                                                      INNER JOIN meta_aproval_status AS mas ON mas.id = la.approval_status
                                                      WHERE la.design_id >1  LIMIT $limit";
                                            $query_run = mysqli_query($con, $query);

                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                        <tr>
                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['emp_id']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['leave_name']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['from_date']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['to_date']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['days']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['alt']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['approval_status_name']; ?>
                                                            </td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                                <?= $row['reason']; ?></td>
                                                        </tr>
                                                        <?php
                                                                        }
                                                                            }
                                                                                else
                                                                                    {
                                                                                        echo "No Record Found";
                                                                                    }
                                                                            }

                                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>

                </section>
            </section>
        </div>
        <!--Footer-->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.5
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All
            rights
            reserved.
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>


    <!-- Add & Remove Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel"> </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex justify-content-center mt-5">
                        <div class="col-md-6 border shadow">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item"><a href="#add" class="nav-link active" data-toggle="pill">Add
                                        Employee</a></li>
                                <li class="nav-item"><a href="#remove" class="nav-link" data-toggle="pill">Remove
                                        Employee</a></li>

                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade px-5 my-4" id="add">
                                    <h3 class="text-center">Add Details</h3>
                                    <form action="ADD_authenticate.php" method="post" class="w-75 mx-auto">
                                        <div class="col-md-12 my-4">
                                            <label class="form-label">Emp_ID</label>
                                            <input type="text" class="form-control form-control-lg "
                                                placeholder="Emp_ID" name="emp_id" id="emp_id" required>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control form-control-lg" placeholder="Name"
                                                required name="name" id="name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Username" required name="username" id="username">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">password</label>
                                            <input type="password" class="form-control form-control-lg" required
                                                placeholder="password" name="password" id="password">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Email ID</label>
                                            <input type="email" class="form-control form-control-lg" required
                                                placeholder="Email ID" name="email" id="email">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Contact No.</label>
                                            <input type="text" class="form-control form-control-lg" required
                                                placeholder="Contact No." name="contact" id="contact">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Gender</label>
                                            <Select class="form-control form-control-lg" name="gender" id="gender "
                                                required placeholder="Gender">
                                                <option value="0">Choose a Gender
                                                <option>
                                                <option value="1">Male
                                                <option>
                                                <option value="2">Female
                                                <option>

                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Designation</label>
                                            <Select class="form-control form-control-lg" name="designation" required
                                                id="Designation">

                                                <option value="0">Choose a Designation
                                                <option>
                                                <option value="1">Admin
                                                <option value="2">Principal
                                                <option>
                                                    <optgroup label="Dean">
                                                        <option value="4">Administrator
                                                        <option>

                                                        <option value="5">Infrastructure
                                                        <option>
                                                        <option value="6">Research and Development
                                                        <option>
                                                    </optgroup>
                                                    <optgroup label="Hod">
                                                        <option value="7">Computer Science Department
                                                        <option>
                                                        <option value="8">Information Science Department
                                                        <option>
                                                        <option value="9">Electrical Department
                                                        <option>
                                                        <option value="10">Electrical Department
                                                        <option>
                                                        <option value="11">Mechanical Department
                                                        <option>
                                                        <option value="12">Civil Department
                                                        <option>
                                                        <option value="13">Aeronautical Department
                                                        <option>
                                                    </optgroup>
                                                    <optgroup label="Teaching Staff">
                                                        <option value="14">Professor
                                                        <option>
                                                        <option value="15">Assistant Professor
                                                        <option>
                                                        <option value="16">Associate Professor
                                                        <option>
                                                    </optgroup>
                                                    <optgroup label="Non Teaching Staff">
                                                        <option value="17">Lab Instructor
                                                        <option>
                                                        <option value="18">Clerk
                                                        <option>
                                                        <option value="19">Placement Officer
                                                        <option>
                                                        <option value="20">Librarian
                                                        <option>

                                                    </optgroup>
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Department</label>
                                            <Select class="form-control form-control-lg" required name="department"
                                                id="department">
                                                <option value="0">Choose a Department
                                                <option>
                                                <option value="1">Computer Science
                                                <option>

                                                <option value="2">Information Science
                                                <option>

                                                <option value="3">Electrical
                                                <option>
                                                <option value="4">Electrical and Electronics
                                                <option>
                                                <option value="5">Mechanical
                                                <option>
                                                <option value="6">Civil
                                                <option>
                                                <option value="7">Aeronautical
                                                <option>
                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Today's Date</label>
                                            <input type="date" class="form-control form-control-lg" placeholder="Date"
                                                required name="date" id="date">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Status</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="1=Existing 0=Ex_Emp -1=UN_Register" required name="status"
                                                id="status">
                                        </div>



                                        <div class="col-md-12">
                                            <label class="form-label">Role</label>
                                            <textarea name="Role" class="form-control form-control-lg" required
                                                placeholder="Role" id="Role"></textarea>
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-sm form-control my-3"
                                                name="sign" id="sign" type="submit" value="Add">Add
                                            </button>

                                        </div>

                                    </form>

                                </div>


                                <div class="tab-pane" id="remove">
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input class="form-control mr-sm-0" type="search" placeholder="Search"
                                            id="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-0 my-sm-0"
                                            type="submit">Search</button>
                                    </form>

                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover" id="table">
                                            <thead>
                                                <tr>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_id
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

                                                    <th style='text-align:left;font-family:times-new-roman;'>
                                                        ACTION
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $remove_str = "";
                                                        $j=1;
                                                            foreach( $remove_result AS $remove_row){

                                                                $remove_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['emp_id']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['design_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['dept_name']."</td>
                                                                <td><button class='btn btn-danger' id='delete'><i class='fa fa-trash fa-2x'></i></button></td>
                                                                </td>
                                                            </tr>";
                                                        }
                                                    echo $remove_str;
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>

                                </div>



                            </div>


                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>



    <!--Designation change modal-->
    <div class="modal fade" id="desginationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel"></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex justify-content-center mt-5">
                        <div class="col-md-6 border shadow">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item"><a href="#desgin" class="nav-link active"
                                        data-toggle="pill">Designation Change</a></li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane" id="desgin">
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input class="form-control mr-sm-0" type="search" placeholder="Search"
                                            id="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-0 my-sm-0"
                                            type="submit">Search</button>
                                    </form>


                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover" id="desgintable">
                                            <thead>
                                                <tr>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_id
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_name
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Designation
                                                    </th>


                                                    <th style='text-align:left;font-family:times-new-roman;'>
                                                        ACTION
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $remove_str = "";
                                                        $j=1;
                                                            foreach( $remove_result AS $remove_row){

                                                                $remove_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['emp_id']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['design_name']."</td>
                                                                
                                                                <td><button class='btn btn-success' id='delete'><i class='fa fa-random fa-2x'></i></button></td>
                                                                </td>
                                                            </tr>";
                                                        }
                                                    echo $remove_str;
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


    <!--Department change modal-->
    <div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel"></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex justify-content-center mt-5">
                        <div class="col-md-6 border shadow">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item"><a href="#desgin" class="nav-link active"
                                        data-toggle="pill">Department Change</a></li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane" id="desgin">
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input class="form-control mr-sm-0" type="search" placeholder="Search"
                                            id="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-0 my-sm-0"
                                            type="submit">Search</button>
                                    </form>


                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover" id="desgintable">
                                            <thead>
                                                <tr>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_id
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_name
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Department
                                                    </th>


                                                    <th style='text-align:left;font-family:times-new-roman;'>
                                                        ACTION
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $remove_str = "";
                                                        $j=1;
                                                            foreach( $remove_result AS $remove_row){

                                                                $remove_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['emp_id']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$remove_row['dept_name']."</td>
                                                                
                                                                <td><button class='btn btn-success' id='delete'><i class='fa fa-random fa-2x'></i></button></td>
                                                                </td>
                                                            </tr>";
                                                        }
                                                    echo $remove_str;
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>



    <!--Leave modal-->
    <div class="modal fade" id="leaveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel"> </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex justify-content-center mt-5">
                        <div class="col-md-6 border shadow">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item"><a href="#approve" class="nav-link active"
                                        data-toggle="pill">Approved </a></li>
                                <li class="nav-item"><a href="#pending" class="nav-link" data-toggle="pill">Pending</a>
                                </li>
                                <li class="nav-item"><a href="#rejected" class="nav-link"
                                        data-toggle="pill">Rejected</a></li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade px-5 my-4" id="approve">
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input class="form-control mr-sm-0" type="search" placeholder="Search"
                                            id="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-0 my-sm-0"
                                            type="submit">Search</button>
                                    </form>


                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover" id="approvetable">
                                            <thead>
                                                <tr>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_id
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Designation
                                                    </th>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Department
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Form_Date
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        To_Date
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Type_of_leave
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Days
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Alternate_Person
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Reason
                                                    </th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $approve_query = "SELECT * 
                                                                        FROM leave_applications AS la 
                                                                        INNER JOIN designation_master AS dem ON dem.id = la.design_id 
                                                                        INNER JOIN department_master AS dm ON dm.id = la.dept_id 
                                                                        INNER JOIN meta_leave_types AS mlt ON mlt.id = la.type_of_leave
                                                                        INNER JOIN meta_aproval_status AS mas ON mas.id = la.approval_status 
                                                                        WHERE la.approval_status = 1 ";
                                                         $approve_result =db_all($approve_query );

                                                        $approve_str = "";
                                                        $j=1;
                                                            foreach( $approve_result AS $approve_row){

                                                                $approve_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['emp_id']."</td>

                                                                 <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['design_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['dept_name']."</td>
                                                                
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['from_date']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['to_date']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['leave_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['days']."</td>
                                                                
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['alt']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$approve_row['reason']."</td>

                                                               
                                                            </tr>";
                                                        }
                                                    echo $approve_str;
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>


                                </div>


                                <div class="tab-pane" id="pending">
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input class="form-control mr-sm-0" type="search" placeholder="Search"
                                            id="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-0 my-sm-0"
                                            type="submit">Search</button>
                                    </form>

                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover" id="approvetable">
                                            <thead>
                                                <tr>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_id
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Designation
                                                    </th>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Department
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Form_Date
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        To_Date
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Type_of_leave
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Days
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Alternate_Person
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Reason
                                                    </th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $pending_query = "SELECT * 
                                                                        FROM leave_applications AS la 
                                                                        INNER JOIN designation_master AS dem ON dem.id = la.design_id 
                                                                        INNER JOIN department_master AS dm ON dm.id = la.dept_id 
                                                                        INNER JOIN meta_leave_types AS mlt ON mlt.id = la.type_of_leave
                                                                        INNER JOIN meta_aproval_status AS mas ON mas.id = la.approval_status 
                                                                        WHERE la.approval_status = 2 ";
                                                         $pending_result =db_all($pending_query );

                                                        $pending_str = "";
                                                        
                                                            foreach( $pending_result AS $pending_row){
                                                               
                                                                $pending_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['emp_id']."</td>

                                                                 <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['design_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['dept_name']."</td>
                                                                
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['from_date']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['to_date']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['leave_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['days']."</td>
                                                                
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['alt']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$pending_row['reason']."</td>

                                                               
                                                            </tr>";
                                                        }
                                                    echo $pending_str;
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                                <div class="tab-pane" id="rejected">
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <form class="form-inline my-2 my-lg-0">

                                        <input class="form-control mr-sm-0" type="search" placeholder="Search"
                                            id="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-0 my-sm-0"
                                            type="submit">Search</button>
                                    </form>

                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover" id="table">
                                            <thead>
                                                <tr>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Emp_id
                                                    </th>


                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Designation
                                                    </th>

                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Department
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Form_Date
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        To_Date
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Type_of_leave
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Days
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Alternate_Person
                                                    </th>
                                                    <th style='text-align:center;font-family:times-new-roman;'>
                                                        Reason
                                                    </th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $rejected_query = "SELECT * 
                                                                        FROM leave_applications AS la 
                                                                        INNER JOIN designation_master AS dem ON dem.id = la.design_id 
                                                                        INNER JOIN department_master AS dm ON dm.id = la.dept_id 
                                                                        INNER JOIN meta_leave_types AS mlt ON mlt.id = la.type_of_leave
                                                                        INNER JOIN meta_aproval_status AS mas ON mas.id = la.approval_status 
                                                                        WHERE la.approval_status = 3 ";
                                                         $rejected_result =db_all($rejected_query );

                                                        $rejected_str = "";
                                                        $j=1;
                                                            foreach( $rejected_result AS $rejected_row){

                                                                $rejected_str .="<tr>
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['emp_id']."</td>

                                                                 <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['design_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['dept_name']."</td>
                                                                
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['from_date']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['to_date']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['leave_name']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['days']."</td>
                                                                
                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['alt']."</td>

                                                                <td style='text-align:center;font-family:times-new-roman;'>".$rejected_row['reason']."</td>

                                                               
                                                            </tr>";
                                                        }
                                                    echo $rejected_str;
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>




</body>

</html>