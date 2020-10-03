<?php

include('include/header_css.php');
include('include/header_nav.php');
include('include/header_aside.php');

?> 

 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Contents </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Contents </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
		  <form action="<?php echo base_url('add_content');?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  <h4>
                  <?php  
				    if(isset($_SESSION['msg'])){
				     echo $_SESSION['msg']; 
					 //session_unset();
					 session_destroy();
				  }
				  ?>
				  </h4>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Select Menu</label>
                    <select class="form-control" name="menu_id" required>
					<option> -- Select Menu --</option>
					<?php
					   if(count($all_menu)){
					   foreach($all_menu as $menu){
					?>
					<option value="<?php echo $menu['id']; ?>"> <?php echo $menu['title']; ?></option>
					
					   <?php 
					     }
					    }
					   ?>
					
					</select>
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Subtitle</label>
                    <input type="text" name="sub_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Subtitle">
                  </div>
				  
				
				  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				  
                </div>
				  
                </div>
                <!-- /.form-group -->
              </div>
              
			  <div class="col-md-6">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Description  </label>
                 
					<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"></textarea>
                  </div>
				  
				  <label for="exampleInputFile">Banner</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="banners" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
          
                    </div>
				  
				  
                </div>
              </div>
            </div>
          </div>
		 </form>
		  
        </div>
        
      </div>
    </section>
    
  </div>

 <?php include('include/footer.php'); ?>   
  