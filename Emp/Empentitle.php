<?php
        session_start();
        $login_id = $_SESSION['login_id'];
        
       include('required/db_connection.php');
       include('required/functions.php');
      
  
       $login_query = "SELECT * FROM employee_master WHERE id = " .$login_id ;
       $login_result = db_one($login_query);
     
     ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LTM || Emp_Entitle</title>
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
                                        <small>Member since <?php echo $login_result['Reg_date']; ?></small>
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
                        <a href="EmpDashboard.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <!-- <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>-->
                        </a>
                        <!--   <ul class="treeview-menu">
                            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul>-->
                    </li>
                    <li class="active treeview">
                        <a href="Empentitle.php">
                            <i class="fa fa-cogs"></i> <span>EmpEntitle</span>
                        </a>
                    </li>
                    <li class="active treeview">
                        <a href="Emp_myleaves.php">
                            <i class="fa fa-folder-o"></i> <span>Emp My_Leaves</span>
                        </a>
                    </li>

                    <li class="active treeview">
                        <a href="Empholiday.php">
                            <i class="fa fa-calendar-check-o"></i> <span>Emp Holiday_&_RH list</span>
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
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main tile content -->
            <section class="content">

                <!--  entitle table   -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h1 class="text-justify text-underline "><strong>
                                            <bold> Entitle</bold>
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
                                                        <th style='text-align:center;font-family:times-new-roman;'>Year
                                                        </th>



                                                        <th style='text-align:center;font-family:times-new-roman;'>CL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>DL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>EL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>RH
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>ML
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                            if(isset($_GET['from_date']))
                                                            {

                                                                
                                                                $from_date = $_GET['from_date'];
                                                                

                                                                $limit = 5000;
                                                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                $start = ($page - 1) * $limit;

                                                                $query = "SELECT * FROM leave_entitle  WHERE year = '$from_date'  LIMIT  $limit ";
                                                                $query_run = mysqli_query($con, $query);

                                                                if(mysqli_num_rows($query_run) > 0)
                                                                {
                                                                foreach($query_run as $row)
                                                                {
                                                                    ?>
                                                    <tr>
                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['year']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['CL']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['DL']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['EL']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['RH']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['ML']; ?></td>
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

                <!--  Taken table   -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h1 class="text-justify text-underline "><strong>
                                            <bold> Taken</bold>
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
                                                        <th style='text-align:center;font-family:times-new-roman;'>Year
                                                        </th>



                                                        <th style='text-align:center;font-family:times-new-roman;'>CL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>DL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>EL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>RH
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>ML
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                            if(isset($_GET['from_date']))
                                                            {

                                                                
                                                                $from_date = $_GET['from_date'];
                                                                

                                                                $limit = 5000;
                                                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                $start = ($page - 1) * $limit;

                                                                $query = "SELECT * FROM leave_entitle  WHERE year = '$from_date'  LIMIT  $limit ";
                                                                $query_run = mysqli_query($con, $query);

                                                                if(mysqli_num_rows($query_run) > 0)
                                                                {
                                                                foreach($query_run as $row)
                                                                {
                                                                    ?>
                                                    <tr>
                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['year']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['CL_t']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['DL_t']; ?></td>

                                                            <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['EL_t']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['RH_t']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['ML_t']; ?></td>
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

                <!--  Balance table   -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h1 class="text-justify text-underline "><strong>
                                            <bold> Balance</bold>
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
                                                        <th style='text-align:center;font-family:times-new-roman;'>Year
                                                        </th>



                                                        <th style='text-align:center;font-family:times-new-roman;'>CL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>DL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>EL
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>RH
                                                        </th>


                                                        <th style='text-align:center;font-family:times-new-roman;'>ML
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                            if(isset($_GET['from_date']))
                                                            {

                                                                
                                                                $from_date = $_GET['from_date'];
                                                                

                                                                $limit = 5000;
                                                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                                $start = ($page - 1) * $limit;

                                                                $query = "SELECT * FROM leave_entitle  WHERE  year = '$from_date'  LIMIT  $limit ";
                                                                $query_run = mysqli_query($con, $query);

                                                                if(mysqli_num_rows($query_run) > 0)
                                                                {
                                                                foreach($query_run as $row)
                                                                {
                                                                    ?>
                                                    <tr>
                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['year']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['CL_B']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['DL_B']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['EL_B']; ?></td>
                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['RH_B']; ?></td>

                                                        <td style='text-align:center;font-family:times-new-roman;'>
                                                            <?= $row['ML_B']; ?></td>
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
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
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