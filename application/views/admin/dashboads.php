
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
		
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Resume List</h3>
				
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Summary</th>
                    <th>Exprience</th>
                    <th>Education</th>
                    <th>Skills</th>
                    <th>Hobbies</th>
                    <th>Gender</th>
                    <th>Languages</th>
                    <th>Image</th>
                    <th>Status</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				    //print_r($all_job);
				      $count = 1;
				      if(count($all_job)){
						  foreach($all_job as $row){	  
					?>
					<tr>
				    <td><?php echo $count; ?></td>
				    <td><?php echo $row['full_name']; ?></td>
				    <td><?php echo $row['phone']; ?></td>
				    <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['dob']; ?></td>
				    <td><?php echo $row['message']; ?></td>
				    <td><?php echo $row['designation']; ?></td>
				    <td><?php echo $row['summary']; ?></td>
				    <td><?php echo $row['exprience']; ?></td>
				    <td><?php echo $row['education']; ?></td>
				    <td><?php echo $row['skills']; ?></td>
				    <td><?php echo $row['hobbies']; ?></td>
				    <td><?php echo $row['gender']; ?></td>
				    <td><?php echo $row['languages']; ?></td>
				    <td> <img src="<?php echo base_url('uploads/'.$row["image"]); ?>" height='100' width='100'/></td>
				    <td><?php echo $row['status']; ?></td>  
				    <td><a href="<?php echo base_url()?>edit_job/<?php echo $row['id']; ?>" class="fa fa-edit text-success"> </a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash text-danger" href="<?php echo base_url()?>detete_job/<?php echo $row['id']; ?>"> </a>
                    &nbsp;&nbsp;&nbsp;<a class="fa fa-eye text-info" href="<?php echo base_url()?>preview_resume/<?php echo $row['id']; ?>"> </a>
                    </td>
                    </tr>
                    <?php	
                         $count++;					
						}
					  }
				     ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Summary</th>
                    <th>Exprience</th>
                    <th>Education</th>
                    <th>Skills</th>
                    <th>Hobbies</th>
                    <th>Gender</th>
                    <th>Languages</th>
                    <th>Image</th>
                    <th>Status</th>
					<th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div> 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
 
 
 

