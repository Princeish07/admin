<?php 
 include 'Database/conn.php';
 
//  $project_nameb=$_GET['project_nameb'];
//  $project_descb=$_GET['project_descb'];
//  $project_fileb=$_GET['project_fileb'];
//  $project_teamb=$_GET['project_teamb'];
//  $project_statusb=$_GET['project_statusb'];
//  $client_companyb=$_GET['client_companyb'];
//  $project_leaderb=$_GET['project_leaderb'];
 
 include 'Database/conn.php';

         if(isset($_GET['project_id'])){
             $project_id=$_GET['project_id'];
                    $sql1="SELECT * FROM project where project_id=$project_id";
                      $result1 = mysqli_query($conn,$sql1);
                      $row1= mysqli_fetch_array($result1);
                      
                     }
?> 
 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Project Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form method="POST"  enctype="multipart/form-data">
            <input type="hidden" name="project_id" id="project_id" >

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="project_name" name="project_name" value="<?php echo $row1['project_name']; ?>" class="form-control">
              </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Project Desc</label>
                    <textarea id="project_desc" name="project_desc" class="form-control"><?php echo $row1['project_desc']; ?></textarea>
                  </div>
                 <div class="form-group">
                  <label>Project Team</label>
                  <select multiple class="custom-select" name="project_team[]" value="<?php echo $row1['project_team']; ?>" id="project_team">
                    <?php
                      include 'Database/conn.php';
                      $sql="SELECT * FROM `user`";
                      $result = mysqli_query($conn, $sql);
                      while($row2 = mysqli_fetch_assoc($result))
                      {
                          echo "<option value='".$row2['user_id']."'>".$row2['username']."</option>";
                      }
                    ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="project_file[]" id="project_file" value="<?php echo $row1['project_file']; ?>" multiple>
                        <label class="custom-file-label" for="exampleInputFile"><?php echo $row1['project_file']; ?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectRounded0">Project Status</label>
                  <select class="custom-select rounded-0" name="project_status" id="project_status" >
                    <option SELECTED><?php echo $row1['project_status']; ?></option>
                    <option>Onhold</option>
                    <option>Cancelled</option>
                    <option>Success</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> Client Company</label>
                    <input type="text" name="client_company"  class="form-control" id="client_company" value="<?php echo $row1['client_company']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Project Leader</label>
                    <input type="text" name="project_leader" class="form-control" id="project_leader" value="<?php echo $row1['project_leader']; ?>">
                  </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <?php
        if(isset($_GET['project_id'])){
 $project_id=$_GET['project_id'];
        $sql="SELECT * FROM project_budget where project_id=$project_id";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result);
          
         }
         ?>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="EstimatedBudget" name="estimated_budget" class="form-control" value="<?php echo $row['estimated_budget']; ?>">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="SpentBudget" name="amount_spent" class="form-control" value="<?php echo $row['amount_spent']; ?>">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="EstimatedDuration" name="estimated_duration" class="form-control" value="<?php echo $row['estimated_duration']; ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="../index.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" name="update" value="Edit Porject" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>

