<?php

include('include/header_css.php');
include('include/header_nav.php');
include('include/header_aside.php');

?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Video</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Video</li>
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
                <h3 class="card-title">All Video List</h3>
				
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Video</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Status</th>
					 <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				  
				      $count = 1;
				      if(count($all_video)){
						  foreach($all_video as $row){	  
					?>
					<tr>
				    <td><?php echo $count; ?></td>
				    <td><?php echo $row['title']; ?></td>
				    <td><?php echo $row['video_url_link']; ?></td>
				    <td><img src="<?php echo base_url('uploads/'.$row['add_image']); ?>" height=100 width=100></td>
				    <td><?php echo $row['status']; ?></td>  
				    <td><a href="<?php echo base_url()?>edit_video/<?php echo $row['id'];?>" class="fa fa-edit text-success"></a> &nbsp;&nbsp;&nbsp; <a href="<?php echo base_url()?>delete_video/<?php echo $row['id'];?>" class="fa fa-trash text-danger"></a></td>
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
                    <th>Video</th>
                    <th>Content</th>
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
 
 <?php include('include/footer.php'); ?>   
  