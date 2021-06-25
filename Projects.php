<?php
session_start();
include 'Database/conn.php';
if(!isset($_SESSION['email'])){
  header('location:Pages/Login.php');
}

?><!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Serial No.
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width:40%" >
                          Team Members
                      </th>
                      <th style="width: 8%" class="text-center" >
                          Status
                      </th>
                      <th style="width: 20%">
                         Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                 <?php
                 $sql="SELECT * FROM project";
                 $result = mysqli_query($conn, $sql);
                 $id = 0;
                 $i=0;
                 while($row = mysqli_fetch_array($result)){
                   $id = $id + 1;
                   $count=explode(",",$row['project_team']);
                   $teamcount=sizeof($count);
                  echo "
                  <tr>
                      <td>
                         ". $id ."
                      </td>
                      <td>
                        <a>
                          ".$row['project_name']."
                        </a>
                        <br/>
                        <small>
                          created on ".$row['project_added']."
                        </small>
                      </td>                     
                      <td>
                      <ul class='list-inline'><li class='list-inline-item'>"; 
                       for($i=0;$i<$teamcount;$i++)
                       {
                          echo"<img alt='Avatar' class='table-avatar' src='dist/img/avatar3.png'>";
                        } 
                          echo "</li></td>
                      <td class='project_status'>
                          <span class='badge badge-success'>".$row['project_status']."</span>
                      </td>
                      <td class='project-actions text-right'>
                          <a class='btn btn-primary btn-sm' href='http://localhost/admin-master/?edit?id=$id&project_id=$row[project_id]'>
                              <i class='fas fa-folder'>
                              </i>
                              Edit
                          </a>
                          <a class='btn btn-info btn-sm' href='http://localhost/admin-master/?details?id=$id&project_id=$row[project_id]'>
                              <i class='fas fa-pencil-alt'>
                              </i>
                              view
                          </a>
                          <a class='btn btn-danger btn-sm' href='http://localhost/admin-master/?delete?id=$id&project_id=$row[project_id]'>
                              <i class='fas fa-trash'>
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>";
                  }
                 ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
