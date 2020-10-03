
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
                <h3 class="card-title">All Social Media Icons</h3>
				
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Title</th>
                    <th>Social Link</th>
                    <th>Logo</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				      $count = 1;
				      if(count($all_icon)){
						  foreach($all_icon as $row){	  
					?>
					<tr>
				    <td><?php echo $count; ?></td>
				    <td><?php echo $row['title']; ?></td>
				    <td><?php echo $row['url']; ?></td>
				    <td> <img src="<?php echo base_url('uploads/'.$row["logo"]); ?>" height='100' width='100'/></td>
				    <td><a href="<?php echo base_url()?>edit_social/<?php echo $row['id']; ?>" class="fa fa-edit text-success"> </a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash text-danger" href="<?php echo base_url()?>detete_social/<?php echo $row['id']; ?>"> </a></td>
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
                    <th>Title</th>
                    <th>Social Link</th>
                    <th>Logo</th>
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
 

  	
<!--<div class="container">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>
	 <!-- The Modal --
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header --
        <div class="modal-body" style="padding-top:40px; padding-bottom:40px;">
		
		<div class="row">
		
		<div class="col-sm-4">
		   <a href="<?php echo base_url('portfolio'); ?>" class="btn btn-info btn-block">Portfolio</a> 
		</div>
		
		<div class="col-sm-4">
		   <a href="<?php echo base_url('add_resume'); ?>" class="btn btn-info btn-block">Resume</a> 
        </div>
		
		<div class="col-sm-4">
		   <!--a href="<!?php echo base_url('profile'); ?>" class="btn btn-info btn-block">Profile</a--
		   <a href="<?php echo base_url('profile_register'); ?>" class="btn btn-info btn-block">Profile</a> 
		</div>
		
		</div>
		
  </div>
        
        
      </div>
    </div>
  </div>
</div>  -->

<script>
      $(function () {
		  $('#myModal').modal('show');
      });
    </script>