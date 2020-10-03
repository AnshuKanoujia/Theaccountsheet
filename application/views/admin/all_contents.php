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
            <h1 class="m-0 text-dark">All Contents</h1>
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
                <h3 class="card-title">All Contents List</h3>
				
				<h4>
                  <?php  
				    if(isset($_SESSION['message'])){
				     echo $_SESSION['message']; 
					 //session_unset();
					 session_destroy();
				  }
				   
				  ?>
				  </h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Description</th>
					<th>Banner</th>
                    <th>Status</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				      $count = 1;
				      foreach($all_content as $content){
				  ?>
                  <tr>
				    <td><?php echo $count; ?></td>
					<td><?php echo $content['title']; ?></td>
					<td><?php echo $content['sub_title']; ?></td>
					<td><?php echo $content['description']; ?></td>
					<td><img src="<?php echo base_url('uploads/'.$content["banner"]); ?>" height='100' width='100'/></td>
					<td><?php echo $content['status']; ?></td>
					<td><a href="<?php echo base_url()?>edit_content/<?php echo $content['id']; ?>" class="fa fa-edit text-success"> </a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash text-danger" href="<?php echo base_url()?>detete_content/<?php echo $content['id']; ?>"> </a></td>
                  </tr>
				  <?php
				       $count++;
				      }
				  ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>Sr.No.</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Description</th>
					<th>Banner</th>
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