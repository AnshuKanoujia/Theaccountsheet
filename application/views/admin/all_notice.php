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
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3 class="card-title">All Profile List</h3>
				
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Education</th>
                    <th>Experience</th>
                    <th>Skill</th>
                    <!--<th>Image</th> -->
                    <th>Status</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				      $count = 1;
				      if(count($all_notice)){
						foreach($all_notice as $row){	  
    					  $get_skill = $this->Admin_Model->get_by_codition('add_skill',array('uid'=>$row['id'])); 
    					  $get_education = $this->Admin_Model->get_by_codition('add_education',array('uid'=>$row['id'])); 
    					  $get_experience = $this->Admin_Model->get_by_codition('add_experience',array('uid'=>$row['id'])); 
					?>
					<tr>
				    <td><?php echo $count; ?></td>
				    <td><?php echo $row['name']; ?></td>
				    <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['mobile']; ?></td>
				    <td><?php echo $row['address']; ?></td>
				
				    <td>    
				    <?php if(count($get_education)){
				           foreach($get_education as $value){
				               echo $value['degree'].',';
				             }
				           }
				    ?>
				    </td>
				    <td>
				        <?php if(count($get_experience)){
				           foreach($get_experience as $value){
				               echo $value['designation'].',';
				             }
				           }
				    ?>
				    </td>
				    <td>
				        <?php if(count($get_skill)){
				           foreach($get_skill as $value){
				               echo $value['skill'].',';
				             }
				           }
				    ?>
				    </td>
				   <!-- <td><img src="<!?php echo base_url('uploads/'.$row['image']); ?>" height=100 width=100></td> -->
				    <td><?php echo $row['status']; ?></td>  
				    <td><a href="<?php echo base_url()?>view_profile/<?php echo $row['id'];?>" class="fa fa-edit text-success"></a> 
					&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url()?>delete_notice/<?php echo $row['id'];?>" class="fa fa-trash text-danger"></a>
				     &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>preview_profile/<?php echo $row['id'];?>" class="fa fa-eye text-info"></a>
					 &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()?>new_profile/<?php echo $row['id'];?>" class="btn btn-warning">PDF<i class="fa fa-file-pdf-o"></i></a>
				    <a href="<?php echo base_url('download_pdf');?>">pp</a>
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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Education</th>
                    <th>Experience</th>
                    <th>Skill</th>
                    <!--<th>Image</th> -->
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
  