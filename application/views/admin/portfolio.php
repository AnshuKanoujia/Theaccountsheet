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
            <h1>Add Portfolio </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Portfolio </li>
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
		  
		  <form action="<?php echo base_url('portfolio'); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
              <?php if(!empty($this->session->flashdata('success'))){?>
              <h4 class="text-info">&nbsp;&nbsp;&nbsp; <?=$this->session->flashdata('success')?> </h4>
              <?php } ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				 <div class="card-body">
				 
				 <!--<div class="form-group">
                    <label for="exampleInputEmail1">Select Category</label>
                    <select class="form-control" name="category" required>
					<option> -- Select Category --</option>
					
					<option value="Category1"> Category 1 </option>
					<option value="Category2"> Category 2 </option>
					<option value="Category3"> Category 3 </option>
					<option value="Category4"> Category 4 </option>
					<option value="Category5"> Category 5 </option>
					
					</select>
                  </div> -->
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1">Title </label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Name ">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
          
                    </div>
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
                    <label for="exampleInputEmail1">Subtitle</label>
                    <input type="text" name="sub_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
				  
				 <div class="form-group">
                    <label for="exampleInputEmail1">Description  </label>
					<textarea class="form-control" rows="3" name="description" placeholder="Enter Address"></textarea>
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
  