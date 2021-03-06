<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="index2.html"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        <form  method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="retype" id="retype" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <a href="Login.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>
<?php
  include '../Database/conn.php';
  if(count($_POST)!=0)
  {
    extract($_POST);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $retype=mysqli_real_escape_string($conn,$_POST['retype']);
    $sql2= "SELECT * FROM user where email='$email'";
    $pass=md5($password);
    $retype1=md5($retype);
    $result2=mysqli_query($conn,$sql2);
    $emailcount=0;
    $emailcount=mysqli_num_rows($result2);
    if($emailcount>0)
    {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Already Registered!</strong>Your User name is ' . $email.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">??</span>
      </button>
      </div>';
    }
    else
    {
      if($pass==$retype1)
      {
        $q="INSERT INTO `user` (`username`, `password`, `email`) VALUES ( '$username', '$pass', '$email')";
        $result1=mysqli_query($conn,$q);
        if($result1)
        {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>successfullly Registered!</strong>Your User name is ' . $email.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">??</span>
                </button>
              </div>';       
        }
        else 
        {
          echo"error". mysqli_error($conn);
        }            
      }
      else
      { 
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Password not matching!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">??</span>
                </button>
              </div>';   
      }
    }
  }
?>