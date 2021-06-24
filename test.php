 <!-- Content Wrapper. Contains page content -->
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
              <?php
                 $sql="SELECT * FROM project";
                 $result = mysqli_query($conn, $sql);
                 $id = 0;
                 while($row = mysqli_fetch_array($result)){
                   $id = $id + 1;
                  
                   $count=explode(",",$row['project_team']);
                   $teamcount=sizeof($count);
                   echo "$teamcount\n";
                  ?>
                  <tr>
                      <th style="width: 1%">
                          Serial No.
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width: 30%">
                          Team Members
                      </th>
                      <th style="width: 8%" >
                          Status
                      </th>
                      <th style="width: 20%">
                         Action
                      </th>
                  </tr>
              </thead>
              <tbody>

                  <tr>
                      <td>
                         <?php echo $id; ?>
                      </td>
                      <td>
                        <a>
                           <?php echo $row['project_name']; ?>
                        </a>
                        <br/>
                        <small>
                           created on <?php echo $row['project_added']; ?>
                        </small>
                      </td>
                      <?php
                      for($i=0;$i<$teamcount;$i++){ ?> 
                      <td>
                           <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="dist/img/avatar3.png">
                              </li>
                          </ul>
                      </td> <?php } ?>
                      <td class="project_status">
                          <span class="badge badge-success"><?php echo $row['project_status']; ?></span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="http://localhost/ADMIN%20PANEL%20-%20Copy/?edit?project_id=<? php echo $row['project_id']; ?>&project_nameb=<? php echo $row['project_']; ?>&project_descb=<? php echo $row['project_desc']; ?>&project_fileb=<? php echo $row['project_fileb']; ?>&project_teamb=<? php echo $row['project_team']; ?>&project_statusb=<? php echo $row['project_status']; ?>&client_companyb=<? php echo $row['client_company']; ?>&project_leaderb=<? php echo $row['project_leader']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-info btn-sm" href="http://localhost/ADMIN%20PANEL%20-%20Copy%20-%20Copy/?project_details?project_id=$row[project_id]&project_nameb=$row[project_name]&project_descb=$row[project_desc]&project_fileb=$row[project_file]&project_teamb=$row[project_team]&project_statusb=$row[project_status]&client_companyb=$row[client_company]&project_leaderb=$row[project_leader]">
                              <i class="fas fa-pencil-alt">
                              </i>
                              view
                          </a>
                          <a class="btn btn-danger btn-sm" href="http://localhost/ADMIN%20PANEL%20-%20Copy%20-%20Copy/?delete?project_id=$row[project_id]">
                              <i class="fas fa-trash">
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
