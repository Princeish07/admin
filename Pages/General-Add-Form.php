<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Add</li>
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
            <form method='POST' enctype="multipart/form-data">
            <input type="hidden" name="project_id">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="project_name" name="project_name" placeholder="project_name" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Project Desc</label>
                <textarea id="project_desc" name="project_desc" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Project Team</label>
                <select multiple class="custom-select" name="project_team[]" id="project_team">
                 <?php
                   include '../Database/conn.php';
                   $sql="SELECT * FROM `user`";
                   $result = mysqli_query($conn, $sql);
                   while($row = mysqli_fetch_assoc($result)){
                   echo "<option value='".$row['user_id']."'>".$row['username']."</option>";}
                 ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="project_file[]" id="project_file" multiple>
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
                <div class="form-group">
                 <label for="exampleSelectRounded0">Project Status</label>
                 <select class="custom-select rounded-0" id="project_status" name="project_status">
                   <option selected disabled>Select one</option>
                   <option>Onhold</option>
                   <option>Cancelled</option>
                   <option>Success</option>
                 </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> Client Company</label>
                    <input type="text" name="client_company" class="form-control" id="client_company" placeholder="project_client_company">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Project Leader</label>
                    <input type="text" name="project_leader" class="form-control" id="project_leader" placeholder="project_leader">
                  </div>
                </div>
                <!-- /.card-body -->
             </div>
             <!-- /.card -->
           </div>
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
                   <input type="number" id="estimated_budget" name="estimated_budget" placeholder="estimated_budget" class="form-control">
                 </div>
                 <div class="form-group">
                   <label for="inputSpentBudget">Total amount spent</label>
                   <input type="number" id="amount_spent" name="amount_spent" placeholder="amount_spent" class="form-control">
                 </div>
                 <div class="form-group">
                   <label for="inputEstimatedDuration">Estimated project duration</label>
                   <input type="number" id="estimated_duration" name="estimated_duration" placeholder="estimated_duration" class="form-control">
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
           </div>
         </div>
         <div class="row">
           <div class="col-12">
             <a href="#" class="btn btn-secondary">Cancel</a>
             <input type="submit" name="submit" value="Create new Porject" class="btn btn-success float-right">
           </div>
         </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
