 <?php 
 include 'Database/conn.php';
    $href= "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/admin-master/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/admin-master?contacts" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">
      <a class="nav-link" href="http://localhost/admin-master?logout">Logout</a>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/Plogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Prince.com</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/hrms1.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Prince Sharma</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="http://localhost/admin-master?projects" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/admin-master?add" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/admin-master?edit" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/admin-master?details" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/admin-master?contacts" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Extras
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Login & Register v1
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="Pages/Login.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login v1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="Pages/Register.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register v1</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
         </ul>
       </nav>
     </div>
  </aside>
   <!-- Content Wrapper. Contains page content -->
  <?php
  include 'Database/conn.php';
  if(strpos($href, 'add') !== false)
  {
    include 'Pages/General-Add-Form.php'; 
    if(isset($_POST["submit"]))
    {  
      extract($_POST); 
      extract($_FILES);
      $project_team=$_POST['project_team'];
      $files=$_FILES['project_file'];
      $filename=$files['name'];
      $fileerror=$files['error'];
      $filetmp=$files['tmp_name'];
      $count=0;
      foreach($filename as $key=>$val){
        $destinationfile='Files/image/'.$val;
        $count++;
        move_uploaded_file($_FILES['project_file']['tmp_name'][$key],$destinationfile);
      }
  
      $project_team1=implode(',',$project_team);
      $sql="INSERT INTO `admin`.`project` (
      `project_name` ,
      `project_desc` ,
      `project_team` ,
      `project_file` ,
      `project_status` ,
      `client_company` ,
      `project_leader` ,
      `project_added`
      )
      VALUES (
      '$project_name', 
      '$project_desc', 
      '$project_team1', 
      '$destinationfile,$count', 
      '$project_status', 
      '$client_company', 
      '$project_leader',
      CURRENT_TIMESTAMP)";
      
      $result = mysqli_query($conn,$sql);
      
      if($result)
      {
        $sql1="INSERT INTO `admin`.`project_budget` (
        `estimated_budget` ,
        `amount_spent` ,
        `estimated_duration`
        )
        VALUES (
        '$estimated_budget', 
        '$amount_spent', 
        '$estimated_duration'
        )";
        $result1= mysqli_query($conn,$sql1); 
        echo '<div class="row">
        <div class="form-group"><div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>successfullly Registered!</strong> your proj name is ' . $project_name.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button></div></div></div>'; 
      }                 
    }
  }             
  elseif(strpos($href, 'edit') !== false)
  {
    include 'Database/conn.php';
    include 'Pages/General-Edit-Form.php';
    error_reporting(0);
    $project_id=$_GET['project_id'];
    $project_name1=$_POST['project_name'];
    $project_desc=$_POST['project_desc'];
    $project_file=$_FILES['project_file'];
    $project_status=$_POST['project_status'];
    $client_company=$_POST['client_company'];
    $project_leader=$_POST['project_leader'];
    $project_team=$_POST['project_team'];
    //    file Updation
    $files=$_FILES['project_file'];
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
    $count=0;
    foreach($filename as $key=>$val){
      $destinationfile='Files/image/'.$val;
      $count++;
      move_uploaded_file($_FILES['project_file']['tmp_name'][$key],$destinationfile);
    }
    //The implode() function returns a string from elements of an array
    $project_team1=implode(',',$project_team);
    //Edit project 
    $query="UPDATE `project` SET
    project_name = '$project_name1',
    project_desc = '$project_desc',
    project_team = '$project_team1',
    project_file = '$destinationfile',
    project_status = '$project_status',
    client_company = '$client_company',
    project_leader = '$project_leader' WHERE project_id ='$project_id'";
    $result2 = mysqli_query($conn,$query);
    //Edit project_budget
    $project_id=$_GET['project_id'];
    $estimated_duration=$_POST['estimated_duration'];
    $estimated_budget=$_POST['estimated_budget'];
    $amount_spent=$_POST['amount_spent'];
    $sql1="UPDATE `project_budget` SET
    estimated_budget = '$estimated_budget',
    amount_spent= '$amount_spent',
    estimated_duration = '$estimated_duration' WHERE project_id ='$project_id'";
    $result3=mysqli_query($conn,$sql1);

  }
  
  elseif(strpos($href, 'projects') !== false)
  {
    include 'Database/conn.php';
    include 'Projects.php'; 
   }  
  elseif(strpos($href, 'delete') !== false)
  {
    include 'Pages/General-Delete-Form.php'; 
  }      
  elseif(strpos($href, 'details') !== false) 
  {       
    include 'Pages/Project-Details.php'; 
   }     
  elseif(strpos($href, 'contacts') !== false)
  {
    include 'Pages/Contacts.php'; 
   }    
  elseif(strpos($href, 'logout') !== false)
  {
    include 'Pages/Logout.php'; 
  }       
  else if($href=='http://localhost/admin-master/') 
  {
    include 'Pages/Dashboard.php'; 
  }
  ?>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>